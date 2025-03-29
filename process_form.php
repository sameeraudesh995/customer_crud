

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
    <h1>Thank you!</h1>
<p>Here are the information you've submitted</p>

<ol>
   <li>
       <em>Name</em>
       <?php echo $_POST['name']?>
   </li>

    <li>
       <em>Email</em>
       <?php echo $_POST['email']?>
   </li>

    <li>
       <em>Subject</em>
       <?php echo $_POST['subject']?>
   </li>

    <li>
       <em>Comment</em>
       <?php echo $_POST['comment']?>
   </li>
</ol>
</body>
</html>
