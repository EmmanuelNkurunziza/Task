
<html>
<head>
	<title>Test</title>
</head>
<body>
	<?php foreach($task as $task): ?>

	<ul>
		<li><strong>Task: </strong> <?= $task->taskName ?> </li>
		<li><strong>Due Date: </strong> <?= $task->dueDate ?> </li>
		<li><strong>Completed</strong> <?= ($task->completed == 1) ? '&#9989;' :  '&#10060;'?> </li>  
			
			<!-- // 	if ($task['completed']) {
			// 		echo '&#9989;';
			// 	}	
			// 	else{
			// 		echo '&#10060;';
			// 	} -->
	</ul>
			<?php endforeach; ?>
		
	


</body>
</html>