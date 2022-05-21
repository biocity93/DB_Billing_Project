<?php
session_start();
$division = $_SESSION['division'];
 include 'header.html';

 ?>
 
 


<div class="container d flex justify-content-center">

	
	<div class="card text-white bg-dark mb-3">
		<div class="card-body">
   			<h4 class="card-title"> <?php echo 'sample'; ?> Live Dashboard</h4>
 		</div>
 	</div>

 
 
<div class="card">
	<div class="card-body">
  		<table class="table">
  		<thead>
   		<tr>
      		<th scope="col">Current Screens</th>
      		<th scope="col">Current Advertisting Contracts</th>
      		<th scope="col">Current Revenue</th>
   		</tr>
  		</thead>
  		<tbody>
    		<tr>
      		<td>0</td>
      		<td>0</td>
      		<td>0</td>
    		</tr>
  		</tbody>
		</table>
	</div>
</div>

<br>
<div class="card text-white  text-center bg-dark mb-3">
	<div class="card-body">
<h4 class="card-title"> What do you want to do? </h4>
  	</div>
 </div><br>     
      
      <!-- Actions Card -->
<div class="card text-center bg-dark  text-white">
    <div class="card-body text-center bg-dark  text-white">

      
      
<a href="reportsNav.php" class="btn  btn-lg" role="button" style="background-color: white;">See Report Detail</a>&emsp;

<a href="search.php" class="btn  btn-lg" role="button"style="background-color: white;">Search for a Customer</a>&emsp; 

<a href="salesNav.php" class="btn btn-lg" role="button"style="background-color: white;"> Manage Sales</a>



	</div>
</div>

<?php include 'footer.html' ?>