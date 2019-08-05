<?php

	require("listItemsTemplate.php");

	$templateListingsArray = [
		"Hai I am an item! :D",
		"Hai I am another item! :)",
		"Howdy I am another item gain! :]",
		"Hello, its me again! Another item :P",
		"Hi, I am not another item, I am bob..... Jk I'm another item again >:}"
	];

	$templateListingsArray2 = [
		"Hai I am an item for a brief listing! :}",
		"Hai I am an item for a brief listing brother! :}",
		"Whats up! :D I am the last item for a brief listing!"
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../style/style.css">
	<title>Document</title>
</head>
<body>

	<section>
		<p>
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, tenetur. Quaerat quos ut obcaecati numquam corrupti ullam suscipit hic, quidem rem repellat deleniti, est autem.
		</p>
		<p>
			Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore illum eos reprehenderit sunt! Odio, neque odit! Laboriosam, illo in molestiae id quidem architecto aliquid consequatur dolore velit adipisci sed dolorem cum ipsa nihil perspiciatis est.
		</p>
	</section>

	<section id="array-listing-section-1">
		<?php displayListing($templateListingsArray); ?>
	</section>

	<footer>
		&COPY; 2019 Another Item Inc. Productions
	</footer>
	
</body>
</html>