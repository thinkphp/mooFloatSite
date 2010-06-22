<?php sleep(1);?>
<div class="block">
<h2>Contact</h2>
<div id="response"></div>
<form action="send.php" method="post" id="mycontact">
        <p> 
        <label for="name">Name (required)</label>
        <input type="text" id="name" name="name">
        </p>
        <p>
        <label for="email">E&ndash;mail (required)</label>
        <input type="text" id="email" name="email">    
        </p>
        <p>
        <label for="website">website (optional)</label>
        <input type="text" id="website" name="website">
        </p>
        <p>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="8" cols="45"></textarea>
        </p>        
        <p><label for="btn">&nbsp;</label><input type="submit" id="btn" name="btn" value="submit"> <input type="reset" id="reset" name="reset" value="reset"></p>
</form>
</div>