<?php 
 include 'db.php';
include 'usr-interface-navbar.php';
$id = $_GET['id'];
$raw_results = mysqli_query($connection,"SELECT * FROM books
			WHERE ID=".$id."") or die(mysql_error());
if (!$raw_results) {
   echo 'Impossible d\'exécuter la requête : ' . mysql_error();
   exit;
}
$row = mysqli_fetch_row($raw_results);


$title  = $row[1];
$prix  = $row[5];
$Author  = $row[2];
$Date_Of_Publication = $row[4];
$Quantity = $row[6];
$image = $row[3];






?>
<!--Start Our Books Title -->
<div class="container"  style="background-color:white;width: 100%;height: 100px; padding: 20px; color: rgb(77, 33, 223); font-size: 30px;">
	<span>Book Name </span>
</div>




 <div class="container-fluid" style="background-color:white; width: 80%; margin: auto;">




 <div class="row">

		  	<div class="col-lg-6">
		  		<div style="width: 90%; background-color: #DCDCDC;border-radius:  10px; padding: 20px;">
		  			<div style="width: 90%;"><span style="color: rgb(77, 33, 223); font-weight: bolder;">Name: </span><span><?php echo $title ;?></span></div>
		  			<div style="width: 90%;"><span style="color: rgb(77, 33, 223); font-weight: bolder;">Author : </span><span><?php echo $Author ;?></span></div>
		  			<div style="width: 90%;"><span style="color: rgb(77, 33, 223); font-weight: bolder;">Prix:</span><span><?php echo $prix ;?></span></div>
		  			<div style="width: 90%;"><span style="color: rgb(77, 33, 223); font-weight: bolder;">Date Of Publication :</span><span><?php echo $Date_Of_Publication ;?></span></div>
		  			<div style="width: 90%;"><span style="color: rgb(77, 33, 223); font-weight: bolder;">Quantity :</span><span><?php echo $Quantity ;?></span></div>
		  		</div>
		    </div>
  	
			 <div class="col-lg-6">
			 	 <img src="upload/<?php echo $image ;?>" height="300"> 
			 </div>


</div>