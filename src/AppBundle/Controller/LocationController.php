<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\LocationType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;

class LocationController extends Controller
{
    /**
     * @Route("/location", methods="GET")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Location:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("locations", methods="GET")
     */
    public function listAction()
    {
        return $this->render('AppBundle:Location:list.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("addlocation")
     */
    public function newAction(Request $request)
    {
        $location = new Location();
        $form = $this->createForm(LocationType::class, $location);
        //$request = $this->get('request');
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // ... perform some action, such as saving the data to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($location);
            $em->flush();
            
            return $this->redirectToRoute('location_registered');
        }
        return $this->render('AppBundle:Location:new.html.twig', array(
            // ...
            'form' => $form->createView()
        ));
        // ...
        
    }

    /**
     * @Route("store_location", methods="POST")
     */
    public function storeAction()
    {
        
    }
}
