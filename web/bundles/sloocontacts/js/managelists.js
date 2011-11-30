//Backbone
(function ($) {
    //Modelo para las listas
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
        url: showListURL    //setted globally in show.html.twig

    });
        
    //Vista para todas las listas
    var ListView = Backbone.View.extend({    
        el: 'body', // attaches `this.el` to an existing element. 
        className: 'inputs-list',
        initialize: function(){
            _.bindAll(this, 'createList', 'render','appendItem');
            this.collection = new ListItemCollection();
            this.collection.reset(initialList);
            this.collection.bind('add', this.appendItem); // collection event binder
            this.render();
            Backbone.emulateJSON = true;
        },
        render: function(){
          var self = this;
          this.collection.each(function(model) { 
                self.appendItem(model);

            } );
        },
        events: {
          'click a#addlist': 'createList'
        },
        
        // Creates the new Contact List
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
                           $("#list-error").html('');
                        }
                        
                    }
                },
                {
                 error: function(model, response){
                        alert(response);
                    }
                }
            );
            
          }
          
        },
        
        // Appends the created contact list to the html list
        appendItem: function(listitem){
            $('#newlist').val('');
            $("#lists").append('<li><label><input type="checkbox" '+listitem.get('checked')+' name="optionsCheckboxes[]" value="'+listitem.get('id')+'"/> <span>'+listitem.get('name')+'</span></label></li></li>');
        }

    });
    var listView = new ListView();   

})(jQuery);