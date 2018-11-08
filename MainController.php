<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
    	$child = [ 'id' => 4, 'txt' => 'text4', 'children' => [
    		'id' => 5, 'txt' => 'text5', 'children'=> 0 
    	] ];
    	
    	$coments = [ 
    		['id' => 1, 'txt' => 'text1', 'children' => $child 
    	    ],
    	    ['id' => 2, 'txt' => 'text2', 'children' => 0
    	    ],
    	    ['id' => 3, 'txt' => 'text3', 'children' => 0
    	    ],

    	];

    	dump($coments);
        return $this->render('main/index.html.twig', [
            'coments' => $coments
        ]);
    }
}
