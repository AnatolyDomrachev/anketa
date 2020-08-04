<?php 
$nrab = $_GET['nrab'];;
$rod = $_GET['type'];
$id = 'add_rab_'.$rod.$nrab;
?>

<table>
<tr>
<td>
Период работы                                
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][period] size = 10 style="width: 200px;">
<td>
Должность
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][dolzhnost]  size = 10 style="width: 200px;">
</table>
<table>
<tr>
<td>
Название предприятия (учреждения, организации)
<td rowspan="2">
<input type=checkbox name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][netochno]>
неточная
<br>
информация

<tr>
<td>
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][mesto] size = 50>
</table>
<p>
</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >

<button  type="button" onclick="ftc('add_rab.php?type=<?php echo $rod; ?>&nrab=<?php echo $nrab+1; ?>', '<?php echo $id; ?>');">
	добавить еще одно место работы
</button>

