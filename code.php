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


<?php 
$today = "Saturday";
if ($today == "Monday") {
	echo "Welcome back to work!";
}

<?php
$hour = date('G');
if ($hour < 12) {
	echo "Good Morning!";
}
if ($hour >=12 and $hour < 17) {
	echo "Good Afternoon!";
}
if ($hour >= 17 and $hour < 20) {
	echo "Good Evening!";
}
if ($hour >= 20){
	echo "Good night!";
}


