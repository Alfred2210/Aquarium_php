<?php




use App\Controller\AlgueController;
use App\Controller\PoissonController;
use App\Entity\Algue;
use App\Entity\Poisson;


require_once __DIR__ . '/vendor/autoload.php';

$algue = new Algue();
$alguecontroller = new AlgueController($algue);
$alguecontroller->reproduction();

$poisson = new Poisson();

$poissoncontroller = new PoissonController($poisson);

$poissoncontroller->nager();
