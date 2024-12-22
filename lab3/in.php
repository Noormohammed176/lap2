<!doctype html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width,
        initial-scale=1.0">
        <title> G and P </titie>
</head>
<body>
   <!--  نموذج get -->
     <form action="" method="get">
        <label for="name"> name: </label>
        <input type="text" id="name"
        name="name" required>
        <input type="submit" value=" ارسال get">
</form>
<?php
if (isset($_get['name']))
{
    $name = htmlspecialchars ($_get['name']);
    echo "<h3> مرحبا , $name! ( تم استخدام get) </h3>" ;
}
?>
<hr>
<!-- post -->
 <form action="" method="post">
    <label for="email">البريد الاكتروني:</label>
    <input type="email" id="email"
    name = "email" required>
    <input type="submit" value=" ارسال post">
</form>
<?php
if (isset($_post['email']))
{
    $email = htmlspecialchars ($_post['email']);
    echo "<h3> لقد ارسال بريدك الاكتروني : $email ( تم استخدام post) </h3>";
}
?>
</body>
</html>