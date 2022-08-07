<?php

namespace App\Controller;

use App\Entity\Contant;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    #[Route('/contact', name: 'contact')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $contact = new Contant();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $contact->setCreatedAt(new \DateTime());
            $em->persist($contact);
            $em->flush();
            $this->addFlash('success', 'Your message has been sent');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }
    #[Route('/admin/contact/delete/{id}',name:'admin_contact_delete')]
    public function delete(int $id, EntityManagerInterface $em){
        $contact=$em->getRepository(contant::class)->find($id);
        $em->remove($contact);
        $em ->flush();
        
        return $this-> redirectToRoute('admin_contact');
    }
  
}
