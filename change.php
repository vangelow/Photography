  
  

	
		<?php

		$path =$_SERVER['PHP_SELF'];
                    $path = str_replace('change.php', '', $path);
			$files = scandir('uploads/portraits');
			array_shift($files);
			array_shift($files);
			$fullURL = 'http://localhost' . $path . 'uploads/portraits/15823633_889647407837961_5619433126556050669_n.jpg';
				?>
			 <section >
			 	<?php
			 	foreach($files as $file) {
				$url = 'http://localhost' . $path . "uploads/portraits/" . $file; ?>
			 	
				 	<button style="display: inline-block">
				 		<img src="<?php echo $url?>">
				 	</button>	
			 	
			 
			 <?php
			 //echo "<section>" . $file . '<div>'. '<img src=' . $url .'></div>' . "</section>";
			}

		?>
		</section>
	
