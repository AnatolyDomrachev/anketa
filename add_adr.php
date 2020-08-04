<?php 
$nadr = $_GET['nadr'];;
$rod = $_GET['type'];
$id = 'add_adr_'.$rod.$nadr;
?>

<p>
<table >
<tr>
<td>
Город
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][gorod] style="width: 200px;">
район
<input type=text  name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][raion] style="width: 200px;">
<td rowspan="3">
<input type=checkbox name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][netochno]>
неточная
<br>
информация
<tr>
<td>
улица
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][ulica]  style="width: 180px;">
дом
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][dom] style="width: 50px;">
корпус
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][korpus] style="width: 50px;">
квартира
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][kv] style="width: 50px;">
<tr>
<td>
период проживания
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][period] style="width: 200px;">
</table>
</div>

<div class = add_adr_<?php echo $rod; ?><?php echo $nadr; ?> id = add_adr_<?php echo $rod; ?><?php echo $nadr; ?> >
<p>
		<a  href="javascript:ftc('add_adr.php?type=<?php echo $rod; ?>&nadr=<?php echo $nadr+1; ?>', '<?php echo $id; ?>');">
+ДОБАВИТЬ ЕЩЕ ОДНО МЕСТО ПРОЖИВАНИЯ
	</a>


