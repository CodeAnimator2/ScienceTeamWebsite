<?php $domain = 'http://' . ereg_replace("/(.+)", "", $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]) . '/'; ?>
<?php include $domain . 'g_document.php'; ?>

	<style type="text/css">
		#nav-gallery {
			background-color: #339bd5;
			color: #f5f5f5;
			text-shadow: none;
		}
	</style>
	<title>Gallery<?php include $domain . 'g_header.php'; ?>
		<h2>Gallery</h2>
		<p>Content coming soon.</p>
<?php include $domain . 'g_footer.php'; ?>