</div>
		<p>
		<h2>Информация о прабабушке (маме бабушки по маме)</h2>
		<p>
		Фамилия, Имя, Отчество
<input type=text name = rod[mama_bab_m][fio][value]>

	<p>
	<button  type="button" onclick="ftc('drug_inic.php?type=rod[mama_bab_m]', 'drug_inic_mama_bab_m');">
	Добавить другие варианты инициалов 
	</button>
	(например: девичья фамилия, смена фамилии/имени/отчества, русификация еврейских фамилии/имени/отчества)
		<div class = drug_inic id = drug_inic_mama_bab_m></div>
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
<input type=text name = rod[mama_bab_m][data_r][value]>
<td>
<input type=checkbox name = rod[mama_bab_m][data_r][netochno]>
<tr>
<td>
Место рождения 
<td>
<input type=text name = rod[mama_bab_m][mesto_r][value]>
<td>
<input type=checkbox name = rod[mama_bab_m][mesto_r][netochno]>
</table>

<p>
	&nbsp<input type=radio name = rod[mama_bab_m][live] value=1  onclick= "
		ftc('jiv.php?type=mama_bab_m&word=папой' , 'jiv_mama_bab_m'); 
		ftc('null.html' , 'die_mama_bab_m');
	" >
	жив	
	&nbsp<input type=radio name = rod[mama_bab_m][live] value=0  onclick= "
		ftc('die.php?type=mama_bab_m&word=папой' , 'die_mama_bab_m'); 
		ftc('null.html' , 'jiv_mama_bab_m');
	" >
	мертв
<p>

<div class = die_mama_bab_m id = die_mama_bab_m></div>
<div class = jiv_mama_bab_m id = jiv_mama_bab_m></div>

<p>
<div class = add_brak_mama_bab_m id = add_brak_mama_bab_m >
</div>
<p>

<b>
	Дополнительная информация:
</b>
<p>
Был ли членом партии
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][part][yes] value=1  > 
	да
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][part][yes] value=0 > 
	нет
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][part][yes] value=2 > 
	неизвестно

<p>
Был ли в эвакуации
&nbsp
<input type=radio name = rod[mama_bab_m][dop][evac][yes] value=1  onclick="e_s('mama_bab_m');" > 
&nbsp
	да
		<input type=radio name = rod[mama_bab_m][dop][evac][yes] value=0  onclick="no_e_s('mama_bab_m');" > 
&nbsp
	нет
		<input type=radio name = rod[mama_bab_m][dop][evac][yes] value=2  onclick="no_e_s('mama_bab_m');" > 
	неизвестно
<p>

Был ли на фронте
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][front][yes] value=1  onclick="f_s('mama_bab_m');"  > 
	да
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][front][yes] value=0  onclick="no_f_s('mama_bab_m');" > 
	нет
&nbsp
		<input type=radio name = rod[mama_bab_m][dop][front][yes] value=2 onclick="no_f_s('mama_bab_m');" > 
	неизвестно


<p>
	<button  type="button" onclick="ftc('dop_inf.php?type=rod[mama_bab_m]', 'dop_inf_mama_bab_m');">
		добавить дополнительную информацию, которая
		может быть полезна в генеалогическом поиске
	</button>

		<div class = dop_inf id = dop_inf_mama_bab_m></div>
<p>
<b>
Информация об учебе, работе, проживании:
</b>

<p>
<b>
РАБОТA
</b>
<div class = add_rab_mama_bab_m id = add_rab_mama_bab_m >
</div>
<p>
<b>
УЧЕБA
</b>
<div class = add_uch_mama_bab_m id = add_uch_mama_bab_m >
</div>
<p>
<b>
ПРОЖИВАНИЕ
</b>
<div class = add_adr_mama_bab_m id = add_adr_mama_bab_m >
</div>
<p>
<b>
Братья или Сестры
</b>
<div class = add_bra_mama_bab_m id = add_bra_mama_bab_m >
</div>
<p>
<b>
	Комментарий или дополнительная информация, которая может
быть полезна в генеалогическом исследовании:
</b>
<p>
<textarea rows="10" cols="75" name = rod[mama_bab_m][dop][issled]>
</textarea>

<p>
<div id = tmp>

