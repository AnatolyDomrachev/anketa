let arr = [];
arr['mama'][i] = 0;

var i = 0;
var j = 0;
var k = 0;
var l = 0;

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


	function ftc(fname, id)
{
	fetch(fname)
    .then(function (response) {
        switch (response.status) {
            // status "OK"
            case 200:
                return response.text();
            // status "Not Found"
            case 404:
                throw response;
        }
    })
    .then(function (template) {
        console.log(template);
	document.getElementById(id).innerHTML=template; 
    })
    .catch(function (response) {
        // "Not Found"
        console.log(response.statusText);
    });
}

	function f_mama(rod)
	{
	var chbox;
	chbox=document.getElementById('id_' + rod);
		if (chbox.checked) {
			ftc( rod + '.html',  rod );
		}
		else {
			var html = '';
			document.getElementById( rod ).innerHTML=html; 
		}

	}
/*
	function f_papa()
	{
	var chbox;
	chbox=document.getElementById('id_papa');
		if (chbox.checked) {
			ftc('papa.html', 'papa');
		}
		else {
			var html = '';
			document.getElementById('papa').innerHTML=html; 
		}

	}
*/


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

	function add_uch(rod)
	{
		i2 = i+1;
		var s = 'add_uch_'+rod+i;
		var id = 'add_uch_'+rod+i2;
		var html = ' <p> <table border = 1> <tr> <td> Период учебы     <td> Название учебного заведения <td> Не точно <tr> <td> <input type=text name = rod['+rod+'][ucheba]['+i2+'][period]> <td> <textarea name = rod['+rod+'][ucheba]['+i2+'][mesto]></textarea> <td> <input type=checkbox name = rod['+rod+'][ucheba]['+i2+'][netochno]> </table> <p>  </div> <div class = '+ id + ' id = ' + id + '>';
		console.log(i);
		console.log(s);
		console.log(id);
		console.log(html);
		console.log(arr);
		document.getElementById(s).innerHTML=html; 
		i++;

	}

	function add_rab(rod)
	{
		var j2 = j+1;
		var s = 'add_rab_'+rod+j;
		var id = 'add_rab_'+rod+j2;
		var html = ' <p> <table border = 1> <tr> <td> Период работы <td> Должность <td> Название предприятия <br>(учреждения, организации) <td> Не точно <tr> <td> <input type=text name = rod[mama][rabota]['+j+'][period]> <td> <textarea name = rod[mama][rabota]['+j+'][dolzhnost]></textarea> <td> <textarea name = rod[mama][rabota]['+j+'][mesto]></textarea> <td> <input type=checkbox name = rod[mama][rabota]['+j+'][netochno]> </table> <p></div>  <div class = '+id+' id = '+id+' >';
		console.log(j);
		console.log(s);
		console.log(id);
		document.getElementById(s).innerHTML=html; 
		j++;

	}

	function add_adr(rod)
	{
		var k2 = k+1;
		var s = 'add_adr_'+rod+k;
		var id = 'add_adr_'+rod+k2;
		var html = ' <p> <table border = 1> <tr> <td> Город <td> район <td> улица <td> дом <td> корпус <td> квартира <td> период <td> Не точно <tr> <td> <input type=text name = rod[mama][adres]['+k+'][gorod]> <td> <input type=text  name = rod[mama][adres]['+k+'][raion]> <td> <input type=text name = rod[mama][adres]['+k+'][ulica]> <td> <input type=text name = rod[mama][adres]['+k+'][dom]> <td> <input type=text name = rod[mama][adres]['+k+'][korpus]> <td> <input type=text name = rod[mama][adres]['+k+'][kv]> <td> <input type=text name = rod[mama][adres]['+k+'][period]> <td> <input type=checkbox name = rod[mama][adres]['+k+'][netochno]> </table> <p> </div> <div class = '+id+' id = '+id+' > ';
		console.log(k);
		console.log(s);
		console.log(id);
		document.getElementById(s).innerHTML=html; 
		k++;
	}

	function add_bra(rod)
	{
		var l2 = l+1;
		var s = 'add_bra_'+rod+l;
		var id = 'add_bra_'+rod+l2;
		var html = ' <p> <table border = 1> <tr> <td> ФИО <td> жив <td> дата рождения <td> место рождения <tr> <td> <input type=text name = rod[mama][brat]['+l+'][fio]> <td> <input type=radio name = rod[mama][brat]['+l+'][live] value=1  > &nbsp да  &nbsp <input type=radio name = rod[mama][brat]['+l+'][live] value=0 > &nbsp нет <td> <input type=text name = rod[mama][brat]['+l+'][data_r]> <td> <input type=text name = rod[mama][brat]['+l+'][mesto_r]> </table> <p> </div> <div class = '+id+' id = '+id+' > ';
		document.getElementById(s).innerHTML=html; 
		l++;
	}

