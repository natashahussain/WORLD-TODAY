<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Creating Dynamic Countdown in PHP Example - Mywebtuts.com</title>
    <!-- Bootstrap CSS -->
    <?php
$start = strtotime('12:00:00');
$end = strtotime('13:16:00');
$mins = ($end - $start) / 60;
echo $mins;
?>
    </script>
</body>
</html>  