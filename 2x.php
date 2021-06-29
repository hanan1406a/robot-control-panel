<?
$host = 'localhost';
$user = 'root';
$password = "";
$db = 'new2';
$db_port = 8889;

//connection to server & database 
$connection = mysqli_connect($host, $user, $password, $db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

//run
if(isset($_POST['run'])) {
$sql="INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
$result=$connection->query($sql);
    //safe

}else if(isset($_POST['safe'])) { 
    $sql="INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
$result=$connection->query($sql);

 
    
}


$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];

if(isset($_POST['go'])){

  

    $my_query = "INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

$sql = mysqli_query($connection, "SELECT * FROM motors3 ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);


$sql2 = mysqli_query($connection, "SELECT * FROM motors3 ORDER BY id DESC LIMIT 1");

$print_data2 = mysqli_fetch_row($sql2);

$sql3 = mysqli_query($connection, "SELECT * FROM motors3 ORDER BY id DESC LIMIT 1");

$print_data3 = mysqli_fetch_row($sql3);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";

echo "SAVED BUTTON";
echo"<hr>";

echo "id = ".$print_data[0];
echo "<br>";
echo "Motor1 =  ".$print_data[1];
echo "<br>";
echo "Motor2 =  ".$print_data[2];
echo "<br>";
echo "Motor3 =  ".$print_data[3];
echo "<br>";
echo "Motor4 =  ".$print_data[4];
echo "<br>";
echo "Motor5 =  ".$print_data[5];
echo "<br>";
echo "Motor6 =  ".$print_data[6];
echo"<br>";
echo"<br>";




echo"run BUTTON";
echo "<hr>";
echo "id =  ".$print_data2[0];
echo"<br>";
echo "isOn =  ".$print_data2[1];
echo "<br>";
echo "<br>";


echo"save BUTTON";
echo"<hr>";
echo "id =  ".$print_data3[0];
echo"<br>";
echo "isOff =  ".$print_data3[1];
echo "<br>";
echo "<br>";


if(isset($_POST['forward'])) {
    $sql="INSERT INTO `basic` (`f`, `r`, `l`, `s`, `b`) VALUES ('".$_POST['forward']."', '".$_POST['right']."', '".$_POST['left']."', '".$_POST['stop']."', '".$_POST['backward']."');";
    $result=$connection->query($sql);

   if($result)
    { echo "Item successfuly Added!"; } 
    else{ echo "ERROR: Unable to past <br>"; }

 
}else if(isset($_POST['right'])){
    $sql="INSERT INTO `basic` (`f`, `r`, `l`, `s`, `b`) VALUES ('".$_POST['forward']."', '".$_POST['right']."', '".$_POST['left']."', '".$_POST['stop']."', '".$_POST['backward']."');";
    $result=$connection->query($sql);

    if($result)
    {  echo "Item successfuly Added!"; }
    else {echo "ERROR: Unable to past <br>";}


}else if(isset($_POST['left'])){

    $sql="INSERT INTO `basic` (`f`, `r`, `l`, `s`, `b`) VALUES ('".$_POST['forward']."', '".$_POST['right']."', '".$_POST['left']."', '".$_POST['stop']."', '".$_POST['backward']."');";
    $result=$connection->query($sql);

    if($result)
    { echo "Item successfuly Added!"; }
    else{echo "ERROR: Unable to past <br>";}



}else if(isset($_POST['stop'])){

    $sql="INSERT INTO `basic` (`f`, `r`, `l`, `s`, `b`) VALUES ('".$_POST['forward']."', '".$_POST['right']."', '".$_POST['left']."', '".$_POST['stop']."', '".$_POST['backward']."');";
    $result=$connection->query($sql);

    if($result)
    {echo "Item successfuly Added!";}
    else{ echo "ERROR: Unable to past <br>";}


}else if(isset($_POST['backward'])){

    $sql="INSERT INTO `basic` (`b`) VALUES (`f`, `r`, `l`, `s`, `b`) VALUES ('".$_POST['forward']."', '".$_POST['right']."', '".$_POST['left']."', '".$_POST['stop']."', '".$_POST['backward']."');";;
    $result=$connection->query($sql);

    if($result)
    {  echo "Item successfuly Added!";}
    else{ echo "ERROR: Unable to past <br>";}

}
    
?>