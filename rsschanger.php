<?php
header("content-type: text/xml; charset=utf-8");

$suffix = $_SERVER["REDIRECT_QUERY_STRING"];

$prefix = "https://turktorrent.us/?";

$requesturl = $prefix.$suffix;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $requesturl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE,1);
curl_setopt($ch, CURLOPT_HTTPHEADER,[
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36'
]);
$content = curl_exec($ch);

curl_close($ch);
preg_match_all('<enclosure.*>',$content,$matches);

foreach($matches[0] as $match){
    $content = str_ireplace('<'.$match,'',$content);
}

echo $content;

?>