<?php
$param = 'mysql:dbname=AML;host=192.168.10.100';
$user = 'aml';
$pass = '';
$name1 = 'k1';
$name2 = 'k2';
$status = '-1';

try{
	$pdo = new PDO($param, $user, $pass,
	array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8' ")
	);
}catch(PDOException $e){
	die($e->getMessage());
}

$st = $pdo->prepare("UPDATE server SET status=? WHERE name=?");
$st->execute(array($status, $name1));
print($status);

$st = $pdo->prepare("UPDATE server SET status=? WHERE name=?");
$st->execute(array($status, $name2));
print($status);

//echo '<a href=¥'./start.php¥'>再開する</a>';
?>
