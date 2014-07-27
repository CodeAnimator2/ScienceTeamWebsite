<?php $domain = 'http://' . ereg_replace("/(.+)", "", $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]) . '/'; ?>
<?php include $domain . 'g_document.php'; ?>

	<style type="text/css">
		#nav-about {
			background-color: #339bd5;
			color: #f5f5f5;
			text-shadow: none;
		}
	</style>
	<title>Coming Soon<?php include $domain . 'g_header.php'; ?>
		<h2>Content coming soon.</h2>
		<p>Check back later?</p>
<?php include $domain . 'g_footer.php'; ?>