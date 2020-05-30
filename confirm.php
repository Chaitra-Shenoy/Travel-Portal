
<!DOCTYPE html>
<html lang="en">
<title>Confirmation Of Ticket</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
</head>
<body> 
<style type="text/css">
    .help1
    {
        background-color: black;
        color:white;
        position: relative;
        bottom: 0;
        width: 100%;          /* Footer height */

}
</style>
<style type="text/css">
    .edit
    {
        text-align:center;
        border-bottom:1px solid black;
        margin-top:20px;
        margin-bottom:20px;
    }

    .edit1
    {
        margin-left:425px;
    }

    .button
    {
        margin-left:430px;
    }

    .main-nav
    {
        border:2px solid black;
    }
</style>
<!--Navbar-->
    <section class="main-nav">
        <nav>
            <div class="row">
               <img class="logo-img1" src="images/Logo_White.png" > 

               <ul class="nav1">
                <li>
                    <a href="index.html">Home</a>
                </li>
                   <li>
                       <a href="NextBooking.html">Bookings</a>
                   </li>

                   <li>
                        <a href="About.html">About</a>
                    </li>

                    <li>
                        <a href="Help.php">Help</a>
                    </li>

                    <li>
                        <a href="Check.html">Booking Info</a>
                    </li>
               </ul>
            </div>
        </nav>
    </section> 

    <!--CONFIRMATION MESSAGE-->
    <?php
    if (isset($_POST['Submit1'])) 
    {
            session_start();
            $con = mysqli_connect("localhost:3306","root","","travels");
    // Check connection
            if (mysqli_connect_errno())
            {
                 echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            
            $fname1=$_POST['fname'];
            $_SESSION['fname']=$fname1;

            $lname1=$_POST['lname'];
            $_SESSION['lname']=$lname1;

            $pnum1=$_POST['pnum'];
            $_SESSION['pnum1']=$pnum1;

            $email1=$_POST['email'];
            $_SESSION['email1']=$email1;

            $fcode=$_POST['code'];
            $_SESSION['fcode']=$fcode;
            $sql0="select pnumber from customer_info where pnumber='$pnum1'";
            $r1=mysqli_query($con,$sql0);
            if(mysqli_num_rows($r1)==0)
            {
                $sql="insert into customer_info(fname,lname,pnumber,email) values ('$fname1','$lname1','$pnum1','$email1')";
                mysqli_query($con,$sql);
            }

            $sql = "select * from flight_info where flight_code='$fcode';";
            $s = "select * from booking_info where fname='$fname1' and f_code='$fcode';";
            if(mysqli_num_rows(mysqli_query($con,$sql))==1)
            {
                if(mysqli_num_rows(mysqli_query($con,$s))==1)
                {
                    echo "<div class='container text-center' style = 'margin-top:20px; border-bottom:1px solid black; padding-bottom:10px'>";
                    echo "<h4>Flight has already been booked and the confirmation details are as follows</h4>";
                    echo "</div>";
                    $sqll="select arrival_time,departure_time,from_source,to_dest,date_of_flight from flight_info where flight_code='$fcode'";
                    $result=mysqli_query($con,$sqll);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $to=$row['to_dest'];
                            $from=$row['from_source'];
                            $date=$row['date_of_flight'];
                            $arr=$row['arrival_time'];
                            $dept=$row['departure_time'];
                        }
                    }
                }
                else if(mysqli_num_rows(mysqli_query($con,$s))==0)
                {
                    $sql1="insert into booking_info(fname,lname,pnumber,email,f_code) values ('$fname1','$lname1','$pnum1','$email1','$fcode')";
                    $sql2="update flight_info set seats_available=seats_available-1 where flight_code='$fcode'";
                    $sql3="select arrival_time,departure_time,from_source,to_dest,date_of_flight from flight_info where flight_code='$fcode'";
                    mysqli_query($con,$sql1);
                    mysqli_query($con,$sql2);
                    $result=mysqli_query($con,$sql3);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $to=$row['to_dest'];
                            $from=$row['from_source'];
                            $date=$row['date_of_flight'];
                            $arr=$row['arrival_time'];
                            $dept=$row['departure_time'];
                        }
                    }

                }
            }
            else
            {
                header('Location:Invalid-flight.html');
            }
    }
    else
    {
        header('Location:NextBooking.html');
    }
    ?>

    <div class="container">
            <h1 class="edit" style="padding-bottom:10px;">Flight Confirmation Details</h1>
            <div class="container">
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>First Name:</strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $fname1?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Last Name:</strong></label>
            <label for="lname" >&nbsp; &nbsp;<?php echo $lname1?></label>
            <br>
            <label for="num" class="edit1" style="border-bottom: 2px solid black;"><strong>Flight Number:</strong></label>
            <label for="number" >&nbsp; &nbsp;<?php echo $fcode?></label>
            <br>
            <label for="from" class="edit1" style="border-bottom: 2px solid black;"><strong>From: </strong></label>
            <label for="to" >&nbsp; &nbsp;<?php echo $from?></label>
            <br>
            <label for="to" class="edit1" style="border-bottom: 2px solid black;"><strong>To: </strong></label>
            <label for="to" >&nbsp; &nbsp;<?php echo $to?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Departure Time: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $dept?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Arrival Time: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $arr?></label>
            <br>
            <label for="name" class="edit1" style="border-bottom: 2px solid black;"><strong>Date: </strong></label>
            <label for="fname" >&nbsp; &nbsp;<?php echo $date?></label>
            <br>
            <br>
            <form action="index.html">
            <button class="btn btn-primary button" style="margin-bottom: 20px;">Back To Home</button>
            </form>
            </div>

            <p style="margin-top: 50px; border:0.5px solid black;">
            <h5>Important :</h5>
                -> The payment needs to be made by 48 hours, once the message is sent to the number given by the passenger.
                <br>
                ->All the details regarding the payment method will be sent to the passenger. Once the method of payment is chosen by the passenger the further details will be given to avoid any confusion.
                <br>
                -> In case of any delay or problem, the information regarding the same must be given immediately to give an extension to the passenger for the payment of the ticket.
                <br>
                -> The confirmation will be revoked in case the payment isn't done on time.
                <br>
                <br>
            </p>
    </div>
    
    <!--FOOTER-->
    <footer class="help1">
        <div class="row">
            <div class="container">
                <div class="col span-1-of-2">
                    <div class="container">
                        <i class="fas fa-phone fa-3x phone-img"></i>
                        <p>Contact Details: +00 0000 0000 | +22 1212 2323</p>
                    </div>
                </div>
    
                <div class="col span-1-of-2 help">
                    <div class="container">
                        <p class="email"> <strong>Email-address</strong> :bme@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>