<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contact form</h1>
<p>Please fill this form and send us</p>
    <form method="POST" action="contact_form.php">
        <p>
            <label for="inputName">Name</label>
            <input type="text" name="name" id="inputName"/>
        </p>


        <p>
            <label for="inputEmail">Email</label>
            <input type="email" name="email" id="inputEmail"/>
        </p>


        <p>
            <label for="inputSubject">Subject</label>
            <input type="text" name="subject" id="inputSubject"/>
        </p>


        <p>
            <label for="inputComment">Comment</label>
            <textarea  name="comment" id="inputComment"></textarea>
        </p>


        <input type="submit" name="Submit"/>
        <input type="reset" name="Reset"/>
    </form>
</body>
</html>