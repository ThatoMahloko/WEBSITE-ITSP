<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
    
    @font-face {
  font-family: "Muli-Regular";
  src: url("../fonts/muli/Muli-Regular.ttf"); }
@font-face {
  font-family: "Muli-SemiBold";
  src: url("../fonts/muli/Muli-SemiBold.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Muli-Regular";
  font-size: 14px;
  margin: 0;
  color: #999; }

input, textarea, select, button {
  font-family: "Muli-Regular"; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

img {
  max-width: 100%; }

ul {
  padding-left: 0;
  margin-bottom: 0; }

a {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #accffe; }

.inner {
  position: relative;
  width: 435px; }

.image-1 {
  position: absolute;
  bottom: -12px;
  left: -191px;
  z-index: 99; }

.image-2 {
  position: absolute;
  bottom: 0;
  right: -129px; }

form {
  width: 100%;
  position: relative;
  z-index: 9;
  padding: 77px 61px 66px;
  background: #fff;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2); }

h3 {
  text-transform: uppercase;
  font-size: 25px;
  font-family: "Muli-SemiBold";
  color: #333;
  letter-spacing: 3px;
  text-align: center;
  margin-bottom: 33px; }

.form-holder {
  position: relative;
  margin-bottom: 21px; }
  .form-holder span {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: 15px;
    color: #333; }
    .form-holder span.lnr-lock {
      left: 2px; }

.form-control {
  border: none;
  border-bottom: 1px solid #e6e6e6;
  display: block;
  width: 100%;
  height: 38px;
  background: none;
  padding: 3px 42px 0px;
  color: #666;
  font-family: "Muli-SemiBold";
  font-size: 16px; }
  .form-control::-webkit-input-placeholder {
    font-size: 14px;
    font-family: "Muli-Regular";
    color: #999;
    transform: translateY(1px); }
  .form-control::-moz-placeholder {
    font-size: 14px;
    font-family: "Muli-Regular";
    color: #999;
    transform: translateY(1px); }
  .form-control:-ms-input-placeholder {
    font-size: 14px;
    font-family: "Muli-Regular";
    color: #999;
    transform: translateY(1px); }
  .form-control:-moz-placeholder {
    font-size: 14px;
    font-family: "Muli-Regular";
    color: #999;
    transform: translateY(1px); }
  .form-control:focus {
    border-bottom: 1px solid #accffe; }

button {
  border: none;
  width: 100%;
  height: 49px;
  margin-top: 50px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #99ccff;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  font-size: 15px;
  letter-spacing: 2px;
  transition: all 0.5s;
  position: relative;
  overflow: hidden; }
  button span {
    position: relative;
    z-index: 2; }
  button:before, button:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background-color: rgba(52, 152, 253, 0.25);
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transform: translate(-100%, 0);
    transform: translate(-100%, 0);
    -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
    transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1); }
  button:after {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s; }
  button:hover:before, button:hover:after {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0); }

@media (max-width: 991px) {
  .inner {
    width: 400px;
    left: 4%; } }
@media (max-width: 767px) {
  .inner {
    width: 100%;
    left: 0; }

  .image-1, .image-2 {
    display: none; }

  form {
    padding: 35px;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none; }

  .wrapper {
    background: none; } }
    body{     
      background-color:grey;
    }

/*# sourceMappingURL=style.css.map */

    </style>

	</head>


	<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" text-align="center">Red Ink Media</a> 
  
</nav>
		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password">
					</div>
					<button>
						<span>Register</span>
					</button>
				</form>
				
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>