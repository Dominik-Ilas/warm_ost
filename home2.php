<!DOCTYPE html>
<html lang="en">
<?php
requi
$servername = "localhost";
$dbname = "dominko_sk";
$username = "dominko_sk2";
$password = "Dominik123";



$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
die("Chyba pripojenie k db: " . $connection->connect_error);
}
?>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
<script src="https://cdn.jsdelivr.net/gh/tofsjonas/sortable@latest/sortable.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/tofsjonas/sortable@latest/sortable.min.css" rel="stylesheet" />
</head>
<body>

		<table class="sortable">

			<thead>
				<tr>
					<th>ID</th>
					<th class="no-sort">image</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
				</tr>
			</thead>
		
		<tbody>
			<?php
			$query = mysqli_query($connection, "SELECT * FROM t_shop");
			while($fetch = mysqli_fetch_array($query)){
		
				echo "
			
					<tr>
						<td>" . $fetch["ID"] . "</td>
						<td><img src='data:image/jpeg;base64,".base64_encode($fetch['img'])."' width=200 height=200 ></td>			
						<td>" . $fetch["name"] . "</td>  
						<td>" . $fetch["description"] . "</td>
						<td>" . $fetch["price"] . "</td>
					</tr>";
		
			}

			?>
		</tbody>
	</table>



	<table class="sortable">

			<thead>
				<tr>
					<th>ID</th>
					<th>Customer</th>
					<th>Name</th>
					<th>Price</th>
				</tr>
			</thead>
		
		<tbody>
			<?php
			$query = mysqli_query($connection, "SELECT t_orders.ID, t_orders.customer, t_shop.name, t_shop.price FROM t_orders INNER JOIN t_shop ON t_orders.item=t_shop.ID;");
			while($fetch = mysqli_fetch_array($query)){
		
				echo "
			
					<tr>
						<td>" . $fetch["ID"] . "</td>			
						<td>" . $fetch["customer"] . "</td>  
						<td>" . $fetch["name"] . "</td>
						<td>" . $fetch["price"] . "e</td>
					</tr>";
		
			}

			?>
		</tbody>
	</table>



</body>

</html>