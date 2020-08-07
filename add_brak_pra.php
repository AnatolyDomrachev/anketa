<?php 
$num = $_GET['num'];;
$rod = $_GET['type'];
$id = 'add_brak_'.$rod.$num;
?>

<p>
<table>
<tr>
<td>
ФИО супруга
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][fio][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][fio][netochno]>
<tr>
<td>
Дата заключения брака 
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data][netochno]>
<tr>
<td>
Место заключения брака 
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][mesto][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][mesto][netochno]>
<tr>
<td>
Дата расторжения брака 
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_r][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_r][netochno]>
<tr>
<td>
</table>

<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >
		<a  href="javascript:ftc('add_brak_pra.php?type=<?php echo $rod; ?>&num=<?php echo $num+1; ?>', '<?php echo $id; ?>');">
	+ДОБАВИТЬ СВЕДЕНИЯ О ПРЕДЫДУЩИХ БРАКАХ
	</a>

