<?php

namespace AppBundle\Service;

use AppBundle\Repository\ModelAssetClassRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Class CalculatorService
 * @package AppBundle\Service
 */
class CalculatorService
{

    /**
     * @var ModelAssetClassRepository
     */
    protected $modelAssetClassRepo;

    public function __construct(Registry $registry)
    {
        $this->modelAssetClassRepo = $registry->getManager()->getRepository('AppBundle:ModelAssetClass');
    }

    /**
     * @param $dollarAmount int
     * @param $acctTypeId
     * @param $riskTolId int
     * @param $modelId int
     * @return array 
     * calculates dollar amount according to asset class and model
     */
    public function calculateDollarAmount($dollarAmount, $acctTypeId, $riskTolId, $modelId)
    {

        $percentageValues = $this->modelAssetClassRepo->getPercentageValues($acctTypeId, $riskTolId, $modelId);

        $return = [];

        foreach ($percentageValues as $group) {
            $value = $group['percentage_value'];
            $calculatedValue = ($value/100) * $dollarAmount;
            $assetClass = $group['name'];

            $return[] = [
                'value' => $value,
                'calculatedValue' => $calculatedValue,
                'assetClass' => $assetClass
            ];
        }

        return($return);

    }

}