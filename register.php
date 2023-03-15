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

        .registerbox {
            max-width: 700px;
            float: none;
            margin: 0px auto;

        }

        .registerbox1 {
            background: rgba(211, 211, 211, 0.5);
            padding: 30px;

        }



        .container {
            padding: 16px;
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
        }


        /* Set a style for all buttons */

        .button {
            background-color: rgb(228, 110, 94);
            color: rgb(10, 12, 14);
            padding: 10px 100px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
            text-align: center;

        }

        .button:hover {
            opacity: 0.8;
            color: rgb(245, 243, 245);
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
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
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
            background-color: rgba(0, 0, 0, 0.4);
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
    <form action="register.php"method="POST">
        <div  class="modal-content animate" >
        <div class="container">
            <div class="registerbox">
                <div class="registerbox1">
                    <h1>Register</h1>
                    <!--<form action="registration.php" method="POST">-->
                    <p>Please fill the details to Register...</p>

                    <label for="fname"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="fname" >

                    <label for="mno"><b>Mobile Number</b></label>
                    <input type="text" name="mno" maxlength="10" placeholder="Enter mobile number"><br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" >


                    <label for="psw"><b>User name</b></label>
                    <input type="text" placeholder="Enter User name" name="user" >


                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" >


                    <label for="psw"><b>Confirm Password</b></label>
                    <input type="password" placeholder="Confirm Password" name="conpassword" >




                    <center>
                        <div id="lg">
                            <!--<button class="lg1" type="submit" class="registerbtn">Submit</button>-->
                            <input type="submit" name="submit" class="button">
                        </div>

                         <li><a class="main" href="login.php" title="LOGIN">LOGIN</a></li>
                      
                    </center>

                </div>
            </div>

        </div>
        </div>

    </form>

</body>

</html>



<?php 
$con=mysqli_connect('localhost','root','','food');
if($con==false)
{
    echo "connection not done";
}


if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
    $user=$_POST['user'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];

	$qry="INSERT INTO `register`(`id`, `fname`, `mno`, `email`, `user`, `password`, `conpassword`) VALUES (NULL,'$fname','$mno','$email','$user','$password','$conpassword')";
	$run=mysqli_query($con,$qry);
	if($run==true)
		{
		?>
			<script>
				alert("Register succesfully");
			</script>
        <?php	
        header("location:login.php");
			
		}
		else
		{
			
			?>
			<script>
				alert("Error in Registration");
			</script>
			
			<?php
		}
		
	}
?>
