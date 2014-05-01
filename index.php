<?php 

if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"curl")) <= 0 ){ // if not a curl request

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
    $f_contents = file("nicknames.txt"); 
    $line = $f_contents[rand(0, count($f_contents) - 1)];
?>

<title>Is it Mat “<?php echo $line ?>” Marquis’ birthday?</title>

<link rel="stylesheet" href="css/yesitismatsbirthday.css" />

</head>
<body>

    <h1>Yes!</h1>

    <p class="greeting">You should wish <a href="http://twitter.com/wilto">@wilto</a> a happy birthday!</p>
    
    <p>Add <a href="mat.ics">Mat “<?php echo $line ?>” Marquis’ birthday</a> to your calendar!</p>
    
    <p>Mat’s <a href="http://www.amazon.com/registry/giftlist/3ELRFFQC2AOD6/ref=cm_sw_r_tw_gln">Amazon Wish List</a>!</p>
    
    <p><b>New!</b> Follow <a href="https://twitter.com/matsbirthday">@matsbirthday</a> to be kept up to date!</p>
    
	<p>
		<img class="head" src="heads/head1.png" alt="Yo Bro" />
		<img class="head" src="heads/head2.png" alt="Broseph Brosephson" />
		<img class="head" src="heads/head3.png" alt="Bro Diddley" />
	</p>
    
    

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11757054-2', 'isitmatsbirthday.com');
  ga('send', 'pageview');

</script>

<a href="https://github.com/alistapart/isitmatsbirthday"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

</body>
</html>

<?php } else {

set_time_limit(0);
sleep(1); ?>

Yes.

<?php } ?>