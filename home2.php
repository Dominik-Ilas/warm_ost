

<?php
$servername = "localhost";
$dbname = "dominko_sk";
$username = "dominko_sk2";
$password = "Dominik123";

echo "pripaja sa ...";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
die("Chyba pripojenie k db: " . $connection->connect_error);
}
echo " |Connected|" . "< br / >";
echo "< br / >";


?>
<table class="table-bordered">



									<thead>
										<tr>
											<th>image</th>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
<?php
$query = mysqli_query($connection, "SELECT * FROM t_shop");
while($fetch = mysqli_fetch_array($query)){
?>
									<tbody>
										<tr>
											<td><?php  echo '<img src="data:image/jpeg;base64,'.base64_encode( $fetch['img'] ).'" width="200" height="200" >';?></td>
											<td><a><?php echo $fetch['name']?></a></td>
											<td><a><?php echo $fetch['description']?></a></td>
											<td><a><?php echo $fetch['price']?></a></td>
										</tr>
									</tbody>
								

<?php    
}

?>
	</table>
<?php

$sql = "SELECT * FROM t_shop";

$vysledok = $connection->query($sql);

$pocet = $vysledok->num_rows;

if ($pocet >0){
while($riadok = $vysledok->fetch_assoc() ){	
echo $riadok['ID'] . "\t";
echo $riadok['name'] . "\t";
echo $riadok['description'] . "\t";
echo $riadok['price'] . "\t";


}
}
?>