<?php

$foundone = 'null';

$bukkitBaseURL = 'http://bukk.it/';

$channelToken = 'zgZtHd0u3l5KIbaHmpbIfIZH';

$channel = $_GET["channel_name"];

$username = $_GET["user_name"];

$request = $_GET["text"];

$header404 = 'HTTP/1.1 404 Not Found';

if ($request == "-help") {

	echo "_BukkitBot -help:_ use either a whole file name (e.g. `clap.gif`) or you can leave the extension off (e.g. `clurb`) and BukkitBot will try to find a match. In the case of multiple matches (e.g. `catbus`) it will prioritize a gif over other file types. Use `-popular` to see some examples.";

} else if ($request == "-popular") {

	echo "_BukkitBot -popular:_ `allthefucks`, `ameliewait`, `bale-kermit`, `beaker-freak`, `caruso`, `clap`, `facepalm`, `golfclap`, `gotime`, `gunn-cant`, `i-cant`, `imout`, `irl.jpg`, `jakedance`, `joy`, `lineup`, `maaaaaaaagic`, `mandybrown`, `mindblown`, `needhugs`, `no`, `nopenope`, `notallfish`, `omg`, `omgjake`, `oooooooo`, `party`, `pizzaaa`, `sad`, `shutup`, `skeletor`, `slayer`, `success`, `thinkin`, `umad`, `umguys`, `wat2`, `welp`, `whar.jpg`, `what.jpg`, `why`, `wilto`, `wonkagtfo`, `yay`, `yayyy`, `yes`, `zen`, `zeroregrets`";

} else if ($channel != 'general') {

	echo "Sorry, BukkitBot only works in the #general channel for the moment.";

} else {

	$file = $bukkitBaseURL . $request;
	$file_headers = @get_headers($file);
	if($file_headers[0] != $header404) {
	   
		$foundone = $file;
	
	};
	
	$file = $bukkitBaseURL . $request . '.jpg';
	$file_headers = @get_headers($file);
	if($file_headers[0] != $header404) {
	   
		$foundone = $file;
	
	};
	
	$file = $bukkitBaseURL . $request . '.jpeg';
	$file_headers = @get_headers($file);
	if($file_headers[0] != $header404) {
	   
		$foundone = $file;
	
	};
	
	$file = $bukkitBaseURL . $request . '.png';
	$file_headers = @get_headers($file);
	if($file_headers[0] != $header404) {
	   
		$foundone = $file;
	
	};
	
	$file = $bukkitBaseURL . $request . '.gif';
	$file_headers = @get_headers($file);
	if($file_headers[0] != $header404) {
	   
		$foundone = $file;
	
	};
	
	if ($foundone == "null") {
	
		echo "BukkitBot looked for `" . $request . "` on `" . $bukkitBaseURL . "` but couldn't find an image :sob:";
	
	} else {
	
		$ch = curl_init();
		$curlConfig = array(
		    CURLOPT_URL            => "https://alistapart.slack.com/services/hooks/incoming-webhook?token=" . $channelToken,
		    CURLOPT_POST           => true,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_POSTFIELDS     => json_encode(array(
		       'text' => $foundone,
		       'username' => 'bukkit',
			   'channel_name' => $channel,
			   'username' => $username,
		    ))
		);
	
		curl_setopt_array($ch, $curlConfig);
		$result = curl_exec($ch);
		curl_close($ch);
	
	}

}

?>