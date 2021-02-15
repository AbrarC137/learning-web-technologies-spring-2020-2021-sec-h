<?php

//VAT percentage.
$vat = 15;

//price excluding VAT.
$priceExcludingVat = 100;

//Calculate paid VAT.
$vatToPay = ($priceExcludingVat / 100) * $vat;

//Print out the final price, with VAT added.

echo ($vatToPay);

?> 