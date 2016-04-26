<?php
if (!empty($_POST)) {
    $arr = $_POST;
    if ($arr['credit'] < 1 or $arr['credit'] > 7) {
        echo "Срок кредитования должен быть от 1 до 7 лет <br>";
    }
    if ($arr['percentage'] < 0 or $arr['percentage'] > 100) {
        echo "Первый взнос должен быть от 0 до 100% <br>";
    }
    if ($arr['amount'] < 0) {
        echo "Сумма покупки не может быть отрицательным числом <br>";
    }

    else {
        $periodMonths = $arr['credit']*12;
        $periodDays = $arr['credit']*365;
        $creditAmount = $arr['amount'];
        $percentage = $arr['percentage'];
        $remainPayment = $creditAmount * (1 - $percentage/100);
        $creditPercent = ($arr['credit']-1) * 2 + 9;
        $interestAmount = $remainPayment * (($creditPercent/100/365)*$periodDays);
        $totalAmount = $remainPayment + $interestAmount;
        $monthPayment = $totalAmount/$periodMonths;
        ?>
        <table class="table table-condensed">
            <tr>
                <td>Месяц</td>
                <td>Платеж</td>
                <td>Остаток</td>
            </tr>
        <?php for ($i = 1; $i <= $periodMonths; $i++) { ?>
            <tr>
                <td><?=$i?></td>
                <td><?=round($monthPayment)?></td>
                <td><?=round($totalAmount = $totalAmount-$monthPayment)?></td>
            </tr>
        <?php } ?>
        </table>
        <?php
    }
}