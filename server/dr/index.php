<DOCTYPE_HTML!>
<html>
 <head>
 <title>Wilkommen im Flüchtlingslager!</title>
 </head>
 <body>
 <p>Svent</p>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "customer");
	$image_details  = mysqli_query($conn, "SELECT * FROM customer_table");
     while ($row = mysqli_fetch_array($image_details)) {     
		
      	echo "<img src=./backgrounds/Wood-Sitting-on-a-bed-Meme-1.png".$row['imagename']."' >";   
      
    }     

	?>
  
 </body>
 </html>