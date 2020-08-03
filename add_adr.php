<?php 
$nadr = $_GET['nadr'];;
$rod = $_GET['type'];
$id = 'add_adr_'.$rod.$nadr;
?>

<p>
<table border = 1>
<tr>
<td>
Город
<td>
район
<td>
улица
<td>
дом
<td>
корпус
<td>
квартира
<td>
период
<td>
неточная
информация
<tr>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][gorod]>
<td>
<input type=text  name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][raion]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][ulica]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][dom]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][korpus]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][kv]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][period]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][adres][<?php echo $nadr; ?>][netochno]>
</table>
</div>

<div class = add_adr_<?php echo $rod; ?><?php echo $nadr; ?> id = add_adr_<?php echo $rod; ?><?php echo $nadr; ?> >
<p>
<button  type="button" onclick="ftc('add_adr.php?type=<?php echo $rod; ?>&nadr=<?php echo $nadr+1; ?>', '<?php echo $id; ?>');">
	добавить еще одно место проживания
</button>
