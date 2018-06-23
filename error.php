<!DOCTYPE html>
<html>
	<head>
		<title>Error</title>
	</head>
	<body>
		<?php
			include "base.html";
		?>
		<script>
			document.getElementById('index-header').classList.add('active');
			document.getElementById('index-header').childNodes[0].removeAttribute('href');
		</script>
		<div class="container">
			<CENTER>
				<span id="features">
					<?php
						session_start();
						echo $_SESSION['error_message'];
					?>
				</span>
      </CENTER>
		</div>
	</body>
</html>
