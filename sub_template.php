    <div class="jumbotron">
     	<div class="container">
     		
     		<h1> Subject</h1>
     	
     	</div>
    </div>
    
    
    <div class="container">
      
      <!-- Example row of columns -->
  		<?php 
  				$this->load->helper('url');
  				if ($subjects != null) 
  				
  				{
			
					foreach ($subjects as $key => $subject ) {
				  	
		 ?>  
			
						<div class="row">
				          
				        <div class="col-md-2">
				        	</div>
				        <div class="col-md-8">
				          <h2><?php echo($subject->subject); ?></h2>
				          <p><?php echo($subject->description); ?></p>
				          <p><a class="btn btn-default" href="<?php echo base_url().'subject/books/'.$subject->id; ?>" role="button"><b>Get Books</b> &raquo;</a></p>
				        </div>
				        <div class="col-md-2">
				        	</div>
				       </div>
					
		<?php
				 	 }
					
				}
  		?>
  	
  	
  	</div>