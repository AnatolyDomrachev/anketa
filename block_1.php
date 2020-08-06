<div class = p00 >

<h2>Анкета генеалогического исследования</h2>
<p>
<i>
<div class = head>
<b>
Мы собираем информацию о вашей родословной для решения вопроса вашего права на репатриацию в Израиль.<br> Информация обрабатывается нашими сотрудниками и не подлежит передачи третьим лицам.
<p>
</b>
	</div>
<p>
<form enctype="multipart/form-data" method=post action=add.php>
<b>
	Ваши инициалы
</b>
<input type=text name = info[inicialy]>
	<p>
	</i>

		<div class = drug_inic id = drug_inic>
	<a href = "javascript:ftc('drug_inic.php?type=info', 'drug_inic');">
	+ДОБАВИТЬ ДРУГИЕ ВАРИАНТЫ ИНИЦИАЛОВ (НАПРИМЕР: ДЕВИЧЬЯ ФАМИЛИЯ, СМЕНА 
	<br>
	ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА, РУСИФИКАЦИЯ ЕВРЕЙСКИХ ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА)
	</a>
	<i>
</div>

<div class = dr1>
	Дата рождения<input type=text name = info[data_r]><p>
	Место рождения<input type=text name = info[mesto_r]><p>
</div>
<div class = p5>
		<b>Дополнительная информация:</b><p>
</div>
<div class = p10>
<table>
<tr>
<td>
был ли членом партии
<td>
		<input type=radio name = info[part] value=1 > да
<td>
		<input type=radio name = info[part] value=0 > нет
<td>
		<input type=radio name = info[part] value=2 > неизвестно
<tr>
<td>
был ли в эвакуации
<td>
		<input type=radio name = info[evac] value=1 > да
<td>
		<input type=radio name = info[evac] value=0 > нет
<td>
		<input type=radio name = info[evac] value=2 > неизвестно
<tr>
<td>
был ли на фронте
<td>
		<input type=radio name = info[front] value=1 > да
<td>
		<input type=radio name = info[front] value=0 > нет
<td>
		<input type=radio name = info[front] value=2 > неизвестно

</table>
</div>

		<div class = dop_inf id = dop_inf>
	<a  href="javascript:ftc('dop_inf.php?type=info', 'dop_inf');">
		+ДОБАВИТЬ ДОПОЛНИТЕЛЬНУЮ ИНФОРМАЦИЮ, КОТОРАЯ
<br>		
 МОЖЕТ БЫТЬ ПОЛЕЗНА В ГЕНЕАЛОГИЧЕСКОМ ПОИСКЕ
	</a>
</div>
	<p>
		<div class = p0 >
есть ли супруг/а
		
		<input type=radio name = info[suprug][r] value=1 onclick="ftc('suprug.html', 'suprug');" > да
		
		<input type=radio name = info[suprug][r] value=0 onclick="ftc('null.html', 'suprug');" > нет
</div>
	<p>
		<div class = p5 id = suprug></div>
	<p>

<div class = p0 >
	<b>
	Укажите, по какой линии у вас еврейские корни:
	</b>
	 <table>
	 <tr>
	 <td>
	 по материнской линии <input id="id_mat_lin" type= radio name = korni  onclick = "f_mat_lin();">
	 <td>
	 по отцовской линии <input id="id_otc_lin" type=radio name = korni  onclick = "f_otc_lin();">
	<td>
	 по обеим линиям <input id="id_obe_lin" type=radio name = korni  onclick = "f_obe_lin();">
	 </table>


			<div class = rod_head id = rod_head></div>
			<div class = blocks id = blocks_mat></div>
			<div class = blocks id = blocks_otc></div>
			<div class = blocks id = blocks_obe></div>
	<b>
	Прикрепите фото/сканы документов, имеющихся у вас или ваших ближайших родственников в наличии
	</b>

			<div class = add_file id = add_file></div>

	<input type=submit value = Отпправить>
	</form>

</div>

</div>

