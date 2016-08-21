<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\AccountTypeService;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Service\CalculatorService;

class AppController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig', [
        'accountTypes' => $this->getAllAccountTypes(),
        'riskTolerances' => $this->getAllRiskTolerances(),
        'models' => $this->getAllModels(),
        'percentageValues' => $this->calculateAction($request)
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

    protected function getPercentageValues()
    {
        $calculatorService = $this->get('service.calculator');
        $percentageValues = $calculatorService->getPercentageValues();

        return $percentageValues;
    }

    public function populateModelsAction(Request $request)
    {
        $accountTypeId = $request->get('accountTypeId');
        $riskTolId = $request->get('riskTolId');

        $data = $this->get('service.model')->getModelsByAcctTypeAndRiskTol($accountTypeId, $riskTolId);
        return $this->json($data);

    }

    public function calculateAction(Request $request)
    {
        $dollarAmount = $request->get('dollarAmount');
        $accountTypeId = $request->get('accountType');
        $riskTolId = $request->get('riskTol');
        $modelId = $request->get('model');


        $data = $this->get('service.calculator')->calculateDollarAmount($dollarAmount, $accountTypeId, $riskTolId, $modelId);
        return $this->json($data);
    }
}
