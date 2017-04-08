    <div class="jumbotron">
     	<div class="container">
     		
     		<h1> <?php echo $branch ;?></h1>
     	
     	</div>
    </div>
    
    
    <div class="container">
      <!-- Example row of columns -->
      	
      	<div class="row">
        
        <?php
        	
			for ($x = 1; $x <= 4; $x++) {
  			
			?>
				<div class="col-md-3">
		          <h2><?php echo 'Semester '.$x ; ?></h2>
		          <p></p>
		          <p><a class="btn btn-default" href="<?php echo strtolower($branch).'/'.$x ?>" role="button"><b>ENTER</b> &raquo;</a></p>
		        </div>
				
			<?php 
			}         	
        ?>
        
        </div>
        
        <br />
        <br />
        <br />
        
        
        <div class="row">
        
        	
        <?php
        	
			for ($x = 5; $x <= 8; $x++) {
  			
			?>
				<div class="col-md-3">
		          <h2><?php echo 'Semester '.$x ; ?></h2>
		          <p></p>
		          <p><a class="btn btn-default" href="<?php echo strtolower($branch).'/'.$x ?>" role="button"><b>ENTER</b> &raquo;</a></p>
		        </div>
				
			<?php 
			}         	
        ?>
  	
  		</div>
  </div>