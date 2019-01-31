<?php 
include("connect.php"); 
  
   ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ajax</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
 
<h1>add new</h1>
 
  <div class="country" id="country" >
         <h3>country :</h3>
        <input type="text" name="cname" id="cname"><br>
        <input type="button" name="add" value="add" onclick="addcntry()"> 
  </div>
    <div class="state" id="state">
         <h3>add state :</h3>
          <h2>select country</h2>
 
        <input type="button" name="country" id="country" value="show country" onclick="showcountry()"> 
             <select id="cdrop">
            <option value="">Select Country</option>
         </select><br>
    </div>
   
    <input type="text" name="stat" id="stat" >
    <input type="button" name="submit2" value="Add" onclick="astat()">
</div>


<div class="dis" id="dis" hidden>
  <caption> Add District</caption><br><br>
  <select id="ctry2" onchange="getstate1(this.value)">
      <option value="" >Select Country</option>
  </select><br><br>
  <select id="stat2">
      <option value="">Select state</option>
  </select><br><br>
    <input type="text" name="dist" id="dist" >
    <input type="button" name="submit3" value="Add" onclick="adist()">
</div>


  
 
 
 
</body>
</html>

 