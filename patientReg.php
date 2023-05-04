<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <?php include '../doctorPortal/links.php' ?>
    <?php include 'patientDatabase.php' ?>
    <title>Patient Portal</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="" method='POST'>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Patient Name</span>
                        <input type="text" name='name' required class="form-control" placeholder="enter your Name *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Cause</span>
                        <input type="text" name='cause' required class="form-control" placeholder="enter your Cause *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Cause Time</span>
                        <input type="text" name='cTime' required class="form-control" placeholder="enter your CauseTime *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Appointment Time</span>
                        <input type="text" name='appoint' required class="form-control" placeholder="enter your Appointment Time *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Visit</span>
                        <input type="text" name='visit' required class="form-control" placeholder="enter your Visit length *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <input type="submit" name="submit" class='btn btn-success rounded' value='Register'>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include "../doctorPortal/database.php";
    if(isset($_POST['submit'])){
        $pName=$_POST["name"];
        $pCause=$_POST["cause"];
        $pCauseT=$_POST["cTime"];
        $pAppiont=$_POST["appoint"];
        $pVisit=$_POST["visit"];

        $appointment  ="select * from docregister where DrDays='$pAppiont'";
        $dayQuery=mysqli_query($drCon,$appointment);
        $checkDay=mysqli_num_rows($dayQuery);

        if($checkDay){
            $patientData = "insert into patientregis (patientName,patientCause,
            CauseTime,Appointment,patientVisit) value('$pName','$pCause','$pCauseT','$pAppiont'
            ,'$pVisit')";
    
            $patientQuery = mysqli_query($patientCon,$patientData);
            ?>
        <script>
            alert("Your Appointment Successful");
            location.replace("../doctorPortal/viewPatients.php")
        </script>
        <?php
        }else{
            ?>
        <script>
            alert("Change Appointment Day");
        </script>
        <?php
        }
    }

?>