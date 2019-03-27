<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article1;
use App\Repository\Article1Repository;
class MyController extends AbstractController
{
    /**
     * @Route("/моя новость", name="my_news")
     */
    public function myNews(Article1Repository $articleRepository)
    {
       $articles = $articleRepository->findAll();
       dump($articles);
        return $this->render('article/news.html.twig', compact('articles'));
    }
 /**
     * @Route("/все новости", name="all_news")
     */
    public function allNews()
    {
       
        return $this->render('article/news.html.twig', [
        'controller_name'=> 'MyController',
        ]);
    }
   

}