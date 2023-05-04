<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor Portal</title>
    <?php include './links.php' ?>
    <?php include './dataBase.php' ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <h2>Doctor Registration</h2>
               <form action="" method='POST'>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Doctor ID</span>
                        <input type="number" name='id' required class="form-control" placeholder="enter your ID *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Doctor Name</span>
                        <input type="text" name='name' required class="form-control" placeholder="enter your Name *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Address</span>
                        <input type="text" name='address' required class="form-control" placeholder="enter your Address *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Speciality In</span>
                        <input type="text" name='sepc' required class="form-control" placeholder="enter your Speciality *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Checkup Day</span>
                        <input type="text" name='day' required class="form-control" placeholder="enter your Day *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <input type="submit" name="submit" class='btn btn-success rounded' value='Register'>
               </form> 
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $id = mysqli_real_escape_string($drCon,$_POST['id']);
    $drname = mysqli_real_escape_string($drCon,$_POST['name']);
    $address = mysqli_real_escape_string($drCon,$_POST['address']);
    $sep = mysqli_real_escape_string($drCon,$_POST['sepc']);
    $day = mysqli_real_escape_string($drCon,$_POST['day']);

    $docRegis  ="insert into docregister (DrID,DrName,DrAddress,Sepciality,DrDays)
    value ('$id','$drname','$address','$sep','$day')";

    $DrQuery = mysqli_query($drCon,$docRegis);
    if($DrQuery){
        ?>
        <script>
            alert("Doctor Registration Successful");
            </script>
        <?php
        header('location:drLogin.php');
    }else{
        ?>
        <script>
            alert("Registraion Failed");
        </script>
        <?php
    }
}

?>