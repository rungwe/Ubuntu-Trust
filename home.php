
<html>

<head>
        <title>Home</title>
		<link rel="icon" href="img/logo.png" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		

</head>


<body style="overflow:hidden;">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Ubuntu Trust</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="#">About us</a></li>
		  <li><a href="#">Contact</a></li> 
		</ul>
		<ul class="nav navbar-nav pull-right">
		  <li ><a href="index.php">Logout</a></li>
		  
		</ul>
		
	  </div>
	</nav>
	

	<div class="raw">
	
		<div id="left" class="col-sm-3" style="background-color:gray;height:580px;width:280px;">
			<h3 class="tabs">Dashboard</h3>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#profile">Profile</h4>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#order">Order List</h4>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#transaction">Transactions</h4>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#announcement">Announcements</h4>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#chat">Chatroom</h4>
			<br>
			<h4 class="tabs" data-toggle="tab" href="#complaints">Complaints</h4>
		</div>
		<div id="center" class="col-sm-9 tab-content">
			<div id="profile" class="tab-pane fade in active" style="overflow:visible;">
				<center><h3>Welcome  Chaddy Rungwe</h3></center>
				<hr>
				
				<div class="col-sm-6" style="width:400px;">
					<h4>Banking details</h4>
					<br>
					<form >
					  <div class="form-group">
						<label for="acc">Account Holder:</label>
						<input type="text" class="form-control" id="acc" name="acc" placeholder="eg 098123765">
					  </div>
					
					  <div class="form-group">
						  <label for="bank">Bank Name:</label>
						  <select class="form-control" id="bank" style="width:180px;">
							<option>ABSA</option>
							<option>FNB</option>
							<option>NEDBANK</option>
							<option>STANDARND BANK</option>
							<option>CAPITEC BANK</option>
						  </select>
						</div>
						
					  <div class="form-group">
						<label for="branch">Branch Code:</label>
						<input type="text" class="form-control" id="branch" name="branch" style="width:180px;">
					  </div>
					  
					  <div class="form-group">
						  <label for="bank">Account Type:</label>
						  <select class="form-control" id="bank" style="width:160px;">
							<option>Current</option>
							<option>Savings</option>
							<option>Cheque</option>
						  </select>
						</div>
					  <button type="submit" class="btn btn-primary">Update</button>
					</form>
				
				</div>
				<div class="col-sm-offset-2 col-sm-3">
					<h4>Change Password</h4>
					<br>
					<form>
						<div class="form-group">
							<label for="pwd">Current Password:</label>
							<input type="password" class="form-control" id="pwd">
						 </div>
						 <div class="form-group">
							<label for="pwd">New Password:</label>
							<input type="password" class="form-control" id="pwd">
						 </div>
						 <div class="form-group">
							<label for="pwd">Confirm new Password:</label>
							<input type="password" class="form-control" id="pwd">
						 </div>
						  
						  <button type="submit" class="btn btn-primary">Change</button>
					</form>
					
				
				</div>
			
			</div>
			
			<div id="order" class="tab-pane fade">
				<center><h3>Make a Promise</h3></center>
				<hr>
				<table class="table table-striped">
				<thead>
				  <tr>
					<th>Index</th>
					<th>Username</th>
					<th>Bank</th>
					<th>Amount</th>
					<th>Split/Full</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td>Doe</td>
					<td>ABSA</td>
					<td>R3000</td>
					<td> 
						 <select class="form-control" id="bank">
							<option>Please select</option>
							<option>Full</option>
							<option>Split</option>
						  </select>
					</td>
					<td><button type="button" class="btn btn-success">promise</button></td>
				  </tr>
				  <tr>
					<td>2</td>
					<td>Kelvin</td>
					<td>NEDBANK</td>
					<td>R4000</td>
					<td> 
						 <select class="form-control" id="bank">
							<option>Please select</option>
							<option>Full</option>
							<option>Split</option>
						  </select>
					</td>
					<td><button type="button" class="btn btn-success">promise</button></td>
				  </tr>
				  <tr>
					<td>3</td>
					<td>John</td>
					<td>FNB</td>
					<td>R4500</td>
					<td> 
						 <select class="form-control" id="bank">
							<option>Please select</option>
							<option>Full</option>
							<option>Split</option>
						  </select>
					</td>
					<td><button type="button" class="btn btn-success">promise</button></td>
				  </tr>
				</tbody>
			  </table>
			
			</div>
			
			<div id="transaction" class="tab-pane fade">
				<center><h3>Transactions</h3></center>
				<hr>
				<div>
					<table class="table table-striped">
				<thead>
				  <tr>
					<th>Order ID</th>
					<th>Pay Day</th>
					<th>Time</th>
					<th>Amount</th>
					<th>Status</th>
					<th>Helper</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1233</td>
					<td>12-03-2016</td>
					<td>06:30</td>
					<td>R3000</td>
					<td> 
						pending
					</td>
					<td><button type="button" class="btn btn-info">View Helper(s)</button></td>
				  </tr>
				  <tr>
					<td>1335</td>
					<td>16-03-2016</td>
					<td>09:37</td>
					<td>R4000</td>
					<td> 
						pending
					</td>
					<td><button type="button" class="btn btn-info">View Helper(s)</button></td>
				  </tr>
				  <tr>
					<td>1279</td>
					<td>12-03-2016</td>
					<td>13:50</td>
					<td>R4500</td>
					<td> 
						pending
					</td>
					<td><button type="button" class="btn btn-info">View Helper(s)</button></td>
				  </tr>
				</tbody>
			  </table>
				</div>
			
			</div>
			
			<div id="chat" class="tab-pane fade">
			<center><h3>Chatroom</h3></center>
			<hr>
			<div class="col-sm-offset-3 col-sm-6" style="border-left: 2px solid gray;border-right: 2px solid gray;height:520px;overflow:scroll;">
			
				<p style="color:green;">John</p>
				<p style="color:gray;">13:31 02-06-2016</p>
				<p>Hello, I am commenting </p>
				<br>
				
				<p style="color:red;">Kevin</p>
				<p style="color:gray;">18:31 02-06-2016</p>
				<p>hi, I am also testing </p>
				
				<p style="color:blue;">Mary</p>
				<p style="color:gray;">13:31 02-06-2016</p>
				<p>The functionality is not yet working </p>
				<br>
				
				<p style="color:brown;">Bradley</p>
				<p style="color:gray;">18:31 02-06-2016</p>
				<p>its still a skeleton</p>
				<hr>
				 <div class="form-group">
						  <label for="comment">Comment:</label>
						  <textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
					  <button type="submit" class="btn btn-default">Submit</button>
					  <br>
					  <br>
			</div>
			</div>
			
			<div id="announcement" class="tab-pane fade">
			<center><h3>Announcements</h3></center>
			</div>
			
			<div id="complaints" class="tab-pane fade">
			<center><h3>Complaints</h3></center>
			</div>
			
			
		</div>
		
	
	</div>
	
	

</body>

<style>
	.tabs{
		color:white;
		align-content: center;
		cursor:pointer;
	}

</style>



</html>