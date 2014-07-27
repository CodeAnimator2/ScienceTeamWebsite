<?php $domain = 'http://' . ereg_replace("/(.+)", "", $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]) . '/'; ?>
<?php include $domain . 'g_document.php'; ?>

	<style type="text/css">
		#nav-contact {
			background-color: #339bd5;
			color: #f5f5f5;
			text-shadow: none;
		}
	</style>
	<title>Contact<?php include $domain . 'g_header.php'; ?>
		<h2>Contact Science Team</h2>
		<p>Get in touch with us for any questions about membership, events, or current status. We&rsquo;re always happy to receive donations of things and money&mdash;just let us know first!</p>
		<p>Email: <a href="mailto:hello%40avscienceteam.com">hello&#64;avscienceteam.com</a></p>
<?php include $domain . 'g_footer.php'; ?>