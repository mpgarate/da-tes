<?php
	function printDate($date, $class, $title, $content){ 
		echo "<div class='date-holder " . $class . " col-12 col-sm-2 col-lg-2'>";
		echo "<a href='#'
			title='" . $title . "'
			data-placement='top'
			data-content='" . $content . "'>
			" . $date . "
		</a></div>";
	}
?>
<div class="row dates dates-1 hidden-sm">
	<div class="col-1"></div>
	<?php printDate("08-12-77","y-77","August 12, 1877","lorem ipsum dolor sit amet"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1962","lorem ipsum dolor sit amet"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1956","lorem ipsum dolor sit amet"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","lorem ipsum dolor sit amet"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1852","lorem ipsum dolor sit amet"); ?>
	<div class="col-1"></div>
</div> <!-- .row .dates-1 -->
<div class="row dates dates-2 hidden-sm">
	<div class="col-1"></div>
	<?php printDate("12-31-62","y-62","December 31, 1962","lorem ipsum dolor sit amet"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1956","lorem ipsum dolor sit amet"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","lorem ipsum dolor sit amet"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1852","lorem ipsum dolor sit amet"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1877","lorem ipsum dolor sit amet"); ?>
	<div class="col-1"></div>
</div> <!-- .row .dates-2 -->
<div class="row dates dates-3 hidden-sm">
	<div class="col-1"></div>
	<?php printDate("05-06-56","y-56","May 6, 1956","lorem ipsum dolor sit amet"); ?>
	<?php printDate("01-10-92","y-92","January 10, 1892","lorem ipsum dolor sit amet"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1852","lorem ipsum dolor sit amet"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1877","lorem ipsum dolor sit amet"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1962","lorem ipsum dolor sit amet"); ?>
	<div class="col-1"></div>
</div> <!-- .row .dates-3 -->
<div class="row dates dates-4 hidden-sm">
	<div class="col-1"></div>
	<?php printDate("01-10-92","y-92","January 10, 1892","lorem ipsum dolor sit amet"); ?>
	<?php printDate("11-06-52","y-52","November 6, 1852","lorem ipsum dolor sit amet"); ?>
	<?php printDate("08-12-77","y-77","August 12, 1877","lorem ipsum dolor sit amet"); ?>
	<?php printDate("12-31-62","y-62","December 31, 1962","lorem ipsum dolor sit amet"); ?>
	<?php printDate("05-06-56","y-56","May 6, 1956","lorem ipsum dolor sit amet"); ?>
	<div class="col-1"></div>
</div> <!-- .row .dates-4 -->