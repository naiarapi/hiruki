<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Cliente;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     **/ 
    public function indexAction(Request $request)
    {
        $name = 'Naiara';
        
        return $this->render('default/index.html.twig', ['name' => $name]);
    }
    
        /**
     * @Route("/cliente/create", name="create_cliente")
     */
    public function createIndex()
    {
        $cliente = new Cliente();
        $cliente->setNombre("Naiara");
        $cliente->setApellido("Padules");
        $cliente->setTelefono(943425869);
     
        $em = $this->getDoctrine()->getManager();
     
        $em->persist($cliente);
     
        // executes the query
        $em->flush();
     
        return new Response('Nuevo cliente con el ID '.$cliente->getId());
    }
    
        /**
     * @Route("/cliente/update/{clienteId}")
     */
    public function updateAction($clienteId)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('AppBundle:Cliente')->find($postCliente);
     
        if (!$cliente) {
            throw $this->createNotFoundException(
                'No existe ningun cliente con el ID '.$postId
            );
        }
     
        $post->setNombre('Nuevo cliente insertado');
        $em->flush();
     
        return new Response('Cliente modificado con el ID'.$post->getId());
    }
    
    
        /**
     * @Route("/cliente/remove/{clienteId}", name="remove_cliente")
     */
    public function removeAction($clienteId)
    {
        $cliente = $this->getDoctrine()->getRepository('AppBundle:Cliente')->find($clienteId);
     
        if(!$cliente)
        {
            throw $this->createNotFoundException(
                'No se ha encontrado el cliente con el ID '.$clienteId
            );
        }
     
        $em = $this->getDoctrine()->getManager();
        $em->remove($cliente);
        $em->flush();
     
        return new Response("El cliente con el ID {$clienteId} ha sido eliminado");
    }
}
