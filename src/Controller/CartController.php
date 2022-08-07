<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(SessionInterface $session,ProductRepository $productRepository): Response
    {
        $cart = $session->get('cart',[]);
        $cartWithData = [];
        foreach($cart as $id => $quantity){
            $cartWithData[] = [
            'product'=> $productRepository->find($id),
            'quantity'=> $quantity
            ];
        }
       $total = 0;
       foreach($cartWithData as $item){
           $totalItem = $item['product']->getPrice() * $item['quantity'];
           $total +=$totalItem;
       } 
        return $this->render('cart/index.html.twig', [
            'items'=>$cartWithData,
            'total'=>$total
        ]);
    }
    #[Route('/cart/add/{id}', name:'add_cart')]
    public function add($id,SessionInterface $session){


        $cart = $session->get('cart',[]);
        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id]=1;
        }
        $cart[$id] = 1;
        $session->set('cart',$cart);
        return $this->redirectToRoute('app_cart');
    }
    #[Route('/cart/delete/{id}',name:'delete_cart')]
     public function Delete($id,SessionInterface $session)
    {
        $cart = $session->get('cart', []);
        if(!empty($cart[$id])){
            unset($cart[$id]);
        
        }
        $session->set('cart',$cart);
    return $this->redirectToRoute('app_cart');
    }

}
