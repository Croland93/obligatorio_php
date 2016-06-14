<?php
require_once 'clases/clase_base.php';
require_once 'clases/template.php';
require_once 'vendor/autoload.php';
require_once 'Google/Client.php';
require_once 'Google/Service/YouTube.php';
class ControladorApi extends ControladorIndex{
  function artista($params){
    $api = new SpotifyWebAPI\SpotifyWebAPI();
    $albums = $api->getArtistAlbums($params[1]);
    $img = $params[2]."//".$params[3]."/".$params[4]."/".$params[5];
    foreach($albums->items as $albums){
      $lista[] = array(
        'nombre' => $albums->name,
        'imagen' => $albums->images[0]->url,
        'id' => $albums->id
      );
    }
//artistas relacionados
    $relacionados = $api->getArtistRelatedArtists($params[1]);
    foreach($relacionados->artists as $rel){
      $listaRel[] = array(
        'nombre' => $rel->name,
        'imagen' => $rel->images[1]->url,
        'id' => $rel->id
        
      );
    }
//top tracks
    $tracks = $api->getArtistTopTracks($params[1], array('country' => 'uy'));
    foreach ($tracks->tracks as $track) {
      $listaTop[] = array(
        'nombre' => $track->name,
        'album' => $track->album->name
      );
    }
//eliminar nombres duplicados
    $nombre = "";
    $listan = array();
    $j = 0;
    for($i=1;$i<sizeof($lista);$i++){
      if($lista [$i]['nombre'] != $lista [$i-1]['nombre']){
        $listan[$j] = $lista[$i];
        $j++;
      }
    }
    $tpl = Template::getInstance();
    $datos = array('albums' => $listan, 'imgArtista' => $img, 'nomArtista' => $params[0], 'relacionados' => $listaRel, 'tops' => $listaTop);
    $tpl->mostrar('arti',$datos);
  }
  
  function busqueda($search){
    $spotify = true;
    $maxres = "15";
    if($search[2]=="track"){
      $search = $search[0]." ".$search[1]; 
      $spotify = false;
      $maxres = "1";
    }
//api youtube  
    $DEVELOPER_KEY = 'AIzaSyCvzMUlI20FF1QhePFmChy1AOnIhjYPlC0';
    $client = new Google_Client();
    $client->setDeveloperKey($DEVELOPER_KEY);
  // Define an object that will be used to make all API requests.
    $youtube = new Google_Service_YouTube($client);
    try {
    // Call the search.list method to retrieve results matching the specified
    // query term.
      
      $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'q' => $search,
        'maxResults' => $maxres,'type' => 'video','videoSyndicated' => "true",
        'videoCategoryId' => '10'
      ));
      foreach ($searchResponse['items'] as $searchResult) {
        $videos[]=$searchResult['id']['videoId'];
      }
      for ($i=0;$i<count($videos)-1;$i++){
        $listavideos .= $videos[$i].",";
      }
      $listavideos .= $videos[count($videos)-1];
    // Add each result to the appropriate list, and then display the lists of
    // matching videos, channels, and playlists.
  //  echo $videos;
    } catch (Google_Service_Exception $e) {
      $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
    } catch (Google_Exception $e) {
      $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
    }
//api spotify
    if($spotify==true || $search==null){
      $api = new SpotifyWebAPI\SpotifyWebAPI();
      $artists = $api->search($search, 'artist');
      foreach ($artists->artists->items as $artistas){
        $listart[] =  array(
          'nombre' => $artistas->name, 
          'imagen' => $artistas->images[1]->url,
          'id' => $artistas->id
        );
      }
      $tpl = Template::getInstance();
      $datos = array('datos' => $searchResponse, 'lista' => json_encode($videos),'listart'=>$listart);
      $tpl->mostrar('dashboard',$datos);
    }else{
      $tpl = Template::getInstance();
      $datos = array('datos' => $searchResponse);
      $tpl->mostrar('dashboard',$datos);
    }
  }
}
?>