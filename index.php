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

// checks if any buttons are pressed
if (isset($_POST["button1"])){

} elseif (isset($_POST["button2"])){

} elseif (isset($_POST["button3"])){

} elseif (isset($_POST["button4"])){

}


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

<h1>Simon Game</h1><br>
<h2>Press start to begin.</h2>

<div class="firstgrid">
    <a href="#" class="button1">1</a>
    <a href="#" class="button2">2</a>

</div><br>

<div class="secondgrid">

    <a href="#" class="button3">3</a>
    <a href="#" class="button4">4</a>

</div>

</body>
</html>
