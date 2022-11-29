<?php



if (isset($_GET['type']) && !empty($_GET['type'])) {
    $temparr = [];
    foreach ($hotels as $item) {
        if ($item['parking'] == true) {
            $temparr[] = $item;
        }
    }
    ;
    $hotels = $temparr;
    // var_dump($comics);
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
    <!-- <header>
        <form action="index.php" method="GET" name="formFilter">
            <select name="type" id="type">
                <option value="">No filter</option>
                <option value="parking">Parking</option>
            </select>
            <select name="vote" id="vote">
                <option value="">No filter</option>
                <option value="1">Una stella</option>
                <option value="2">Due stelle</option>
                <option value="3">Tre stelle</option>
                <option value="4">Quattro stelle</option>
                <option value="5">Cinque stelle</option>
            </select>
            <button type="submit">Filtra</button>
        </form>
    </header>
    <main> -->

    </main>
</body>

</html>

<style>
    header {
        width: 1170px;
        margin: 0 auto;
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