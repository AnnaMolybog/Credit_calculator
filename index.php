<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<br>
<form class="form-horizontal" action="index.php" method = "POST">
    <div class="form-group">
        <label for="amount" class="col-sm-2 control-label"></label>
        <div class="col-sm-8">
            Сумма покупки: <input name="amount" class="input-medium" placeholder="грн">
        </div>
    </div>
    <div class="form-group">
        <label for="percentage" class="col-sm-2 control-label"></label>
        <div class="col-sm-8">
            Первоначальный взнос в %: <input name="percentage" class="input-medium" placeholder="от 0 до 100 %">
        </div>
    </div>
    <div class="form-group">
        <label for="credit" class="col-sm-2 control-label"></label>
        <div class="col-sm-8">
            Срок кредитования: <input name="credit" class="input-medium" placeholder="от 1 до 7 лет">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Посчитать</button>
        </div>
    </div>
</form>
</body>
</html>
<?php
include "calculator.php";

?>