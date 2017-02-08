<?php

namespace App\Service;

use App\Repository\OrganisationRepository;

class OrganisationService
{
    protected $organisationRepository;
    public function __construct(OrganisationRepository $organisationRepository)
    {
        $this->organisationRepository = $organisationRepository;
    }
    public function fetchAll()
    {
        return $this->organisationRepository->findAll();
    }
    public function fetchOne($id)
    {
        return $this->organisationRepository->find($id);
    }
}
