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
		<img src="http://images.forwallpaper.com/files/images/d/de8b/de8be8e7/754054/laboratory-flasks.jpg" width="600">
		<p>Amador Valley Science Team (AVaST) offers opportunities for its members in Science, Technology, Engineering, and Mathematics (STEM). We compete in what we call the Academic Penthathlon, which includes the Science Olympiad, Biology Olympiad, Chemistry Olympiad, Physics Olympiad, and Computing Olympiad.
			We meet every other Wednesday at lunch in Mr. Hall's room, D-12. If you're interested in joining, for meeting times and event information, we encourage you to sign up for our mailing list by emailing hello@avscienceteam.com.</p>

<?php include $domain . 'g_footer.php'; ?>