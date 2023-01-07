<?php


namespace App\Controller;

use App\Entity\Poisson;
use App\Entity\Abstract\AbstractVivant;
use App\Interface\ReproductionInterface;
use App\Interface\SwimInterface;

final class PoissonController extends AbstractVivant implements ReproductionInterface, SwimInterface

{

    private $poisson;

    public function __construct(Poisson $poisson)
    {
        $this->poisson = $poisson;
    }

    public function reproduction(): string
    {

        return print_r("les poissons se reproduisent" . PHP_EOL);
    }

    public function nager(): string
    {

        return print_r("le poisson nage" . PHP_EOL);
    }
}
