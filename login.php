<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(125deg, rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url(bk.jpg);
            background-position: center;

        }

        .loginbox {
            max-width: 700px;
            float: none;
            margin: 150px auto;

        }

        .loginbox1 {
            background: rgba(211, 211, 211, 0.5);
            padding: 30px;

        }

        .container {
            padding: 16px;
        }

        .reg {
            background: rgba(211, 211, 211, 0.5);
            padding: 8px;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: white;
        }


        /* Set a style for all buttons */
        button {
            background-color: darkcyan;
            color: rgb(10, 12, 14);
            padding: 10px 100px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
            text-align: center;

        }

        button:hover {
            opacity: 0.8;
            color: rgb(241, 243, 245);
        }

        .modal-content {

            margin: 5px auto;
            /* 15% from the top and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }


        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.8s;
            animation: animatezoom 0.8s
        }


        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(12, 3, 3, 0.815);
            /* Black w/ opacity */
            padding-top: 60px;
        }



        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
    </style>
</head>

<body>
    <form class="modal-content animate" method="POST">
        <div class="container">
            <div class="loginbox">
                <div class="loginbox1">
                    <h2>Login</h2><br>
                    <form action="validation.php" method="POST">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                       
                        <button type="submit" name="login">Login</button>
                    </form>
                </div>
            </div>

            <span class="reg">Not a member? <a href="register.php">Register</a></span>
        </div>
        </div>
    </form>
</body>


</html>



<?php

$con=mysqli_connect('localhost','root','','food');
if($con==false)
{
    echo "error";
}

if(isset($_POST['login']))
{
    $name=$_POST['uname'];
    $pass=$_POST['psw'];
   
    $qry="SELECT * FROM `register` WHERE `user`='$name' AND `password`='$pass'";
	$run=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($run);
  
    if($row<1)
	{
		?>
		<script>
		alert("Username and password doesn't match");
		window.php('login.php','_self');
		</script>
		<?php
	}
	else
	{
	
		header('location:admin.php');
		
	}



}
?>

