<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="account_type_id", type="integer")
     */
    private $accountTypeId;

    /**
     * @var int
     * @ORM\Column(name="model_id", type="integer")
     */
    private $modelId;

    /**
     * @var int
     * @ORM\Column(name="asset_class_id", type="integer")
     */
    private $assetClassId;

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
     * Set accountTypeId
     *
     * @param integer $accountTypeId
     *
     * @return ModelAssetClass
     */
    public function setAccountTypeId($accountTypeId)
    {
        $this->accountTypeId = $accountTypeId;

        return $this;
    }

    /**
     * Get accountTypeId
     *
     * @return int
     */
    public function getAccountTypeId()
    {
        return $this->accountTypeId;
    }

    /**
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * @param int $modelId
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
    }

    /**
     * @return int
     */
    public function getAssetClassId()
    {
        return $this->assetClassId;
    }

    /**
     * @param int $assetClassId
     */
    public function setAssetClassId($assetClassId)
    {
        $this->assetClassId = $assetClassId;
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

