<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
<?php
if(isset($_POST['form_submitted'])):
// Do the registration for user
    ?>
    Thank you <?php echo $_POST['firstname']; ?>. The registration is complete.
<?php
else:
    ?>
    <form method="POST" action="registrationForm.php">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" value="" placeholder="First name" required>

        <br/> <br/>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" value="" placeholder="Last name" required>

        <input type="hidden" name="form_submitted" value="1">
        <br/> <br/>

        <input type="submit" name="submit" value="Register">

    </form>
<?php
endif;
?>
</body>
</html>