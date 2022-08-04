<!DOCTYPE HTML>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body{
	background-color: #fff;
}
.container{
	background-color: #eef2f5;
	width: 8100px;
    height:1700px;
}
.addtxt{
	padding-top: 10px;
	padding-bottom: 10px;
	text-align: center;
	font-size: 13px;
	width: 350px;
	background-color: #e5e8ed;
	font-weight: 500;
}
.form-control: focus{
	color: #000;
}
.second{
	width: 350px;
	background-color: white;
	border-radius: 4px;
	box-shadow: 10px 10px 5px #aaaaaa;
}
.text1{
	font-size: 13px;
    font-weight: 500;
    color: #56575b;
}
.text2{
	font-size: 13px;
    font-weight: 500;
    margin-left: 6px;
    color: #56575b;
}
.text3{
	font-size: 13px;
    font-weight: 500;
    margin-right: 4px;
    color: #828386;
}
.text3o{
	color: #00a5f4;

}
.text4{
	font-size: 13px;
    font-weight: 500;
    color: #828386;
}
.text4i{
	color: #00a5f4;
}
.text4o{
	color: white;
}
.thumbup{
	font-size: 13px;
    font-weight: 500;
    margin-right: 5px;
}
.thumbupo{
	color: #17a2b8;
}
.fleft {
    position: fixed;
    left:0px; 
    width: 20%;
    top:0;
background:grey;
    bottom: 0;
}
.ftop{
    top:0;
    background: #00c3f4;
    position: fixed;
    right: 274px;
    height: 50px;
    width: 59.5%;
    font-size: 30px;
    font-weight: 500;
    color:white;
}
/* ---------- Timer ---------- */

.ftimer {

position:fixed;
right: 10px;
top: 0px;
    background:white;
    height: 3000px;
    width: 20%;
}

.base-timer {
  position: relative;
  width: 283px;
  height: 300px;
}
.base-timer__svg {
  transform: scaleX(-1);
}
.base-timer__circle {
  fill: none;
  stroke: none;
}
.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}
.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}
.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}
.base-timer__path-remaining.orange {
  color: orange;
}
.base-timer__path-remaining.red {
  color: red;
}
.base-timer__label {
  position: absolute;
  width: 300px;
  height: 300px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;}
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
/* ---------- LIVE-CHAT ---------- */

#live-chat {
  bottom: 0;
  font-size: 12px;
  right: 24px;
  position: fixed;
  width: 300px;
  position: fixed;
    left:0px; 
    width: 20%;
    height: 500px;
    top:0;
background:grey;
    bottom: 0;
}

#live-chat header {
  background: #293239;
  border-radius: 5px 5px 0 0;
  color: #fff;
  cursor: pointer;
  padding: 16px 24px;
}

#live-chat h4:before {
  background: #1a8a34;
  border-radius: 50%;
  content: "";
  display: inline-block;
  height: 8px;
  margin: 0 8px 0 0;
  width: 8px;
}

#live-chat h4 {
  font-size: 12px;
}

#live-chat h5 {
  font-size: 10px;
}

#live-chat form {
  padding: 24px;
}

#live-chat input[type="text"] {
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 8px;
  outline: none;
  width: 234px;
}

.chat-message-counter {
  background: #e62727;
  border: 1px solid #fff;
  border-radius: 50%;
  display: none;
  font-size: 12px;
  font-weight: bold;
  height: 28px;
  left: 0;
  line-height: 28px;
  margin: -15px 0 0 -15px;
  position: absolute;
  text-align: center;
  top: 0;
  width: 28px;
}

.chat-close {
  background: #1b2126;
  border-radius: 50%;
  color: #fff;
  display: block;
  float: right;
  font-size: 10px;
  height: 16px;
  line-height: 16px;
  margin: 2px 0 0 0;
  text-align: center;
  width: 16px;
}

.chat {
  background: #fff;
}

.chat-history {
  height: 2500px;
  padding: 8px 24px;
  overflow-y: scroll;
}

.chat-message {
  margin: 16px 0;
}

.chat-message img {
  border-radius: 50%;
  float: left;
}

.chat-message-content {
  margin-left: 56px;
}

.chat-time {
  float: right;
  font-size: 10px;
}

.chat-feedback {
  font-style: italic; 
  margin: 0 0 0 80px;
}
/* ---------- product---------- */

.button {
   
   border: none;
   color: white;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
 }
 
</style>
    <body>
        <div class="fleft"></div>
        <div class="fright"></div>
        <div class="ftop"><b><center><strong>WORLD TODAY</strong></center></b><div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center"></div></div></div>
        <div class="ftimer"><b><center><strong>HURRY</strong></center></b><div id="app"></div></div>
        <div class="container justify-content-center mt-5 border-left border-right">
            <div id="live-chat">
                <header class="clearfix">  
                  <a href="#" class="chat-close">x</a>
                  <h4>START WITH YOUR PRICE</h4>
                  <span class="chat-message-counter">3</span>
                </header>
                <div class="chat">  
                  <div class="chat-history">   
                    <div class="chat-message clearfix">                          
                      <div class="chat-message-content clearfix">             
                    <hr>
            <div class="chat-message clearfix">
                      <img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">
             <div class="chat-message-content clearfix">
                        <span class="chat-time">13:37</span>
            <h5>Marco Biedermann</h5>
            <p>Lorem ipsum dolor sit ametagni vel debitis numquam qui tempora rem voluptatem delectus!</p>
            </div> <!-- end chat-message-content -->
            </div> <!-- end chat-message -->
 <hr>
  <p class="chat-feedback">Yazıyor..</p>
              <form action="#" method="post">
              <fieldset>
                       <input type="text" placeholder="Mesajınızı Yazın" autofocus>
                      <input type="hidden">
             </fieldset> </form></div> <!-- end chat --> </div> <!-- end live-chat -->
             <div id="app"></div>
             <script>
                 const FULL_DASH_ARRAY = 283;
     const WARNING_THRESHOLD = 10;
     const ALERT_THRESHOLD = 5;
     
     const COLOR_CODES = {
       info: {
         color: "green"
       },
       warning: {
         color: "orange",
         threshold: WARNING_THRESHOLD
       },
       alert: {
         color: "red",
         threshold: ALERT_THRESHOLD
       }
     };
     const TIME_LIMIT = 2000;
     let timePassed = 0;
     let timeLeft = TIME_LIMIT;
     let timerInterval = null;
     let remainingPathColor = COLOR_CODES.info.color;
     document.getElementById("app").innerHTML = `
     <div class="base-timer">
       <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
         <g class="base-timer__circle">
           <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
           <path
             id="base-timer-path-remaining"
             stroke-dasharray="283"
             class="base-timer__path-remaining ${remainingPathColor}"
             d="
               M 50, 50
               m -45, 0
               a 45,45 0 1,0 90,0
               a 45,45 0 1,0 -90,0
             "
           ></path>
         </g>
       </svg>
       <span id="base-timer-label" class="base-timer__label">${formatTime(
         timeLeft
       )}</span>
     </div>
     `;
     startTimer();
     function onTimesUp() {
       clearInterval(timerInterval);
     }
     
     function startTimer() {
       timerInterval = setInterval(() => {
         timePassed = timePassed += 1;
         timeLeft = TIME_LIMIT - timePassed;
         document.getElementById("base-timer-label").innerHTML = formatTime(
           timeLeft
         );
         setCircleDasharray();
         setRemainingPathColor(timeLeft);
     
         if (timeLeft === 0) {
           onTimesUp();
         }
       }, 1000);
     }
     
     function formatTime(time) {
       const minutes = Math.floor(time / 60);
       let seconds = time % 60;
     
       if (seconds < 10) {
         seconds = `0${seconds}`;
       }
     
       return `${minutes}:${seconds}`;
     }
     
     function setRemainingPathColor(timeLeft) {
       const { alert, warning, info } = COLOR_CODES;
       if (timeLeft <= alert.threshold) {
         document
           .getElementById("base-timer-path-remaining")
           .classList.remove(warning.color);
         document
           .getElementById("base-timer-path-remaining")
           .classList.add(alert.color);
       } else if (timeLeft <= warning.threshold) {
         document
           .getElementById("base-timer-path-remaining")
           .classList.remove(info.color);
         document
           .getElementById("base-timer-path-remaining")
           .classList.add(warning.color);
       }
     }
     
     function calculateTimeFraction() {
       const rawTimeFraction = timeLeft / TIME_LIMIT;
       return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
     }
     
     function setCircleDasharray() {
       const circleDasharray = `${(
         calculateTimeFraction() * FULL_DASH_ARRAY
       ).toFixed(0)} 283`;
       document
         .getElementById("base-timer-path-remaining")
         .setAttribute("stroke-dasharray", circleDasharray);
     }

                 </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
      
       <!------product-!>
<?php
include 'world_connection.php';
if(!empty($_SESSION)){

 
  if($_SESSION['admin_id']!=1 )
     {
        echo $_SESSION['admin_id'];
        ?>
    <!-- <script> window.location.href = "http://localhost/world_news/login.php";</script>   -->
     <?php   
 
     }
 else
 {

$id=$_GET["edit"];
$image_query = mysqli_query($conn,"SELECT * FROM sb WHERE sid= $id");
  $rows = mysqli_fetch_array($image_query);         
?>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo $rows['simg'] ;?>"  style="width:800px;height:350px;">
 </div>
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><?php echo $rows['sname']; ?></h2>
    <h3 class="w3-wide"><?php echo $rows['sprice']; ?></h3>
    <p class="w3-justify">"<?php echo $rows['about']; ?>"</p>
    <?php $cid=$rows['sid'];
   // echo $cid;
    ?>
    <form method="post" action="">
    <button class="button button1" name ='ap' value='<?php echo $cid;?>'>APPROVE</button>
<button class="button button3" name = 'dn' value='<?php echo $cid;?>'>REJECT</button>

  </div>
<!-- End Page Content -->
</div>
<?php
if (isset($_POST['ap']))
{
      $status="0" ;
      mysqli_query($conn,"UPDATE  sb SET status='$status' WHERE sid ='$cid'");
 }
  else if(isset($_POST['dn']))
  {
      //$status="1";
      mysqli_query($conn,"DELETE FROM sb WHERE sid ='$cid'");
      header("Location: user.php"); 
  }
}       }
    else
       {
           
       }
       ?>
</form>
    </body>
</html>