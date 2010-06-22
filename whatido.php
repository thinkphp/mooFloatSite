<?php sleep(1);?>
<div class="block">
<h2>What I Do</h2>
<p>MooTools allows you to define your own methodology for a get, set and erase routine. This can be useful if you find you repeatedly need to process some attribute of an element. You can make a method and implement it into Element, or you could create your own custom getter and setter. Say that you wanted to add a new attribute ,get/set('orange'). You could implement this yourself:</p>
<pre><code>
Element.Properties.orange = {

       set: function(){
            this.setStyle('background-color','orange');  
       },
       get: function(){
            return (this.getStyle('background-color','orange') == 'orange');
       },
       erase: function(){
            return this.setStyle('background-color','inherit');
       }
}
myElement.set('orange');//it's orange
myElement.get('orange');//return true;
</code></pre>
<p>In this way, MooTools allows you to define your own attributes and thei meaning, much as it lets you extend native objects with new attributes and their methods</p>
</div>