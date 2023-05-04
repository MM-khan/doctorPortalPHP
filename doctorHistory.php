<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../doctorPortal/links.php'?>
    <title>History</title>
</head>
<body>
    <div class="container text-success">
        <div class="row">
            <div class="col">
                <h2>Doctors List</h2>
                <table class='table'>
                    <thead class='bg-success text-light'>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Specialist</td>
                            <td>DrDays</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "../doctorPortal/dataBase.php";
                            $drData="select * from docregister";
                            $dataQuery = mysqli_query($drCon,$drData);
                            while($data =mysqli_fetch_array($dataQuery)){
                        ?>
                        <tr>
                            <td><?php echo $data["DrID"] ?></td>
                            <td><?php echo $data["DrName"] ?></td>
                            <td><?php echo $data["DrAddress"] ?></td>
                            <td><?php echo $data["Sepciality"] ?></td>
                            <td><?php echo $data["DrDays"] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Patients List</h2>
                <table class='table'>
                    <thead class='bg-success text-light'>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Cause</td>
                            <td>Cause Time</td>
                            <td>Appointment Day</td>
                            <td>Visit</td>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "../patientPortal/patientDatabase.php";
                            $patientData="select * from patientregis";
                            $patientQuery = mysqli_query($patientCon,$patientData);
                            while($patient =mysqli_fetch_array($patientQuery)){
                        ?>
                        <tr>
                            <td><?php echo $patient["Id"] ?></td>
                            <td><?php echo $patient["patientName"] ?></td>
                            <td><?php echo $patient["patientCause"] ?></td>
                            <td><?php echo $patient["CauseTime"] ?></td>
                            <td><?php echo $patient["Appointment"] ?></td>
                            <td><?php echo $patient["patientVisit"] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>