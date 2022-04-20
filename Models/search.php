<?php
    require_once('model.php');


$sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$_POST['name']."%'";

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['product_name']."</td>
		          <td>".$row['product_price']."</td>
		          <td>".$row['product_id']."</td>
		          
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>