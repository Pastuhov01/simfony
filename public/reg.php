<?php
include_once ROOT. '/templates/article/entrance.html.twig';
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
    

?>