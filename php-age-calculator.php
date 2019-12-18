<!DOCTYPE html>
<html>
<head>
<title>PHP Age Calculator | Tutsmake.com</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 <div class="card">
	  <div class="card-header">
	    PHP Age Calculator
	  </div>
	  <div class="card-body">
		<form action="php-age-calculater.php" method="post" class="form-group">
		   <div class="row mb-3">
		       <div class="col-md-4">
				<select name="day" class="form-control"> 

				    <?php
					for($i=1;$i<=31;$i++)
					{
					echo "<option value='$i'>$i</option>";
					}

					?>
				 
			    </select>
			    </div>

			    <div class="col-md-4">
				<select name="month" class="form-control">
			       
					<?php
					for($i=1;$i<=12;$i++)
					{
					echo "<option value='$i'>$i</option>";
					}
					?>
			    </select>
			    </div>

			    <div class="col-md-4">
				<select name="year" class="form-control">
				 	
				 	<?php $year = date('Y'); ?>
					    <?php
						for($i=1900;$i<=$year;$i++)
						{
						echo "<option value='$i'>$i</option>";
						}
					?>
			    </select>
		        </div>
		   </div>  
	          
	       <div class="row">
	      	<div class="col-md-4">
	      	<input type="submit" name="submit" class="btn btn-primary " value="Click to calculate age">
	      	</div>
	      </div>
	          
		</form> 
	  </div>
	   <div class="card-footer">
	   <?php
		if(isset($_POST['submit'])) {

			$day=$_POST['day'];
			$month=$_POST['month'];
			$year=$_POST['year'];
		 
			$dob=$day.'-'.$month.'-'.$year;

			$bday=new DateTime($dob);
			
			$age=$bday->diff(new DateTime);
			 
			$today=date('d-m-Y'); 
			
			echo '<br />';
			echo '<b>Your Birth date: </b>';
			echo $dob;
			echo '<br>';
			echo '<b>Your Age : </b> ';
			echo $age->y;
			echo ' Years, ';
			echo $age->m;
			echo ' Months, ';
			echo $age->d;
			echo ' Days';
		}
	   ?>
	  </div>
</div>
</div>

</body>
</html>
