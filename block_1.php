
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
<div class = inic>
<form enctype="multipart/form-data" method=post action=add.php>
<b>
	Ваши инициалы
</b>
<input type=text name = info[inicialy]>
	<p>
	</i>
	<a href = "javascript:ftc('drug_inic.php?type=info', 'drug_inic');">
	+ДОБАВИТЬ ДРУГИЕ ВАРИАНТЫ ИНИЦИАЛОВ (НАПРИМЕР: ДЕВИЧЬЯ ФАМИЛИЯ, СМЕНА 
	<br>
	ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА, РУСИФИКАЦИЯ ЕВРЕЙСКИХ ФАМИЛИИ/ИМЕНИ/ОТЧЕСТВА)
	</a>
	<i>
	</div>
		<div class = drug_inic id = drug_inic></div>

<div class = head>
	Дата рождения<input type=text name = info[data_r]><p>
	Место рождения<input type=text name = info[mesto_r]><p>
</div>
<div class = inic>
		<b>Дополнительная информация:</b><p>
</div>
<div class = l3>
	Партийный да/нет
		<input type=radio name = info[part] value=1 > да
		<input type=radio name = info[part] value=0 > нет
		<p>
	Был ли в эвакуации 
		<input type=radio name = info[evac] value=1 > да
		<input type=radio name = info[evac] value=0 > нет
		<div class = evac id = evac></div>
	<p>
	Был ли на фронте да/нет 
		<input type=radio name = info[front] value=1 > да
		<input type=radio name = info[front] value=0 > нет
		<div class = front id = front></div>
		<p>

	<button  type="button" onclick="ftc('dop_inf.html', 'dop_inf');">
		добавить дополнительную информацию, которая может быть полезна в генеалогическом поиске
	</button>
</div>
		<div class = dop_inf id = dop_inf></div>
	<p>
есть ли супруг/а
		
		<input type=radio name = info[suprug][r] value=1 onclick="ftc('suprug.html', 'suprug');" > да
		
		<input type=radio name = info[suprug][r] value=0 onclick="ftc('null.html', 'suprug');" > нет
	<p>
		<div class = suprug id = suprug></div>
	<p>

<b>
Укажите, по какой линии у вас еврейские корни:
</b>

<p>
 </div>
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
<p>
<b>
Прикрепите фото/сканы документов, имеющихся у вас или ваших ближайших родственников в наличии
</b>

		<div class = add_file id = add_file></div>

<input type=submit value = Отпправить>
</form>

</div>
<div>

