<?php sleep(1);?>
<div class="block">
<h2>Who I Am</h2>
<p>The <strong>Class</strong> constructor creates functionality for defining reusable Class objects that can be extended and inherited from.</p>
<pre><code>
Usage:
new Class(properties);
Example: 
var SimpleClass = new Class({
    initialize: function(options){
         this.options = options;
    },
    someProperty: 'foo',
    someMethod: function(msg){console.log(msg);}
});
</code></pre>
<p>Binding and prototypal inheritance are two concepts at the heart of MooTools and very little functionality in the library avoids using them. The core functionality for managing inheritance is the "Class" function. Remember that by convention, any function that begins with an uppercase letter requires the use of the new constructor when using it.</p>
<p>The <strong>properties</strong> argument is an object of name/value properties for the class that defines what each instance should have when it is initialized. Say you have the following very simple class:</p>
<pre><code>
var Human = new Class({
     isAlive: true,
     energy: 1,
     each: function(){
        this.energy++;
     }
});
</code></pre>
<p>You've now defined some very simple functionality for you Human class. Whenever you want a new instance of Human, you just call it with the new constructor: var bob = new Human();</p>
<p>This instance - bob - is an instance of Human, and it has the properties isAlive, energy and eat. These properties have the default values defined in your Human class, but you can change them easily enough.</p>
<p>bob.eat(); //bob.energy is now 2;</p>
<p><strong>Initialization</strong></p>
<p>when the classes are invoked with their constructor, all the properties in the object passed in are applied to the new class and are available to each instance (like with Human.eat earlier). MooTools looks for a special property called <i>initialize</i> that it will execute whenever a new instance is created.</p>
<p>Here's what that might look like:</p>
<pre><code>
var Human = new Class({

    initialize: function(name,age) {
       this.name = name; 
       this.age = age;
    },
    isAlive: true,
    energy: 1,
    eat: function(){
       this.energy++; 
    }  
});
var bob = new Human('Bob',20);
  //bob.age = 20;
  //bob.name = 'Bob';
</code></pre>
<p>Here you have a class with default properties and methods (like isAlive and eat), but not all Humans are necessarily the same, so you allow arguments to be passed to the constructor, which are passed to the initialize method at invocation.</p>
<p>Classes aren't required to have an initialize method. If you have a class that doesn't do anything when you initialize it, you can omit this method. Classes that are meant to be implemented by other classes usually don't have an initialize method because they would overwrite the method in the class that you blend them into. Othewise, you will use this method to set up  the state of the class when the user is creates it. Often options and arguments are passed in, and the initialize method store these in the instance of the class and maybe process them.</p>
</div>