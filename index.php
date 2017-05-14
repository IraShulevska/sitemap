<?php

$baseArr = [
	105200,
	109242,
	148325,
	201204,
	207568,
	985625,
	445689,
	188355,
	145355,
	165987,
	259875
];

$newArr = [];

foreach ($baseArr as $val) {
	for($i = 0 ; $i < 10000; $i++) {
		$newArr[] = $val * 10000 + $i;
 	}
};

$count = 1;
$arr = [];

for ($i = 0; $i <= count($newArr); $i += 50000) {
	foreach ($newArr as $key => $val) {
		if ($key >= $i && $key < $i + 50000) {
			$arr[] = $val;
		}
	}
	
	$fp = fopen('files/' . $count . '.txt', 'a');
	fwrite($fp, implode(',', $arr));
	$arr = [];
	$count++;
};

?>

<?php for ($i = 1; $i <= ceil(count($newArr)/50000); $i++) : ?>
	<a href="<?= 'links/50k.php?file=' . $i ;?>"><?= 'link ' . $i ?></a></br>
<?php endfor; ?>

