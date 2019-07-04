<!DOCTYPE html>
<html>
<head>
	<title>Form data from task table</title>
</head>
<body>

<?php
  session_start();
  if (!isset($_SESSION['user_data'])) {
  	  header("Location: http://localhost/phpnep/login.php"); // redirect in a given pae of that link 
  }else{
  	 if (empty($_SESSION['user_data'])) {
      header("Location: http://localhost/phpnep/login.php"); // redirect in a given pae of that link 
  	 }else{
  	 	//contine our application
  	 }
  }


 // initializing DbEngine
 require_once 'dbengine.php';

if (isset($_GET['update'])) {
 $id = $_GET['id'];

// creating connection
$conn = createConnection();

$task_data = GetTask($conn,$id);
$data = $task_data->fetchAll(\PDO::FETCH_ASSOC);
?>

   <hr/>
	<center>
		<form method="POST" action="update.php">
			<input type="hidden" name="id" value="<?=$id?>">
			<p>
				Task Name: <input type="text" name="task" value="<?=$data[0]['taskName']?>">
			</p>
			<p>
				Due date: <input type="date"  min="2019-05-31"  value="<?=$data[0]['dueDate']?>" name="dd">
			</p>
			<p>
				Completed: 
                     <?= ($data[0]['completed'] == 1) ? '<input type="checkbox" checked name="compl">' :  '<input type="checkbox"  name="compl">'?>
				

			</p>
			<p>
				<input type="submit" name='update' value="update">

				<a href="index.php">Back</a>
			</p>
		</form>


	</center>
	<hr/>

<?php
}else{
?>

 <hr/>
	<center>
		<form method="POST" action="save.php">
			<p>
				Task Name: <input type="text" name="task">
			</p>
			<p>
				Due date: <input type="date"  min="2019-05-31" name="dd">
			</p>
			<p>
				Completed: <input type="checkbox" name="compl">
			</p>
			<p>
				<input type="submit" name="send" value="send">
			</p>
		</form>
	</center>
	<hr/>

	<?php
  }
  ?>
 <h4 style="float: right;">
  <?php
    echo 'Welcome '.$_SESSION['user_data'];
  ?>
  <br>
  <a href="login.php">Logout</a>
   
 </h4>


<?php
  include('display.php')
?>

<hr/>
</body>
</html>