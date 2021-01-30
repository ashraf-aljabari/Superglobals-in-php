<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
////question 1
//echo " <form method='get' action='action.php' target='_blank'>
//  Email: <input type='text' name='email'>
//  Password: <input type='password' name='password'>
//  <input type='submit'>
//</form>";
//
//
//
////question 2
//echo "<form method='post' action=''>
//  Website: <input type='text' name='goToUrl' placeholder='google'>
//  <input type='submit' value='Go'>
//</form>";
//
//if (isset($_POST['goToUrl'])) {
//  $url = "http://www.".$_POST['goToUrl'].".com";
//  header("Location:$url");
//}
//?>
<!---->
<!---->
<?php
////question 3
//
//$result = '';
//if (isset($_POST['result'])) {
//    $first_num = $_POST['first_num'];
//    $second_num = $_POST['second_num'];
//
//$operator = $_POST['operator'];
//
//if($operator == '+'){
//    $result = $first_num + $second_num;
//}else if($operator == '-'){
//    $result = $first_num - $second_num;
//}else if ($operator == '*'){
//    $result = $first_num * $second_num;
//}else {
//    $result = $first_num / $second_num;
//}
//?>
<!--            <form action="" method="post" id="calc">-->
<!--                <br>-->
<!--                <input type="number" name="first_num" id="first_num" required="required" value="--><?php //echo $first_num; ?><!--" />-->
<!--                <input type="number" name="second_num" id="second_num" required="required" value="--><?php //echo $second_num; ?><!--" />-->
<!--                <br>-->
<!--                   <b>Result</b> <input readonly="readonly" name="result" value="--><?php //echo $result; ?><!--">-->
<!--                   <br>-->
<!--                <input type="submit" name="operator" value="+" />-->
<!--                <input type="submit" name="operator" value="-" />-->
<!--                <input type="submit" name="operator" value="*" />-->
<!--                <input type="submit" name="operator" value="/" />-->
<!--              </form>-->
<!---->
<!--<!-- question 4 -->-->
<!--<form method="post" action="globals.php">-->
<!--        <input type="text" name="task" required>-->
<!--        <input type="submit" name="addTask" value= "Add Task"/>-->
<?php
//
//        session_start();
//        if (isset($_POST["addTask"])) {
//            if (isset($_SESSION["tasks"])) {
//                array_push($_SESSION["tasks"],$_POST["task"]);
//            }else{
//                $_SESSION["tasks"] = array($_POST["task"]);
//            }
//        }
//        echo '<ul>';
//        if (isset($_SESSION["tasks"])){
//            foreach($_SESSION["tasks"] as $task){
//                echo "<li>$task</li>";
//            }
//        }
//        echo '</ul>';
//?>
<!--</form>-->

<?php
//question 5
$path= explode('/',$_SERVER['SCRIPT_NAME']);
echo 'Project name is: '.$path[1].'<br>';
echo 'Script name is: '.$path[2].'<br>';





//question 6
 $dateTime = $_SERVER['REQUEST_TIME'];

echo date('Y-m-d H:i:s',$dateTime);












//question 7 & 8
//if (isset($_SESSION['refresh'])) {
//    $_SESSION['refreshTime']++;
//}else {
////    $_SESSION['refresh'] = 1;
//    echo 'this page has been refreshed for ' . $_SESSION['refreshTime'] . ' times';
//};
//$_SESSION['refreshTime'] = $_SESSION['refreshTime']++;
//$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
//if($pageRefreshed == 1){
//    echo "Yes page Refreshed". $_SESSION['refreshTime']++;
//}else{
//    //enter code here
//    $_SESSION['refreshTime'] = 1;
//    echo "No";
//}

//$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
//
//if($pageWasRefreshed ) {
//    $_SESSION['refresh']++;
//} else {
//    echo 'this page has been refreshed for ' . $_SESSION['refresh'] . ' times';
//}


//question 9
setcookie("Tasks", "Done", time() + 3600, "/", "http://localhost/PHP-projects/Superglobals-in-php", false, false);
echo "<pre>";
print_r($_COOKIE);
?>
</body>
</html>