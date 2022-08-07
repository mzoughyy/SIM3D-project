<?php

namespace App\Controller\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class AccountsController extends AbstractController
{
    #[Route('/admin/accounts', name: 'admin_account')]
    public function index(EntityManagerInterface $ac): Response
    {
        $user = $ac->getRepository(User::class)->findAll();

        return $this->render('admin/accounts/index.html.twig', [
            'users' => $user
                ]);
    }
    #[Route('/admin/client/delete/{id}',name:'admin_client_delete')]
    public function delete(int $id, EntityManagerInterface $em){
        $client=$em->getRepository(user::class)->find($id);
        $em->remove($client);
        $em ->flush();
        $this->addFlash('success','Client deleted!');
        return $this-> redirectToRoute('admin_account');
    }

        }
    
  




