<?php
session_start();
$division = $_SESSION['division'];
 include 'header.html';


include 'connectPDO.php';

$sql = "select * from dtdb";
$result = $conn->prepare($sql);
$result->execute();

 $fileName =  "/path/backup.xls";
       if (file_exists($fileName)) {
           header('Content-Description: File Transfer');
           header('Content-Type: application/octet-stream');
           header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
           header('Expires: 0');
           header('Cache-Control: must-revalidate');
           header('Pragma: public');
           header('Content-Length: ' . filesize($fileName));
           readfile($fileName);
           exit;
       }




 ?>
 

 <div class="card">
	<div class="card-body">
   		<table class="table">
			<thead>
			<h5> <a href="#"> <?php echo 'sample'; ?> Screen Report </a></h5>
			</thead>
			<tbody>
			<tr>
			<th scope="col">Beginning #</th>
			<th scope="col">Added</th>
			<th scope="col">Cancelled</th>
			<th scope="col">Pending</th>
			<th scope="col">Demo</th>
			<th scope="col">Ending #</th>
			</tr>
			<tr>
			<td class="col-md-2">0 </td>
			<td class="col-md-2">0</td>
			<td class="col-md-2">0</td>
			<td class="col-md-2">0</td>
			<td class="col-md-2">0</td>
			<td class="col-md-2">0</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
<br>


<!-- ADDED SCREENS CARD -->

 	<div class="panel-group">
 		<div class="panel panel-default">
 			<div class="panel-heading"><p class="panel-title"></p>
			</div>
			<div class="card">
				<div class="card-body">
					<a data-toggle="collapse" href="#collapse1"> <?php echo 'sample'; ?> Added</a>
						<div id="collapse1" class="panel-collapse collapse">
							<ul class="list-group text-right">
							<li> TEST </li>
							</ul>
							</div>
</div>	
</div>
</div>
</div>
		<br>
							
							
	
<!-- CANCELLED SCREENS CARD -->
 	<div class="panel-group">
 		<div class="panel panel-default">
 			<div class="panel-heading"><p class="panel-title"></p>
			</div>
			<div class="card">
				<div class="card-body">
					<a data-toggle="collapse" href="#collapse2"> <?php echo 'sample'; ?> Cancelled</a>
						<div id="collapse2" class="panel-collapse collapse">
							<ul class="list-group text-right">
							<li> TEST </li>
							</ul>
							</div>
</div>	
</div>
</div>
</div>
		<br>


	
<!-- Pending SCREENS CARD -->
 	<div class="panel-group">
 		<div class="panel panel-default">
 			<div class="panel-heading"><p class="panel-title"></p>
			</div>
			<div class="card">
				<div class="card-body">
					<a data-toggle="collapse" href="#collapse3"> <?php echo 'sample'; ?> Pending</a>
						<div id="collapse3" class="panel-collapse collapse">
							<ul class="list-group text-right">
							<li> TEST </li>
							</ul>


							
						</div>
				</div>
			</div>
		</div>
	</div><br>
	
<!-- DEMO SCREENS CARD -->
 	<div class="panel-group">
 		<div class="panel panel-default">
 			<div class="panel-heading"><p class="panel-title"></p>
			</div>
			<div class="card">
				<div class="card-body">
					<a data-toggle="collapse" href="#collapse4"> <?php echo 'sample'; ?> Demo</a>
						<div id="collapse4" class="panel-collapse collapse">
							<ul class="list-group text-right">
							<li> TEST </li>
							</ul>


							
</div>
</div>	
</div>
</div>
</div>
		<br>
	

	
	
	
	
	


<!-- HOW TO FIND PREVIOUS MONTHS DATA -->

<div class="card">
 <div class="card-body">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Previous Months
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="screenReport.php?month=January">January</a>
    <a class="dropdown-item" href="screenReport.php?month=February">February</a>
    <a class="dropdown-item" href="screenReport.php?month=March">March</a>
    <a class="dropdown-item" href="screenReport.php?month=April">April</a>
    <a class="dropdown-item" href="screenReport.php?month=May">May</a>
    <a class="dropdown-item" href="screenReport.php?month=June">June</a>
    <a class="dropdown-item" href="screenReport.php?month=July">July</a>
    <a class="dropdown-item" href="screenReport.php?month=August">August</a>
    <a class="dropdown-item" href="screenReport.php?month=September">September</a>
    <a class="dropdown-item" href="screenReport.php?month=October">October</a>
    <a class="dropdown-item" href="screenReport.php?month=November">November</a>
    <a class="dropdown-item" href="screenReport.php?month=December">December</a>
    
</div>

 <a href="#" class="btn btn-secondary" role="button">All <?php echo 'sample'; ?> Screen Customers </a>
</div>
</div>

<br>

</div>
</div><br>

<?php include 'footer.html' ?>