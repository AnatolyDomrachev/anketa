<?php
$filename = "base.json";
$data = json_decode(file_get_contents ( $filename ), true);
?>

<table>
<tr>
<td>
	Инициалы
<td>
<?php echo $data['info']['inicialy']?>
<tr>
<td>
Другие варианты инициалов 
<td>
	<?php echo $data['info']['drug_inic'];?>
<tr>
<td>
	Дата рождения
<td>
<?php echo $data['info']['data_r']?>
<tr>
<td>
	Место рождения
<td>
<?php echo $data['info']['mesto_r']?>
</table>
<p>
<button onclick = ftc('block2.php','block2')>
button
</button>

