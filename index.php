<!DOCTYPE html>
 <html>
 <head>
  <title>BUTCHER & SON </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
	<img class = 'newappIcon' src='images/logo2.PNG'> </td> 
	<img class = 'newappIcon' src='images/logo1.PNG'> </td> 
	
	
<div style="position: absolute; left: 300px; top: 10px;> 
 	<img src="images/logo.jpg" width="150" height="150"/>
 </div>
 
<div style="position: absolute; rigth: 150px; top: 10px; > 
 	<img src="images/logo.jpg" width="150" height="150"/>
 </div>
	
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "bd22f61a176d4c";
  $password = "77787e02";
  $dbname = "ad_3a32bfed6fe00dc";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from empleado";
  
$result = $conn->query($sql);
 if($result->num_rows > 0){
			?>
			<tr>
				<th>Id Empleado</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
			</tr>
			<?php
			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['idempleado']?></td>
					<td><?php echo $row['nombre']?></td>
					<td><?php echo $row['apellido']?></td>
					<td><?php echo $row['email']?></td>
				</tr>
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
 </table>
 <img class = 'newappIcon2' src='images/telus.png'> </td> 	
 </body>
 </html>


