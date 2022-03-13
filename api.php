<?php
error_reporting(true);
header("Content-Type:application/json");
if (isset($_GET['ID']) && $_GET['ID']!="") {
	include('db.php');
	$ID = $_GET['ID'];
	$result = mysqli_query($con,"SELECT * FROM `api` WHERE ID=$ID");
	if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	$EmpFname = $row['EmpFname'];
	$EmpLName=$row['EmpLName'];
	$EmpCode = $row['EmpCode'];
	$EmpDept = $row['EmpDept'];
	$EmpDesignation = $row['EmpDesignation'];
	$EmpContactNo = $row['EmpContactNo'];
	$EmpGender = $row['EmpGender'];
	$EmpEmail = $row['EmpEmail'];
	$EmpJoingdate = $row['EmpJoingdate'];
	$response_code = $row['response_code'];
	$response_desc = $row['response_desc'];
	response($ID, $EmpFname, $EmpLName, $EmpCode, $EmpDept, $EmpDesignation, $EmpContactNo, $EmpGender, $EmpEmail, $EmpJoingdate, $response_code, $response_desc);
	mysqli_close($con);
	}else{
		response(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL , NULL, 200, "No Result To Display");
		} 
}else{
	response(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 404, "Bad Request");
	}

function response($ID, $EmpFname, $EmpLName, $EmpCode, $EmpDept, $EmpDesignation, $EmpContactNo, $EmpGender, $EmpEmail, $EmpJoingdate, $response_code, $response_desc){
	$response['ID'] = $ID;
	$response['EmpFname'] = $EmpFname;
	$response['EmpLName'] = $EmpLName;
	$response['EmpCode'] = $EmpCode;
	$response['EmpDept'] = $EmpDept;
	$response['EmpDesignation'] = $EmpDesignation;
	$response['EmpContactNo'] = $EmpContactNo;
	$response['EmpEmail'] = $EmpEmail;
	$response['EmpGender'] = $EmpGender;
	$response['EmpJoingdate'] = $EmpJoingdate;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>
