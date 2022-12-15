<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--  I will use the font awesome icons library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- I will also use a google font that i like -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles.css"> <!-- link to my stylesheet -->
	<title>Contact</title>
</head>
<body>

	<h2>
		Dacă aveți întrebări fără un răspuns, vă rugăm să completați acest formular, răspundem cât mai rapid posibil.		
	</h2>

	<!-- I need a container to host my contact form, also this container will act
	as a css grid with two sections -->
	<div class="contact-section">
		<!-- In the first section we will have the contact-info -->
		<div class="contact-info">
			
		
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Agricultural College Dimitrie Cantemir&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
			
		</div>

		<!-- In the second section we will have our contact form -->
		<form name="contact-form" action="" method="post" autocomplete="off">
			<!-- Every input field will have his own container. -->
			<div class="block">
				<i class="fas fa-user"></i>
				<input type="text" name="firstname" placeholder="Nume">
			</div>

			<div class="block">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" placeholder="Email">
			</div>
			
			<div class="block">
				<i class="fas fa-comment-alt"></i>
				<textarea name="message" placeholder="Mesaj"></textarea>
			</div>

			<button type="submit">Trimite<i class="fas fa-paper-plane"></i></button>

			<p class="please-wait"></p>
			<p class="error"></p>
			<p class="success"></p>
		</form>
	</div>

	<script src="script.js"></script>
</body>
</html>