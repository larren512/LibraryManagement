    <div class="jumbotron">
     	<div class="container">
     		
     		<h1> Book</h1>
     	
     	</div>
    </div>
    
    
    <div class="container">
      <!-- Example row of columns -->
      
      <?php 
      
      	if($books != null) {
      
      		foreach ($books as $key => $book ){
      
      ?>
      
		      <div class="row">
		          
		        <div class="col-md-2">
		        	</div>
		        <div class="col-md-8">
		          <h2><?php echo $book->book ;?></h2>
		          <p><?php echo $book->author ;?></p>
		          <p><a class="btn btn-default" href="<?php echo $book->link ; ?>" target="_blank" role="button">PDF copy &raquo;</a></p>
		        </div>
		        <div class="col-md-2">
		        	</div>
		        
		       </div>
       
       <?php
			}
       
		}
       ?>
       
       
       
  	</div>