
<?php
session_start();

if(!isset($_SESSION['stemp_dleay'])){
    $_SESSION['stemp_dleay'] = time();
}
$now = time();
$final_remain_time = $now - $_SESSION['stemp_dleay'];
echo "$final_remain_time seconds have passed.";

if(!isset($_SESSION['active_count'])){
    $_SESSION['active_count'] = 120;
    $_SESSION['time_started'] = time();
}

$now = time();

$final_remain_time = $now - $_SESSION['time_started'];

$remainingSeconds = abs($_SESSION['active_count'] - $final_remain_time);

echo "There are $remainingSeconds seconds remaining.";

if($remainingSeconds < 1){
   //Finished! Do something.
}
?>