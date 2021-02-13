<?php
session_start();
require_once './connection.php' ;
	
if(isset($_POST['insert'])){
	
	$total = $_POST['total'];
	$username = $_SESSION["contact_no"];
	$date = date("d-M-Y");
	
	$sql = "INSERT INTO expense_table (e_type, total, Contact_No, date_ex) VALUES('Grocery', $total, $username, '$date')";
	$conn->query($sql);
	
	header("Location: youraccount.php");
	//
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <style>
	 .container{
		 font-family: Times New Roman;
		 padding-top: 40px;
	 }
	 .container-fluid{
		 background-color: #454141;
		 color: white;
		 margin-top: 60px;
	 }
	</style>
  <title>Grocery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background: linear-gradient(to top right, #eff0f2 0%, #ffffff 100%)">
<form action="grocery.php" method="post" name="myForm" id="myForm1">
 <div class="row"><nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"><div class="col-md-11">
  <a class="navbar-brand" href="youraccount.php">Personal Expense Manager</a></div>
<div class="col-md-1">  <a href="logout.php?logout"><input type="button" value="Logout" class="btn btn-dark" style="border:2px solid grey;">	</a></div>
</nav></div>
<div class="container" style="margin-top:80px">
<div class="row">
	<div class="col-md-6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="2" class="bg-dark" style="color: white"><center>Selected Type : Grocery</center></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "bakery" type = "checkbox" class="form-check-input">Bakery and Bread
							</label>
						</div>
					</td>
					<td><input type="number" name="bakeryvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "meat" type = "checkbox" class="form-check-input">Meat and Seafood
							</label>
						</div>
					</td>
					<td><input type="number" name="meatvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "pasta" type = "checkbox" class="form-check-input">Pasta and Rice
							</label>
						</div>
					</td>
					<td><input type="number" name="pastavalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "dairy" type = "checkbox" class="form-check-input">Dairy, Cheese, and Eggs
							</label>
						</div>
					</td>
					<td><input type="number" name="dairyvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "oils" type = "checkbox" class="form-check-input">Oils, Sauces, Salad Dressings,<br> and Condiments
							</label>
						</div>
					</td>
					<td><input type="number" name="oilsvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "soups" type = "checkbox" class="form-check-input">Soups and Canned Goods
							</label>
						</div>
					</td>
					<td><input type="number" name="soupsvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name="others" type="checkbox" class="form-check-input">Others
							</label>
						</div>
					</td>
					<td><input type="number" name="othersvalue">Rs.</td>
				</tr>
				<tr>
					<td colspan="2">
						    <a href="selectexpense.php"><input name="enter" type="button" value="Back" class="btn btn-secondary"></a>
							<form method="post">
								<input type="hidden" id="total" name="total">								
								<input class="btn btn-secondary" type="submit" name="insert" value="Add In Expense" onClick="press()">
							</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
    <div class="col-md-6">
				<img src="Grocery.jpg" width="600" height="500px">
    </div>
</div>
</div>
	<div class="container-fluid">
		<div class="container">
 		  	<div class="row">
   		  		<div class="col-md-6" > 
					<h3>Get In Touch</h3>
 		  			<p><i class="fa fa-envelope-o" style="font-size:24px"></i><a href="mailto:shivam.singh2017a@vitstudent.ac.in">
					shivam.singh2017a@vitstudent.ac.in</a></p>
						<p><i class="fa fa-phone"></i>  +91 8218647789</p>
						<p><i class="fa fa-home"></i>Personal Expense Manager  <br>
							  Chennai TN 600127</p>
  		  		</div>
  		  		<div class="col-md-6" >
  		  			<h3>Follow Us</h3>
						<a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-2x"></i></a>&nbsp;&nbsp;&nbsp;	  		
  			</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<hr style="background-color: white">
				 <center><b>&copy &nbsp; All Rights Reserved 2018 </b></center>
			</div>
		</div>
	</div>
	</div>
</form>
<script type="text/javascript">
function press(){ 
	var n1=0,n2=0,n3=0,n4=0,n5=0,n6=0,n7=0;
	if(document.myForm.bakery.checked)
	{
		var a=document.myForm.bakeryvalue.value;
		n1=parseInt(a);
	}
	if(document.myForm.meat.checked)
	{
			var b=document.myForm.meatvalue.value;
			n2=parseInt(b);
	}
	if(document.myForm.pasta.checked)
	{
			var c=document.myForm.pastavalue.value;
			n3=parseInt(c);
	}
	if(document.myForm.dairy.checked)
	{
			var d=document.myForm.dairyvalue.value;
			n4=parseInt(d);
	}
	if(document.myForm.oils.checked)
	{
			var e=document.myForm.oilsvalue.value;
			n5=parseInt(e);
	}
	if(document.myForm.soups.checked)
	{
			var f=document.myForm.soupsvalue.value;
			n6=parseInt(f);
	}
	if(document.myForm.others.checked)
	{
			var g=document.myForm.othersvalue.value;
			n7=parseInt(g);
	}
		document.getElementById("total").value=n1+n2+n3+n4+n5+n6+n7;
	}
</script>
</body>
</html>