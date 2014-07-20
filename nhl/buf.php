<?php include '../header.php'; ?>

	<?php
		// Gets our data
		function fetchData($url){
		     $ch = curl_init();
		     curl_setopt($ch, CURLOPT_URL, $url);
		     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		     $result = curl_exec($ch);
		     curl_close($ch); 
		     return $result;
		}

		// Pulls and parses data.
        $result = fetchData("https://api.instagram.com/v1/media/search?lat=42.875&lng=-78.876389&distance=250&access_token={$accessToken}&count=100");
		$result = json_decode($result);
	?>

</center>

<?php include '../display_photos.php'; ?>
	
		<script type='text/javascript' src='/js/bootstrap.js'></script>
	</body>
</html>