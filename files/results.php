<?php
    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
	
	if(isset($_POST['submit']))
	{
		$name = "".$_POST['firstName']." ".$_POST['lastName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address1'];
		if ($_POST['address2'] != "") {
			$address .= "<br />".$_POST['address2'];
		}
		$zip = substr($_POST['zip'], 0, 5);
		$city = $_POST['city'];
		$state = $_POST['state'];
		
		if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
		{
			echo "No image was selected.";
		}
		else
		{
			$image = addslashes($_FILES['image']['tmp_name']);
			$name = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			saveimage($name,$image);
		}
	
		function saveimage($name,$image)
		{
			$con = mysql_connect("localhost", "root", "");
			mysql_select_db("main", $con);
			$qry = "insert into images (name,image) values ('$name','$image')";
			$lastid = mysql_insert_id();
			$result = mysql_query($qry, $con);
			if($result)
			{
				echo "<br/>Image successfully uploaded!";
			}
			else
			{
				echo "<br/>An error occured - The image was not uploaded.";
			}
		}
		
		function displayImage()
		{
			$con = mysql_connect("localhost", "root", "");
			mysql_select_db("defacidc_main", $con);
			$qry = "select * from images WHERE id=".$lastid;
			$result = mysql_query($qry, $con);
			while($row = mysql_fetch_array($result))
			{
				echo '<img height="300" width="300" src="data:image;base64,'.$row[2].' "> ';
			}
			mysql_close($con);   
		}
	
	}
	else {
		echo "An error occured.";
	}
?>
<html>
	<body>
		<h1>Results</h1>
		<?php 
			echo "
				<p>Name: ".$name"</p>
				<p>Phone Number: ".$phone."</p>
				<p>Email: ".$email."</p>
				<p>Address: ".$address."</p>
				<p>Zip Code: ".$zip."</p>
				<p>City: ".$city."</p>
				<p>State: ".$state."</p>
			";
			
		?>
	</body>
</html>