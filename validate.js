(function(){
//if we have FF then console.log
if(window.console) {console.log('Script Loaded in document.head: validate.js');}
//validate the data from form
var validate = function(){
    $('response').set('html','');
    $('content').getElements('form#mycontact span.invalid').dispose();
    $('content').getElements('form#mycontact input').removeClass('invalid');
    $('content').getElements('form#mycontact textarea').removeClass('invalid');
    var invalid = false;
     if(!$('name').getProperty('value')) {
       invalid = true;
       new Element('span',{'class':'invalid','html':'Yeah, there is something wrong with this name!'}).inject('name','after');
       $('name').addClass('invalid'); 
    } 
    if(!$('email').getProperty('value')) {
       invalid = true;
       new Element('span',{'class':'invalid','html':'Yeah, there is something wrong with this e-mail!'}).inject('email','after');
       $('email').addClass('invalid'); 
    } 
    if(!$('website').getProperty('value')) {
       invalid = true;
       new Element('span',{'class':'invalid','html':'Yeah, there is something wrong with this website!'}).inject('website','after');
       $('website').addClass('invalid'); 
    } 
    if(!$('message').getProperty('value')) {
       invalid = true;
       new Element('span',{'class':'invalid','html':'The message is empty!'}).inject('message','after');
       $('message').addClass('invalid'); 
    } 
if(invalid) {return false;}
         else 
              {return true;}
}//end function valid

//adding 'submit' event and set up a handler for this event
$('content').getElements('form#mycontact').addEvent('submit',function(e){
            //prevent event e
            if(e) {e.stop();}
            //if the data is valid then send 
            if(validate()) {
                 //show loading
                 $('loading').fade('show');
                 //set opacity 0.5
                 this.setStyle('opacity',0.5);
                 //get current object that is 'this'
                 var that = this;
                 //set attribute 'send' for this form
                 this.set('send',{onComplete: function(resp){
                           $('loading').fade('hide');
                           that.fade('in');
                           var result = JSON.decode(resp);
                               if(result.register_ok) {
                                   $('response').set('html','<p>Your message has been sent. Thank You!</p>');
                               } else if(result.save_ok) {
                                   $('response').set('html','<p>Contact information saved. Thank You!</p>');
                               }
                 }}); 
                 //call the method 'send' to make a request to the server
                 this.send();  
            }
     return false;
});
})();//do EXEC