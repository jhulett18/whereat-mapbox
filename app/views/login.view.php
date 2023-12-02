<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed Jul 26 2023 13:51:20 GMT+0000 (Coordinated Universal Time)  -->

<?

	
?>

<html data-wf-page="64bebbf71364b956c42417ed" data-wf-site="642f3730127a6c04a75034ca">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta content="Login" property="og:title">
		<meta content="Login" property="twitter:title">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta content="Webflow" name="generator">
		<link href="../css/normalize.css" rel="stylesheet" type="text/css">
		<link href="../css/webflow.css" rel="stylesheet" type="text/css">
		<link href="../css/whereatdottop.webflow.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
		<link href="../images/where-at-top-removebg-preview.png" rel="shortcut icon" type="image/x-icon">
		<link href="../images/where-at-top-removebg-preview.png" rel="apple-touch-icon">
	</head>
	<body>
		<?// if($data['errors']){
		// 	show($data['errors']);
		// 	// Sweetalert
		// }
		
		
		$client = $data['client'];
		
		
		
		?>
		<div class="ms-page-wrap">
			<div class="ms-content">
				<div class="ms-form-block w-form">
					<form method="post" action="/login">
						<div class="text-block-2">Can&#x27;t find what you&#x27;re looking for? <a href="/" class="ms-link">Return Home.</a>
<!--							<a href="/"></a>-->
						</div>
						<h2 class="ms-form-heading">Log in</h2>
						<div class="ms-form-description">Welcome! We?Missed You</div>
						
						<div>
							<label type="text" class="ms-input-label">Email Address</label>
							<input name="username" for="username" type="text" class="ms-input w-input" maxlength="256" id="username" placeholder="e.g. howard@gmail.com">
						</div>
						<div><label type="password" for="password" class="ms-input-label w-clearfix">Password Input <a href="#" data-ms-modal="forgot-password" class="ms-link is-forgot">Forgot Password</a></label>
							<input type="password" class="ms-input w-input" maxlength="256" name="password" placeholder="? ? ? ? ? ? ? ?" id="passwor d">
						</div>
						<button type="submit" class="ms-button is-form w-button">Login</button>
					</form>
					
					
					<div class="ms-form-divider">
							<div class="ms-form-divider-line"></div>
							<div class="ms-form-divider-text">OR</div>
							<div class="ms-form-divider-line"></div>
						</div>
						<div>
							
							
							<a data-ms-auth-provider="google" href="<? echo $client->createAuthUrl(); ?>" class="ms-social-button w-inline-block">
								<div class="ms-social-inner"><img onclick="oauthSignIn()" loading="lazy" src="../images/google.svg" alt="" class="ms-social-image">
									<div data-ms-auth-connected-text="Disconnect Google" class="ms-social-text">Continue with Google</div>
								</div>
							</a>
							<a data-ms-auth-provider="facebook" href="#" class="ms-social-button is-facebook w-inline-block">
								<div class="ms-social-inner"><img loading="lazy" src="../images/facebook.svg" alt="" class="ms-social-image">
									<div data-ms-auth-connected-text="Disconnect Facebook" class="ms-social-text">Continue with Facebook</div>
								</div>
							</a>
						</div>
						<div class="ms-space _20"></div>
						<div>New here? <a href="/signup" class="ms-link">Create an account.</a>
							<a href="/signup"></a>
						</div>
					
					<div class="w-form-done">
						<div>Thank you! Your submission has been received!</div>
					</div>
					<div class="w-form-fail">
						<div>Oops! Something went wrong while submitting the form.</div>
					</div>
				</div>
			</div>
			<div class="ms-image is-login"></div>
		</div>
		<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=642f3730127a6c04a75034ca" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="../js/webflow.js" type="text/javascript"></script>
	
		
	
	</body>
</html>