<?php
session_start();
?>
<html>
<head>
	<title>leave application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="niot.jpg" id="logo" >
</head>
<body>
		<div >
		<h3><strong>name:</strong></h3>	
		<h1><?php
		echo $_SESSION["Emp_name"];
            ?></h1>
	</div>
	<ul>
 		<form action="../login.php" method="post">
		<fieldset>
					<input type="submit" id="log" name="submit" value="logout">
				</fieldset>
		</form>
		<div id="container" >
			<form id="contact"  action="submit.php" method="post">
				<h3>YOUR DETAILES</h3>
				<table style="width:100%">
				<fieldset>
					<tr>
						<th><label>from date:</label></th>
						<td><input type="date" id="d1" name="from_date"/><br>
						<!--<input type="submit" value="submit">--></td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th>
					<label>to date:</label></th>
					<td><input type="date" id="d2" name="to_date"/><br>
					<!--<input type="submit" value="submit">--></td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th>
					<label>leave type</label></th>
					<td><select id="type" name="type" size="3">
						<option value="casual leave">casual leave</option>
						<option value="restricted leave">restricted leave</option>
						<option value="earned leave">earned leave</option>
						<option value="half pay leave">half pay leave</option>
					</select>
                        </td>
					</tr>
				</fieldset>
				<fieldset>
					<tr>
					<th><label>reason:</label></th>
					<td>
					<textarea type="text" name="reason" placeholder="place your leave reason" ></textarea></td>
				</tr>
				</fieldset>	
				<fieldset>
					<tr>
						<th>
					<label>NO.s of days:</label></th>
					<td>
					<input type="text" name="total_days" ></td>
				</tr>
				</fieldset>
				<fieldset>
					<tr>
                        <th>
                            
                        </th>
						<td>
					<input type="submit" id="submit" name="submit" value="submit"></td>
				</tr>
				</fieldset>
				
			</form>
		</div>
</body>
</html>