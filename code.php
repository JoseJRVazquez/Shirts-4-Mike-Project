<h1><?php echo "Shirts 4 Mike"; ?></h1>
<p>The current time is <?php echo date("H:i:s a"); ?>.</p>
<?php 
$year = date('y'); 
echo $year; 
?>

<?php 
$productName = "Mike the Frog Shirt, Orange";
$productPrice = 20;
?>
<ul>
<li>
	<?php echo $productName; ?> - Price: <?php echo $productPrice; ?>
</li>
<?php
$productName = "Logo Shirt, Blue";
$productPrice = 25;
?>
<li>
	<?php echo $productName; ?> - Price: <?php echo $productPrice; ?>
</li>
</ul>