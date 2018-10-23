<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Parents;
use AppBundle\Entity\Children;
use AppBundle\Form\ParentsForm;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
          return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
          ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function parentsAction(Request $request)
    {
        $children = $this->getDoctrine()->getManager();
        $parent = new Parents();
        $id = $request->query->get('id', 1);
        $form = $this->createForm(ParentsForm::class, $parent);
        if ($request->getMethod()=='POST') {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $children->persist($parent);
                $children->flush();
                return $this->redirectToRoute('data');
            }
        }
        return $this->render('add.html.twig', [
         'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/data", name="data")
     */
    public function index(Request $request)
    {
        $repositoryp = $this->getDoctrine()->getRepository('AppBundle:Parents');
        $parents = $repositoryp->findAll();
        $repositoryc = $this->getDoctrine()->getRepository('AppBundle:Children');
        $childrens = $repositoryc->findAll();
        return $this->render('data.html.twig', [
          'parents' => $parents,
          'childrens' => $childrens,
        ]);
    }
    /**
 * @Route("/youtube", name="_youtube")
 */
    public function youtubeSearch()
    {

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
