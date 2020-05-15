<?php
$url = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&q=Kodanda+Ramudu+movie&maxResults=6&key=AIzaSyBCDKuOsJ5jwRK1O3cs7IgiW3mDGQ4nB7Y';
$ch = curl_init();
	
if($ch === false)
{
	die('Failed to create curl object');
}
$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 100);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
//curl_setopt($ch, CURLOPT_USERAGENT, $agent);


//proxy details
curl_setopt($ch, CURLOPT_PROXY, '107.181.187.120');
curl_setopt($ch, CURLOPT_PROXYPORT, '52741');

curl_setopt($ch, CURLOPT_PROXYUSERPWD,"kvramareddy:ghjfkhgFLJ80967");
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);

$data = curl_exec($ch);
echo curl_error($ch);
curl_close($ch);

echo $data;

?>