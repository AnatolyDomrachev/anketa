<?php 
$rod = $_GET['type'];
$dp = $_GET['dp'];
$pol = $_GET['pol'];

if($pol == "w")
	$byl = "Была";

if($pol == "m")
	$byl = "Был";

?>

<b>
			Дополнительная информация:
</b>
<table>
<tr>
<td>
<?php echo $byl; ?> ли членом партии
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=1  > 
	да
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=0 > 
	нет
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=2 > 
	неизвестно

<tr>
<td>
<?php echo $byl; ?> ли в эвакуации
<td>
<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=1  onclick="ftc('evac.php?type=<?php echo $rod; ?>', 'evac_<?php echo $rod; ?>');" > 
	да
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=0  onclick="ftc('null.html', 'evac_<?php echo $rod; ?>');" > 
	нет
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=2  onclick="ftc('null.html', 'evac_<?php echo $rod; ?>');" > 
	неизвестно
</table>
<div id = evac_<?php echo $rod; ?> ></div>
<table>
<tr>
<td>

<?php echo $byl; ?> ли на фронте
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=1  onclick="ftc('front.php?type=<?php echo $rod; ?>', 'front_<?php echo $rod; ?>');"  > 
	да
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=0  onclick="ftc('null.html', 'front_<?php echo $rod; ?>');" > 
	нет
<td>
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=2 onclick="ftc('null.html', 'front_<?php echo $rod; ?>');" > 
	неизвестно

</table>
<div id = front_<?php echo $rod; ?> > </div>

