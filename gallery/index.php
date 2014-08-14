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
		<table cellspacing = "10">
			<tr>
				<td> <img src = "/img/Gallery/2013_BuildEvent.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/Fresno2012.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/Janel_CynthiaC.png" width = "200"> </td>
			</tr>
			<tr>
				<td> <img src = "/img/Gallery/YashMaglev.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/JenniferBoomilever.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/PerryScrambler.png" width = "200"> </td>
			</tr>
			<tr>
				<td> <img src = "/img/Gallery/PerryScrambler2.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/JanelProject.png" width = "200"> </td>
				<td> <img src = "/img/Gallery/SparklyRose.png" width = "200"> </td>
			</tr>
			<tr>
				<td> <img src = "/img/Gallery/ScienceTeam.png" width = "200"> </td>
			</tr>
<?php include $domain . 'g_footer.php'; ?>