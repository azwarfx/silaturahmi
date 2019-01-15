<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <meta charset="UTF-8">
    <title>Welcome to NaisFramework</title>
</head>

<style type="text/css">

    body{

        font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
        text-align: center;
        margin-top: 20%;
    }
    h1{
        font-weight: normal;
        font-size: 50px;
        padding: 0;
        margin : 0 0 10px 0;
    }
    h3{
        font-weight: normal;
        font-size: 25px;
        color : #9d9d9d;
        padding: 0;
        margin-top : 0;
    }

	/* css */

	.big-btn{
padding: 10px 0px 11px 0px;
width: 215px;
margin-top:5px;
}

.big-btn i{
font-size: 65px;
margin-right: 0px !important;
}
.big-btn strong{
font-size: 25px;
text-shadow: 1px 2px 0px #34659B;
color: #fff;
line-height: 24px;
}
.big-btn .btn-text{
margin-top:6px;
}

.big-btn small{font-size: 75%;}

.android-btn{

width: 240px;
padding: 13px 17px 13px 0px;
background-color: #000;
border-color: #000;

}
.android-btn:hover{
background-color: #272727;
}

.android-btn i{
font-size: 55px;
}

.android-btn .btn-text{
margin-top: 0px;
}

.android-btn strong{
font-size: 25px;
text-shadow: none;
color: #fff;
line-height: 24px;
}

.windows-btn{
background-color:#008A00;
width: 235px;
padding: 13px 5px 13px 10px;
border-color: #055805;
}

.windows-btn:hover{
background-color: #008A00;
}
.windows-btn .btn-text{
text-shadow: none;
font-size: 26px;
line-height: 25px;
}


</style>

<body>

<h1>
    Silaturahmi.id
</h1>
<h3>Indonesian Social Media</h3>

<!-- <div class="container">
	<div class="row">
		<div class="col-md-6">
        <h2>Store Icons</h2>
        <p class="text-warning"><strong>Note: </strong>Use Related Fonts to get better results</p>
       
        </div>
	</div> -->
    <div class="row">
        
        <div class="col-md-12">
           <!-- apple store button -->
                <a class="btn btn-lg btn-primary big-btn" href="#">
  				<i class="glyphicon glyphicon-phone pull-left"></i><div class="btn-text"><small>Available on the</small><br><strong>App Store</strong></div></a>
            <!-- android button -->
  				<a class="btn btn-lg btn-success big-btn android-btn" href="#">
  				<img width="80px" class="pull-left" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
            <!-- windows store button -->
                <!-- <a class="btn btn-lg btn-success big-btn windows-btn" href="#">
  				<img width="60px" class="pull-left" src="http://1.bp.blogspot.com/-rD2_M6Vvv6w/UbmywLq5V8I/AAAAAAAACko/BEcR4QqtkRI/s1600/Windows%2BStore%2BLogo.png"><div class="btn-text">Windows<br>Store</div></a>
                    -->
            
        </div>
    </div>
<!-- </div> -->
</body>
</html>