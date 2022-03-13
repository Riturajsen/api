<?php
if (isset($_POST['ID']) && $_POST['ID']!="") {
	$ID = $_POST['ID'];
	$url = "http://localhost/Sameep/employee/api/api.php?ID=".$ID;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	$result = json_decode($response);
    if($result->ID != ""){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo "Details of ".$result->EmpFname." ".$result->EmpLName;?></title>
  </head>
  <body class="bg-dark">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-white bg-primary">
               <h2> <?php echo "Here are the details of ".$result->EmpFname." ".$result->EmpLName  ?></h2>
            </div>
            <div class="card-body">
                <div class="card-text">
                 <label class="font-weight-bold"> Name :  </label>
                 <?php echo $result->EmpFname." ".$result->EmpLName; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Code :  </label>
                 <?php echo $result->EmpCode; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Departement :  </label>
                 <?php echo $result->EmpDept; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Desigantion :  </label>
                 <?php echo $result->EmpDesignation; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Contact Number :  </label>
                 <?php echo $result->EmpContactNo; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Gender :  </label>
                 <?php echo $result->EmpGender; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Email :  </label>
                 <?php echo $result->EmpEmail; ?>
                </div>
                <div class="card-text">
                 <label class="font-weight-bold"> Employee Joing Date :  </label>
                 <?php echo $result->EmpJoingdate; ?>
                </div>
                <a href="./" class="btn btn-danger mt-5">Go Back</a>

            </div>
            <div class="card-footer bg-primary text-center text-white">
               2022 © Rituraj Singh
             </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php } 
 else{ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nothing Found</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-danger text-white"> Nothing to Show</div>
            <div class="card-body">
                Nothing found in the database. with the given parameters.
                <a href="./" class="btn btn-danger">Go Back</a>
            </div>
        </div>
        </div>
    </body>
    </html>
    <?php
} 
}
?>