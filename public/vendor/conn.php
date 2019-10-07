<?php
	$conn=mysqli_connect("baguse.kolu.web.id","bagusee","Indonesia@123","maskapai");
	if($conn){
		echo "sip";
	}else{
		echo "gak";
		echo mysqli_error();
	}
	echo "j";
	$res=mysqli_query($conn,"SELECT * FROM provinces");
	echo json_encode($res);
	while($row=mysqli_fetch_assoc($res)){
		echo json_encode($row);
	}
?>