<?php
/*
=======================================================================================

This program allows you to play the clasic simon game in native php and html/css.
Copyright (C) 2019  Max Shriver, Spencer Dyvig

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

=======================================================================================
*/
// session_start();
//
//
// if(!isset($_SESSION['clickOrder'])){
//
//     $_SESSION['clickOrder'] = array();
// } elseif (!isset($_SESSION['currentLevel'])) {
//
//     $_SESSION['currentLevel'] = 10;
// }
//
//
// // checks if any buttons are pressed
// if (isset($_POST['button1'])){
//
//     bClicked('1');
//     $msg = "btn1";
// } elseif (isset($_POST["button2"])){
//
//     bClicked('2');
//     $msg = "btn2";
// } elseif (isset($_POST["button3"])){
//
//     bClicked('3');
//     $msg = "btn3";
// } elseif (isset($_POST["button4"])){
//
//     bClicked('4');
//     $msg = "btn4";
// }
//
//
//
// // Used to record order of button presses, storing them in a session array
// function bClicked($btn_value){
//
//     array_push($_SESSION['clickOrder'],$btn_value);
//
//      $clickCount = count($_SESSION['clickOrder']);
//      echo $_SESSION['currentLevel'];
//      echo "click count: " . $clickCount;
//
//     if (count($_SESSION['clickOrder']) == $_SESSION['currentLevel']){
//
//         session_unset();
//         session_destroy();
//     }
// }
//
// // flashes the button color to the desired pattern
// $order = $_SESSION['clickOrder'];
// function flashBTN($order) {
//
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simon</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<h1 id="game_title">Simon Game</h1><br>
<h2 id="level"></h2>
<h2 id="instructions">Press start to begin.</h2>
<h2 id="debug-order"></h2>

<div class="firstgrid">
    <form action="" method="post">
        <input type="button" id="btn1" class="button1" name="button1" value="1">
        <input type="button" id="btn2" class="button2" name="button2" value="2">


</div><br>

<div class="secondgrid">


        <input type="button" id="btn3" class="button3" name="button3" value="3">
        <input type="button" id="btn4" class="button4" name="button4" value="4">


</div>

<div class="thirdgrid">

        <input type="button" id="start" class="start" name="start" value="Start Game">
        </form>

</div>

<h2 id="debug"></h2>
<h2 id="msg"></h2>

<script src="/test/Simon/js/main.js"></script>

</body>
</html>
