<html>
	<body>
		<h1>Darkportal at your service</h1>
		<p>
			<?php
				if (preg_match("/^192.168.1/", $_SERVER['REMOTE_ADDR'])) {
					echo "You are inside local network";
				} else {
					echo "You are accessing our service from the internet";
				}
			?>
		</p>

		<ul>
			<li>
				<a href="/pas/expenses">Budget management (P.A.S)</a>
			</li>
			<li>
				<a href="/pas/recipes">Cooking recipes (P.A.S)</a>
			</li>
			<li>
				<a href="/wiki">Documentation (MediaWiki)</a>
			</li>
			<li>
				<a href="/pas/songs">Music management (P.A.S)</a>
			</li>
			<li>
				<a href="/eventum">Task management (Eventum)</a>
			</li>
			<li>
				<a href="/rutorrent">Torrent management (RuTorrent)</a>
			</li>
			<?php
				if (preg_match("/^192.168.1/", $_SERVER['REMOTE_ADDR'])) {
					echo '
					<li>
						<a href="http://192.168.1.2:8000/">XBMC</a>
					</li>';
				}
			?>
		</ul>
	</body>
</html>
