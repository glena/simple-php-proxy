<pre>
<?php

//$url = base64_decode($_GET['url']);
//echo file_get_contents($url);

$url = $_GET['url'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url); 

curl_setopt($curl, CURLOPT_HEADER, TRUE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_COOKIESESSION, TRUE);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($curl, CURLOPT_MAXREDIRS, 10); 
curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE); 

$data = curl_exec($curl);
$error = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$header = '';

echo "LEN " . strlen($data) . "\n";

for ($a = 0; $a <= strlen($data); $a++)
{
	if ($data[$a] == "\r" && $data[$a+1] == "\n" && $data == '')
	{
		$a++;
		break;
	}
	elseif ($data[$a] == "\r" && $data[$a+1] == "\n")
	{
		echo "HEADER: $header\n";
		//header($header);
		$header = '';
		$a++;
	}
	else
	{
		$header .= $data[$a];
	}
}
echo "DATA:\n";
echo $data[$a];

?>