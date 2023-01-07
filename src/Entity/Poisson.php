<?php

namespace App\Entity;


use App\Entity\Abstract\AbstractVivant;

final class Poisson extends AbstractVivant
{

    public function __construct()
    {
        parent::__construct("Nemo", 30, 70, 'rouge');
    }
}
