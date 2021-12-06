<?php

namespace Controllers;

class Index extends PublicController
{
    
    public function run() :void
    //FUNCION QUE SE EJECUTARÁ CUANDO UNO PIDA EL INDEX
    {
        \Utilities\Site::addLink("public/css/heropanel.css");
        $viewData = array();
        $viewData["page"] = $this->toString();
        $viewData["heroes"]= \Dao\HeroPanel::getActiveHereos();
        $viewData["algoMas"] = "Esto es algo más que se envía a la vista";
        \Views\Renderer::render("index", $viewData);
    }
}
?>
