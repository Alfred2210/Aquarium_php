<?php

use App\Controller\AlgueController;
use App\Entity\Algue;

use PHPUnit\Framework\TestCase;

class AlgueControllerTest extends TestCase

{




    public function testAlgue()
    {
        $algue = new Algue();
        $alguec = new AlgueController($algue);

        $this->assertEquals($alguec->reproduction($algue), "les algues se reproduisent", 'Les valeurs ne sont pas bon');
    }
}
