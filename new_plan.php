<?php
require_once('lib/db/config.php');
require_once 'lib/PHPMailer.php';
require_once 'lib/Exception.php';

$custName = filter_input(INPUT_POST, 'CustName');
$custEmail = filter_input(INPUT_POST, 'CustEmail');
$custPhone = filter_input(INPUT_POST, 'CustPhone');
$origInvNum = filter_input(INPUT_POST, 'OrigInvoiceNum');
$vehicleYear = filter_input(INPUT_POST, 'VehicleYear');
$vehicleMake = filter_input(INPUT_POST, 'VehicleMake');
$vehicleModel = filter_input(INPUT_POST, 'VehicleModel');
$vehicleMiles = filter_input(INPUT_POST, 'VehicleMiles');
$tireQty = filter_input(INPUT_POST, 'TireQuantity');
$tireMake1 = filter_input(INPUT_POST, 'TireMake1');
$tireModel1 = filter_input(INPUT_POST, 'TireModel1');
$tireSize1 = filter_input(INPUT_POST, 'TireSize1');
$tirePrice1 = filter_input(INPUT_POST, 'TirePrice1');

$tireMake2 = filter_input(INPUT_POST, 'TireMake2');
$tireModel2 = filter_input(INPUT_POST, 'TireModel2');
$tireSize2 = filter_input(INPUT_POST, 'TireSize2');
$tirePrice2 = filter_input(INPUT_POST, 'TirePrice2');

$tireMake3 = filter_input(INPUT_POST, 'TireMake3');
$tireModel3 = filter_input(INPUT_POST, 'TireModel3');
$tireSize3 = filter_input(INPUT_POST, 'TireSize3');
$tirePrice3 = filter_input(INPUT_POST, 'TirePrice3');

$tireMake4 = filter_input(INPUT_POST, 'TireMake4');
$tireModel4 = filter_input(INPUT_POST, 'TireModel4');
$tireSize4 = filter_input(INPUT_POST, 'TireSize4');
$tirePrice4 = filter_input(INPUT_POST, 'TirePrice4');
$enrollDate = date("Y-m-d");

// for each function for all inputs?

if (!empty($custName)){
    // class Database {
    // private $host = DB_HOST;
    // private $dbusername = DB_USER;
    // private $dbpassword = DB_PASS;
    // private $dbname = DB_NAME;
    // }


    $host = "localhost";
    $dbusername = "upve7vft38658";
    $dbpassword = "4sz~#12e)4s@";
    $dbname = "dbtqu5hjv9rcgj";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'
        .mysqli_connect_error());
    } else {
        $sql = "INSERT INTO CustReg (EnrollDate, CustName, CustEmail, CustPhone, OrigInvoiceNum, VehicleYear, VehicleMake, VehicleModel, VehicleMiles, TireQuantity, TireMake1, TireModel1, TireSize1, TirePrice1, TireMake2, TireModel2, TireSize2, TirePrice2, TireMake3, TireModel3, TireSize3, TirePrice3, TireMake4, TireModel4, TireSize4, TirePrice4) values ('$enrollDate','$custName', '$custEmail', '$custPhone', '$origInvNum', '$vehicleYear', '$vehicleMake', '$vehicleModel', '$vehicleMiles', '$tireQty', '$tireMake1', '$tireModel1', '$tireSize1', '$tirePrice1', '$tireMake2', '$tireModel2', '$tireSize2', '$tirePrice2', '$tireMake3', '$tireModel3', '$tireSize3', '$tirePrice3', '$tireMake4', '$tireModel4', '$tireSize4', '$tirePrice4')";

        if ($conn->query($sql)){
            header("Location: coverage_statement.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

} else {
    echo "Please fill in all fields.";
    die();
}

// public function single()
// {
//     $this->execute();
//     return $this->stmt->fetch(PDO::FETCH_ASSOC);
// }

// $id = lastInsertId();

// if ($id){
//     $regDetail = $sql = "SELECT * FROM CustReg WHERE PlanID=$id";

//     $content = single();
//     return $content;

//     foreach ($regDetail as $k => $v) {
        
//         $emailContent[$k] = $v;

//     }

//     foreach ($emailContent as $key => $value) {

//         $emailPageBody = str_replace('{' . strtoupper($key) . '}', $value, $emailPageBody);

//     }

//     $email = new PHPMailer(TRUE);
//     $email->setFrom('donotreply@federatedlabor.com', 'Federated Labor Assurance Program');
//     $email->addAddress('federated@abswarranty.net', 'New Claim Submitted - Federated Labor Assurance Program');
//     $email->addCC('dhillis@abswarranty.net', 'Destiny Hillis');
//     $email->addCC('dmcneese@abswarranty.net', 'Daniel McNeese');
//     $email->addCC('gpetty@abswarranty.net', 'Gennica Petty');
//     $email->addCC('jnsmi@fisherautoparts.com', 'Jamie Smith');


    


//     $email->Subject = 'New Claim Submitted - Federated Labor Assurance Program';
//     $email->isHTML(TRUE);


//     $email->Body = $emailPageBody;

//     $email->AltBody = $emailPageBody;

//     $email->send();

// }


?>