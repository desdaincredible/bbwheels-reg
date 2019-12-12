<?php
$host = "localhost";
$dbusername = "upve7vft38658";
$dbpassword = "4sz~#12e)4s@";
$dbname = "dbtqu5hjv9rcgj";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM CustReg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    foreach ($result as $value) {
        $lastID = reset($value);
    }

    $sql = "SELECT * from CustReg WHERE PlanID = $lastID";
    if ($result = $conn->query($sql)) {
        while ($row = mysqli_fetch_row($result)) {

            foreach ($result as $row) {
                $PlanID = $row['PlanID'];
                $EnrollDate = $row['EnrollDate'];
                $OrigInvNum = $row['OrigInvoiceNum'];
                $CustName = $row['CustName'];
                $CustEmail = $row['CustEmail'];
                $CustPhone = $row['CustPhone'];
                $VehicleYear = $row['VehicleYear'];
                $VehicleMake = $row['VehicleMake'];
                $VehicleModel = $row['VehicleModel'];
                $VehicleMiles = $row['VehicleMiles'];
                $TireQty = $row['TireQuantity'];
                $TireMake1 = $row['TireMake1'];
                $TireModel1 = $row['TireModel1'];
                $TireSize1 = $row['TireSize1'];
                $TirePrice1 = $row['TirePrice1'];
                $TireMake2 = $row['TireMake2'];
                $TireModel2 = $row['TireModel2'];
                $TireSize2 = $row['TireSize2'];
                $TirePrice2 = $row['TirePrice2'];
                $TireMake3 = $row['TireMake3'];
                $TireModel3 = $row['TireModel3'];
                $TireSize3 = $row['TireSize3'];
                $TirePrice3 = $row['TirePrice3'];
                $TireMake4 = $row['TireMake4'];
                $TireModel4 = $row['TireModel4'];
                $TireSize4 = $row['TireSize4'];
                $TirePrice4 = $row['TirePrice4'];
            }

            $conn->close();
        }
        mysqli_free_result($result);
    }
}

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBWHEELS NATIONWIDE LIMITED ROAD HAZARD PLAN REGISTRATION</title>

    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89e2146bf.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
    <div class="container">


        <div class="nonprintable col-sm-12">
            <div class="alert alert-danger text-centered">
                <strong>Please print or save this coverage statement for your records.</strong> <p>Please call 888-450-2808 if you have any questions.</p>
            </div>
            <button id="printPlan" name="print" type="button" class="coverage_copy btn btn-danger" value="Print">PRINT / SAVE</button>
        </div>


        <div class="col-sm-12">
            <h1>BB WHEELS NATIONWIDE LIMITED ROAD HAZARD PLAN</h1>
            <h2>Coverage Statement</h2>
            <hr class="statement">
        </div>

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p class="header">Plan ID#:</p>
                <p>IB<?php echo $PlanID ?></p>
            </div>

            <div class="col-sm-4">
                <p class="header">Enrollment Date:</p>
                <p><?php echo $EnrollDate ?></p>
            </div>

            <div class="col-sm-4">
                <p class="header">Order ID#:</p>
                <p><?php echo $OrigInvNum ?></p>
            </div>
        </div>

        <hr class="statement">

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p class="header">Customer Name:</p>
                <p><?php echo $CustName ?></p>
            </div>
            <div class="col-sm-4">
                <p class="header">Customer Email:</p>
                <p><?php echo $CustEmail ?></p>
            </div>
            <div class="col-sm-4">
                <p class="header">Customer Phone:</p>
                <p><?php echo $CustPhone ?></p>
            </div>
        </div>

        <hr class="statement">

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p class="header">Vehicle:</p>
                <p><?php echo $VehicleYear ?> <?php echo $VehicleMake ?> <?php echo $VehicleModel ?></p>
            </div>
            <div class="col-sm-4">
                <p class="header">Mileage:</p>
                <p><?php echo $VehicleMiles ?></p>
            </div>
        </div>

        <hr class="statement">

        <div class="col-sm-12">
            <p><span class="header">Tires Covered: </span>(<?php echo $TireQty ?> Total)</p>
        </div>

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p class="header">Make/Model:</p>
                <p><?php echo $TireMake1 ?> <?php echo $TireModel1 ?></p>
            </div>
            <div class="col-sm-4">
                <p class="header">Size:</p>
                <p><?php echo $TireSize1 ?></p>
            </div>
            <div class="col-sm-4">
                <p class="header">Price:</p>
                <p><?php echo $TirePrice1 ?></p>
            </div>
        </div>

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p><?php echo $TireMake2 ?> <?php echo $TireModel2 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TireSize2 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TirePrice2 ?></p>
            </div>
        </div>

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p><?php echo $TireMake3 ?> <?php echo $TireModel3 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TireSize3 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TirePrice3 ?></p>
            </div>
        </div>

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p><?php echo $TireMake4 ?> <?php echo $TireModel4 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TireSize4 ?></p>
            </div>
            <div class="col-sm-4">
                <p><?php echo $TirePrice4 ?></p>
            </div>
        </div>

        <hr class="statement">

        <div class="row col-sm-12">
            <div class="col-sm-4">
                <p class="header">Issuing Dealer:</p>
                <p>BB Wheels</p>
            </div>
            <div class="col-sm-4">
                <p>PO Box 129</p>
                <p>Albany, MN 56307</p>
            </div>

            <div class="col-sm-4">
                <p>320-333-2155</p>
                <a href="https://www.bbwheelsonline.com/"><p>bbwheelsonline.com</p></a>
            </div>
        </div>

        <hr class="statement">
        <div class="col-sm-12 centered">
            <p>This Road Hazard Plan (“Plan”) is offered by BBWheels, LLC, and administered by Automotive Business Solutions (“Program Administrator”) P.O. Box 33535, Denver, CO 80233. This Plan covers only the new tires you purchased, the original purchaser and the original vehicle identified on the registration. This Plan only applies to passenger and light truck tires, which, during its tread life or within the covered period of time, becomes unserviceable because of a road hazard. A road hazard occurs when a tire fails due to a puncture, bruise or break incurred during the course of normal driving on a maintained road. Nails, glass, and potholes would be the most common examples of road hazard damage.</p>
        </div>

        <div class="col-sm-12 centered">
            <p><strong>THIS REGISTRATION IS ONLY VALID IF YOU COMPLETED REGISTRATION WITHIN 15 DAYS OF PURCHASE.</strong></p>
        </div>
        <div class="col-sm-12 centered">
            <h2>WHAT YOU MUST DO TO OBTAIN SERVICE</h2>
            <p><strong>You must contact the Program Administrator by calling 866-830-4189 for tire replacement, tire replacement or flat tire changing assistance.  <u>Prior authorization must be obtained to replace a tire damaged by a road hazard.</u>  YOU MUST PRESENT THE ORIGINAL INVOICE SHOWING THE PURCHASE OF THE TIRE(S).  The damaged tire must be made available for inspection by the facility and/or the Program Administrator.</strong>  All claims and any required documentation must be submitted to the Program Administrator within 60 days of the date of failure and/or service.  This Plan does not have a deductible.</p>
        </div>

        <div class="col-sm-12 centered">
            <h2>WHAT IS COVERED BY THE PLAN</h2>
            <p>The Plan is valid for the (“Coverage Period”)  of twelve (12) months from the date of registration or for the first 3/32 of an inch of tread wear, whichever occurs first.</p>

            <p><strong><u>Tire Replacement:</u></strong> If an eligible tire becomes unserviceable because of a road hazard during the Coverage Period, it will be replaced with a new tire. If available, an exact make/model replacement tire will be installed. If not available, a comparable quality tire will be installed.  If the tire failure occurs within the Coverage Period, and cannot be safely repaired per manufacturer’s guidelines, the tire will be replaced with the same, or substantially similar, tire as originally equipped up to one hundred percent (100%) of  the original retail price paid for the tire, as stated on the original retail sales invoice.  You will be responsible for any taxes, mounting, balancing, and any other miscellaneous fees.    If you want a Plan on the replacement tire, you must purchase a new Plan for the new tire.</p>

            <p><strong><u>Tire Repair:</u></strong> If your tire is damaged due to a road hazard and can be safely repaired, the tire will be repaired per manufacturer’s guidelines at any participating facility. The Plan will cover up to $25.00 to have the tire repaired. The Plan will remain in effect.</p>

            <p><strong><u>Flat Tire Changing Assistance:</u></strong> During the term of the Coverage Period, you may receive flat tire changing assistance by calling the service provider of your choice. If you need assistance locating a service provider in your area, you may call 866-830-4189. You will be reimbursed up to $75.00 for eligible expenses incurred for flat tire changing assistance. Flat tire changing assistance is strictly limited to the installation of your useable spare tire. If you require a tow or any other service, you are solely responsible for those charges. This benefit applies only to motorized passenger vehicles and specifically <strong>excludes trailers, or those vehicles listed under the Exclusions and Limitations section below.</strong> To receive reimbursement the following documentation must be submitted to the program administrator within sixty (60) days of service:</p>

            <ol>
                <li><p>A copy of the original sales invoice.</p></li>
                <li><p>A copy of the paid invoice for the spare tire installation from a valid auto service provider. The paid invoice must detail the name, address and phone number of the service provider.</p></li>

            </ol>

            <p>Submit the above documentation to <a href="mailto:"roadsideassistance@abswarranty.net">roadsideassistance@abswarranty.net</a> or to Roadside Assistance, P.O. Box 33535 Denver, CO 80233.</p>
        </div>

        <div class="col-sm-12">
            <h2>EXCLUSIONS AND LIMITATIONS</h2>

            <p><strong>The following vehicles are not eligible for Plan coverage:  Vehicles with a manufacturer’s load rating capacity of greater than 1 ton. Vehicles used for farm or agricultural purpose. Commercial vehicles. Coverage excludes damage from off-road use, collision, fire, vandalism, theft, snow chains, manufacturer’s defects, abuse and neglect (i.e., improper application, improper inflation, overloading, brake lock up, wheel spinning, torque snags, etc.), cosmetic damage, sidewall abrasions or other appearance items that do not affect the safety or performance of the tire. Tires with torn beads. Also excluded are damages or irregular wear caused by misalignment, mechanical failures or interference with vehicle components, tires that have been repaired in a manner other than per manufacturer’s guidelines.  This Plan covers only the vehicle registered to the customer and listed during the initial registration. CONSEQUENTIAL AND INCIDENTAL DAMAGES ARE EXCLUDED. </strong></p>
        </div>

        <div class="col-sm-12">
            <p><strong>LEGAL RIGHTS NOTICE:</strong> THIS LIMITED WARRANTY SETS OUT THE FULL EXTENT OF OUR RESPONSIBILITIES, AND THE EXCLUSIVE REMEDY REGARDING NEW TIRES PURCHASED. ALL IMPLIED WARRANTIES, INCLUDING WITHOUT LIMITATION, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ARE LIMITED TO THE DURATION OF THIS LIMITED WARRANTY.  BBWHEELS, LLC SHALL NOT BE LIABLE FOR SPECIAL, INDIRECT, INCIDENTAL, PUNITIVE OR CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF BUSINESS PROFITS, BUSINESS INTERRUPTION, EXPENSES ARISING OUT OF THIRD PARTY CLAIMS, LOSS OF USE OF THE VEHICLE, INCONVENIENCE, OR ANY OTHER LOSS), WHETHER OR NOT CAUSED BY OR RESULTING FROM BREACH OF CONTRACT, NEGLIGENCE, OR OTHER WRONGFUL ACT OR OMISSION, EVEN IF IT HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.  BBWHEELS, LLC DOES NOT AUTHORIZE ANY PERSON, ENTITY OR FACILITY TO CREATE FOR IT ANY OTHER WARRANTY OBLIGATION OR LIABILITY IN CONNECTION WITH THIS PRODUCT. </p>  

            <p>Some states do not allow limitations on how long an implied warranty lasts, so the above limitations may not apply to you.  In addition, some states do not allow the exclusion or limitation of incidental or consequential damages, so the above limitations or exclusions may not apply to you.  This limited warranty gives you specific legal rights, and you may also have other rights that vary from state to state.</p>          
        </div>

        <div class="col-sm-12">
            <h2>TRANSFERABILITY</h2>
            <p>This Plan is non-transferable.</p>
        </div>

        <hr class="statement">

        <div class="col-sm-12 address">
            <p>Road Hazard Plan</p>
            <p>PO Box 33535</p>
            <p>Denver, CO 80233</p>
            <p>800-351-8545</p>
        </div>

    </div>

    <script src="coverage_statement.js"></script>

</body>

</html>