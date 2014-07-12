<?php

namespace Tanix\Bundle\TestJsonResponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
    */
    public function indexAction()
    {
        $data = array();
        $data['root'][] = array('data1', 'data2', 'data3');
        $data['root'][] = array('あああ', 'いいい', 'ううう');
        
        $response = new JsonResponse($data);
        
        return $response;
    }
    
    /**
     * @Route("/header")
    */
    public function headerAction()
    {
        $data = array();
        $data['root'][] = array('data1', 'data2', 'data3');
        $data['root'][] = array('あああ', 'いいい', 'ううう');
        
        $headers = array('X-Tanix-Test' => time());
        
        $response = new JsonResponse($data, 200, $headers);
        
        return $response;
    }
}
