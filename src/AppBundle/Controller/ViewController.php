<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ce controlleur s'occupe de retourner les vues de l'application
 *
 * @author hicham
 */
class ViewController extends Controller{
    /**
     * la methode getYellow prend en parametre $r qui est de type Request
     * la route correspond à l'URI passée dans la requête HTTP
     * ici l'URI = yellow
     * @Route("/yellow",name="y")
     * @return Response correspand a la couleur passée dans l'URI
     */
    public function getYellow(Request $r){
        //getMethod() retourne le type de la request
        //Si $r est de type GET
        if($r->getMethod() == "GET"){
            //on retourne une page web
            return $this->render("default/couleurs/yellow.html.twig");
        }else{
            return new Response ("Yellow");
        }   
    }
    /**
     * @Route("/red",name="r")
     * @return Response correspand a la couleur passée dans l'URI
     */
    public function getRed(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/red.html.twig");
        }else{
        return new Response ("Red");
    }
    }
    /**
     * @Route("/blue",name="b")
     * @return Response correspand a la couleur passée dans l'URI
     */
    public function getBlue(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/blue.html.twig");
        }else{
        return new Response ("Blue");
    }
    }
    
    /**
     * @Route("/green",name="g")
     * @return Response correspand a la couleur passée dans l'URI
     */
    public function getGreen(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/green.html.twig");
        }else{
        return new Response ("Green");
    }
    }
}
