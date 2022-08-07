<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductRepository;
class ProductController extends AbstractController
{
 
    

    #[Route('/product', name: 'product')]
    public function index(Request $request, ProductRepository $productRepository, PaginatorInterface $paginator): Response
    {
        $products = $productRepository->findAll();

        $products = $paginator->paginate(
            $products, /* query NOT result */
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('product/index.html.twig', [
            'products' => $products,
                ]); 
    }
    
}

