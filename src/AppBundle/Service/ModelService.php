<?php

namespace AppBundle\Service;

use AppBundle\Repository\ModelRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use AppBundle\Entity\Model;

/**
 * Class ModelService
 * @package AppBundle\Service
 */
class ModelService
{
    /**
     * @var ModelRepository
     */
    protected $modelRepo;

    /**
     * @var Model[]
     */
    protected $models;

    /**
     * @var Model
     */
    protected $model;

    /**
     * ModelService constructor.
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->modelRepo = $registry->getManager()->getRepository('AppBundle:Model');
    }

    /**
     * Get all models from db
     * @return Model[]
     */
    public function getAllModels()
    {
        if (!isset($this->model)) {
            $this->model = $this->modelRepo->findBy([], ['name' => 'asc']);
        }

        return $this->model;
    }
}