<?php 
$rod = $_GET['type'];
$dp = $_GET['dp'];
$byl = $_GET['byl'];
?>

<p>
		<h2>Информация о маме</h2>
		<p>
		Фамилия, Имя, Отчество
<input type=text name = rod[<?php echo $rod; ?>][fio][value]>
	
		<div class = drug_inic id = drug_inic_<?php echo $rod; ?>>
	<p>
	<a href = "javascript:ftc('drug_inic.php?type=rod[<?php echo $rod; ?>]', 'drug_inic_<?php echo $rod; ?>');">
	+ДОБАВИТЬ ДРУГИЕ ВАРИАНТЫ ИНИЦИАЛОВ (НАПРИМЕР: ДЕВИЧЬЯ ФАМИЛИЯ, СМЕНА 
	<br>
	ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА, РУСИФИКАЦИЯ ЕВРЕЙСКИХ ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА)
	</a>
		</div>

	<p>
	<div class = p0>
Если та или иная информация приблизительная –поставьте галочку «неточная информация»<br>


<table>
<tr>
<td>
<td>
<td>
Неточная<br> информация
<tr>
<td>
Дата рождения               
<td>
<input type=text name = rod[<?php echo $rod; ?>][data_r][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][data_r][netochno]>
<tr>
<td>
Место рождения 
<td>
<input type=text name = rod[<?php echo $rod; ?>][mesto_r][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][mesto_r][netochno]>
</table>

<div class = p5>
	<table>
	<tr>
	<td>
		<input type=radio name = rod[<?php echo $rod; ?>][live] value=1  onclick= "
		ftc('jiv.php?type=<?php echo $rod; ?>&word=<?php echo $dp; ?>' , 'jiv_<?php echo $rod; ?>'); 
		ftc('null.html' , 'die_<?php echo $rod; ?>');
	" >
	живa	
	<td><input type=radio name = rod[<?php echo $rod; ?>][live] value=0  onclick= "
		ftc('die.php?type=<?php echo $rod; ?>&word=<?php echo $dp; ?>' , 'die_<?php echo $rod; ?>'); 
		ftc('null.html' , 'jiv_<?php echo $rod; ?>');
	" >
	мертвa
	</table>

<div class = die_<?php echo $rod; ?> id = die_<?php echo $rod; ?>></div>
<div class = jiv_<?php echo $rod; ?> id = jiv_<?php echo $rod; ?>></div>

</div>

<div class = t10>


