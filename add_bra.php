<?php 
$nbra = $_GET['nbra'];;
$rod = $_GET['type'];
$id = 'add_bra_'.$rod.$nbra;
?>

<p>
<table border = 1>
<tr>
<td>
ФИО
<td>
жив
<td>
дата рождения
<td>
место рождения
<tr>
<td>
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][fio]>
<td>
	<input type=radio name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][live] value=1  > 
&nbsp
	да
&nbsp
		<input type=radio name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][live] value=<?php echo $nbra; ?> > 
&nbsp
	нет

<td>
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][data_r]>
<td>
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][mesto_r]>
</table>
</div>

<div class = add_bra_<?php echo $rod; ?><?php echo $nbra; ?> id = add_bra_<?php echo $rod; ?><?php echo $nbra; ?> >
<p>
<button  type="button" onclick="ftc('add_bra.php?type=<?php echo $rod; ?>&nbra=<?php echo $nbra+1; ?>', '<?php echo $id; ?>');">
	добавить еще брата/сестру
</button>


