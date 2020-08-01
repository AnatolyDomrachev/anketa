<?php 
$num = $_GET['num'];
$rod = $_GET['type'];
$id = 'add_file_'.$num;
?>
<p>
 <input type="file" name="files['<?php echo $num; ?>']">
<p>

</div>
<div class = "<?php echo $id; ?>" id = "<?php echo $id; ?>" >

<button  type="button" onclick="ftc('add_file.php?num=<?php echo $num+1; ?>', '<?php echo $id; ?>');">
Добавить файл
</button>
<p>

