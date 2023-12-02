<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed Jul 26 2023 13:51:20 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64bed57ab3e945ecb0554733" data-wf-site="642f3730127a6c04a75034ca">
<head>
  <meta charset="utf-8">
  <title>Company Signup</title>
  <meta content="Company Signup" property="og:title">
  <meta content="Company Signup" property="twitter:title">
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
	<?// if($data['errors'])[
	// 	show($data['errors'])
	// ]
	// ?>
  <div class="ms-page-wrap-2">
    <div class="ms-image-2 is-company"></div>
    <div class="ms-content">
      <div class="ms-form-block w-form">
        <form method="post" class="ms-form" action="/signup/company">
          <h2 class="ms-form-heading-3">Create a New Account</h2>
          <div class="ms-form-description">Please provide the following details to create your personal account and to register your business. </div>
	        <input hidden name="is_company" value="1">
          <div><label for="Name" class="ms-input-label-3">Company Username</label><input type="text" class="ms-input w-input" maxlength="256" name="username" data-name="username" placeholder="e.g. Howard Thurman" id="username" required=""></div>
          <div><label for="Company-Name" class="ms-input-label-3">Company  Name</label><input type="text" class="ms-input w-input" maxlength="256" name="Company-Name" data-name="Company Name" placeholder="e.g. Acme Agency" id="Company-Name" data-ms-member="company-name" required=""></div>
          <div><label for="Email" class="ms-input-label-3">Company Email Address</label><input type="email" class="ms-input w-input" maxlength="256" name="email" data-name="email" placeholder="e.g. howard@gmail.com" id="email" data-mse-member="email" required=""></div>
          <div><label for="password" class="ms-input-label-3">Password Input</label><input type="password" class="ms-input w-input" maxlength="256" name="password" data-name="password" placeholder="⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕ ⁕" id="password" data-ms-member="password" required=""></div>
          <div class="ms-list-container"><label data-ms-member="consent" class="w-checkbox ms-checkbox-wrap is-smaller">
              <div class="w-checkbox-input w-checkbox-input--inputType-custom ms-checkbox"></div><input type="checkbox" id="terms" name="terms" data-name="terms" required="" style="opacity:0;position:absolute;z-index:-1"><span class="ms-checkbox-label w-form-label" for="Terms-Two-2">I agree to the <a href="#" class="ms-link">Terms of Use</a> &amp; <a href="#" class="ms-link">Privacy policy</a>.</span>
            </label><label class="w-checkbox ms-checkbox-wrap is-smaller">
<!--              <div class="w-checkbox-input w-checkbox-input--inputType-custom ms-checkbox"></div><input type="checkbox" id="Subscribe-Two-2" name="Subscribe-Two-2" data-name="Subscribe Two 2" data-ms-member="subscribe" style="opacity:0;position:absolute;z-index:-1"><span class="ms-checkbox-label w-form-label" for="Subscribe-Two-2">Send me product updates</span>-->
<!--            </label></div>-->
	        <input type="submit" value="Submit" data-wait="Please wait..." class="ms-button is-form w-button">
          <div>
            <div class="ms-form-divider">
              <div class="ms-form-divider-line"></div>
              <div class="ms-form-divider-text-2">OR</div>
              <div class="ms-form-divider-line"></div>
            </div>
            <a data-ms-auth-provider="google" href="#" class="ms-social-button w-inline-block">
              <div class="ms-social-inner"><img loading="lazy" src="https://uploads-ssl.webflow.com/64bebcfe6a629ec0ccb8ea66/64bebcff6a629ec0ccb8eb0f_google.svg" alt="" class="ms-social-image">
                <div data-ms-auth-connected-text="Disconnect Google" class="ms-social-text">Continue with Google</div>
              </div>
            </a>
            <a data-ms-auth-provider="facebook" href="#" class="ms-social-button is-facebook w-inline-block">
              <div class="ms-social-inner"><img loading="lazy" src="https://uploads-ssl.webflow.com/64bebcfe6a629ec0ccb8ea66/64bebcff6a629ec0ccb8eb10_facebook.svg" alt="" class="ms-social-image">
                <div data-ms-auth-connected-text="Disconnect Facebook" class="ms-social-text">Continue with Facebook</div>
              </div>
            </a>
          </div>
          <div class="ms-space _20"></div>
          <div>Already have an account? <a href="/login" class="ms-link">Login here</a>
            <a href="/signup"></a>
          </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <a href="/signup" class="ms-top-right-link w-inline-block">
        <div>← Go Back</div>
      </a>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=642f3730127a6c04a75034ca" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
</body>
</html>