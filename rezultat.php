<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //print_r($_POST);
    if($_POST['godine']<18)
    {
        echo('Pozdrav, <span style="color: red">'.$_POST['ime']. ' ' .$_POST['prezime'] . '</span>!');
        echo('<br>Ti nisi PUNOLJETAN!');
    }
    else
    {
        echo('Pozdrav, <span style="color: green">'.$_POST['ime']. ' ' .$_POST['prezime'] . '</span>!');
        echo('<br>Vi ste PUNOLJETNI!');
    }
    ?>
</body>

</html>