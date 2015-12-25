<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin page Finder</title>
<link href="css/settings.css" rel="stylesheet">
<link href="css/css.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.js"></script>
<script src="js/h.js"></script>
</head>
<body>
<div class="container heg2">
<div class="col-lg-8 col-lg-offset-2">
<div id="timeval"></div>
<div class="panel panel-default">
<div class="panel-heading" style="text-align:center;font-size:20px; font-weight:bold;">Admin page Finder</div>
<div class="panel-body" style="padding:5px;">
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" id='table'  dir="ltr">
<label style="color:red; font-size: 11px;" >Please Enter Site <br>
https://www.Example.com/ OR https://www.Example.com/path/ OR https://Example.com/</label>
<center><input id='num' class="form-control"  name="ports"></input>
 </center>
<label style="color:red; font-size: 11px;" > Site source code</label>
<select name="type"  class="form-control">
<option value=""></option>
<option value="php">.php</option>
<option value="asp">.asp</option>
<option value="cfm">.cfm</option>
<option value="js">.js</option>
<option value="cgi">.cgi</option>
<option value="brf">.brf</option>
</select>
<span id="c"></span>
<button onclick="haxjk()" type="submit" name="add" class="btn  btn-danger btn-lg btn-block" style="margin-bottom:5px; margin-top: 5px;">
run
</button>
<div class="status"></div>