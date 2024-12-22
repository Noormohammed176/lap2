<! DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset = "UTF-8">
        <meta naem = "viewport"
        content = "width = device-width,
        initial-scale = 1.0">
        <title>m php </title>
</head>
<body>
    <h2> مثال if </h2>
    <?php
    $age = 18 ;
    if ($age >= 18) {
        echo "you old";
    }
    else{
        echo "you small";
    }
    ?>
    // if
    <h2> مثال for </h2>
    <?php 
    echo "5 to 1 from numbers:<br>";
    for ($i = 1 ; $i <=5 ; $i++)
    {
        echo $i . "<br>";
    }
    ?>
    <h2>مثال switch </h2>
    <?php
    $day =3;
switch ($day)
{
    case 1:
        echo "السبت";
        break;
        case 2:
            echo " الاحد ";
            break;
            case 3:
                echo "الاثنين";
                break;
                default:
                echo "غير مصنف";
}
?>
<h2> مثال while </h2>
<?php
$count = 1;
while ($count <=100)
{
    echo "العدد هو : $count <br>";
    $count++;
}
?>
<h2>مثال do-while </h2>
<?php
$count = 1 ;
do
{
    echo "العدد هو : $count <br>";
    $count++;
} while ($count <= 100);
?>
</body>
</html>

