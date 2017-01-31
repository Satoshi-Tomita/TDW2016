<?php
$param = 'mysql:dbname=AML;host=192.168.10.100';
$user = 'aml';
$pass = '';

try{
	$pdo = new PDO($param,$user, $pass,
	array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8' ")
	);
}catch(PDOException $e){
	die($e->getMessage());
}

if(isset($_GET['name'])) {
      $name = $_GET['name'];
}

$st = $pdo->prepare("SELECT status FROM server WHERE name = ?");
$st->execute(array($name));
$row = $st->fetch();
$status = htmlspecialchars($row['status']);
print($status);
?>
