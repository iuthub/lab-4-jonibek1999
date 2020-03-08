<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php $list=file("songs/list.txt")   ?>


	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
                <?php for($i=0;$i<count($list);$i++) {  ?>

				<li class="mp3item">
					<a href="songs/Be More.mp3"><?php print"$list[i]" ?></a>
				</li>
                <?php } ?>
			</ul>
		</div>
	</body>
</html>
