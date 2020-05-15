<?php

/*$auth = base64_encode('kvramareddy:ghjfkhgFLJ80967');

$aContext = array(
    'http' => array(
        'proxy'           => 'tcp://107.181.187.120:27734',
        'request_fulluri' => true,
        'header'          => "Proxy-Authorization: Basic $auth",
    ),
);
$cxContext = stream_context_create($aContext);

$sFile = file_get_contents("https://tube360.xyz/test1.php", False, $cxContext);

echo $sFile;

exit;

*/



$url = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&q=Ramudu+movie&maxResults=6&key=AIzaSyAMCz37XSl0Tksms0tDStzYTt_d0WAAKnU';
$proxy = '107.181.187.120:8888';
//$proxyauth = 'user:password';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, 'fr.proxymesh.com');
curl_setopt($ch, CURLOPT_PROXYPORT, '31280');

curl_setopt($ch, CURLOPT_PROXYUSERPWD,"kvramareddy:Ramzz123#");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$curl_scraped_page = curl_exec($ch);
echo curl_error($ch);

curl_close($ch);

echo $curl_scraped_page;


?>