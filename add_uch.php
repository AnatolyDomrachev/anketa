<?php 
$nuch = $_GET['nuch'];;
$rod = $_GET['type'];
$id = 'add_uch_'.$rod.$nuch;
?>

<p>
<table border = 1>
<tr>
<td>
Период учебы     
<td>
Название учебного заведения
<td>
неточная
информация
<tr>
<td>
<input type=text name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][period]>
<td>
<textarea name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][mesto]></textarea>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][netochno]>
</table>
<p>

</div>

<div class = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> id = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> >
<p>
<button  type="button" onclick="ftc('add_uch.php?type=<?php echo $rod; ?>&nuch=<?php echo $nuch+1; ?>', '<?php echo $id; ?>');">
	добавить еще одно место учебы
</button>
