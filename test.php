<html>
  <head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body{
	background-color: #fff;
}
.container{
  
	background-color: #eef2f5;
	width: 800px;
    height:500px;
    overflow-y: auto;
}
.addtxt{
	padding-top: 10px;
	padding-bottom: 10px;
	text-align: center;
	font-size: 30px;
	width: 800px;
    height: 70px;
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
background:whitesmoke;
    bottom: 0;
}
.ftop{
    top:0;
    background: white;
    position: fixed;
    right: 274px;
    height: 40px;
    width: 59.5%;
}

.fright {

position:fixed;
right: 350px;
bottom:0;
    background:whitesmoke;
    height: 200px;
    width: 53.5%;
}
.ftimer {

position:fixed;
right: 0px;
top: 10px;
    background:transparent;
    height: 300px;
    width: 20%;
}

------------------------------
.base-timer {
  position: relative;
  width: 300px;
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
  font-size: 48px;
}


    
    </style>
    
    <!-------------------------------->
 
</head>
    <body>

        
        <div class="fleft"></div>
        <div class="fright">
            <div class="d-flex justify-content-center pt-3 pb-2"> 
                <form action=" " method="POST">
                    
                <input type="text" name="comment" placeholder="+ Add Your Comment" class="form-control addtxt" autocomplete="off"> 
                <button type="submit">POST</button> 
                
            </form>
            <br>
          
            </div>   
            <form action="termination.php" method="POST">
            <?
            if(S_SESSION['userType'] == 'Admin') {
                //Show
            }
            <button type="submit">STOP</button> 
          </form>
            
            </div>
        
      
      
     <div class="ftop"><strong>
     <?php 
     
    
     include 'world_connection.php';
     $topic_id=$_GET['edit'];
     $_SESSION['topic_id']=$topic_id;
     $username=$_SESSION['username'];
     
   
     /////////////////////////////////////////////////.TOPIC>/////////////////////////////////
     $image_topic=mysqli_query($conn,"SELECT * FROM discussion_create WHERE t_id = '$topic_id' ");

     $i=0;
     while ($row = mysqli_fetch_array($image_topic))
     {
      
     echo $row['topic'] ;

     $timestamp1 = time();
     $current_time = date("H:i:s", $timestamp1);
     $start=strtotime($current_time);
     $end = strtotime($row['end']);
      $mins = ($end - $start) / 60;
      $mins= $mins * 60;
    
     }
     ?>
     </strong></div>
     <!--/////////////////////////////////////////////////.TOPIC>/////////////////////////////////-->
  
     <!--/////////////////////////////////////////////////LOADER OF COMENTBOX [loader.php]>/////////////////////////////////-->   
        <div class="ftimer"><div id="app"></div></div>
        <!--/////////////////////////////////////////////////END LOADER OF COMENTBOX/////////////////////////////////-->
        
        
        <!--//////////////////////////////////////////enter commnt////////////////////////////////////////-->


        <div class="container justify-content-center mt-5 border-left border-right">
            <!--<div class="d-flex justify-content-center pt-3 pb-2"> <input type="text" name="text" placeholder="+ Add a note" class="form-control addtxt"> </div>-->
            <?php
            
                if(isset($_POST['comment'])){
                 $comnt=$_POST['comment'];
                
                 $iq=mysqli_query($conn, "INSERT INTO discuss(`comment`,`topic_id`,`user_name`) VALUES('$comnt','$topic_id','$username')");
                }
          
          ?> 
           <div id="auto"></div>
          
            
           </div>
          
        
<!------------------------------------autorefresh----------------------------->
<script type ="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>"
<script type="text/javascript">
$(document).ready( function() {
$('#auto').load('loader.php');
refresh();
});


function refresh()
{
    setTimeout( function() {
        $('#auto').load('loader.php');
        refresh();
    }, 200);


  
}
</script>
<script>
    

//<------------------------------------autorefresh--ENDS----------------------------->

//<------------------------------------timer----------------------------->


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

const TIME_LIMIT = <?=$mins
?>;
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


       
       
       
       
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
    </body>
</html>