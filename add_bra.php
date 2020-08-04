<?php 
$nbra = $_GET['nbra'];;
$rod = $_GET['type'];
$id = 'add_bra_'.$rod.$nbra;
?>

<table>
<tr>
<td>
ФИО
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][fio]>
<tr>
<td>
дата рождения
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][data_r]>
<tr>
<td>
место рождения
<input type=text name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][mesto_r]>
</table>
<table>
<tr>
<td>
жив
<input type=radio name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][live] value=1  > 
<td>
	нет
		<input type=radio name = rod[<?php echo $rod; ?>][brat][<?php echo $nbra; ?>][live] value=<?php echo $nbra; ?> > 

</table>
</div>

<div class = add_bra_<?php echo $rod; ?><?php echo $nbra; ?> id = add_bra_<?php echo $rod; ?><?php echo $nbra; ?> >

		<a  href="javascript:ftc('add_bra.php?type=<?php echo $rod; ?>&nbra=<?php echo $nbra+1; ?>', '<?php echo $id; ?>');">
+ДОБАВИТЬ ЕЩЕ БРАТА/СЕСТРУ
	</a>



