<?php

$Items = "Ballpen";
$Quantity = 10;
$Price_Per_Item = 20;
$Discount_Rate = 0.10;
$Amount_Paid = 300;

$Total_Before_Discount = $Quantity * $Price_Per_Item;
$Discount = $Total_Before_Discount * $Discount_Rate;
$Total_After_Discount = $Total_Before_Discount - $Discount;
$Change = $Amount_Paid -  $Total_After_Discount;

echo "<b> *Purchase Summary*</b>";
echo "<br>--------------------------";
echo "<br><b> Items</b> : Ballpen";
echo "<br><b> Quantity</b> : $Quantity";
echo "<br><b> Price Per Item</b> : ₱$Price_Per_Item";
echo "<br><b> Total Before Discount</b> : ₱$Total_Before_Discount";
echo "<br><b> Discount (10%)</b> : ₱$Discount";
echo "<br><b> Total After Discount</b> : ₱$Total_After_Discount";
echo "<br><b> Amount Paid</b> : ₱$Amount_Paid";
echo "<br><b> Change</b> : ₱$Change";

?>