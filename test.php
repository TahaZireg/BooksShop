<?php
 include 'db.php';


if(isset($_GET['query'])){


 $query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 0;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = $query;
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($connection,"SELECT * FROM books ");
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				
				// posts results gotten from database(title and text) you can also show id ($results['id'])
				$resl =  $results['ID'];

            echo '
				<div  style ="display:flex ; justify-content : center ; align-items: center ; "class="col-lg-3 col-sm-12 col-sm-text-center">
  		        <div class="card" style="width: 90%; margin:10px;">
                <img class="card-img-top" src="upload/'.$results['image'].'" alt="Card image cap">
                <div class="card-body">
                <h3 class="card-text">'.$results['title'].'</h3>
                <a href="book-details.php?id='.$resl.'"><button  class="btn btn-primary">Details</button></a>
                </div>
                </div>
  	            </div>';
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}

};

	?>
	
	
	





















