<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program8</title>

    <style>
        *{
            margin: 0;
        }
        body{
            overflow-y: hidden;
        }
        input {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 90%;
        }

        button {
            padding: 10px 20px;
        }

        #form1>button {
            width: 100%;
        }

        #form1>p {
            text-align: left;
            font-size: 1.05rem;
        }

        .main-wrapper {
            display: flex;
            width: 50%;
            margin: 0 auto;
            justify-content: center;
            align-content: center;
            background-color: aqua;
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: aquamarine;
        }
        .matrices{
            display: flex;
            margin: 0 auto;
            width: 100%;
            align-items: center;
            justify-content: center;
            column-gap: 2rem;
        }
        .matrices>div{
            text-align: center;
        }

        .matrices>p{
            margin: 5px auto;
        }
        form{
            margin-top: 30px;
        }

        
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="container">
            <h1 style="margin-bottom:20px;">Simple Calculator</h1>
            <form action="program8.php" method="POST" id="form1">
                <input type="text" name="num1" />
                <input type="text" name="num2" />
                <button type="submit" name="submit" value="calculate">Calculate</button>

                <?php
                if (isset($_POST['submit'])) // it checks if the input submit is filled
                {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    if (is_numeric($num1) and is_numeric($num2)) {
                        echo "<br><br><p>Addition : " . ($num1 + $num2) . "</p>";
                        echo "<p>Subtraction : " . ($num1 - $num2) . "</p>";
                        echo "<p>Multiplication : " . ($num1 * $num2) . "</p>";
                        echo "<p>Division : " . ($num1 / $num2) . "</p>";
                    } else {
                        echo "<script> alert('ENTER VALID NUMBER');</script>";
                    }
                } ?>
            </form>
        </div>


        <div class="container">
            <h1 style="margin-bottom:20px;">Matrix Operations</h1>
            <form method="post" action="program8.php">
                <button type="submit" name="showMatrix" value="showMatrix">Show Matrix Operations</button>

                <?php
                if (isset($_POST['showMatrix'])) // it checks if the input submit is filled
                {
                    $a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
                    $b = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));
                    $m = count($a);
                    $n = count($a[2]);
                    $p = count($b);
                    $q = count($b[2]);
                    echo "<div class='matrices'>";
                    echo "<div>";

                    echo "<br><p>First Matrix</p> <br>";
                    for ($row = 0; $row < $m; $row++) {
                        for ($col = 0; $col < $n; $col++)
                            echo "<b>&emsp;" . $a[$row][$col] . "</b>";
                        echo "<br>";
                    }
                    echo "</div>";

                    echo "<div>";
                    echo "<br><p>Second Matrix</p> <br>";
                    for ($row = 0; $row < $p; $row++) {
                        for ($col = 0; $col < $q; $col++)
                            echo "<b>&emsp;" . $b[$row][$col] . "</b>";
                        echo "<br>";
                    }
                    echo "</div>";
                    echo "</div>"; //matrices class div close

                    echo "<br><br><p>Transpose of First Matrix is:</p> <br>";
                    for ($row = 0; $row < $m; $row++) {
                        for ($col = 0; $col < $n; $col++)
                            echo "<b>&emsp;" . $a[$col][$row] . "</b>";
                        echo "<br>";
                    }

                    if (($m === $p) and ($n === $q)) {
                        echo "<br><br><p>Addition of Matrices:</p> <br>";
                        echo "<b>";
                        for ($row = 0; $row < 3; $row++) {
                            for ($col = 0; $col < 3; $col++)
                                echo " " . $a[$row][$col] + $b[$row][$col] . " ";
                            echo "<br>";
                        }
                        echo "</b>";
                    }
                    if ($n === $p) {
                        echo "<br><br><p>Multiplication of Matrices:</p> <br>";
                        $result = array();
                        for ($i = 0; $i < $m; $i++) {
                            for ($j = 0; $j < $q; $j++) {
                                $result[$i][$j] = 0;
                                for ($k = 0; $k < $n; $k++)
                                    $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
                            }
                        }
                        for ($row = 0; $row < $m; $row++) {
                            for ($col = 0; $col < $q; $col++)
                                echo "<b>&emsp;" . $result[$row][$col] . "</b>";
                            echo "<br>";
                        }
                    }
                }
                ?>

            </form>
        </div>
    </div>
</body>

</html>