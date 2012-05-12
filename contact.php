<?php
    //cc-by maarten eyskens
    
    function secure($string = ''){
        return stripslashes(trim(htmlspecialchars($string)));
        }
    if (isset($_POST['name'])){
    if (empty($_POST['name'])){
    echo 'enter your name';
   
    }
    if (empty($_POST['email'])){
    echo 'enter your email';
   
    }
    if (empty($_POST['message'])){
     echo 'enter your message';
     
    }
    $name=secure($_POST['name']);
    $email=secure($_POST['email']);
    $message=secure($_POST['message']);
    $to = "YOUR EMAIL";
 $subject = "Contact";
        $body = "Name: $name Email: $email Message: $message";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
    }
        
        ?>
        <form name="contact" action="contact.php" method="post">
            <input type="text" name="name" placeholder="name" /><br>
            <input type="text" name="email" placeholder="email" /><br>
            <textarea name="message" placeholder="you message here"></textarea>
            <br>
            <input type="submit" value="Sent" />