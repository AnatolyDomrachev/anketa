<?php 
$rod = 'prab_'.$_GET['type'];
$word1 = $_GET['word1'];
$word2 = $_GET['word2'];
$id = 'add_potomok_'.$rod;
?>

<p>
		<p>
		<h2>Информация о прабабушке (маме <?php echo $word1; ?> по <?php echo $word2; ?>)</h2>
		<p>
		Фамилия, Имя, Отчество
<input type=text name = rod[<?php echo $rod; ?>][fio][value]>

	<p>
	<button  type="button" onclick="ftc('drug_inic.php?type=rod[<?php echo $rod; ?>]', 'drug_inic_<?php echo $rod; ?>');">
	Добавить другие варианты инициалов 
	</button>
	(например: девичья фамилия, смена фамилии/имени/отчества, русификация еврейских фамилии/имени/отчества)
		<div class = drug_inic id = drug_inic_<?php echo $rod; ?>></div>
	<p>

Если та или иная информация приблизительная –поставьте галочку «неточная информация»<br>

<table>
<tr>
<td>
<td>
<td>
<b>Неточная<br> информация</b>
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

<p>
	&nbsp<input type=radio name = rod[<?php echo $rod; ?>][live] value=1  onclick= "
		ftc('jiv.php?type=<?php echo $rod; ?>&word=папой' , 'jiv_<?php echo $rod; ?>'); 
		ftc('null.html' , 'die_<?php echo $rod; ?>');
	" >
	жив	
	&nbsp<input type=radio name = rod[<?php echo $rod; ?>][live] value=0  onclick= "
		ftc('die.php?type=<?php echo $rod; ?>&word=папой' , 'die_<?php echo $rod; ?>'); 
		ftc('null.html' , 'jiv_<?php echo $rod; ?>');
	" >
	мертв
<p>

<div class = die_<?php echo $rod; ?> id = die_<?php echo $rod; ?>></div>
<div class = jiv_<?php echo $rod; ?> id = jiv_<?php echo $rod; ?>></div>

<p>
<div class = add_brak_<?php echo $rod; ?> id = add_brak_<?php echo $rod; ?> >
</div>
<p>

<b>
	Дополнительная информация:
</b>
<p>
Был ли членом партии
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=1  > 
	да
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=0 > 
	нет
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][part][yes] value=2 > 
	неизвестно

<p>
Был ли в эвакуации
&nbsp
<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=1  onclick="e_s('<?php echo $rod; ?>');" > 
&nbsp
	да
		<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=0  onclick="no_e_s('<?php echo $rod; ?>');" > 
&nbsp
	нет
		<input type=radio name = rod[<?php echo $rod; ?>][dop][evac][yes] value=2  onclick="no_e_s('<?php echo $rod; ?>');" > 
	неизвестно
<p>

Был ли на фронте
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=1  onclick="f_s('<?php echo $rod; ?>');"  > 
	да
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=0  onclick="no_f_s('<?php echo $rod; ?>');" > 
	нет
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][dop][front][yes] value=2 onclick="no_f_s('<?php echo $rod; ?>');" > 
	неизвестно


<p>
	<button  type="button" onclick="ftc('dop_inf.php?type=rod[<?php echo $rod; ?>]', 'dop_inf_<?php echo $rod; ?>');">
		добавить дополнительную информацию, которая
		может быть полезна в генеалогическом поиске
	</button>

		<div class = dop_inf id = dop_inf_<?php echo $rod; ?>></div>
<p>
<b>
Информация об учебе, работе, проживании:
</b>

<p>
<b>
РАБОТA
</b>
<div class = add_rab_<?php echo $rod; ?> id = add_rab_<?php echo $rod; ?> >
</div>
<p>
<b>
УЧЕБA
</b>
<div class = add_uch_<?php echo $rod; ?> id = add_uch_<?php echo $rod; ?> >
</div>
<p>
<b>
ПРОЖИВАНИЕ
</b>
<div class = add_adr_<?php echo $rod; ?> id = add_adr_<?php echo $rod; ?> >
</div>
<p>
<b>
Братья или Сестры
</b>
<div class = add_bra_<?php echo $rod; ?> id = add_bra_<?php echo $rod; ?> >
</div>
<p>
<b>
	Комментарий или дополнительная информация, которая может
быть полезна в генеалогическом исследовании:
</b>
<p>
<textarea rows="10" cols="75" name = rod[<?php echo $rod; ?>][dop][issled]>
</textarea>

<p>
</div>
<div id = tmp>

