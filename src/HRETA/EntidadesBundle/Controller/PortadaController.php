<?php
namespace HRETA\EntidadesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PortadaController
 *
 * @author Ricardo
 */
class PortadaController extends Controller {
  
     public function PortadaAction()
    {
    
     return $this->render('EntidadesBundle:Default:Portada.html.twig');
    
    }
    
    
}
