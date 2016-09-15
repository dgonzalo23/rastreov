<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
</head>
<body>
<?php

require_once '../lib/Kendo/Autoload.php';
?>
<div class="demo-section k-content">
        <h4>Show e-mails from:</h4>
<?php
$datePicker = new \Kendo\UI\DatePicker('datepicker');

$datePicker->value(new DateTime('10/10/2011', new DateTimeZone('UTC')))
           ->attr('style', 'width: 100%');

echo $datePicker->render();
?>
<h4 style="margin-top: 2em;">Add to archive mail from:</h4>

<?php
$monthPicker = new \Kendo\UI\DatePicker('monthpicker');

$monthPicker->value(new DateTime('November 2011', new DateTimeZone('UTC')))
            ->start('year')
            ->depth('year')
            ->format('MMMM yyyy')
            ->attr('style', 'width: 100%');

echo $monthPicker->render();
?>
</div>

</body>
</html>