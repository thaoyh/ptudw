<?php
if (isset($_POST['day']) && isset($_POST['month'])) {
  $day = $_POST['day'];
  $month = $_POST['month'];
} else {
  $day = 1;
  $month = 1;
}
if ($month == 12 && $day >= 22)
  $year = 2019;
else
  $year = 2020;
if (checkdate($month, $day, 2020)) {
  $valid = true;
  $date = date('Y-m-d', strtotime($month . "/" . $day . "/" . $year));
  $date1 = date('Y-m-d', strtotime('12/22/2019'));
  $date2 = date('Y-m-d', strtotime('1/20/2020'));
  $date3 = date('Y-m-d', strtotime('2/19/2020'));
  $date4 = date('Y-m-d', strtotime('3/21/2020'));
  $date5 = date('Y-m-d', strtotime('4/20/2020'));
  $date6 = date('Y-m-d', strtotime('5/21/2020'));
  $date7 = date('Y-m-d', strtotime('6/22/2020'));
  $date8 = date('Y-m-d', strtotime('7/23/2020'));
  $date9 = date('Y-m-d', strtotime('8/23/2020'));
  $date10 = date('Y-m-d', strtotime('9/23/2020'));
  $date11 = date('Y-m-d', strtotime('10/24/2020'));
  $date12 = date('Y-m-d', strtotime('11/22/2020'));

  if ($date1 <= $date && $date < $date2)
    $constellation = 'capricorn';
  if ($date2 <= $date && $date < $date3)
    $constellation = 'aquarius';
  if ($date3 <= $date && $date < $date4)
    $constellation = 'pisces';
  if ($date4 <= $date && $date < $date5)
    $constellation = 'aries';
  if ($date5 <= $date && $date < $date6)
    $constellation = 'taurus';
  if ($date6 <= $date && $date < $date7)
    $constellation = 'gemini';
  if ($date7 <= $date && $date < $date8)
    $constellation = 'cancer';
  if ($date8 <= $date && $date < $date9)
    $constellation = 'leo';
  if ($date9 <= $date && $date < $date10)
    $constellation = 'virgo';
  if ($date10 <= $date && $date < $date11)
    $constellation = 'libra';
  if ($date11 <= $date && $date < $date12)
    $constellation = 'scorpio';
  if ($date12 <= $date)
    $constellation = 'sagittarius';
} else {
  $valid = false;
  $constellation = 'Không có ngày ' . $day . ' tháng ' . $month;
}
?>
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
      width: 500px;
      height: 280px;
      margin: 20px auto;
      border: 1px solid green;
    }

    h1 {
      text-align: center;
      padding: 10px 0;
      color: red;
    }

    #kq {
      color: blue;
    }

    label {
      display: inline-block;
      width: 100px;
      text-align: right;
    }

    label,
    input {
      padding: 5px;
      margin: 10px 0;
      font-size: 16px;
      font-weight: bold;
    }

    .result {
      width: 400px;
      height: 100px;
      margin: 0 auto;
    }

    .text {
      padding-top: 40px;
      margin-left: 80px;
      width: 300px;
      height: 100%;
      font-size: 20px;
      font-weight: bold;
      color: red;
      font-style: italic;
      display: block;
      height: 100px;
      box-sizing: border-box;
    }
    img{
      padding-left: 150px;
    }
  </style>
</head>

<body>
  <div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post">
      <label>Ngày sinh</label>
      <select name="day" id="day">
        <option value="1" <?php if ($day == 1) : ?> selected="selected" <?php endif; ?>>1</option>
        <option value="2" <?php if ($day == 2) : ?> selected="selected" <?php endif; ?>>2</option>
        <option value="3" <?php if ($day == 3) : ?> selected="selected" <?php endif; ?>>3</option>
        <option value="4" <?php if ($day == 4) : ?> selected="selected" <?php endif; ?>>4</option>
        <option value="5" <?php if ($day == 5) : ?> selected="selected" <?php endif; ?>>5</option>
        <option value="6" <?php if ($day == 6) : ?> selected="selected" <?php endif; ?>>6</option>
        <option value="7" <?php if ($day == 7) : ?> selected="selected" <?php endif; ?>>7</option>
        <option value="8" <?php if ($day == 8) : ?> selected="selected" <?php endif; ?>>8</option>
        <option value="9" <?php if ($day == 9) : ?> selected="selected" <?php endif; ?>>9</option>
        <option value="10" <?php if ($day == 10) : ?> selected="selected" <?php endif; ?>>10</option>
        <option value="11" <?php if ($day == 11) : ?> selected="selected" <?php endif; ?>>11</option>
        <option value="12" <?php if ($day == 12) : ?> selected="selected" <?php endif; ?>>12</option>
        <option value="13" <?php if ($day == 13) : ?> selected="selected" <?php endif; ?>>13</option>
        <option value="14" <?php if ($day == 14) : ?> selected="selected" <?php endif; ?>>14</option>
        <option value="15" <?php if ($day == 15) : ?> selected="selected" <?php endif; ?>>15</option>
        <option value="16" <?php if ($day == 16) : ?> selected="selected" <?php endif; ?>>16</option>
        <option value="17" <?php if ($day == 17) : ?> selected="selected" <?php endif; ?>>17</option>
        <option value="18" <?php if ($day == 18) : ?> selected="selected" <?php endif; ?>>18</option>
        <option value="19" <?php if ($day == 19) : ?> selected="selected" <?php endif; ?>>19</option>
        <option value="20" <?php if ($day == 20) : ?> selected="selected" <?php endif; ?>>20</option>
        <option value="21" <?php if ($day == 21) : ?> selected="selected" <?php endif; ?>>21</option>
        <option value="22" <?php if ($day == 21) : ?> selected="selected" <?php endif; ?>>22</option>
        <option value="23" <?php if ($day == 23) : ?> selected="selected" <?php endif; ?>>23</option>
        <option value="24" <?php if ($day == 24) : ?> selected="selected" <?php endif; ?>>24</option>
        <option value="25" <?php if ($day == 25) : ?> selected="selected" <?php endif; ?>>25</option>
        <option value="26" <?php if ($day == 26) : ?> selected="selected" <?php endif; ?>>26</option>
        <option value="27" <?php if ($day == 27) : ?> selected="selected" <?php endif; ?>>27</option>
        <option value="28" <?php if ($day == 28) : ?> selected="selected" <?php endif; ?>>28</option>
        <option value="29" <?php if ($day == 29) : ?> selected="selected" <?php endif; ?>>29</option>
        <option value="30" <?php if ($day == 30) : ?> selected="selected" <?php endif; ?>>30</option>
        <option value="31" <?php if ($day == 31) : ?> selected="selected" <?php endif; ?>>31</option>
      </select>
      <label>Tháng sinh</label>
      <select name="month" id="month">
        <option value="1" <?php if ($month == 1) : ?> selected="selected" <?php endif; ?>>1</option>
        <option value="2" <?php if ($month == 2) : ?> selected="selected" <?php endif; ?>>2</option>
        <option value="3" <?php if ($month == 3) : ?> selected="selected" <?php endif; ?>>3</option>
        <option value="4" <?php if ($month == 4) : ?> selected="selected" <?php endif; ?>>4</option>
        <option value="5" <?php if ($month == 5) : ?> selected="selected" <?php endif; ?>>5</option>
        <option value="6" <?php if ($month == 6) : ?> selected="selected" <?php endif; ?>>6</option>
        <option value="7" <?php if ($month == 7) : ?> selected="selected" <?php endif; ?>>7</option>
        <option value="8" <?php if ($month == 8) : ?> selected="selected" <?php endif; ?>>8</option>
        <option value="9" <?php if ($month == 9) : ?> selected="selected" <?php endif; ?>>9</option>
        <option value="10" <?php if ($month == 10) : ?> selected="selected" <?php endif; ?>>10</option>
        <option value="11" <?php if ($month == 11) : ?> selected="selected" <?php endif; ?>>11</option>
        <option value="12" <?php if ($month == 12) : ?> selected="selected" <?php endif; ?>>12</option>
      </select>
      <input type="submit" value="Lấy chòm sao"></br>
      <?php
      if ($valid) {
        echo "<img src='$constellation.png'/>";
      } else {
        echo "<h1 id='kq'>$constellation</h1>";
      }
      ?>
    </form>
  </div>
</body>

</html>