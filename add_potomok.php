<?php 
$word = $_GET['word'];;
$rod = $_GET['type'];
$id = 'add_potomok_'.$rod;
?>

<p>
<b>
Этот родственник прямой потомок еврея:
</b>
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=1 
		onclick="ftc('<?php echo $id; ?>.php', '<?php echo $id; ?>');f_add_pra();" > 
да, <?php echo $word; ?> матери еврейки
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=2 
		onclick="ftc('null.php', '<?php echo $id; ?>');">
да, <?php echo $word; ?> отца еврея
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=3
		onclick="ftc('<?php echo $id; ?>.php', '<?php echo $id; ?>');f_add_pra();">
да, оба родителя евреи
<p>
		<input type=radio name = rod[<?php echo $rod; ?>][potomok] value=4  > 
нет, у него нет еврейских корней

<p>


