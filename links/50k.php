<a href="../index.php">home</a></br>
<?php
$numbers = explode(',', file('../files/' . $_GET['file'] . '.txt')[0]);

foreach ($numbers as $val) : 
?>
	<a href="1.php?number=<?= $val ?>"><?= $val ?></a></br>
<?php endforeach;?>