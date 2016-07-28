<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * ModelAssetClass
 *
 * @ORM\Table(name="model_asset_class")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModelAssetClassRepository")
 */
class ModelAssetClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ManyToOne(targetEntity="AppBundle\Entity\AccountType", cascade={"all"}, fetch="EAGER")
     */
    private $accountType;

    /**
     * @var int
     *
     * @ManyToOne(targetEntity="AppBundle\Entity\RiskTolerance", cascade={"all"}, fetch="EAGER")
     */
    private $riskTolerance;

    /**
     * @var int
     *
     * @ManyToOne(targetEntity="AppBundle\Entity\Model", cascade={"all"}, fetch="EAGER")
     */
    private $model;

    /**
     * @var int
     *
     * @ManyToOne(targetEntity="AppBundle\Entity\AssetClass", cascade={"all"}, fetch="EAGER")
     */
    private $assetClass;

    /**
     * @var int
     *
     * @ORM\Column(name="percentage_value", type="integer")
     */
    private $percentageValue;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountType
     *
     * @param integer $accountType
     *
     * @return ModelAssetClass
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return int
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set riskTolerance
     *
     * @param integer $riskTolerance
     *
     * @return ModelAssetClass
     */
    public function setRiskTolerance($riskTolerance)
    {
        $this->riskTolerance = $riskTolerance;

        return $this;
    }

    /**
     * Get riskTolerance
     *
     * @return int
     */
    public function getRiskTolerance()
    {
        return $this->riskTolerance;
    }

    /**
     * Set model
     *
     * @param integer $model
     *
     * @return ModelAssetClass
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return int
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set assetClass
     *
     * @param integer $assetClass
     *
     * @return ModelAssetClass
     */
    public function setAssetClass($assetClass)
    {
        $this->assetClass = $assetClass;

        return $this;
    }

    /**
     * Get assetClass
     *
     * @return int
     */
    public function getAssetClass()
    {
        return $this->assetClass;
    }

    /**
     * Set percentageValue
     *
     * @param integer $percentageValue
     *
     * @return ModelAssetClass
     */
    public function setPercentageValue($percentageValue)
    {
        $this->percentageValue = $percentageValue;

        return $this;
    }

    /**
     * Get percentageValue
     *
     * @return int
     */
    public function getPercentageValue()
    {
        return $this->percentageValue;
    }
}


