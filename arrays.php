<?php 
//array variables
$flavors = array("Vanilla", "Chocolate", "Strawberry", "Cookie Dough");


?><pre>
<?php echo "We have " . count($flavors) . " flavors available. Here's a list:"; 

foreach($flavors as $flavor) {
	echo $flavor . "\n";
}
?>

</pre>