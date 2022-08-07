<?php

namespace App\Controller\Admin;

use App\Entity\Contant;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/admin/contact', name: 'admin_contact')]
    public function index(EntityManagerInterface $em): Response
    {
        $contacts = $em->getRepository(Contant::class)->findAll();
      /*  dump($contacts);
        $contactOne = $em->getRepository(Contant::class)->findOneBy(['email'=>'amir.souissi@yahoo.fr']);
        dump($contactOne);
        $contactsbyemploi = $em->getRepository(Contant::class)->findBy(['email'=>'amir.souissi@yahoo.fr']);
        dump($contactsbyemploi);
        $contactId = $em->getRepository(Contant::class)->find(52);
        dump($contactId);z
        die;*/
        return $this->render('admin/contact/index.html.twig', [
            'contacts' => $contacts
        ]);
    }
}
