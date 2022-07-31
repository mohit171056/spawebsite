<?php
include 'dbconn.php';
$query="select * from salon where id='1'";
$result = mysqli_query($conn, $query);
$ro = mysqli_fetch_array($result);
$slot1=$ro['slot1'];
$slot2=$ro['slot2'];
$slot3=$ro['slot3'];
$slot4=$ro['slot4'];
$slot5=$ro['slot5'];
$slot6=$ro['slot6'];
$slot7=$ro['slot7'];
$slot8=$ro['slot8'];
$slot9=$ro['slot9'];
$slot10=$ro['slot10'];
$sl1=$ro['sl1'];
$sl2=$ro['sl2'];
$sl3=$ro['sl3'];
$sl4=$ro['sl4'];
$sl5=$ro['sl5'];
$sl6=$ro['sl6'];
$sl7=$ro['sl7'];
$sl8=$ro['sl8'];
$sl9=$ro['sl9'];
$sl10=$ro['sl10'];

$sm1=$ro['sm1'];
$sm2=$ro['sm2'];
$sm3=$ro['sm3'];
$sm4=$ro['sm4'];
$sm5=$ro['sm5'];
$sm6=$ro['sm6'];
$sm7=$ro['sm7'];
$sm8=$ro['sm8'];
$sm9=$ro['sm9'];
$sm10=$ro['sm10'];

$date=$ro['date'];
$tomorrow=date("Y-m-d", strtotime('tomorrow'));
if($date!=$tomorrow){
$q="update salon set date='$tomorrow', sl1='N', sl2='N', sl3='N', sl4='N', sl5='N', sl6='N', sl7='N', sl8='N', sl9='N', sl10='N' where id='1'";
$query=mysqli_query($conn,$q);
}
//error_reporting(0);
if (isset($_POST['submit']))
{
	
$emaild='tarasalon@gmail.com';   
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$time=mysqli_real_escape_string($conn,$_POST['time']);
$lp='1';
while($lp!=11){
	
	if(${sm."$lp"}==$time){
		$jk="sl".$lp;
	$q="update salon set $jk='B' where id='1'";
$query=mysqli_query($conn,$q);
	}
	$lp++;
}
$book=mysqli_real_escape_string($conn,$_POST['book']);
$qy = "insert into user(fullname, email, time, book, mobile,date) values('$name', '$email', '$time', '$book', '$number', '$date')";
	$qu = mysqli_query($conn, $qy);
	
	 header("location:https://api.whatsapp.com/send?phone=919827289636&text=Hi this is  $name  I want to book an appointment on $tomorrow at $time that is $book type");
$subject = "Contact Requeset for EaseExam";
$body = "Hi,  Name= $name tried to book appointment. Email= $email   //  Phone= $number // Time= $time // Booking type=$book ";
$headers = "From:support@easeexam.in";
$k=mail($emaild, $subject, $body, $headers);
if($k){
	?>
  <script>
alert("Thanks For Sharing Your Details. We Will Contact You Soon");
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appointment Tara salon</title>
 <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.contact
{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: url(images/rahult.jpg);
    background-size: cover;
}
.contact .content
{
   max-width: 800px;
   text-align: center;
}
.contact .content h2
{
	font-size: 36px;
	font-weight: 500;
	color: #fff;
}
.contact .content p
{
	font-weight: 300;
	color: #fff;
}
.container
{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 30px;
}
.container .contactInfo
{
	width: 50%;
	display: flex;
	flex-direction: column;
}
.container .contactInfo .box
{
	position: relative;
	padding: 20px;
	display: flex;
}
.container .contactInfo .box .icon
{
	min-width: 60px;
	height: 60px;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	font-size: 22px;
}
.container .contactInfo .box .text
{
	display: flex;
	margin-left: 20px;
	font-size: 16px;
	color: #fff;
	flex-direction: column;
	font-weight: 300;
}
.container .contactInfo .box .text h3
{
	font-weight: 500;
	color: #00bcd4;
}
.contactForm
{
	width: 40%;
	border-radius: 25px;
	padding: 40px;
	background: #fff;
}
.contactForm h2
{
	font-size: 30px;
	color: #333;
	font-weight: 500;
}
.contactForm .inputBox 
{
	position: relative;
	width: 100%;
	margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
	width: 100%;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	border: none;
	border-bottom: 2px solid #333;
	outline: none;
	resize: none;
}
.contactForm .inputBox span
{
	position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
	color: #e91e63;
	font-size: 12px;
	transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]
{
	width: 100px;
	background: #00bcd4;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font size: 18px;
}
@media (max-width: 991px)
{
	 .contact
	 {
	 	 padding: 50px;
	 }
	 .container
	 {
	 	flex-direction: column;
	 }
	 .container .contactInfo
	 {
	 	margin-bottom: 40px;
	 }
	 .container .contactInfo,
	 .contactForm
	 {
	 	width: 100%;
	 }
}    
</style>
</head>
<body>
      <section class="contact">
          <div class="content">
             <h2>Booking</h2>
             <p>Unisex Salon
Tara's Beauty Lounge
“Life is more beautiful when you meet the right hair dresser.”</p>
          </div>
          <div class="container">
             <div class="contactInfo">
             	<div class="box">
             	  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
             	    <div class="text">
             	  	  <h3>Address</h3>
             	  	  <p>73, Mazanine floor, near Raymond showroom, Zone-II, <br> Maharana Pratap Nagar, Bhopal, Madhya Pradesh,<br>462016</p>
             	    </div>
                  </div>
                  <div class="box">
             	    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                   </div>
             	      <div class="text">
             	  	  <h3>Phone</h3>
             	  	  <p>+91 79748 42614,<br></p>
             	      </div>
                    </div>
                    <div class="box">
             	    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                   </div>
             	      <div class="text">
             	  	  <h3>Email</h3>
             	  	  <p>tarasalon@gmail.com</p>
             	      </div>
                    </div>
                </div>
                <div class="contactForm">
                	<form method="post">
                		<h2>Booking for <?php echo $tomorrow; ?></h2>
                		<div class="inputBox">
                			<input type="text" name="name" required="required">
                			<span>Full Name</span>
                		</div>
                		<div class="inputBox">
                			<input type="text" name="number" required="required">
                			<span>Contact No.</span>
                		</div>
                		<div class="inputBox">
                			<input type="text" name="email" required="required">
                			<span>Email</span>
                		</div>
                		<div class="inputBox">
						<label for="time" >Time Slots  </label>
                			<select id="time" name="time" required="true"> 
        
		              <?php if($sl1!='B') { ?>
                     <option value="11:00" required="true" >11:00 Am</option>
		              <?php } if($sl2!='B') { ?>
                    <option value="12:00">12:00 Am</option>
		            <?php } if($sl3!='B') { ?>
                  <option value="01:00">01:00 Pm</option>
	            <?php }if($sl4!='B') { ?>
                  <option value="02:00">02:00 Pm</option>
	            <?php }if($sl5!='B') { ?>
                  <option value="03:00">03:00 Pm</option>
	            <?php }if($sl6!='B') { ?>
                  <option value="04:00">04:00 Pm</option>
	            <?php } if($sl7!='B') { ?>
                  <option value="05:00">05:00 Pm</option>
	            <?php }if($sl8!='B') { ?>
                  <option value="06:00">06:00 Pm</option>
	            <?php }if($sl9!='B') { ?>
                  <option value="07:00">07:00 Pm</option>
	            <?php }if($sl10!='B') { ?>
                  <option value="08:00">08:00 Pm</option>
	            <?php } ?>
           </select>
      </div>
					<div class="inputBox">	
					<label for="book" >Booking Type</label>
         <select id="book" name="book" required="true"> 
        
		 <div>
           <option value="Work on home"required="true" >Work on home</option>
          <option value="Go To Shop">Go To Shop</option>
	        </div>
           </select>	
				</div>		
					<div class="inputBox">
                		<input type="submit" name="submit" value="Submit">
                		</div>
                	</form>
                </div>		
             </div>
      </section>
</body> 
</html>