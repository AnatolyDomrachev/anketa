<?php 
$rod = $_GET['type'];
?>
	Дополнительная информация
<br>

<div class="text">
       <div class="comment_text_hidden"><div class="textarea_behavior" id="comment_text_hidden"></div></div>
       <textarea  name = <?php echo $_GET['type']; ?>[dop] class="textarea_behavior" rows="2" id="comment_text" onkeyup="resizeArea('comment_text', 45, 450);"></textarea>
</div>

