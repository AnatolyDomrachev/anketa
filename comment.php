<?php 
$rod = $_GET['type'];
?>

<b>
	Комментарий:
</b>
<br>
<textarea rows="2" cols="75" name =  rod[<?php echo $rod; ?>][comment] id="com_<?php echo $rod; ?>" onkeyup="resizeArea2('com_<?php echo $rod; ?>');" > </textarea>
<p>

