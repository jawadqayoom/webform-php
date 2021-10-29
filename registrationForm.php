<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		
	</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: darkgray;">

	<div class="container"  style="background-image: url('bg.jpg'); background-repeat: no-repeat;  background-attachment: fixed;
  background-size: cover;">
		
		<div class="row">
			
			<div class="col-md-12">
			
			 <h1 style=" text-align: center; font: bold;">Student Registration Form</h1>
	
			 <p style=" text-align: center; ">Fill out the form carefully for registration </p>

	<form action="submit.php" method="Post">

       <h4>Student Name</h4>
       <div class="row g-3">
       	<div class="col-md-3">
       		<input type="text" class="form-control"  name="name" placeholder="First Name">
       	</div>
       		<div class="col-md-3">
       			  <input type="text" class="form-control"  name="name1" placeholder="Middle Name">
       		</div>
       			<div class="col-md-3">
       				   <input type="text" class="form-control"  name="name2" placeholder="Last Name">
       			</div>
       </div>
       
     
      
        <br><br>

<div class="row g-3">
	<div class="col-md-9">
		<h4>Birth Date</h4>

	</div>
	<div class="col-md-3">
		
		<h4>Gender</h4>
	</div>
</div>
	<div class="row g-3">

		<div class="col-md-3">
			<select class="form-select form-select-sm" name="month">
  	<option selected>Select Month</option>
  	<option value="jauaryn">January</option>
  	<option value="febuary">Febuary</option>
  	<option value="march">March</option>
  	<option value="april">April</option>
  	<option value="may">May</option>
  	<option value="june">June</option>
  	<option value="july">July</option>
  	<option value="august">August</option>
  	<option value="september">september</option>
  	<option value="october">October</option>
  	<option value="november">November</option>
  	<option value="december">December</option>
  	</select>
		</div>
		<div class="col-md-3">
			<select class="form-select form-select-sm" name="day">
  	<option selected>Select Day</option>
  	<?php
  	for ($i=1; $i <= 30 ; $i++) { 
  		?>
  		<option value="<?php  echo $i ?>"> <?php echo$i ?> </option>
  		<?php 
  	}
  	?>
</select>
			
		</div>
		<div class="col-md-3">
			 <select  class="form-select form-select-sm" name="year">
  	<option selected>Select Year</option>
<?php
  	for ($i=1960; $i <= 2021 ; $i++) { 
  		?>
  		<option value="<?php  echo $i ?>"> <?php echo$i ?> </option>
  		<?php 
  	}
  	?>
</select>
		</div>
		<div class="col-md-3">
			<select class="form-select form-select-sm" name="Gender">
  	<option selected>Select Gender</option>
  	<option value="Male">Male</option>
  	<option value="Female">Female</option>
  	<option value="Other">Other</option>
  	</select>
		</div>
		
	</div>
     
  <br><br>

  <h4>Address</h4>
   <input class="form-control" type="text" placeholder="Address" aria-label="default input example" name="Address">
   <br>
   <h6>Street Adress</h6>
   <input class="form-control" type="text" placeholder="Street Address" aria-label="default input example" name="Street">
<br><br>

<div class="row">
	<div class="col-md-6">
		 
		<input class="form-control" type="text" name="city" >
		<h6>City</h6>
	</div>

	<div class="col-md-6">
		 
		<input class="form-control"  type="text" name="state" >
		<h6>State/Province</h6>
	</div>
</div>
   
<br><br>

<div class="row">
	<div class="col-md-12" style="text-align: center;">

 <button type="submit" name="btn1" class="btn btn-outline-secondary" >Submit</button>

	</div>
</div>
		

			</form>	


			</div>
		
		</div>

	</div>
	



</body>
</html>