<?php 
//session start
session_start(); 
?>

<!DOCTYPE html>

<html>

<head>
<title>The Internet Piano School</title>

<!--Canvas ips logo-->
<p>
  <canvas id="myCanvas" width="800" height="100" style="border:1px solid #d3d3d3;">
  Your browser does not support the HTML5 canvas tag.</canvas>
</p>

<link rel="stylesheet" type="text/css" href="css/main1.css">
<p></p>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--dropdown menubar script-->
<script type="text/javascript" src="js/main1.js"></script>

</head>
<body>


<table width="39%" align="right">
 <tr bgcolor="#FFFFFF">
  <td width="23%" onmouseover="showmenu('classes')" onmouseout="hidemenu('classes')">
   <a href="classes.php">Class Curriculum</a><br>
   <table class="menu" id="classes" width="120">
   <tr><td class="menu"><a href="menubaritems/beginner.php">Beginner</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/intermediate.php">Intermediate</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/advanced.php">Advanced</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/classrooms.php">Classroom Environment</a></td></tr>

   </table>
  </td>
  <td width="19%" onmouseover="showmenu('requirements')" onmouseout="hidemenu('requirements')">
   <a href="requirements.php">Requirements</a><br>
   <table class="menu" id="requirements" width="50">
   <tr><td class="menu"><a href="menubaritems/hardware.php">Hardware</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/software.php">Software</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/personal.php">Personal</a></td></tr>
	
   </table>
  </td>
  <td width="17%" onmouseover="showmenu('enrollment')" onmouseout="hidemenu('enrollment')">
   <a href="menubaritems/enrollment.php">Enrollment</a><br>
   <table class="menu" id="enrollment" width="120">
   <tr><td class="menu"><a href="menubaritems/enrollment.php">Enrollment Process</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/sample.php">Sample Lesson</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/enroll.php">Enroll Now!</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/questions.php">Still Have Questions?</a></td></tr>

   </table>
  </td>
    <td width="16%" onmouseover="showmenu('about')" onmouseout="hidemenu('about')">
   <a href="about.php">About IPS</a><br>
   <table class="menu" id="about" width="120">
   <tr><td class="menu"><a href="menubaritems/theory.php">Our Theory</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/instructors.php">Instructors</a></td></tr>
   <tr><td class="menu"><a href="menubaritems/contact.php">Contact Us</a></td></tr>
    </table>
  </td>
  <td width="25%"><strong>&nbsp;&nbsp;&nbsp;Student log-in</strong></td>

</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
<br />
<br />
</p>
<p>
  <canvas id="myCanvas" width="800" height="675" style="border: 0px solid #d3d3d3; text-align: left;">
  Your browser does not support the HTML5 canvas tag.</canvas>
</p>



</body>
</html>
