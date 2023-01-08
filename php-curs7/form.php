<form method="post">
    <input type="email" name="email" placeholder="email" style="border:3px solid green ;
                                                                font-size:1.5rem; 
                                                                padding:1em 0.5em;
                                                                margin:1em 2em;
                                                                border-radius:0.5em"/><br/>

    <input type="text" name="name" placeholder="de la"  style="border:3px solid cornflowerblue ;
                                                                font-size:1.5rem; 
                                                                padding:1em 0.5em;
                                                                margin:1em 2em;
                                                                border-radius:0.5em"/><br/>
    <input type="submit" name="send_mail"   style="border:3px solid Chocolate;
                                                                background-color:Bisque;
                                                                color:forestgreen;
                                                                font-size:1.5rem; 
                                                                padding:1em 0.5em;
                                                                margin:1em 2em;
                                                                border-radius:0.5em"/>
</form>

<?php
if (isset($_POST['send_mail'])){
    // $headers = 'From: '. $_POST['mail'] . "\r\n". 
    //            'Reply-To:'. $_POST['mail'] .  . "\r\n" .
    //            'X-Mailer: PHP/' . phpversion();





    $headers = 'From: contact@mihaelagabriela.ro' . "\r\n" .
    'Reply-To: '. $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();





    mail('esmeraldagabriela83@yahoo.com' , 'Primul mail de pe propriul site' , $_POST['name'] .  ' hello from user with email:  ' . $_POST['email'] );
}
?>