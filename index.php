<?php
require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $que = "INSERT INTO controls(action) VALUES ('$action')";
    $con->query($que);
  echo "Item successfuly Added!";}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="2x.css" />
    <title>MY CINTROL</title>
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"></head>
<body align="right">
    <header>
</header>
 <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
 <form id="myForm" action="2x.php" method="post" target="dummyframe"> <div>
            <input type="submit" value="RUN" name="run" style="font-size: 20px; 
    background: white; 
    border-radius: 50px;  position: absolute; left: 80%;  bottom: 20%;">
            <input type="submit" value="SAVE" name=safe style="font-size: 20px; 
    background: black; border-radius: 50px; color: white;  position:
    absolute;left: 80%;  bottom:  25%;"> </div>
 <div class="main">
            <p>
 <h3>Motor1</h3>
            <input type="range" min="0" max="180" value="0" id="myRange1" class="slider" name="a1">
            <p>Value: <span id="value1"></span></p>
  <h3>Motor2</h3>
            <input type="range" min="0" max="180" value="0" id="myRange2" class="slider" name="a2">
            <p>Value: <span id="value2"></span></p>
 <h3>Motor3</h3>
            <input type="range" min="0" max="180" value="0" id="myRange3" class="slider" name="a3">
            <p>Value: <span id="value3"></span></p>
 <h3>Motor4</h3>
            <input type="range" min="0" max="180" value="0" id="myRange4" class="slider" name="a4">
            <p>Value: <span id="value4"></span></p>
 <h3>Motor5</h3>
            <input type="range" min="0" max="180" value="0" id="myRange5" class="slider" name="a5">
            <p>Value: <span id="value5"></span></p>
 <h3>Motor6</h3>
            <input type="range" min="0" max="180" value="0" id="myRange6" class="slider" name="a6">
            <p>Value: <span id="value6"></span></p> </p>   </div></form>
    <form action="index.php" method="post">
        <div class="main2">
 <div class="forward">
         <input type="submit" value="Forward" name="action" style="font-size: 30px; background: rgb(86, 140, 158); border-radius: 50px;"> </div>
 <div class="center">
                <input type="submit" value="Left" name="action" style="font-size: 30px; background: rgb(86, 140, 158); border-radius: 50px;">
                <input type="submit" value="Stop" name="action" style="font-size: 30px; background: rgb(104, 65, 65); border-radius: 50px; color: white;">
                <input type="submit" value="Right" name="action" style="font-size: 25px; background: rgb(86, 140, 158); border-radius: 50px;"> </div>
 <div class="backward">
                <input type="submit" value="Backward" name="action" style="font-size: 30px; background: rgb(86, 140, 158) ;border-radius: 50px;"> </div> </div>  </form>
<script src="2x.js"></script></body></htm>
