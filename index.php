<?php
// Подключение файла соединения с БД
include_once 'db.class.php';

// хост БД
define('db_host','localhost:3306');

// Имя БД
define('db_name','Kuznetsove');

// Пользователь БД
define('db_user','admin');

// Пароль БД
define('db_pass','admin_password');

// Обявление класса для подключения к бд
$db = new DB_class(db_host,db_name,db_user,db_pass);

$query = $db->select(true,"*","Kuznetsov","");


?>


<!DOCTYPE html>
<html>
<head>
	<title>Мой задачник</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="tasks">
	<?php
	for ($i = 0; $i < count($query);$i++) {
		?>
		<div class="task">
			<div class="task-control">
				<input type="checkbox" name="">
			</div>
			<div class="task-text"><?php echo $query[$i]['task_text'] ?></div>
			<div class="task-date">
				<input type="date" name="">
			</div>
		</div>
		<?php
	}
	?>
	
	

</div>
</body>
</html>