<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form method="post" action="index.php">
        <label> radius:</label> <br>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form> -->

    <!-- <form action="index.php" method="post">
        <label for="counter">enter a number tocount to :</label><br>
        <input type="text" value="" name="counter">
        <input type="submit">
    </form> -->

    <!-- <form action="index.php" method="post">
        <label for="">username</label>
        <input type="text" name="username"> <br>
        <label for="">password</label>
        <input type="text" name="password"> <br>

        <input type="submit" name="login">
    </form> -->

    <form action="index.php" method="post">
        <label for="">Visa</label>
        <input type="radio" value="credit_card" name="visa"> <br>
        <label for="">Master card</label>
        <input type="radio" name="credit_card" value="master card"> <br>
        <label for="">American card</label>
        <input type="radio" name="credit_card" value="american express"> <br>

        <input type="submit" name="confirm"  value="confirm">
    </form>

</body>

</html>

<?php
// $radius = $_POST['radius'];
// $circumference = null;
// $area = null;
// $circumference = 2 * pi() * $radius;
// $circumference = round($circumference, 2);

// $area = pi() * pow($radius, 2);
// $area = round($area, 2);


// $volume = 4 / 3 * pi() * pow($radius, 3);
// $volume = round($volume, 2);

// echo "circumference is {$circumference}cm <br>";
// echo "area = {$area}cm <br>";
// echo "voulume ={$volume}cm <br>";



// for($i = 0 ; $i <  $counter ;  $i++ ){
//     echo $i . "<br>" ;
// };

//associate array
// $capitals = array("usa" => "washiton dc", "japan" => "kyoto", "south korea" => 'soeul', "india" => "new delhi");

// foreach($capitals as $key=> $value ){
//     echo "{$key} : {$value} <br>";
// }
/*
foreach($_POST as $key => $value){
     echo "{$key} = {$value} <br>";
}
*/

/*

if (isset($_POST['login'])) {
    echo "you tried to login <br>";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo "username missing";
    } elseif (empty($password)) {
        echo "password is missing ";
    } else {
        echo "hello {$username}";
    }
}
*/
$credit_card = $_POST['credit_card']

?>