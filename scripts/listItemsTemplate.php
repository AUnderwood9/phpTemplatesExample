<?php 
	function displayListing($itemListing){
		echo "<ul>";
		foreach ($itemListing as $value) {
			echo "<li>$value</li>";
		}
		echo "</ul>";
	}
?>