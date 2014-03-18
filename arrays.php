<?php 
//array variables line
$flavors = array("Vanilla", "Chocolate", "Strawberry", "Cookie Dough");

//Foreach statement
?><pre>
<?php echo "We have " . count($flavors) . " flavors available. Here's a list:"; 

foreach($flavors as $flavor) {
	echo $flavor . "\n";
} //end line
?>

</pre>