<!DOCTYPE HTML>

<html lang="en">

<head>
	<title>Self Catering Apartments Richmond UK</title>
	<link href="css_cascading_style_script/styles.css" rel="stylesheet" type="text/css" media="screen">
	<script type="text/javascript" src="salsa_calendar/SalsaCalendar.min.js"></script>
	<link rel="stylesheet" type="text/css" href="salsa_calendar/SalsaCalendar.min.css" media="all" />
    <script src="java_script/jquery_js.js"></script>
	<script src="java_script/jquery_ui.js"></script>
	<script>

	var $cpn = Math.floor(Math.random()*9000)+1000;

	$( document ).ready(function() {

		$("#cpimg").attr('src', 'http://www.shipplets.com/dd_DynamicGraphic.php?text=' + $cpn);
	});

	function captChk() {
    	if (document.forms["myForm"]["input_code"].value==$cpn) {
			document.forms["myForm"]["code"].value = ($cpn*1111-1)*2-1;
        	return true;
    	} else {

			//alert("Please enter the code correctly and then click submit.");
			$("#errorBox").slideDown();

			return false;
    	}
	}
	</script>

	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-91396136-1', 'auto');
  		ga('send', 'pageview');

	</script>

</head>

<body>

<div id="wrapper">

	<div id="top">
		<div id ="background" style="background-image:url('images/index/river-banner.jpg');">
		</div>
			<img id ="door_logo_1" alt="Door logo" src="images/index/door-logo.png" />

			<h1>Larkfield Apartments</h1>

		<div id="topnav1">
			
		<table id="table_top1">
			<tr>
				<td><a href="index.html">HOME</a></td>
				<td><a href="location.html">LOCAL ATTRACTIONS</a></td>
				<td><a href="booking-information.html">BOOKING INFORMATION</a></td>
				<td><a href="booking.php">CONTACT US</a></td>
				<td><a href="coronavirus.html" style="color:#1A00C4;">CORONAVIRUS</a></td>
			
			</tr>
			
		</table>
			
		</div>

	</div>

	<div id="topnav2">

		<table id="table2">
			<tr>
				<td><a href="studio.html">STUDIO APARTMENT</a></td>
				<td><a href="one-bedroom.html">ONE BEDROOM APARTMENT</a></td>
				<td><a href="two-bedroom-apt.html">TWO BEDROOM APARTMENT</a></td>
				<td><a href="two-bedroom-house.html">TWO BEDROOM HOUSE</a></td>
				<td><a href="reviews.html">REVIEWS</a></td>
			</tr>

		</table>

	</div>


	<div id="booking_page">

		<h1>Contact Information</h1>
		<br>

		<p>You can contact us directly via the email address or telephone number provided below, or alternatively fill out our booking enquiry form.</p>
		<br>

		<h2>Email:</h2>
		<p><a href="mailto:shipplets@hotmail.com?subject=Accommodation%20enquiry" style="text-decoration: none;color: black;">shipplets@hotmail.com</a></p>
		<br>

		<h2>Telephone Number:</h2>
		<p>+44 (0) 208 948 6620</p>
		<br>

		<h2>Correspondence Address:</h2>
		<p>Larkfield Apartments,
		<br> Ground Floor, 19 Larkfield Road,
		<br> Richmond-Upon-Thames, Surrey, TW9 2PG
		</p>
		<br>


	<br>
	<h2 style="font-size:24px;">Booking Enquiry Form:</h2>
	<br>

	</div>

	<div style="text-align:center; font-size:19px;">
		<form action="grantsscript.php" name="myForm" method="post" id="booking_form" onsubmit="return captChk();">

			Contact Name <strong>(required)</strong><br>
			<input type="text" name="name" class="input1"><br><br>

			Address<br>
			<textarea name="address" rows="2" class="text_area1"></textarea>
			<br><br>

			Telephone <strong>(required)</strong><br>
			<input type="text" name="telephone" class="input1"><br><br>

			Email <strong>(required)</strong><br>
			<input type="text" name="email" class="input1"><br><br>

			Date of Arrival<br>
			<input type="text" id="salsaCalendar_checkin" name="arrival" class="salsa-calendar-input form-control input1" autocomplete="off" style="background: url(salsa_calendar/calendarIco.png) no-repeat right 11px center;"><br><br>

			Date of Departure<br>
			<input type="text" id="salsaCalendar_checkout" name="departure" class="salsa-calendar-input form-control input1" autocomplete="off" style="background: url(salsa_calendar/calendarIco.png) no-repeat right 11px center;"><br><br>

			Number of People<br>
			<input type="text" name="number_of_people" class="input1"><br><br>

			Will you Require Parking?<br>
			<input type="text" name="parking" class="input1"><br><br>

			Enter any enquiries you may have in the box below<br>
			<textarea name="enquiry" rows="8" class="text_area2"></textarea><br><br>

			<div style="margin:15px 0px 15px 0px;">
				<img src="http://www.shipplets.com/dd_DynamicGraphic.php?text=0000" id="cpimg" alt="" />
			</div>
			<input name="code" type="hidden" value="0" />
			<p><strong>Please enter the code above in the box below and then select submit.</strong></p>

			<input name="input_code" type="text" maxlength="4" class="input2" />

			<br><br>

            <p style="color:red; display:none;" id="errorBox">
  				<strong>Please enter the code correctly and then click submit.</strong>
			</p>
			<input type="reset" value="reset" class="input_button">
			<input type="submit" name="submit" value="submit" class="input_button">

		</form>
	</div>
	<br>

	<div style="clear:both;">

		<br><br><br><br><br><br><br>

		<table id="table_bottom2">
			<tr>
				<td><a href="index.html">Home</a></td>
				<td><a href="studio.html">Studio Apartment</a></td>
				<td><a href="one-bedroom.html">One Bedroom<br>Apartment</a></td>
				<td><a href="two-bedroom-apt.html">Two Bedroom<br>Apartment</a></td>
				<td><a href="two-bedroom-house.html">Two Bedroom<br>House</a></td>
				<td><a href="location.html">Attractions</a></td>
				<td><a href="booking.php">Contact Us</a></td>
			</tr>
		</table>
	</div>

	<br><br>


</div>

<script type="text/javascript">
  var calendar_from = new SalsaCalendar({
    inputId: 'salsaCalendar_checkin',
    lang: 'en',
    range: {
      min: 'today'
    },
    calendarPosition: 'right',
    fixed: false,
    connectCalendar: true
  });

  var calendar_to = new SalsaCalendar({
    inputId: 'salsaCalendar_checkout',
    lang: 'en',
    range: {
      min: 'today'
    },
	calendarPosition: 'right',
    fixed: false
  });

  // new SalsaCalendar.Connector({
  //   from: calendar_from,
  //   to: calendar_to,
  //   maximumInterval: 21,
  //   minimumInterval: 1
  // });
  //
  // new SalsaCalendar.NightsCalculator({
  //   from: calendar_from,
  //   to: calendar_to,
  //   nightsNo: 'nights-no'
  // });
</script>

</body>
</html>
