

<style type="text/css">
	.btn{
		border: 1px solid #000;
        border-radius: 9px;
        padding: 5px 10px;
        text-decoration: none;
	}
	.btn:hover{
		background-color: #ccc;
		cursor: pointer;
	}
</style>

	<?php foreach($tasks as $task): ?>

	<ul>
		<li><strong>Task: </strong> <?= $task['taskName'] ?> </li>
		<li><strong>Due Date: </strong> <?= $task['dueDate'] ?> </li>
		<li><strong>Completed</strong> <?= ($task['completed'] == 1) ? '<span style="color:green">&#9989;</span>' :  '&#10060;'?> </li>  
			

			<div style="position: relative;top: -39px;right: -262px;">
               <a href="delete.php?id=<?=$task['id'] ?>" class="btn" style="margin-right: 10px;">Delete</a> 

               <a href="index.php?update=true&id=<?=$task['id'] ?>" class="btn" style="margin-right: 10px;">Edit</a>  

                 <?= ($task['completed'] == 1) ? '' :  '<a href="completing.php?id='.$task['id'].'"  class="btn" style="margin-right: 10px;">Complete</a>'?>
                 
			</div>
	</ul>
			<?php endforeach; ?>
		
