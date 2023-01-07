<?php

namespace App\Entity;


use App\Entity\Abstract\AbstractVivant;

final class Algue extends AbstractVivant
{

    public function __construct()
    {
        parent::__construct("Algue", 10, 100, 'bleu');
    }
}
