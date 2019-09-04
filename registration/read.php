

<?php
session_start();
$userdata = $_SESSION['userdata'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $userdata['name']?></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $userdata["email"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <p class="form-control-static"><?php echo $userdata["password"]; ?></p>
                    </div>
                     <div class="form-group">
                        <label>Mobile</label>
                        <p class="form-control-static"><?php echo $userdata["mobile"]; ?></p>
                    </div>
                     <div class="form-group">
                        <label>Gender</label>
                        <p class="form-control-static"><?php echo $userdata["password"]; ?></p>
                    </div>
                    <p><a href="home.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
 