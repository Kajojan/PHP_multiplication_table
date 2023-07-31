<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="get">
        <input type="number" placeholder="1-100" name="size">
        <input type="submit">
    </form>

    <?php

    use App\Multi\Multiplication;

    $tab = new Multiplication();
    if (isset($_GET["size"])) {

        $result = $tab->start($_GET["size"]);
        echo "json: <br> ";

        echo $result;
        echo "<br>  normal: ";
        foreach (json_decode($result) as $row) {
            echo "<p>";
            foreach ($row as $item) {
                echo "$item  ";
            }
            echo "</p>";
        }
    }
    ?>

</body>

</html>