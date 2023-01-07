<?php

use App\Entity\Poisson;
use PHPUnit\Framework\TestCase;

class PoissonControllerTest extends TestCase

{


    public function testPoisson()
    {
        $poisson = new Poisson();

        $this->assertEquals($poisson->getNom(), "Nemo");
    }
}
