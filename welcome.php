<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; text-align: center; 
            ul { 
                list-style-type: none;
                 margin: 0;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
               }
            li a {
                display: none;
                color: #000;
                padding: 8px 0 8px 16px;
                text-decoration: none;
             }
            li a :hover {
              background-color: #555;
              color: white;
            }}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.Nice to see you</h1>

        <ul>
          <li><a href = "#">About</a></li>
          <li><a href = "#">Contact</a></li>
          <li><a href = "#">News</a></li>
        </ul>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>