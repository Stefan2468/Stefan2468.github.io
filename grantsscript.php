<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "shipplets@ukgateway.net"; // the email address you wish to receive these mails through
$yourWebsite = "Shipplets.com - Enquiry"; // the name of your website
$thanksPage = ''; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$requiredFields = "name,email,telephone"; // names of the fields you'd like to be required as a minimum, separate each field with a comma

// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = htmlspecialchars(trim(stripslashes(strip_tags($data))));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	foreach($requiredFields as $field) {
		trim($_POST[$field]);
		
		if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please click the 'Back' button of your browser and fill in the required fields\r\n")
			$error_msg[] = "Please click the 'Back' button of your browser and fill in the required fields";
	}

/*	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n"; */
		
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "Please fill in a valid email address, press 'Back' to go back to the form.\r\n";
		
/*	if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
		$error_msg[] = "Invalid website url.\r\n";*/
	
	$codeNumber_encoded = intval(clean($_POST['code']));
	//echo intval(clean($_POST['input_code']))."\r\n";
	$codeInput_as_typed_in = ((($codeNumber_encoded + 1)/2)+1)/1111;
	//echo $codeInput_as_typed_in."\r\n";
	if ($codeInput_as_typed_in != intval(clean($_POST['input_code']))) $error_msg = 'Your message was identified as spam and could not be sent. Please try again';
	
	if ($error_msg == NULL) {
		$subject = "Automatic Form Email";
		
		$message = "You received this e-mail message through your website: \n\n";
		
		$count = count($_POST);
		
		foreach ($_POST as $key => $val) {
		    if (--$count <= 2) {
        		break;
    		}
			if (is_array($val)) {
				foreach ($val as $subval) {
					$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
				}
			} else {
				$message .= ucwords($key) . ": " . clean($val) . "\r\n";
			}
		}
		$message .= "\r\n";
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\r\n";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail>\r\n";	
		}
		$headers  .= "Reply-To: {$_POST['email']}\r\n";

		if (mail($yourEmail,$subject,$message,$headers)) {
			
			$error_msg[] = "Thank you for your submission.<br>
			Please click the 'Back' button of your browser to return to the website";
			//if (!empty($thanksPage)) {
			//	header("Location: $thanksPage");
			//	exit;
			//} else {
			//	$result = 'Your mail was successfully sent.';
			//	$disable = true;
			//}
		} else {
			$error_msg[] = 'Your mail could not be sent.';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your message was identified as spam and could not be sent. Please try again';
	}
	
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<title>Self catering Apartments Richmond Surrey UK</title>

</head>
<body bgcolor="#FFFFFF" text="#000000">

<table cellpadding="2" align="center" border =0  width="100%">
<tr>
<td align="CENTER"><FONT FACE="arial" size="5"><B>
<?php
	if (is_array($error_msg)) {
		foreach ($error_msg as $subval1) {
			echo $subval1."\r\n";
		}
	} else {
		echo $error_msg."\r\n";
	}

?>
</B></FONT></td>
</tr>
</table>


</body>
</html>
