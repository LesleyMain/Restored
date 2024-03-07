<?php
session_start();
$pagename="login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("login.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page


echo "<form action = 'login_process.php' method = 'post'>";
echo "<p class = 'updateInfo'>Email: ";
echo "<input type = 'text' name= 'email'></p>";
echo "<p class = 'updateInfo'>Password: ";
echo "<input type = 'password' name= 'password'></p>";
echo "<p class = 'updateInfo'><input type = 'submit' value='Login ' id= 'submitbtn'</p>";
echo "<input type = 'reset' value= 'Clear' id= 'submitbtn'</p>";
echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>