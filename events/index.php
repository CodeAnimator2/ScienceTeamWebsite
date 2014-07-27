<?php $domain = 'http://' . ereg_replace("/(.+)", "", $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]) . '/'; ?>
<?php include $domain . 'g_document.php'; ?>

	<style type="text/css">
		#nav-events {
			background-color: #339bd5;
			color: #f5f5f5;
			text-shadow: none;
		}
	</style>
	<title>Events<?php include $domain . 'g_header.php'; ?>
		<h2>Events</h2>
		<p>We participate in many science and engineering events around Northern California.</p>
		<p>
			<a href="/events/science-olympiad/">Science Olympiad</a><br />
			<a href="/events/academic-olympiad/">Academic Olympiad</a><br />
			<a href="/events/puzzle-hunt/">Bay Area Puzzle Hunt</a><br />
			<a href="/events/science-bowl/">Science Bowl</a><br />
		</p>
<?php include $domain . 'g_footer.php'; ?>