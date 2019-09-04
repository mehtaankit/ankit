
<!DOCTYPE html>
<html>
<title>Document</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>




<body>
<h3>User Data </h3>
<hr>


<form name ="submit" id= "submit" action="create_acc_control.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

      <label for="fname"><b>FullName</b></label>
    <input id="fname" class= "form-control" type="text" placeholder="Enter Fname" name="fname" required>

      <label for="email"><b>Email</b></label>
    <input id="email" class= "form-control" type="text" placeholder="Enter Email" name="email" required>

    <label for="username"><b>UserNmae</b></label>
    <input id="username" class="form-control"  type="text" placeholder="Enter username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input id= "password" class= "form-control" type="password" placeholder="Enter Password" name="password" required>

    <hr>
    

    <input name= "submit" id="submit" type="submit" value="Register">
  </div>
  
  
</form>

</body>
</html>