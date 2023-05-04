<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './links.php' ?>
    <?php include './dataBase.php' ?>
    <title>Patients Detail</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h2>Patient Detail</h2>
                <table class='table'>
                    <thead class='bg-success text-light'>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Cause</td>
                            <td>Cause Time</td>
                            <td>Appointment Time</td>
                            <td>Visit</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            include "../patientPortal/patientDatabase.php";
                            $patientData="select * from patientregis";
                            $dataQuery = mysqli_query($patientCon,$patientData);
                            while($data =mysqli_fetch_array($dataQuery)){
                        ?>
                        <tr>
                            <td><?php echo $data["Id"] ?></td>
                            <td><?php echo $data["patientName"] ?></td>
                            <td><?php echo $data["patientCause"] ?></td>
                            <td><?php echo $data["CauseTime"] ?></td>
                            <td><?php echo $data["Appointment"] ?></td>
                            <td><?php echo $data["patientVisit"] ?></td>
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