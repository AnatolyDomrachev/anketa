<i>

 <style>
   @font-face {
    font-family: antiqua; /* Имя шрифта */
    src: url(Antiqua.ttf); /* Путь к файлу со шрифтом */
   }

.la {
	border-bottom: 1px solid ; /* Линия внизу ячейки */
   }

   P {
  font-family: antiqua; 
   }

td {
  font-family: antiqua; 
   }
input {outline:none;border: none;}
  </style>

<?php 
$nuch = $_GET['nuch'];;
$rod = $_GET['type'];
$id = 'add_uch_'.$rod.$nuch;
?>

Проверка
<p>
<table >
<tr>
<td>
<td>
<td>
<i>
неточная
<br>
информация
<tr>
<td>
<i>
Период учебы     
<td class="la">
<input type=text name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][period]>
<td align = center>
<input type=checkbox name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][netochno]>
<tr>
<td>
<i>
Название учебного заведения
<td class="la">
<input name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][mesto]>
<!--
<td>
неточная
информация
<tr>
<td>
<td>
<input type=checkbox name = rod[<?php echo $rod; ?>][ucheba][<?php echo $nuch; ?>][netochno]>
--!>
</table>
<p>

</div>

<div class = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> id = add_uch_<?php echo $rod; ?><?php echo $nuch; ?> >
<p>
<button  type="button" onclick="ftc('add_uch.php?type=<?php echo $rod; ?>&nuch=<?php echo $nuch+1; ?>', '<?php echo $id; ?>');">
	добавить еще одно место учебы
</button>
