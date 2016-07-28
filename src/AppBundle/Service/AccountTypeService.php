<?php

namespace AppBundle\Service;

use AppBundle\Repository\AccountTypeRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use AppBundle\Entity\AccountType;

/**
 * Class CategoryService
 * @package AppBundle\Service
 */
class AccountTypeService
{
    /**
     * @var AccountTypeRepository
     */
    protected $accountTypeRepo;

    /**
     * @var AccountType[]
     */
    protected $accountTypes;

    /**
     * @var AccountType
     */
    protected $accountType;

    /**
     * AccountTypeService constructor.
     * @param Registry $registry
     */
    public function __construct(Registry $registry)
    {
        $this->categoryRepo = $registry->getManager()->getRepository('AppBundle:AccountType');
    }

    /**
     * Get all categories for the site
     * @return AccountType[]
     */
    public function getAllAccountTypes()
    {
        if (!isset($this->accountType)) {
            $this->accountType = $this->accountTypeRepo->findBy([], ['name' => 'asc']);;
        }

        return $this->accountType;
    }
}