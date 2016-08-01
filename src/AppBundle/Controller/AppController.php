<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\AccountTypeService;

class AppController extends Controller
{
    public function indexAction(Request $request)
    {
        $acctType = $request->query->get('acctType');
        $riskTol = $request->query->get('riskTol');
        $model = $request->query->get('model');
        $dollarAmount = $request->query->get('dollarAmount');
        
        $params = array(
            'acctType' => $acctType,
            'riskTol' => $riskTol,
            'model' => $model,
            'dollarAmount' => $dollarAmount
        );

        return $this->render('AppBundle:Default:index.html.twig', [
        'accountTypes' => $this->getAllAccountTypes(),
        'riskTolerances' => $this->getAllRiskTolerances() ,
        'models' => $this->getAllModels(),
        'params' => $params    
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
    
}
