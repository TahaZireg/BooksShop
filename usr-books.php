<?php 
 include('db.php');
include 'usr-interface-navbar.php';
  $query = "SELECT * FROM Books";
  $query_run = mysqli_query($connection,$query);












?>
<!--Start Our Books Title -->
<div class="container"  style="background-color:white;width: 100%;height: 100px; padding: 20px; color: rgb(77, 33, 223); font-size: 30px;">
	<span>OUR BOOKS</span>
</div>

<!--Start Our Books Title -->
 <!--Start books cards -->
 <div class="container-fluid">

  <div class="row">
  <!-- 	<div class="col-lg-3">
  		<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="sm_images/backimg.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-text">book name</h3>
  </div>
</div>
  	</div>
 <div class="col-lg-3">
 	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="sm_images/backimg.jpg" alt="Card image cap">
  <div class="card-body">
   <h3 class="card-text">book name</h3>
  </div>
</div>
 </div>


 <div class="col-lg-3">
 	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="sm_images/backimg.jpg" alt="Card image cap">
  <div class="card-body">
   <h3 class="card-text">book name</h3>
  </div>
</div>
 </div>    


<div class="col-lg-3">
	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="sm_images/backimg.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-text">book name</h3>
  </div>
</div>
</div>
 -->
 <?php 
 include 'get-books.php';
 ?>
</div>





</div>
 <!--End Books Cards -->