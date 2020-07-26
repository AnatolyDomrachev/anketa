
	function s()
	{
		var html = ' <p><b>Информация о супруге</b><p> Инициалы&nbsp<input type=text name = inicialy><p> Дата рождения&nbsp<input type=text name = data_r><p> Место рождения&nbsp<input type=text name = mesto_r><p> Место брака&nbsp<input type=text name = mesto_b><p> ';
		document.getElementById('suprug').innerHTML=html; 
	}

	function no_s()
	{
		var html = '';
		document.getElementById('suprug').innerHTML=html; 
	}

	function e()
	{
		var html = 'Откуда&nbsp<input type=text name = otkuda>&nbsp Куда<input type=text name = kuda>';
		document.getElementById('evac').innerHTML=html; 
	}

	function no_e()
	{
		var html = '';
		document.getElementById('evac').innerHTML=html; 
	}

	function f()
	{
		var html = 'Где&nbsp<input type=text name = f_gde>&nbsp В какой части<input type=text name = f_chast>';
		document.getElementById('front').innerHTML=html; 
	}

	function no_f()
	{
		var html = '';
		document.getElementById('front').innerHTML=html; 
	}

	function m()
	{
	var chbox;
	chbox=document.getElementById('id_mama');
		if (chbox.checked) {
			var html = 'Где&nbsp<input type=text name = f_gde>&nbsp В какой части<input type=text name = f_chast>';
			document.getElementById('mama').innerHTML=html; 
		}
		else {
			var html = '';
			document.getElementById('mama').innerHTML=html; 
		}

	}

	function no_m()
	{
		var html = '';
		document.getElementById('mama').innerHTML=html; 
	}

	function no_l()
	{
		var html = ' <table><tr> <td> Дата смерти <td> <input type=text name = rod[mama][data_s][value]> <td> <input type=checkbox name = rod[mama][data_s][netochno]> <tr> <td> Место смерти&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td> <input type=text name = rod[mama][mesto_s][value]> <td> <input type=checkbox name = rod[mama][mesto_s][netochno]> </table>';
		document.getElementById('die').innerHTML=html; 
}

	function l()
	{
		var html = '';
		document.getElementById('die').innerHTML=html; 
	}

	function e_m_s()
	{
		var html = 'Откуда&nbsp<input type=text name = rod[mama][es][otkuda]>&nbsp Куда<input type=text name = rod[mama][es][kuda]>';
		document.getElementById('evac_m_s').innerHTML=html; 
	}

	function no_e_m_s()
	{
		var html = '';
		document.getElementById('evac_m_s').innerHTML=html; 
	}

	function f_m_s()
	{
		var html = 'Где&nbsp<input type=text name = rod[mama][fs][gde]>&nbsp В какой части<input type=text name = rod[mama][fs][chast]>';

		document.getElementById('front_m_s').innerHTML=html; 
	}

	function no_f_m_s()
	{
		var html = '';
		document.getElementById('front_m_s').innerHTML=html; 
	}

	function add_uch()
	{
		var html = ' <p> <table border = 1> <tr> <td> Период учебы     <td> Название учебного заведения <td> Не точно <tr> <td> <input type=text name = rod[mama][ucheba][1][period]> <td> <textarea name = rod[mama][ucheba][1][mesto]></textarea> <td> <input type=checkbox name = rod[mama][ucheba][1][netochno]> </table> <p> ';
		document.getElementById('add_uch').innerHTML=html; 

		var html1 = '';
		document.getElementById('b_uch').innerHTML=html1; 
	}


