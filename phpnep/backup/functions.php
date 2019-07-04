<?php 
// function connectToDb(){
// 	try {
// 		$dsn = "mysql:host=127.0.0.1;dbname=phpnep";
// 		$pdo = new PDO($dsn, "root", "");
// 		return $pdo;
// 	}
// 		catch (PDOException $e) {
// 			echo "cannot connect: " . $e->getMessage();
// 	}

// }
// function getAllTasks($pdo) {

// 	$statement  = $pdo->prepare('SELLECT * FROM tasks');
// 	$statement->execute();
// 	$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
// 	return $tasks;

// }

if(isset($_POST['send'])){
 $task      = $_POST['task'];
 $dd       = $_POST['dd'];
 $compl     = $_POST['compl'];

  
$dsn = "mysql:mysql:host=127.0.0.1;dbname=phpnep";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);


 

$send = $pdo->prepare("INSERT INTO `tasks` (`id`, `taskName`, `dueDate`, `completed`) VALUES (NULL, :task, :dd , :compl)");
$send->execute(array(
	':task' => $task,
	':dd'  => $dd,
	':compl'=> $compl
	 ));
} 




