<html>
	<body>
		<?php
		$target_dir = getcwd().DIRECTORY_SEPARATOR . 'uploads/';
		$target_file = $target_dir . $_FILES["file"]["name"];
		
		// $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// if ($file_type == "php") {
		// 	echo "PHP file are not allowed";
		// 	exit();
		// }
		
		move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

		$url = '/uploads/' . $_FILES["file"]["name"];
		echo "<a href='" . $url . "'>" . $url . "</a>";
		?>
	</body>
</html>
