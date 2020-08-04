<?php 
$nuch = $_GET['nuch'];;
$rod = $_GET['type'];
$id = 'add_uch_'.$rod.$nuch;
?>
<table>
<tr>
<td>
Период учебы     
<input type=text name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][period]>
<td rowspan="2">
<input type=checkbox name = rod[<?php echo $rod; ?>][rabota][<?php echo $nrab; ?>][netochno]>
неточная
<br>
информация
<tr>
<td>
Название учебного заведения
<input  type=text name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][mesto]>
</table>
<p>

</div>

<div class = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> id = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> >
<p>

		<a  href="javascript:ftc('add_uch.php?type=<?php echo $rod; ?>&nuch=<?php echo $nuch+1; ?>', '<?php echo $id; ?>');">
+ДОБАВИТЬ ЕЩЕ ОДНО МЕСТО УЧЕБЫ
	</a>


