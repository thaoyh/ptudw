<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .content {
            width: 600px;
            height: 280px;
            border: 1px solid green;
            margin: 20px auto;
            text-align: center;
        }

        h1 {
            text-align: center;
            padding: 10px 0;
            color: red;
        }

        .tam-giac {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            display: inline-block;
            margin-left: 10px;
        }

        .tam-giac input {
            position: absolute;
            margin-left: 85px;
        }

        img {
            width: 100%;
            height: 100%;
        }

        .result {
            text-align: left;
            margin-left: 265px;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        $loop = 'for';
        $type = '1';
        $num_row = 6;
        $result = '';
        if (isset($_POST['loop']))
            $loop = $_POST['loop'];
        if (isset($_POST['type']))
            $type = $_POST['type'];
        if (isset($_POST['num_row']) && is_numeric($_POST['num_row']))
            $num_row = $_POST['num_row'];
        ?>
        <form action="#" method="post">
            <h1>Vẽ tam giác</h1>
            <input type="radio" name="loop" value="for" <?php echo ($loop == 'for') ? 'checked' : '' ?>>
            <label for="for">for</label><br>
            <input type="radio" name="loop" value="while" <?php echo ($loop == 'while') ? 'checked' : '' ?>>
            <label for="while">while</label><br>
            <input type="radio" name="loop" value="dowhile" <?php echo ($loop == 'dowhile') ? 'checked' : '' ?>>
            <label for="dowhile">do while</label><br><br>

            <div class="tam-giac">
                <input type="radio" name="type" value="1" <?php echo ($type == '1') ? 'checked' : '' ?>>
                <label for="1"><img src="style1.png" alt=""></label>
            </div>
            <div class="tam-giac">
                <input type="radio" name="type" value="2" <?php echo ($type == '2') ? 'checked' : '' ?>>
                <label for="2"><img src="style2.png" alt=""></label>
            </div>
            <div class="tam-giac">
                <input type="radio" name="type" value="3" <?php echo ($type == '3') ? 'checked' : '' ?>>
                <label for="3"><img src="style3.png" alt=""></label>
            </div>
            <br><br>
            <label>Số hàng</label>
            <input type="text" name="num_row" value=<?php echo "$num_row" ?>>
            <input type="submit" value="Vẽ"><br><br>
        </form>
        <div class="result">
            <?php
            if ($num_row >= 1) {
                switch ($loop) {
                    case 'for':
                        switch ($type) {
                            case '1':
                                for ($i = 1; $i <= $num_row; $i++)
                                    $result .= str_repeat('*', $i) . '<br>';
                                break;
                            case '2':
                                for ($i = $num_row; $i >= 1; $i--)
                                    $result .= str_repeat('*', $i) . '<br>';
                                break;
                            case '3':
                                for ($i = 1; $i <= $num_row; $i++)
                                    $result .= str_repeat('&nbsp;&nbsp;', $num_row - $i) . str_repeat('*', 2 * $i - 1) . '<br>';
                                break;
                            default:
                                break;
                        }
                        break;
                    case 'while':
                        switch ($type) {
                            case '1':
                                $i = 1;
                                while ($i <= $num_row) {
                                    $result .= str_repeat('*', $i) . '<br>';
                                    $i++;
                                }
                                break;
                            case '2':
                                $i = $num_row;
                                while ($i >= 1) {
                                    $result .= str_repeat('*', $i) . '<br>';
                                    $i--;
                                }
                                break;
                            case '3':
                                $i = 1;
                                while ($i <= $num_row) {
                                    $result .= str_repeat('&nbsp;&nbsp;', $num_row - $i) . str_repeat('*', 2 * $i - 1) . '<br>';
                                    $i++;
                                }
                                break;
                            default:
                                break;
                        }
                        break;
                    case 'dowhile':
                        switch ($type) {
                            case '1':
                                $i = 1;
                                do {
                                    $result .= str_repeat('*', $i) . '<br>';
                                    $i++;
                                } while ($i <= $num_row);
                                break;
                            case '2':
                                $i = $num_row;
                                do {
                                    $result .= str_repeat('*', $i) . '<br>';
                                    $i--;
                                } while ($i >= 1);
                                break;
                            case '3':
                                $i = 1;
                                do {
                                    $result .= str_repeat('&nbsp;&nbsp;', $num_row - $i) . str_repeat('*', 2 * $i - 1) . '<br>';
                                    $i++;
                                } while ($i <= $num_row);
                                break;
                            default:
                                break;
                        }
                        break;
                    default:
                        break;
                }
                echo $result;
            } else {
                echo 'Số hàng phải lớn hơn 0';
            }
            ?>
        </div>
</body>

</html>