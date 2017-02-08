<?php

namespace App\Service;

use App\Repository\UserRepository;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function fetchAll()
    {
        return $this->userRepository->findAll();
    }
    public function fetchOne($id)
    {
        return $this->userRepository->find($id);
    }
}
