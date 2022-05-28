<html>

<head>
    <title>Appointments</title>
    <link href="appointment page style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
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
    <h1 style="margin-top: 8%;">
        <font size=6>BOOK</font>
        <font size=6>APPOINTMENT</font>
    </h1>
    <br>
    <div class="box"></div>
    <div class="appointmentform">
        <form method="get" action="">
            <table>
                <tr>
                    <td style="color:#ffffff">Patient Name</td>
                    <td style="color:#ffffff">: <input type="text" placeholder="Patient Name" name="name" class="formname" required></td>
                </tr><br>
                <tr>
                    <td style="color:#ffffff">Gender</td>
                    <td style="color:#ffffff">: <input type="radio" name="gender" value="male" checked>Male &nbsp; &nbsp;
                        <input type="radio" name="gender" value="female"> Female &nbsp; &nbsp;
                        <input type="radio" name="gender" value="other"> Other</td>
                </tr><br><br>
                <tr>
                    <td style="color:#ffffff">Contact No.</td>
                    <td style="color:#ffffff">: <input type="text" placeholder="10 digit number" name="mobile" maxlength="10" class="formname" required></td>
                </tr><br>


                <tr>
                    <td style="color:#ffffff">E-Mail</td>
                    <td style="color:#ffffff">: <input type="email" placeholder="Email ID" name="email" class="formname" required></td>
                </tr><br>
                <tr>
                    <td style="color:#ffffff">Date of Birth</td>
                    <td style="color:#ffffff">: <input type="date" name="dob"  class="formname" required></td>
                </tr><br>
                <tr>
                    <td style="color:#ffffff">Hospital Location</td>
                    <td style="color:#ffffff">:
                        <select class="formname" name="hospitalname">

                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Ghaziabad">Ghaziabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Mumbai">Mumbai</option>
                        </select></td>
                </tr>
                <br>
                <tr>
                    <td style="color:#ffffff">Preferred Date for Appointment</td>
                    <td style="color:#ffffff">: <input type="date" placeholder="DD/MM/YYYY"  class="formname" name='appointment' required></td>
                </tr><br>
                <tr>
                    <td style="color:#ffffff">Preferred Time</td>
                    <td style="color:#ffffff">: <input type="time" placeholder="HH:MM" maxlength="5" class="formname" name='apptime' required></td>
                </tr><br>



            </table><br>
            <input type="submit" name="submit" class="submitbtn"><input type="reset" class="resetbtn">
        </form>
    </div>
</body>

</html>

<?php

    include('connection1.php');
    error_reporting(0);
    if(isset($_GET['submit'])){
    $fullname=$_GET['name'];
    $phone=$_GET['mobile'];
    $email=$_GET['email'];
    $gender=$_GET['gender'];
   $hname=$_GET['hospitalname'];
   $dt=$_GET['dob'];
   $at=$_GET['appointment'];
   $time=$_GET['apptime'];
    

  //echo "$fullname";
  //echo "$email";
  //echo "$phone";

   $query="INSERT INTO appointments VALUES ('$fullname','$gender','$phone','$email','$dt','$hname','$at','$time')";
   $data=mysqli_query($con,$query);
   }

   if($data)
    {
        //echo "data inserted";
        ?>
        <script>alert("THANK YOU FOR YOUR VALUABLE FEEDBACK!!");</script>
        <?php
    }
    else {
	echo "failed to insert";
}

?>