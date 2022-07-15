<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            width: 35%;
            text-align: center;
            background-color: lightgray;
        }

        table {
            margin: auto;
        }

        input,
        p {
            text-align: right;
        }
        .matrices{
            display: flex;
            margin: 0 auto;
            width: 40%;
            align-items: center;
            justify-content: center;
            column-gap: 2rem;
        }
        .matrices>div{
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="post" action="program8.php">
        <table>
            <caption>
                <h2> SIMPLE CALCULATOR </h2>
            </caption>
            <tr>
                <td>First Number:</td>
                <td><input type="text" name="num1" /></td>
                <td rowspan="2"><button type="submit" name="submit" value="calculate">Calculate</td>
            </tr>
            <tr>
                <td>Second Number:</td>
                <td><input type="text" name="num2" /></td>
            </tr>
            <tr colspan="3" style="text-align:center;"><td><button style="padding: 10px; " type="submit" name="showMatrix" value="showMatrix">Show Matrix Operations</td></tr>
    </form>

    <?php
    if (isset($_POST['submit'])) // it checks if the input submit is filled
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (is_numeric($num1) and is_numeric($num2)) {
            echo "<tr><td> Addition :</td><td><p>" . ($num1 + $num2) . "</p></td>";
            echo "<tr><td> Subtraction :</td><td><p> " . ($num1 - $num2) . "</p></td>";
            echo "<tr><td> Multiplication :</td><td><p>" . ($num1 * $num2) . "</p></td>";
            echo "<tr><td>Division :</td><td><p> " . ($num1 / $num2) . "</p></td>";
            echo "</table>";
        } else {
            echo "<script> alert('ENTER VALID NUMBER');</script>";
        }
    }

    $a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
    $b = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));
    $m = count($a);
    $n = count($a[2]);
    $p = count($b);
    $q = count($b[2]);
    echo "<div class='matrices'>";
    echo "<div>";

    echo "<p>The first matrix</p> <br>";
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
            echo "<b>&emsp;" . $a[$row][$col] . "</b>";
        echo "<br>";
    }
    echo "</div>";

    echo "<div>";
    echo "<p>The second matrix</p> <br>";
    for ($row = 0; $row < $p; $row++) {
        for ($col = 0; $col < $q; $col++)
            echo "<b>&emsp;" . $b[$row][$col] . "</b>";
        echo "<br>";
    }
    echo "</div>";
    echo "</div>";//matrices class div close

    echo "The Transpose for the first matrix is: <br>";
    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
            echo " " . $a[$col][$row];
        echo "<br>";
    }

    if (($m === $p) and ($n === $q)) {
        echo "The addition of matrices is: <br>";
        for ($row = 0; $row < 3; $row++) {
            for ($col = 0; $col < 3; $col++)
                echo " " . $a[$row][$col] + $b[$row][$col] . " ";
            echo "<br>";
        }
    }
    if ($n === $p) {
        echo " The multiplication of matrices: <br>";
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
                echo " " . $result[$row][$col];
            echo "<br>";
        }
    }
    ?>
</body>

</html>