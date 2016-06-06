<?php

require_once 'clases/clase_base.php';
require_once 'clases/template.php';
require_once 'vendor/autoload.php';
require_once 'Google/Client.php';
require_once 'Google/Service/YouTube.php';
 /*   
$htmlBody = <<<END

<iframe  width="420" height="315"
src="http://www.youtube.com/embed/VPRjCeoBqrI?controls=0&modestbranding=1&rel=1&fs=0&frameborder=”0″&showinfo=0&disablekb=1&iv_load_policy=3&enablejsapi=1&modestbranding=1&rel=1&fs=0&frameborder=”0″&showinfo=0&disablekb=1&iv_load_policy=3&enablejsapi=1"">
</iframe>>
<form method="GET">
  <div>
    Search Term: <input type="search" id="q" name="q" placeholder="Enter Search Term">
  </div>
  <div>
    Max Results: <input type="number" id="maxResults" name="maxResults" min="1" max="50" step="1" value="25">
  </div>
  <input type="submit" value="Search">
</form>
END;
*/
// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
//if ($_GET['q'] && $_GET['maxResults']) {
  // Call set_include_path() as needed to point to your client library.
//set_include_path('E:\wamp64\vendor/google/apiclient/src/Google/Client.php');

  /*
   * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
   * Google Developers Console <https://console.developers.google.com/>
   * Please ensure that you have enabled the YouTube Data API for your project.
   */


  class ControladorApi extends ControladorIndex{

function busqueda($search){
$DEVELOPER_KEY = 'AIzaSyCvzMUlI20FF1QhePFmChy1AOnIhjYPlC0';



  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);

  // Define an object that will be used to make all API requests.
  $youtube = new Google_Service_YouTube($client);
//var_dump($youtube);
  try {
    // Call the search.list method to retrieve results matching the specified
    // query term.
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
      'q' => $search,
      'maxResults' => "15",'type' => 'video','videoSyndicated' => "true",
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

      $tpl = Template::getInstance();

      $datos = array('datos' => $searchResponse, 'lista' => json_encode($videos));
      $tpl->mostrar('dashboard',$datos);

  } catch (Google_Service_Exception $e) {
    $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  } catch (Google_Exception $e) {
    $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  }



}

 

}


?>
