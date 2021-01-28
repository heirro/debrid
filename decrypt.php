<?php

function readableBytes($bytes) {
    $i = floor(log($bytes) / log(1024));
    $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

    return sprintf('%.02F', $bytes / pow(1024, $i)) * 1 . ' ' . $sizes[$i];
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.real-debrid.com/rest/1.0/unrestrict/link',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => false,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('link' => $_POST['linkdl']),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer K62KRHKOPWAZ424OVZOGLPPYB5CXPUNT5FCB56YSWVEF4PZCXYSQ'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$explode = json_decode($response, true);
$fileName = $explode['filename'];
$linkDownload = $explode['download'];
$fileSize = $explode['filesize'];
$linkdlmodif = str_replace(".download.real-debrid.com","-debrid.heirro.net",$linkDownload);
$varLink = $_POST['linkdl'];
?>
<?php if(isset($varLink)){ echo "<div class='mt-5 p-3 bg-green-600 text-white'><a href='".$linkdlmodif."'>$fileName</a> (".readableBytes($fileSize).")</div><br/>";
}else {}?>