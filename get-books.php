 <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {

         
          echo '
         <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
           <img class="card-img-top" src="upload/'.$row['image'].'" alt="Card image cap">
          <div class="card-body">
    <h3 class="card-text">'. $row['title'].'</h3>
    <a href="book-details.php?id='.$row['ID'].'"><button  class="btn btn-primary">Details</button></a>
      </div>
</div>
 </div>

 '
     ;    
        
    }}
    ?>