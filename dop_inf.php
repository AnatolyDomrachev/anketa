<?php 
$rod = $_GET['type'];
?>
	Дополнительная информация
<br>


<textarea rows="2" cols="75" name =  rod[<?php echo $rod; ?>][dop] id="dop_<?php echo $rod; ?>" onkeyup="resizeArea2('dop_<?php echo $rod; ?>');" > </textarea>
