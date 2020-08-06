<?php 
$num = $_GET['num'];;
$rod = $_GET['type'];
$id = 'add_brak_'.$rod.$num;
?>

<?php if( $num == 0  ): ?>

<b>
Сведения о браке:
</b>
	<p>
<table>
<tr>
<td>
	Дата заключения брака
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_b][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_b][netochno]>
<tr>
<td>
	Место заключения брака
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][mesto_b][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][mesto_b][netochno]>

<tr>
<td>
Дата расторжения брака
	<br>
(если был расторгнут)
<td>
<input type=text name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_rast_b][value]>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][brak][<?php echo $num; ?>][data_rast_b][netochno]>

</table>

<?php endif; ?>

<?php if( $num != 0  ): ?>
<p>
<table>
<tr>
<td>
ФИО бывшей супруги 
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
<?php endif; ?>

</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >
		<a  href="javascript:ftc('add_brak.php?type=<?php echo $rod; ?>&num=<?php echo $num+1; ?>', '<?php echo $id; ?>');">
	+ДОБАВИТЬ СВЕДЕНИЯ О ПРЕДЫДУЩИХ БРАКАХ
	</a>


