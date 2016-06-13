<?php
error_reporting(-1);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
/*
$session = new SpotifyWebAPI\Session(
    '278af88382d24799bd218ec69887f745',
    'ba255055ce544da1b51536493aa15a9b',
    'http://localhost'
);
*/	
$api = new SpotifyWebAPI\SpotifyWebAPI();
$artists = $api->search('blur', 'artist');
//$j = json_decode($artists);
$albums = $api->search('blur', 'album');
var_dump($albums);




/*
if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

    print_r($api->me());

} else {
    $scopes = array(
        'scope' => array(
            'user-read-email',
            'user-library-modify',
        ),
    );

    header('Location: ' . $session->getAuthorizeUrl($scopes));
}
*/
?>