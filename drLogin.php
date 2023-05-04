<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './links.php' ?>
    <?php include './dataBase.php' ?>
    <title>Doctor Portal</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h2>Doctor LogIn</h2>
                <form action="" method='POST'>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Doctor ID</span>
                        <input type="number" name='id' required class="form-control" placeholder="enter your ID *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Doctor Code</span>
                        <input type="password" name='code' required class="form-control" placeholder="enter your Code *" aria-label="Username" aria-describedby="addon-wrapping">
                    </div><br>
                    <input type="submit" name='submit' class='btn btn-success rounded' value='LogIn'>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $drId = $_POST['id'];
        $drCode =$_POST['code'];

        $drLogin  ="select * from docregister where DrID ='$drId'";
        $logQuery  =mysqli_query($drCon,$drLogin);
        $checkId = mysqli_num_rows($logQuery);

        if($checkId){
            ?>
            <script>
                alert("Doctor LogIn Successful");
                location.replace("viewPatients.php");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("LogIn Failed");
            </script>
            <?php
        }
    }
?>