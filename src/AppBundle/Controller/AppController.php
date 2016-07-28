<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\AccountTypeService;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig', [
        'accountTypes' => $this->getAllAccountTypes()
       ]);
    }

    protected function getAllAccountTypes()
    {
//        $accountTypeService = $this->get('AccountTypeService');
//        $accountTypes = $accountTypeService->getAllAccountTypes();
//
//        return $accountTypes;
        $repo = $this->getDoctrine()
            ->getRepository('AppBundle:AccountType');
        $accountTypes = $repo->findAll();
        return $accountTypes;
    }
    
}
