<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "webquan2");
$sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "
		<a href = \"#\">
		<tr>
			<td class = \" w-50 pr-4\"><img src= ".$row['product_image']." class = \" w-25 h-3\"></td>
			<td>".$row['product_name']."</td>
			<td>".$row['product_price']."</td>
		</tr>
		</a>
";
	}
}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>