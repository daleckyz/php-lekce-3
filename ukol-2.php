<?php
$radek=1;
$pocetRadku=5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Číslo řádku</th>
                <th>Počet řádků</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php while($radek<=$pocetRadku){echo $radek; $radek=$radek+1;};?></td>
                <td>druhy sloupec</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
