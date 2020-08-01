<?php 
$num = $_GET['num'];;
$rod = $_GET['type'];
$id = 'add_potomok_'.$rod.$num;
?>

<p>
<b>
Этот родственник прямой потомок еврея:
</b>
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=1  > 
да, дочь матери еврейки
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=2  > 
да, дочь отца еврея
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=3  > 
да, оба родителя евреи
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=4  > 
нет, у него нет еврейских корней

<p>

</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >

