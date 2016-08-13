<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\AccountTypeService;
use Symfony\Component\HttpFoundation\JsonResponse;

class AppController extends Controller
{
    public function indexAction(Request $request)
    {
//        $urlService = $this->get('service.url');
//        $urlObject = new UrlService($request);
//        print_r($urlObject);
////        $params = $urlObject->params;
////        $url = $urlService->urlBuilder($params);
////        print($url);


        $params = [];
        $acctType = $request->query->get('acctType');
        if (isset($acctType)) {
            $params['acctType'] = $acctType;
        }

        $riskTol = $request->query->get('riskTol');
        if (isset($riskTol)) {
            $params['riskTol'] = $riskTol;
        }

        $model = $request->query->get('model');
        if (isset($model)) {
            $params['model'] = $model;
        }

        $dollarAmount = $request->query->get('dollarAmount');
        if (isset($dollarAmount)) {
            $params['dollarAmount'] = $dollarAmount;
        }

        $this->params = $params;

        return $this->render('AppBundle:Default:index.html.twig', [
        'accountTypes' => $this->getAllAccountTypes(),
        'riskTolerances' => $this->getAllRiskTolerances() ,
        'models' => $this->getAllModels()
//        'params' => $params
        ]);
    }

    protected function getAllAccountTypes()
    {
        $accountTypeService = $this->get('service.accounttype');
        $accountTypes = $accountTypeService->getAllAccountTypes();

        return $accountTypes;

    }
    
    protected function getAllRiskTolerances()
    {
        $riskToleranceService = $this->get('service.risktolerance');
        $riskTolerances = $riskToleranceService->getAllRiskTolerances();
        
        return $riskTolerances;
    }
    
    protected function getAllModels()
    {
        $modelService = $this->get('service.model');
        $models = $modelService->getAllModels();
        
        return $models;
    }

    public function populateModelsAction(Request $request)
    {
        $accountTypeId = $request->get('accountTypeId');
        $riskTolId = $request->get('riskTolId');

        $data = $this->get('service.model')->getModelsByAcctTypeAndRiskTol($accountTypeId, $riskTolId);
        return $this->json($data);

    }

}
