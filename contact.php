<?php

function filterName($field=""){
    $field =filter_var(trim($field), FILTER_SANITIZE_STRING);

    if(filter_var($field,FILTER_VALIDATE_REGEXP, array('options' => array('regexp'=>'/^[a-zA-Z\s]+$/')))){
        return $field;
    }else{
        return false;
    }

}

function filterEmail($field=""){
    $field =filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    if(filter_var($field,FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return false;
    }

}
function filterString($field=""){
    $field =filter_var(trim($field), FILTER_SANITIZE_STRING);
    if (!empty($field)) {
        return $field;
    }else{
        return false;
    }
}


$name = $email = $subject = $comment = "";
$nameErr = $emailErr = $subjectErr = $commentErr = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST["name"])){
        $nameErr = "please enter name";
    }else{
        $name=filterName($_POST['name']);
        if($name == FALSE){
            $nameErr = "please enter a valid name";
        }
    }

    if(empty($_POST["email"])){
        $emailErr = "please enter email";
    }
    else{
        $email = filterEmail($_POST['email']);
        if($email == FALSE){
            $emailErr = "please enter a valid email";
        }
    }

    if (empty($_POST["subject"])){
        $subject = "";
    }else{
        $subject = filterString($_POST["subject"]);
    }
    if (empty($_POST["comment"])){
        $commentErr = "please enter comment";
    }else{
        $comment = filterString($_POST["comment"]);
        if($comment == FALSE){
            $commentErr = "please enter a valid comment";
        }


    }
    if(empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($commentErr)){
        //Recipient's email address
        $to = "webmaster@example.com";

        // create email header
        $header = "From:".$email."\r\n"."Reply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();

        //sending email
        if(@mail($to,$subject,$comment,$header)){
            echo "<p class='success'>Your message has been sent successfully.</p>";
        }else{
            echo "<p class='error'>There was an error sending your message.</p>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container ml-10">
    <h1>Contact Form</h1>
    <form method="POST" action="contact.php">
        <label>Please fill these details and submit</label>

        <div class="form-group">
            <label for="inputName">Name: <sup>*</sup></label>
            <input class="form-control" type="text" name="name" id="inputName" value="<?php echo $name ?>" />
            <span class="error text-warning"><?= $nameErr ?></span>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email: <sup>*</sup></label>
            <input class="form-control" type="email" name="email" id="inputEmail" width="200px" value="<?php echo $email ?>" />
            <span class="error text-warning"><?= $emailErr?></span>
        </div>

        <div class="form-group mb-2">
            <label for="inputSubject">Subject:</label>
            <input class="form-control" type="text" name="subject" id="inputSubject" value="<?php echo $subject  ?>" />
            <span class="error text-warning" ><?= $subjectErr  ?></span>
        </div>

        <div class="form-group mb-3">
            <label for="inputComment">Message: <sup>*</sup></label>
            <textarea class="form-control" name="comment" id="inputComment" rows="5" cols="30" ><?php echo $comment ?></textarea>
            <span class="error text-warning"><?= $commentErr ?></span>
        </div>

        <hr>

            <input class="bg-primary text-white " type="submit" name="Send" value="Submit"/>
            <input class="bg-success text-white " type="reset" name="Reset" value="Clear Form"/>

    </form>

</div>

</body>
</html>