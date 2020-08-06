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
		<input type=radio name = rod[mama][dop][part][yes] value=1  > 
	да
<td>
		<input type=radio name = rod[mama][dop][part][yes] value=0 > 
	нет
<td>
		<input type=radio name = rod[mama][dop][part][yes] value=2 > 
	неизвестно

<tr>
<td>
<?php echo $byl; ?> ли в эвакуации
<td>
<input type=radio name = rod[mama][dop][evac][yes] value=1  onclick="e_s('mama');" > 
	да
<td>
		<input type=radio name = rod[mama][dop][evac][yes] value=0  onclick="no_e_s('mama');" > 
	нет
<td>
		<input type=radio name = rod[mama][dop][evac][yes] value=2  onclick="no_e_s('mama');" > 
	неизвестно
<tr>
<td>

<?php echo $byl; ?> ли на фронте
<td>
		<input type=radio name = rod[mama][dop][front][yes] value=1  onclick="f_s('mama');"  > 
	да
<td>
		<input type=radio name = rod[mama][dop][front][yes] value=0  onclick="no_f_s('mama');" > 
	нет
<td>
		<input type=radio name = rod[mama][dop][front][yes] value=2 onclick="no_f_s('mama');" > 
	неизвестно

</table>


