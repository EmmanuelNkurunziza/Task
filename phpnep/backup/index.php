<?php 

include 'form.html';
// if (isset($_POST['send'])) {


// $task = [
// 	'name' => $_POST['taskName'],
// 	'dueDate' => $_POST['dueDate'],
// 	'completed' => (isset($_POST['completed'])) ? true : false,
// ];

// require 'index.view.php';

// }


// Requiire functions file
require 'functions.php';

// connect to db
// $pdo = connectToDb();

// // fetch all recoords
// $tasks = getAllTasks($pdo);

// Calll the view for displaying results
require 'index.view.php';

// require 'tasks.php';

// Task Form 
// include 'form.html';

