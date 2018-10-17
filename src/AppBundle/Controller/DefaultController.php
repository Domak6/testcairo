<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
 * @Route("/youtube", name="_youtube")
 */
public function youtubeSearch() {

    $client = new \Google_Client();
    $client->setApplicationName("testcario");
    $apiKey = "AIzaSyAIWZd-uYiL2CxRJBj-Yo8fBcAscT-HSGs";
    $client->setDeveloperKey($apiKey);
    $service = new \Google_Service_YouTube($client);
    $searchResponse = $service->search->listSearch('id,snippet', array(
        'q' => 'symfony 3',
        'maxResults' => 10,
    ));
    $videos = array();
    $playlists = array();

    foreach ($searchResponse['items'] as $searchResult) {
        switch ($searchResult['id']['kind']) {
            case 'youtube#video':
                $videos[]= array("title" => $searchResult['snippet']['title'], "video_id" => $searchResult['id']['videoId']);
                break;
            case 'youtube#playlist':
                $playlists[]= array("title" => $searchResult['snippet']['title'], "playlist_id" => $searchResult['id']['playlistId']);
                break;
        }
    }
    return $this->render('default/index.html.twig', [
        'youtube_videos' => $videos,
        'youtube_playlists' => $playlists
      ]);
  }
}
