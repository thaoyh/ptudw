<?php
if (isset($_POST['money'])) {
    $money = filter_var($_POST['money'], FILTER_SANITIZE_NUMBER_INT);
} else {
    $money = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ATM</title>
    <style>
        .content {
            width: 500px;
            border: 2px solid #9A9A9A;
            background: #E6E6E6;
            margin: 20px auto;
        }

        .content .info {
            height: 150px;
            padding: 0px;
        }

        .content .info h1 {
            color: red;
            margin: 0px;
            padding-left: 100px;
        }

        .content .info p {
            font-size: 18px;
            padding-left: 50px;
        }

        .content .info input {
            height: 30px;
            margin-left: 50px;
        }

        .content .info input[type='text'] {
            width: 250px;
            font-size: 18px;
            text-align: right;
        }

        .content .info input[type='submit'] {
            width: 100px;
            font-size: 18px;
            border-radius: 5px;
            height: 34px;
        }

        .result h4 {
            font-size: 18px;
            padding-left: 50px;
        }

        .result div p {
            display: inline-table;
            font-size: 18px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 5px;
        }

        .result div p.col1 {
            width: 180px;
            text-align: left;
        }

        .result div p.col2 {
            width: 80px;
            text-align: center;
        }

        .result div p.col3 {
            width: 180px;
            text-align: right;
        }

        .result {
            padding: 10px;
        }

        .result p.total {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            color: #3879D9;
            padding-right: 25px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="info">
            <h1>Mô phỏng máy ATM</h1>
            <form action="#" method="post">
                <p>Nhập vào số tiền</p>
                <input type="text" name="money" value="
                <?php
                if (is_numeric($money))
                    echo number_format($money, 0, ',', '.');
                ?>">
                <input type="submit" value="Rút tiền">
            </form>
        </div>
        <div class="result">
            <?php
            if (!is_numeric($money) || $money < 1000 || $money % 1000 != 0) {
                echo "<h4>Số tiền phải lớn hơn 1000đ, và là bội số của 1000đ</h4>";
            } else {
                $temp_money = $money;
                $money_list = array(500000, 200000, 100000, 50000, 20000, 10000, 5000, 2000, 1000);
                $number_list = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
                $index = 0;
                while ($temp_money > 0 && $index < count($money_list)) {
                    $number_list[$index] = intdiv($temp_money, $money_list[$index]);
                    $temp_money %= $money_list[$index];
                    $index++;
                }
                echo
                    '<div class="normal">
                        <p class="col1">Mệnh giá</p>
                        <p class="col2">Số lượng</p>
                        <p class="col3">Thành tiền</p>
                    </div>';
                for ($index = 0; $index < count($money_list); $index++) {
                    if ($number_list[$index] > 0) {
                        echo
                            '<div class="normal">
                                <p class="col1">' . number_format($money_list[$index], 0, ',', '.') . '</p>
                                <p class="col2">' . $number_list[$index] . '</p>
                                <p class="col3">' . number_format($money_list[$index] * $number_list[$index], 0, ',', '.') . '</p>
                            </div>';
                    }
                }
                echo '<hr>';
                echo '<p class="total">Tổng tiền: ' . number_format($money, 0, ',', '.') . '</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>