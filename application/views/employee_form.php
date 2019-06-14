<!DOCTYPE html>
<html>
	<head>
		<title>
			Insert Employee Records in Database
		</title>
	</head>
	<body>
		<form action="<?php echo site_url('employee/employee_form');?>" method="post">
			<input type="text" name="emp_name" placeholder="Name">
			<input type="text" name="emp_gender" placeholder="Gender">
			<input type="text" name="emp_email" placeholder="Email">

			<button type="submit" id="employee-submit">ADD</button>
			
		</form>
	</body>
</html>