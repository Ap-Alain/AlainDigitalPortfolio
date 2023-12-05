<!DOCTYPE html>
<html lang="en-GB">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Log In &lsaquo; Alain Digital Portfolio &#8212; WordPress</title>
		<script>
		function trace(msg) {
			function var_dump(arr, level) {
				var dumped_text = "";
				if (!level)
					level = 0;

				//The padding given at the beginning of the line.
				var level_padding = "";
				for ( var j = 0; j < level + 1; j++ )
					level_padding += "    ";

				if ( 'object' === typeof(arr) ) { //Array/Hashes/Objects
					for ( var item in arr ) {
						var value = arr[item];

						if ( 'object' === typeof(value) ) { //If it is an array,
							dumped_text += level_padding + "'" + item + "' ...\n";
							dumped_text += var_dump(value, level + 1);
						} else {
							dumped_text += level_padding + "'" + item + "' => " + "(" + typeof(value) + ") \"" + value + "\"\n";
						}
					}
				} else { //Stings/Chars/Numbers etc.
					dumped_text = "(" + typeof(arr) + ") " + arr;
					return dumped_text;
				}
				if ( 0 === level ) {
					return '(object)' + String.fromCharCode(10) + dumped_text;
				} else {
					return dumped_text;
				}
			}
			trace.trace_queue.push(var_dump(msg));
		}
		trace.trace_queue = []; // Don't pollute global namespace

		// Try to keep order of operations by transmitting via queue
		setInterval(function() {
			if (0 === trace.trace_queue.length )
				return;
			var msg = trace.trace_queue.shift();

			// Transmit message via XHR
			var xmlhttp;
			if ( window.XMLHttpRequest ) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
			}
			var addy = window.location.toString();
			var url = trace.getLeftMost( addy, "//" ) + "//";
			url += trace.getLeftMost( trace.delLeftMost( addy + "/", "//"), "/") + "/ds-plugins/debug-trace/debug-trace.php";
			xmlhttp.open( "GET", url + "?m=" + encodeURIComponent( msg.toString().substring( 0, 2000 ) ), true );
			xmlhttp.send();
		}, 50);

		// Utility parsing functions in trace namespace
		trace.delLeftMost = function( sSource, sFind ) {
			for ( var i = 0; i < sSource.length; i = i + 1 ) {
				var f = sSource.indexOf(sFind, i);
				if ( -1 !== f ) {
					return sSource.substr( f + sFind.length, sSource.length );
					break;
				}
			}
			return sSource;
		};
		trace.getLeftMost = function( sSource, sFind ) {
			for ( var i = 0; i < sSource.length; i = i + 1 ) {
				var f = sSource.indexOf( sFind, i );
				if ( -1 !== f ) {
					return sSource.substr( 0, f );
					break;
				}
			}
			return sSource;
		};
	</script>
<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<link rel="stylesheet" id="dashicons-css" href="/wp-includes/css/dashicons.min.css?ver=6.4.1" type="text/css" media="all">
<link rel="stylesheet" id="buttons-css" href="/wp-includes/css/buttons.min.css?ver=6.4.1" type="text/css" media="all">
<link rel="stylesheet" id="forms-css" href="/wp-admin/css/forms.min.css?ver=6.4.1" type="text/css" media="all">
<link rel="stylesheet" id="l10n-css" href="/wp-admin/css/l10n.min.css?ver=6.4.1" type="text/css" media="all">
<link rel="stylesheet" id="login-css" href="/wp-admin/css/login.min.css?ver=6.4.1" type="text/css" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-en-gb">
	<script type="text/javascript">
/* <![CDATA[ */
document.body.className = document.body.className.replace('no-js','js');
/* ]]> */
</script>

		<div id="login">
		<h1><a href="https://en-gb.wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://www.alaindigitalportfoliowebsite.dev.cc/wp-login.php" method="post">
			<p>
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username" required="required">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Remember Me</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
									<input type="hidden" name="redirect_to" value="https://www.alaindigitalportfoliowebsite.dev.cc/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a class="wp-login-lost-password" href="/wp-login.php?action=lostpassword">Lost your password?</a>			</p>
			<script type="text/javascript">
/* <![CDATA[ */
function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }
/* ]]> */
</script>
		<p id="backtoblog">
			<a href="/">&larr; Go to Alain Digital Portfolio</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">
							Language						</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="en_GB" lang="en" selected data-installed="1">English (UK)</option></select>
					
					
					
						<input type="submit" class="button" value="Change">

					</form>
				</div>
				<script type="text/javascript" src="/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js"></script>
<script type="text/javascript" src="/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">
/* <![CDATA[ */
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-11-24 11:49:42+0000","generator":"GlotPress\/4.0.0-alpha.11","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
/* ]]> */
</script>
<script type="text/javascript" src="/wp-admin/js/password-strength-meter.min.js?ver=6.4.1" id="password-strength-meter-js"></script>
<script type="text/javascript" src="/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-includes/js/wp-util.min.js?ver=6.4.1" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"b0ca755856"};
/* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">
/* <![CDATA[ */
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-11-24 11:49:42+0000","generator":"GlotPress\/4.0.0-alpha.11","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"Your new password has not been saved.":["Your new password has not been saved."],"Hide":["Hide"],"Show":["Show"],"Confirm use of weak password":["Confirm use of weak password"],"Hide password":["Hide password"],"Show password":["Show password"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
/* ]]> */
</script>
<script type="text/javascript" src="/wp-admin/js/user-profile.min.js?ver=6.4.1" id="user-profile-js"></script>
	</body>
	</html>