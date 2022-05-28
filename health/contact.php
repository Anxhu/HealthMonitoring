
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <script src="contact.js"></script>
</head>

<body>
    <nav>
        <div class="nav" id="nav" style="position: fixed; background-color:white;">
            <ul class="navul">
                <li><img src="LOGO.png" class="logo"></li>
                <ul class="navul1">
                    <li class="element">
                        <a href="index.php">HOME </a></li>
                    <li class="element"><a href="aboutfinal.php">ABOUT</a></li>
                    <li class="element"><a href="doctors.php">DOCTORS</a></li>
                    <li class="element"><a href="specialities.php">SPECIALITIES</a></li>
                    <li class="element"><a href="appointments.php">APPOINTMENTS</a></li>
                    <li class="element"><a href="contact.php">CONTACTS</a></li>
                </ul>
            </ul>

        </div>
    </nav>
    <div class="contc">
        <div class="cont12">
            <p class="contheading">FEEDBACK</p>
            <br>
            <span class="linec"></span><br>
            <br>
            <p class="contcontent">If you have a compliment, suggestion or complaint about EYE CARE HOSPITALS, we want to know. Our goal is to provide you with great services.</p>
        </div>
    </div>
    <div class="outerCard1">
        <div class="feedbackcard">
            <br>
            <br>
            <p style="font-size: 25px;">HAPPY TO HELP</p>
            <br>
            <span></span>
            <br>
            <p style="font-size: 60px;">Share Your <b style="color:rgb(64, 64, 138) ;">Experience</b></p><br>
            <p style="font-size: 20px;">There are special moments happening every day throughout ASG Eye Hospital. Whether you are a patient or family member who has experienced our care. We want to hear from you!!</p>
            <form name="form"  method="GET" action="">

                <div class="fbox">
                    <label>Full Name</label>
                    <input type="text" name="name" id="namei" required>
                    <div class="error" id="nerror"></div>
                </div>

                <div class="fbox">
                    <label>Email Id</label>
                    <input type="text" name="email" id="emaili" required>
                    <div class="error" id="eerror"></div>
                </div>



                <div class="fbox">
                    <label>Mobile No</label>
                    <input type="text" name="mobile" id="mobilei" maxlength="10" required>
                    <div class="error" id="merror"></div>
                </div>

                <div class="fbox">
                    <label>Hospital Branch</label>
                    <select name="hospitalname" id="hospitalnamei" required>
                        
                        <option>Banglore</option>
                        <option>Hyderabad</option>
                        <option>Ghaziabad</option>
                        <option>Chennai</option>
                        <option>Mumbai</option>
                    </select>
                    <div class="error" id="herror"></div>
                </div>
                <div class="fbox">
                    <label>Gender</label>
                    <div class="genderc" id="gender">
                        <label><input type="radio" name="gender" value="male">Male</label>
                        <label><input type="radio" name="gender" value="female" checked>Female</label>
                        <label><input type="radio" name="gender" value="others">Others</label>
                    </div>

                    <div class="error" id="derror"></div>
                </div>

                <div class="fbox"><label>Please enter your valuable Feedback</label>
                    <input type="text" name="tbox" id="tbox" size="50% 90%" required>
                </div>
                <br>
                
                    <input type="submit" value="submit" name="submit" class="fbox">
                
            </form>
        </div>
        <div class="contactcard">

            <p style="font-size: 20px;"><b style="font-size: 25px;">ADDITIONAL CONTACTS</b><br><br><span></span> <br>You may also contact the executive below to register a complaint if you are not satisfied with our response:</p><br>
            <br><br>
            <p style="font-size: 20px;">
                <b style="font-size: 25px;">COMPLAINT HOTLINE</b> <br>1800 1200 111</p>

            <br><br>
            <hr><br><br>
            <p style="font-size: 20px;">
                <b style="font-size: 25px;">EMAIL US</b><br> eyecarehosp011@gmail.com

            </p><br><br>
            <hr><br><br>
            <p style="font-size: 20px;">
                <b style="font-size: 25px;">
                    WORKING HOURS</b><br> MON – SUN : 10AM – 7PM

            </p><br><br>
            <hr><br><br>
            <p style="font-size: 25px;">Thank you for your continuous support and faith on us!!</p>
        </div>


    </div>
</body>

</html>
<?php

    include('connection.php');
    error_reporting(0);
    if(isset($_GET['submit'])){
    $fullname=$_GET['name'];
    $email=$_GET['email'];
    $phone=$_GET['mobile'];
    $hname=$_GET['hospitalname'];
    $gender=$_GET['gender'];
    $tbox=$_GET['tbox'];

   
   $query="INSERT INTO FEEDBACK VALUES ('$fullname','$email','$phone','$hname','$gender','$tbox')";
    $data=mysqli_query($con,$query);
    if($data)
    {
        echo "data inserted";
        ?>
        <script>alert("THANK YOU FOR YOUR VALUABLE FEEDBACK!!");</script>
        <?php
    }
    else {
	echo "failed to insert";
}
}

?>

        
            
        

