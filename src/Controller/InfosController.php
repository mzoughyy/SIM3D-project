<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class InfosController extends AbstractController
{
    #[Route('/product_details/{id}',name:'product_details')]
        public function display(int $id, EntityManagerInterface $pr){
            $products = $pr->getRepository(Product::class)->find($id);

            return $this->render('infos/index.html.twig', [
                'products' => $products
                    ]);
            
        }
    }    