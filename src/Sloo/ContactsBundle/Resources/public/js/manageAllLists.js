//Backbone
(function ($) {
   //Modelo para las listas
    var ListItem = Backbone.Model.extend({
        defaults: {
          name: '',
          id: '0',
          checked: false
        },
        urlRoot: saveListURL   //setted globally
    }); 
    //Coleccion de listas
    var ListItemCollection = Backbone.Collection.extend({
        model: ListItem

    });
    var ListItemView = Backbone.View.extend({ 
        tagName: 'div',
        className: 'row listrow row margin-bottom-half border-bottom',
        
        initialize: function(){
            _.bindAll(this, 'render', 'remove');
        },
        render: function(){
            var self = this;
            $(this.el).html('<div class="span8">\
                            <p><span class="icon-left-favorites"></span><a href="'+dashboardURL+'/'+self.model.get("id")+'"><strong>'+self.model.get("name")+'</strong></a></p>\
                        </div>\
                        <div class="span1">\
                            <a href="javascript:void(0);" title="Eliminar" class="delete-list"><span class="icon-delete-small"></span></a>\
                        </div>');
            return this;
        },
        events:{
            'click a.delete-list': 'remove'
        },
        
        remove: function(){
            var self = this;
            $.ajax({
                url: deleteListURL,    //setted globally in showContacts.html.twig
                data:"id="+self.model.get('id'),
                type: "POST",
                success: function(response){
                    console.log(response);
                    self.model.destroy();
                    $(self.el).remove();  
                }
            });
        }
    });
    var ListItemCollectionView = Backbone.View.extend({
        //el: $('#user-lists'),
        el: 'body',
        initialize: function(){
          _.bindAll(this, 'render','createList','remove');  
          this.collection.reset(initialList);
          this.render();
        },
        events:{
            'click a#addlist': 'createList'
        },
        
        createList: function(){
          var listitem = new ListItem();
          var inputName = $('#newlist').val();
          var collection = this.collection;
          
          if(inputName !="" && inputName != null){
            listitem.set({
              name: inputName // modify item defaults
              
            });
            //save and on success add to the collection
            listitem.save(
                {},
                {
                success: function(model, response){
                        
                        if(response.error == true){
                            $("#list-error").html(response.message);
                            
                        }else{
                           collection.add(listitem); // add item to collection; view is updated via event 'add'
                           var listObject = new ListItem(listitem);
                           var listView = new ListItemView({model: listObject});
                           
                           $('#user-lists').prepend(listView.render().el);
                           $("#list-error").html('');
                           $("#new-list").modal('hide');
                           $('#newlist').val('');
                        }
                        
                    }
                },
                {
                 error: function(model, response){
                       // console.log(response);
                    }
                }
            );
            
          }
          
        },
        
        render: function(){
          
          $(this.el).html();
          this.collection.forEach(function(list){
              var listObject = new ListItem(list);
              var listView = new ListItemView({model: listObject});
              
              $('#user-lists').append(listView.render().el);
          });
          return this;
        }
    });
    var listCol = new ListItemCollection();
    var listColV = new ListItemCollectionView({collection: listCol});
    Backbone.emulateJSON = true;
})(jQuery);