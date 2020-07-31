<?php 
static $nrab = 0;
$nrab2 = $nrab+1;
$rod = $_GET['type'];
$s = 'add_rab_'+$rod+$nrab;
$id = 'add_rab_'+$rod+$nrab2;

print_r($_GET);
print_r($rod);
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
<input type=text name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][mesto] size = 5<?php echo $nrab; ?>>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][netochno]>
неточная
<br>
информация
</table>
<p>
</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >

<?php 
$nrab++;
?>

