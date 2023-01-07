<?php

namespace App\Controller;

use App\Entity\Abstract\AbstractVivant;
use App\Entity\Algue;
use App\Interface\ReproductionInterface;

final class AlgueController extends AbstractVivant implements ReproductionInterface
{

    private $algue;

    public function __construct(Algue $algue)
    {
        $this->algue = $algue;
    }

    public function reproduction(): string
    {

        return print_r("les algues se reproduisent" . PHP_EOL);
    }
}
