<?php

namespace AppBundle\Service;

use AppBundle\Repository\RiskToleranceRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use AppBundle\Entity\RiskTolerance;

/**
 * Class RiskToleranceService
 * @package AppBundle\Service
 */
class RiskToleranceService
{
    /**
     * @var RiskToleranceRepository
     */
    protected $riskToleranceRepo;

    /**
     * @var RiskTolerance[]
     */
    protected $riskTolerances;

    /**
     * @var RiskTolerance
     */
    protected $riskTolerance;

    /**
     * RiskToleranceService constructor.
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->riskToleranceRepo = $registry->getManager()->getRepository('AppBundle:RiskTolerance');
    }

    /**
     * Get all risk tolerances from db
     * @return RiskTolerance[]
     */
    public function getAllRiskTolerances()
    {
        if (!isset($this->riskTolerance)) {
            $this->riskTolerance = $this->riskToleranceRepo->findBy([], ['name' => 'asc']);
        }

        return $this->riskTolerance;
    }
}