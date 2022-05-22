<?php
session_start();
$division = $_SESSION['division'];
 include 'header.html';

 ?>
 
 


<div class="container d flex justify-content-center">

	

<div class="card text-white  text-center bg-dark mb-3">
	<div class="card-body">
<h4 class="card-title"> Enter a customer's name here </h4>
  	</div>
 </div><br>     
      
      <!-- Actions Card -->
<div class="card text-center bg-dark  text-white">
    <div class="card-body text-center bg-dark  text-white">

      
<form method="POST" action="#">
  <input type="text" style="width: 50%" placeholder="Customer name">
<br><br>
<button type="submit" class="btn " style="background-color:white;">Submit</button>
<br>
</form>

	</div>
</div>
<br>
<div class="card text-white  text-center bg-dark mb-3">
	<div class="card-body">
<h4 class="card-title"> <a href="#"> Or to see a list of all customer's click here </a> </h4>
  	</div>
 </div><br>  

<?php include 'footer.html' ?>