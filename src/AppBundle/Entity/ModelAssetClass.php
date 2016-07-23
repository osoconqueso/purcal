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
     * @ManyToOne(targetEntity="AppBundle\Entity\AccountType", cascade={"all"}, fetch="EAGER")
     */
    private $accountType;

    /**
     * @var int
     * @ManyToOne(targetEntity="AppBundle\Entity\Model", cascade={"all"}, fetch="EAGER")
     */
    private $model;

    /**
     * @var int
     * @ManyToOne(targetEntity="AppBundle\Entity\AssetClass", cascade={"all"}, fetch="EAGER")
     */
    private $assetClass;

    /**
     * @var int
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
     * @return int
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param int $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * @return int
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param int $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getAssetClass()
    {
        return $this->assetClass;
    }

    /**
     * @param int $assetClass
     */
    public function setAssetClass($assetClass)
    {
        $this->assetClass = $assetClass;
    }

    /**
     * @return int
     */
    public function getPercentageValue()
    {
        return $this->percentageValue;
    }

    /**
     * @param int $percentageValue
     */
    public function setPercentageValue($percentageValue)
    {
        $this->percentageValue = $percentageValue;
    }

}