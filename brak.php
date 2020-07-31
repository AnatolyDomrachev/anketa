<?php if() ?>

<b>
Сведения о браке:
</b>
	<p>
<table>
<tr>
<td>
	Дата заключения брака
<td>
<input type=text name = rod[papa][brak][0][data_b][value]>
<td>
<input type=checkbox name = rod[papa][brak][0][data_b][netochno]>
<tr>
<td>
	Место заключения брака
<td>
<input type=text name = rod[papa][brak][0][mesto_b][value]>
<td>
<input type=checkbox name = rod[papa][brak][0][mesto_b][netochno]>

<tr>
<td>
Дата расторжения брака
	<br>
(если был расторгнут)
<td>
<input type=text name = rod[papa][brak][0][data_rast_b][value]>
<td>
<input type=checkbox name = rod[papa][brak][0][data_rast_b][netochno]>

</table>

<p>
<div class = add_pred_brak_papa0 id = add_pred_brak_papa0 >
</div>

<p>

<?php endif ?>

<?php if() ?>

<table>
<tr>
<td>
ФИО бывшей супруги 
<td>
<input type=text name = rod[papa][brak][1][fio][value]>
<td>
<input type=checkbox name = rod[papa][brak][1][fio][netochno]>
<tr>
<td>
Дата заключения брака 
<td>
<input type=text name = rod[papa][brak][1][data][value]>
<td>
<input type=checkbox name = rod[papa][brak][1][data][netochno]>
<tr>
<td>
Место заключения брака 
<td>
<input type=text name = rod[papa][brak][1][mesto][value]>
<td>
<input type=checkbox name = rod[papa][brak][1][mesto][netochno]>
<tr>
<td>
Дата расторжения брака 
<td>
<input type=text name = rod[papa][brak][1][data_r][value]>
<td>
<input type=checkbox name = rod[papa][brak][1][data_r][netochno]>
<tr>
<td>

<button  type="button" onclick="ftc('add_rab.php?type=<?php echo $rod; ?>&nrab=<?php echo $nrab+1; ?>', '<?php echo $id; ?>');">
	добавить сведения о предыдущих браках
</button>

<?php endif ?>
