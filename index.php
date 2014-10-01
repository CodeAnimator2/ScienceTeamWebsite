<?php $domain = 'http://' . ereg_replace("/(.+)", "", $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]) . '/'; ?>
<?php include $domain . 'g_document.php'; ?>

	<style type="text/css">
		#none {
			background-color: #339bd5;
			color: #f5f5f5;
			text-shadow: none;
		}
	</style>
	<title>Home<?php include $domain . 'g_header.php'; ?>
		<h2>Welcome to Amador Valley Science Team.</h2>
		<img src="/img/frontImg.jpg" width="600">
		<p>Amador Valley Science Team (AVaST) offers opportunities for its members in Science, Technology, Engineering, and Mathematics (STEM). We compete in Science Olympiad, Science Bowl, and what we call the Academic Pentathlon, which includes the Linguistics Olympiad, Biology Olympiad, Chemistry Olympiad, Physics Olympiad, and Computing Olympiad.
		We meet every other Wednesday at lunch in Mr. Dalldorf's room, Q-208. If you're interested in joining, click on this <a href = "https://docs.google.com/forms/d/1WI2dYHilqczlyC-QkWyoQCLNwHNEdzEKThLb3J7c_g8/viewform?usp=send_form" target = "_blank">link</a> to sign-up. For meeting times and event information, we encourage you to email hello@avscienceteam.com.</p>
		<p><big><a href = "https://docs.google.com/forms/d/1TbPPFsOBrFUXNyKyiRfRzWz04p9aE1hGjjf7UF19TH8/viewform" target = "_blank">CLICK HERE FOR THE SCIENCE OLYMPIAD APPLICATION FORM</a></big></p>

<?php include $domain . 'g_footer.php'; ?>