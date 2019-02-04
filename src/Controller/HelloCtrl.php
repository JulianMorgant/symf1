<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloCtrl extends AbstractController {

     /**
     * @Route("/",name="helloPage")
     */
    public function hello()
    {
        $args = [
            "texte" => "Hello World",
            "title"=>"Ma page",
            "nombre" => -15,
            "tab" => ["momo" => 5,"raoul" => 3,"go" => 6],
            "nbTest" => 8
            ];


        return $this->render('hello.html.twig',$args);
    }
}
?>