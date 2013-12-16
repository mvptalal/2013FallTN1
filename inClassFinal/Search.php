<?php
// if there is nothing in search box, show error like this using bootstrap alert error.


echo"<div class='alert alert-info'>";
echo"<button type='button' class='close' data-dismiss='alert'>×</button>";
echo"<p>You search for <strong>$_POST[searchg]</strong></p>";
echo"</div>";
// Start of table
echo"<table class='table table-bordered table-hover'>";
              echo"<thead>";
                echo"<tr>";
                  echo"<th>Sr#</th>";
                  echo"<th>Category</th>";
                 echo" <th>Sub Category</th>";
                echo"</tr>";
              echo"</thead>";
              echo"<tbody>";
// Define variable and store search query in it.
	$searchg = $_POST['searchg'];
// Prepare query for showing requested results.
    $STM = $dbh->prepare("SELECT `city`, `state`, `county` FROM US_Zip_Codesa WHERE city LIKE :searchg");
// bind paramenters, Named paramenters alaways start with colon(:)                      
    $STM->bindParam(':searchg', $searchg);
// For Executing prepared statement we will use below function
    $STM->execute();
// // fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
		 echo"<tr>";
         echo"<td>".$row[0]."</td>";
		 echo"<td>".$row[1]."</td>";
		 echo"<td>".$row[2]."</td>";
         echo"</tr>";
        }		
              echo "</tbody>";
            echo "</table>";
?>