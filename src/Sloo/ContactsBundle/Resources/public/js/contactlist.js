//Backbone
(function ($) {
    //Modelo para los usuarios
    var Contact = Backbone.Model.extend({
        defaults: {
          username: '',
          firstname: '',
          lastname: '',
          following: ''
        }
    }); 
    //Coleccion de contactos
    var ContactCollection = Backbone.Collection.extend({
        model: Contact,
        fetch: function(page, showFollowers, username, view){
            var self = this;
            $.ajax({
                url: showContactsURL,    //setted globally in showContacts.html.twig
                data:"username="+username+"&showFollowers="+showFollowers+"&page="+page,
                type: "POST",
                success: function(response){
                    view.collection = response;
                    $("#loading").hide();
                    view.render();   
                }
            });
        }
    });
    //Lists
    var ListItem = Backbone.Model.extend({
        defaults: {
          name: '',
          id: '0',
          checked: false
        },
        urlRoot: saveListURL   //setted globally in show.html.twig
    }); 
    //Coleccion de listas
    var ListItemCollection = Backbone.Collection.extend({
        model: ListItem,
        fetch: function(contactObject, view){
            var self = this;
            $.ajax({
                url: showListURL,  //setted globally in showContacts.html.twig
                data:"user="+contactObject.get('username'),
                type: "POST",
                beforeSend: function(){
                    $('#loading-lists').show();
                },
                complete: function(){
                    $('#loading-lists').hide();
                },
                success: function(response){
                    view.collection = response;
                    view.render();   
                }
            });
        }
    });
    //Vista
    var ContactView = Backbone.View.extend({
        tagName: 'div',
        renderFollowing: function (self){
                
                if(self.model.get('following') === true || self.model.get('following') == 1){
                    return '<a class="btn danger unfollow">'+ unfollowMessage +'</a>\n\
                            <a class="btn success hidden follow">'+ followMessage+'</a>\n\
                            <span class="help-inline showlist"><a title="'+yourListsMessage+'" href="javascript:void(0)" class="showlistLink bootstrap-popover">'+showlistMessage+'</a></span>';
                }else{
                    return '<a class="btn success follow">'+ followMessage+'</a>\n\
                            <a class="btn danger hidden unfollow">'+ unfollowMessage +'</a>\n\
                            <span class="help-inline hidden showlist"><a title="'+yourListsMessage+'" href="javascript:void(0)" class="showlistLink bootstrap-popover">'+showlistMessage+'</a></span>';
                }
        },
        render: function(){
            var self = this;
            var followingHtml = self.renderFollowing(self);
            $(this.el).html('<div class="row margin-bottom-half border-bottom">\n\
                                <div class="span1">\n\
                                    <a href="'+showProfileURL+'/'+self.model.get('username')+'" title="'+self.model.get('username')+'">\n\
                                        <img src="//lh6.googleusercontent.com/-h2ItMrLEMww/AAAAAAAAAAI/AAAAAAAAAx0/qRp2UhNuryU/photo.jpg?sz=48" alt="Foto del perfil de Salvador" width="60" height="60"/>\n\
                                    </a>\n\
                                </div>\n\
                                <div class="span6 padding-left-standard">\n\
                                    <p>\n\
                                        <a href="'+showProfileURL+'/'+self.model.get('username')+'" title="'+self.model.get('username')+'">\n\
                                            <strong>'+self.model.get('username')+'</strong>\n\
                                        </a>\n\
                                    </p>\n\
                                    <p>'+self.model.get('firstname')+' '+self.model.get('lastname')+'</p>\n\
                                </div>\n\
                                <div class="span4 padding-left-standard">'+ followingHtml +'</div>\n\
                            </div>');
            return this.el;
        },
        events:{
            'click a.follow': 'follow',
            'click a.unfollow': 'unfollow',
            'click a.showlistLink': 'showUserInLists'
        },
        follow: function(){
            var self = this;
            $.ajax({
                      type: "POST",
                      url: followURL,
                      data: "user="+self.model.get('username'),
                      success: function(msg){
                            self.$(".showlist").toggle();
                            self.$(".follow").hide();
                            self.$(".unfollow").show();
                            self.model.set({following: true});
                      },
                      error: function(objeto, quepaso, otroobj){
                            //show error
                      }
	
		  });
        },
        unfollow: function(){
            var self = this;
            $.ajax({
                      type: "POST",
                      url: unfollowURL,
                      data: "user="+self.model.get('username'),
                      success: function(msg){
                            self.$(".showlist").toggle();
                            self.$(".unfollow").hide();
                            self.$(".follow").show();
                            self.model.set({following: false});
                      },
                      error: function(objeto, quepaso, otroobj){
                            //show error
                      }
	
	    });
        },
        showUserInLists:function(){
            
        }
    });
    var ContactCollectionView = Backbone.View.extend({
        tagName: 'div',
        initialize: function(){
          _.bindAll(this, 'render');  
          this.collection.reset(initialContactList);
          page = 0;
          this.render();
        },
        render: function(){
            var moreresults = false;
            this.collection.forEach(function(contact){
                var contactObject = new Contact(contact);
                var contactV = new ContactView({model: contactObject});
                $('#contacts').append(contactV.render());
                contactV.$('a.bootstrap-popover').bootstrapPopover({
                    
                    after_open: function(){
                        var listItemCol= new ListItemCollection();
                        $(".title").append('<a href="javascript:void(0)" class="close">x</a>');
                        $(".content").append('<p>'+includeMessage+' <strong>'+contactObject.get('username')+'</strong> '+inMessage+'</p>');
                        $(".content").append('<div id="loading-lists" class="hidden"><img src="'+loadingImageURL+'" width="15" height="15"/></div>');
                        $(".content").append('<form action="" id="contact-in-lists"><input type="hidden" value="'+contactObject.get('username')+'" name="user" id="username2"/>');
                        $(".content").append('<ul class="inputs-list"></ul><br/>');
                        $(".content").append('</form>');
                        $(".content").append('<a href="javascript:void(0)" class="create-list">'+createListMessage+'</a>');
                        $(".content").append('<div class="create-list-form hidden"><input type="text" id="newlist" class="span2" placeholder="'+newListMessage+'"/>\
                                                                            <a href="javascript:void(0)" class="btn addlist">'+saveListMessage+'</a><br/>\n\
                                                                            <span id="list-error" class="help-inline red-text"></span>\n\
                                              </div>');
                        listItemCol.fetch(contactObject, new ListCollectionView());
                        $('.addlist').live('click', function(){
                            var newListName = $('#newlist').val();
                            if(newListName !="" && newListName != null){
                                var newList = new ListItem({name: newListName});
                                newList.save(
                                            {},
                                            {
                                            success: function(model, response){

                                                    if(response.error == true){
                                                        $("#list-error").html(response.message);

                                                    }else{
                                                       listItemCol.add(newList); // add item to collection; view is updated via event 'add'
                                                       var listV = new ListView({model: newList, collection: listItemCol});
                                                       $(".content > ul").append(listV.render());
                                                       $("#list-error").html('');
                                                    }

                                                }
                                            }
                                            );
                            }
                            
                        });
                    },
                    before_close: function() { 
                        
                        $.ajax({
                              type: "POST",
                              url: saveUserInListsURL,
                              data: $("input[type=checkbox]").serialize()+'&'+$("#contact-in-lists").serialize()
                              

                          });
                    }
                });
                moreresults = true;
            });
            if(moreresults == true){
                if(page > 0){
                    $(window).scrollTop($(document).height() - $(window).height() - 50);
                }
                page++;
            }else{
                loadingMessage = noMoreContactsMessage;
            }
            
            return this;
        }
    });
    var contactCol = new ContactCollection();
    var collectionV = new ContactCollectionView({collection: contactCol});
    Backbone.emulateJSON = true;
    
    var ListView = Backbone.View.extend({
        tagName: 'li',
        render: function(){
            var self = this;
            $(this.el).html('<label>\n\
                                    <input type="checkbox" '+self.model.get('checked')+' name="optionsCheckboxes[]" value="'+self.model.get('id')+'"/> <span>'+self.model.get('name')+'</span>\n\
                             </label>');
            return this.el;
        }
        
    });
    var ListCollectionView = Backbone.View.extend({
        tagName: 'div',
        initialize: function(){
            _.bindAll(this,'render');
        },
        render: function(){
            var listCollection = this.collection;
            this.collection.forEach(function(list){
                var listObject = new ListItem(list);
                var listV = new ListView({model: listObject, collection: listCollection});
                $(".content > ul").append(listV.render());
            });
        }
    });
    

    $(window).scroll(function(){
     if ($(window).scrollTop() == $(document).height() - $(window).height()){
      $("#loading > span").html(loadingMessage);
      $("#loading").show();
      contactCol.fetch(page,showFollowers,username, collectionV);
     }
    });
    $(".create-list").live('click',function(){
        $('.create-list-form').show();
        $(this).hide();
    });
    $(".close").live('click',function(){
        $('.popover').hide();
        $.ajax({
                              type: "POST",
                              url: saveUserInListsURL,
                              data: $("input[type=checkbox]").serialize()+'&'+$("#contact-in-lists").serialize()
                              

                          });
        
    });
    $(".title").live('mouseover', function(){
        $('.popover').draggable();
        $(this).css('cursor', 'move');
    });
        

    
    

    
})(jQuery);


 