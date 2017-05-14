<?php 
	$num = json_encode(explode(',', file('../files/' . $_GET['file'] . '.txt')[0]));
?>
<a href="../index.php">home</a></br>
<div id="data" data-files="<?= $_GET['file']?>"></div>

<script src="../js/main.js"></script>
