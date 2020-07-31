<?php 
$nrab = $_GET['nrab'];;
$rod = $_GET['type'];
$id = 'add_rab_'.$rod.$nrab;
?>

<p>
Период работы                                
&nbsp
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][period]>
&nbsp
&nbsp
Должность
&nbsp
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][dolzhnost]>
<p>
Название предприятия (учреждения, организации)
<table>
<tr>
<td>
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][mesto] size = 50>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][netochno]>
неточная
<br>
информация
</table>
<p>
</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >

<button  type="button" onclick="ftc('add_rab.php?type=<?php echo $rod; ?>&nrab=<?php echo $nrab+1; ?>', '<?php echo $id; ?>');">
	добавить еще одно место работы
</button>

