<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Start PHP</title>
</head>
<body>
<div class="container text-center">
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="get">
        <input type="submit" name="true" value="Таблица истинности PHP" class="btn btn-success">
        <input type="submit" name="flexible" value="Таблица сравнения flexible" class="btn btn-success">
        <input type="submit" name="hard" value="Таблица сравнения hard" class="btn btn-success">   
        <input type="submit" name="clear" value="Очистить" class="btn btn-warning">     
    </form>
    <?php
        function flexible($a, $b)
        {
            $c = $a == $b;
            if ($c === null) {
                return "null";
            } elseif ($c === true) {
                return "true";
            }
            elseif ($c === false) {
                return "false";
            }
        };
        function hard($a, $b)
        {
            $c = $a === $b;
            if ($c === null) {
                return "null";
            } elseif ($c === true) {
                return "true";
            }
            elseif ($c === false) {
                return "false";
            }
        };
            $tables0 = [
                " ", "true", "false", 1, 0, -1, "1", "null", "php",
            ];
            $tables1 = [
                "true", flexible(true, true), flexible(true, false), flexible(true, 1), flexible(true, 0), flexible(true, -1), flexible(true, "1"), flexible(true, null),flexible(true, "php"),
            ];
            $tables2 = [
                "false", flexible(false, true), flexible(false, false), flexible(false, 1), flexible(false, 0), flexible(false, -1), flexible(false, "1"), flexible(false, null),flexible(false, "php"),
            ];
            $tables3 = [
                "1", flexible(1, true), flexible(1, false), flexible(1, 1), flexible(1, 0), flexible(1, -1), flexible(1, "1"), flexible(1, null),flexible(1, "php"),
            ];
            $tables4 = [
                "0", flexible(0, true), flexible(0, false), flexible(0, 1), flexible(0, 0), flexible(0, -1), flexible(0, "1"), flexible(0, null),flexible(0, "php"),
            ];
            $tables5 = [
                "-1", flexible(-1, true), flexible(-1, false), flexible(-1, 1), flexible(-1, 0), flexible(-1, -1), flexible(-1, "1"), flexible(-1, null),flexible(-1, "php"),
            ];
            $tables6 = [
                "&quot1&quot", flexible("1", true), flexible("1", false), flexible("1", 1), flexible("1", 0), flexible("1", -1), flexible("1", "1"), flexible("1", null),flexible("1", "php"),
            ];
            $tables7 = [
                "null", flexible(null, true), flexible(null, false), flexible(null, 1), flexible(null, 0), flexible(null, -1), flexible(null, "1"), flexible(null, null),flexible(null, "php"),
            ];
            $tables8 = [
                "php", flexible("php", true), flexible("php", false), flexible("php", 1), flexible("php", 0), flexible("php", -1), flexible("php", "1"), flexible("php", null),flexible("php", "php"),
            ];
            $tables9 = [
                " ", "true", "false", 1, 0, -1, "1", "null", "php",
            ];
            $tables10 = [
                "true", hard(true, true), hard(true, false), hard(true, 1), hard(true, 0), hard(true, -1), hard(true, "1"), hard(true, null),hard(true, "php"),
            ];
            $tables11 = [
                "false", hard(false, true), hard(false, false), hard(false, 1), hard(false, 0), hard(false, -1), hard(false, "1"), hard(false, null),hard(false, "php"),
            ];
            $tables12 = [
                "1", hard(1, true), hard(1, false), hard(1, 1), hard(1, 0), hard(1, -1), hard(1, "1"), hard(1, null),hard(1, "php"),
            ];
            $tables13 = [
                "0", hard(0, true), hard(0, false), hard(0, 1), hard(0, 0), hard(0, -1), hard(0, "1"), hard(0, null),hard(0, "php"),
            ];
            $tables14 = [
                "-1", hard(-1, true), hard(-1, false), hard(-1, 1), hard(-1, 0), hard(-1, -1), hard(-1, "1"), hard(-1, null),hard(-1, "php"),
            ];
            $tables15 = [
                "&quot1&quot", hard("1", true), hard("1", false), hard("1", 1), hard("1", 0), hard("1", -1), hard("1", "1"), hard("1", null),hard("1", "php"),
            ];
            $tables16 = [
                "null", hard(null, true), hard(null, false), hard(null, 1), hard(null, 0), hard(null, -1), hard(null, "1"), hard(null, null),hard(null, "php"),
            ];
            $tables17 = [
                "php", hard("php", true), hard("php", false), hard("php", 1), hard("php", 0), hard("php", -1), hard("php", "1"), hard("php", null),hard("php", "php"),
            ];
            $tables18 = [
                'A','B','!A','A || B','A && B', 'A xor B',
            ];
            $tables19 = [
                0, 0, !0, printf(0 || 0),  printf(0 && 0),  printf(0 xor 0),
            ];
            $tables20 = [
                0, 1, !0, 0 || 1,  printf(0 && 1), 0 xor 1,
            ];
            $tables21 = [
                1, 0,  printf(!1), 1 || 0,  printf(1 && 0), 1 xor 0,
            ];
            $tables22 = [
                1, 1,  printf(!1), 1 || 1, 1 && 1,  printf(1 xor 1),
            ];
            if (@$_REQUEST['hard']) {
                echo "<table class='table'>";
                for ($i=0; $i < 9 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 9; $j++) {
                        if ($i === 0) {
                            echo "<th scope='row'>{$tables9[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th scope='row'>{$tables10[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th scope='row'>{$tables11[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th scope='row'>{$tables12[$j]}</th>"; 
                        }
                        elseif ($i === 4) {
                            echo "<th scope='row'>{$tables13[$j]}</th>"; 
                        }
                        elseif ($i === 5) {
                            echo "<th scope='row'>{$tables14[$j]}</th>"; 
                        }
                        elseif ($i === 6) {
                            echo "<th scope='row'>{$tables15[$j]}</th>"; 
                        }
                        elseif ($i === 7) {
                            echo "<th scope='row'>{$tables16[$j]}</th>"; 
                        }
                        else {
                            echo "<th scope='row'>{$tables17[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "<h1 class='display-5'>Вывод: необходимо научиться экономить место в коде и не использовать такое кол-во массивов</h1>";
            };
            if (@$_REQUEST['flexible']) {
                echo "<table class='table'>";
                for ($i=0; $i < 9 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 9; $j++) {
                        if ($i === 0) {
                            echo "<th scope='row'>{$tables0[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th scope='row'>{$tables1[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th scope='row'>{$tables2[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th scope='row'>{$tables3[$j]}</th>"; 
                        }
                        elseif ($i === 4) {
                            echo "<th scope='row'>{$tables4[$j]}</th>"; 
                        }
                        elseif ($i === 5) {
                            echo "<th scope='row'>{$tables5[$j]}</th>"; 
                        }
                        elseif ($i === 6) {
                            echo "<th scope='row'>{$tables6[$j]}</th>"; 
                        }
                        elseif ($i === 7) {
                            echo "<th scope='row'>{$tables7[$j]}</th>"; 
                        }
                        else {
                            echo "<th scope='row'>{$tables8[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "<h1 class='display-5'>Вывод: программирование это очень круто!!!</h1>";
            };
            if (@$_REQUEST["true"]) {
                echo "<table class='table'>";
                for ($i=0; $i < 5 ; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < 6; $j++) {
                        if ($i === 0) {
                            echo "<th scope='row'>{$tables18[$j]}</th>"; 
                        }
                        elseif ($i === 1) {
                            echo "<th scope='row'>{$tables19[$j]}</th>"; 
                        }
                        elseif ($i === 2) {
                            echo "<th scope='row'>{$tables20[$j]}</th>"; 
                        }
                        elseif ($i === 3) {
                            echo "<th scope='row'>{$tables21[$j]}</th>"; 
                        }
                        else {
                            echo "<th scope='row'>{$tables22[$j]}</th>"; 
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "<h1 class='display-5'>Вывод: это достаточно скучно, но необходимо!!!</h1>";
            };
            if (@$_REQUEST["clear"]) {                
                header ("Location: index.php");
            };
    ?>
</div>
</body>
</html>