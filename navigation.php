	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Elib</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<?php
			
			if($data == '0'){
			
			?>
		
          <form class="navbar-form navbar-right" action="welcome/sign_in" method="post">	
		   <div class="form-group">
              <input type="text" placeholder="User Name" class="form-control" name="user_id" >
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
			
			<button type="submit" class="btn btn-info" >Sign in</button>
			<!--<a href="welcome/sign_in" class="btn btn-info" role="button">Sign in</a>-->
            </form>
			<?php
			}else if($data=='1'){
			?>
			
			
			<!--<p>#username</p>-->
            <!--<button type="submit" class="btn btn-success">Sign out</button>-->
			<form class="navbar-form navbar-right">	
			<a href="http://localhost/DBMS/" class="btn btn-info" role="button">Sign out</a>
			</form>
			<?php
			}else if($data=='2'){
			?>
			
			<?php
			}
			
			?>
			
			<!--<button type="submit" class="btn btn-success">Sign in</button>-->
			
          <!--</form>-->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>