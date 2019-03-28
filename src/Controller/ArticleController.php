<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/page2", name="article_entrance")
     */
    public function entrance()
    {
        return $this->render('article/entrance.html.twig');
    }
/**
     * @Route("/register-user", name="register")
     */
    public function register()
    {
        
if (isset($_POST['reg'])) {
      
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $nickname = htmlspecialchars($_POST['nickname']);
        $text = htmlspecialchars($_POST['text']);

        preg_match('/^.{1,15}$/u', $_POST['nickname'], $value_nickname);
       
        if ($value_nickname){
            $nickname = htmlspecialchars($_POST['nickname']);
        }else{
            echo 'Вы ввели не верно login';
        }
        
        
        preg_match('/^[\w-]{8,}$/u', $_POST['password'], $value_password);
       
        if ( $value_password){
            $password = htmlspecialchars($_POST['password']);
        }else{
            echo 'Вы ввели не верно пароль';
        }
        }
        
        preg_match('/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/', $_POST['email'], $value_email);
       
        if ( $value_email){
            $email = htmlspecialchars($_POST['email']);
        }else{
            echo 'Вы ввели не верно email';
        }
        
        $text =  preg_replace_callback('/\p{Lu}/u', function($matches){
        return mb_strtolower($matches[0], "utf-8");}, $_POST['text']);

    echo "Вы ввели Логин:$nickname<br/>Вы ввелиE-mail:$email<br/>";
    echo "Вы ввели Текст:$text<br/>";
    //exit;
        return $this->render('authorisation/homepage.html.twig',
            [
            'nick' => $nickname,
            ]
            );
    }
    /**
     * @Route("/news/page3", name="article_checkIn")
     */
    public function checkIn()
    {
        return $this->render('article/checkIn.html.twig'
        );
    }

  /**
     * @Route("/news/page4", name="article_news")
     */
    public function news()
    {
        return $this->render('article/news.html.twig');
    }
    
}