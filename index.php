<?php

$arrayLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'c', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$arrayNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
$arraySpecials = ['!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '[', '}', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '?', '/'];

// $moment = array_rand($arrayNumbers);
// var_dump(array_rand($arrayLetters));

// var_dump($arrayLetters[array_rand($arrayLetters)]);

if (isset($_POST['pswlength']) && !empty($_POST['pswlength'])) {
    $password = '';
    for ($i = 0; $i < $_POST['pswlength']; $i++) {
        $rand = rand(1, 3);
        // variabile 1 lettera
        if ($rand == 1) {
            $moment = array_rand($arrayLetters);
            $rand2 = rand(1, 2);
            if ($rand2 == 1) {
                $password = $password . strtoupper($arrayLetters[$moment]);
            } else {
                $password = $password . $arrayLetters[$moment];
            }
        }
        // variabile 2 numeri
        elseif ($rand == 2) {
            $moment = array_rand($arrayNumbers);
            $password = $password . $arrayNumbers[$moment];
        }
        // variabile 3
        else {
            $moment = array_rand($arraySpecials);
            $password = $password . $arraySpecials[$moment];
        }
    }
    ;
    // var_dump($password);
}
;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>

<body>
    <header>
        <form action="index.php" method="POST" name="formFilter">
            <button type="submit">Generate:</button>
            <input placeholder="password length" type="number" name="pswlength" id="pswlength">
        </form>
        <span>

            <?php if (isset($password) && !empty($password)) { ?> 
                <span class="psw">
                    <?php echo "Pasword: $password" ?>;
                </span>
                <?php } ?> 
        </span>
    </header>
    <main>

    </main>
</body>

</html>

<style>
    header {
        width: 1170px;
        margin: 2rem auto;
        display: flex;
        gap: 5rem;
        align-items: center;
        justify-content: center;
        height: 70vh;
    }

    .psw {
        background-color: lightgray;
        padding: .5rem 1rem;
        border-radius: .3rem;
    }

    main {
        display: flex;
        gap: 42px;
        flex-wrap: wrap;
        width: 1170px;
        /* background-color: rgba(20, 20, 20, .1); */
        margin: 2rem auto;
        padding: 0px;
    }

    h3 {
        font-size: 1.5rem;
    }

    h4 {
        font-size: 1.2rem;
    }

    .card {
        width: 200px;
    }

    img {
        width: 200px;
    }
</style>