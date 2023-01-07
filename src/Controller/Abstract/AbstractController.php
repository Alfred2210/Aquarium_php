<?php

namespace App\Controller\Abstract;


use App\Entity\Abstract\AbstractVivant;

abstract class AbstractController extends AbstractVivant
{
    public function __construct()
    {
        parent::__construct("Etre", 50, 100, '');
    }


    public function getOld(AbstractVivant $vivant): int
    {

        return $this->m_age++;
    }

    public function isDead(AbstractVivant $vivant): string
    {

        if ($vivant->m_age > 20) {
            return $this->m_alive = false;
        }

        return print_r("mort");
    }
}
