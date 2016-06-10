
<html>

<head>
        <title>About us</title>
		<link rel="icon" href="img/logo.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		

</head>


<body style="background-image:url(img/bg.jpg);background-size:cover;">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Ubuntu Trust</a>
		</div>
		<ul class="nav navbar-nav">
		  <li ><a href="index.php">Home</a></li>
		  <li class="active"><a href="#">About us</a></li>
		  <li><a href="contact.php">Contact</a></li> 
		</ul>
		<ul class="nav navbar-nav pull-right">
		  <li ><a href="#" data-toggle="modal" data-target="#myModal">Sign up</a></li>
		  
		</ul>
		
	  </div>
	</nav>
	
	
	<br>
	<br>
	<br>
	<center>
		<div style="opacity:0.7;height:400px;width:400px;background-color:white;border-radius: 4px;">
			<br>
			<center><h3> About Us </h3></center>
			
		</div>
	</center>
	
			

</body>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign up</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="home.php">
	<div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="username" id="email" placeholder="Enter email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="cell">Cell:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cell" id="cell" placeholder="Enter cell number" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cnf_pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" name="cnf_pwd" id="cnf_pwd" placeholder="Confirm password" required>
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> I have read through, and I accept the terms and conditions found <a href="#">here</a></label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>


</html>