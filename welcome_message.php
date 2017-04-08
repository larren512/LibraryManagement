    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Elib</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        
		<?php
		
		if($data == '1'){
		?>
		
		<?php
		}
		else if($data == '0'){
		?>
			<p><a class="btn btn-primary btn-lg" href="welcome/register_page" role="button">Create an Account &raquo;</a></p>
		<?php
		}
		?>
		
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>ECE</h2>
          <p>Electronics And Communication Engineering
            </p>
          <?php
		
		if($data == '0'){
		?>
		
		<?php
		}
		else if($data == '1'){
		?>
		  <p><a class="btn btn-default" href="<?php echo 'ece' ; ?>" role="button"><b>ENTER</b> &raquo;</a></p>
		<?php
		}
		?>
		
        </div>
        <div class="col-md-4">
          <h2>CSE</h2>
          <p>Computer Science and Engineering</p>
          <?php
		
		if($data == '0'){
		?>
		
		<?php
		}
		else if($data == '1'){
		?>
		  <p><a class="btn btn-default" href="<?php echo 'cse' ; ?>" role="button"><b>ENTER</b> &raquo;</a></p>
		<?php
		}
		?>
		
       </div>
        <div class="col-md-4">
          <h2>EEE</h2>
          <p>Electrical and Electronics Engineering</p>
          <?php
		
		if($data == '0'){
		?>
		
		<?php
		}
		else if($data == '1'){
		?>
		  <p><a class="btn btn-default" href="<?php echo 'eee' ; ?>" role="button"><b>ENTER</b> &raquo;</a></p>
		<?php
		}
		?>
		
        </div>
      </div>

      <hr>