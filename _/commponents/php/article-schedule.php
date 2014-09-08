<article class="schedule">

	<h1>Shedule</h1>
	<p>The Roux Academy gets thousand of submissions every year</p>


	<!-- first part is to Creating tabbable tabs -->
	<div class="tabbable tabs">
		<ul class="nav nav-tabs">
			<li class = "active"><a href="#monday" data-toggle="tab">Monday</a></li>
			<li><a href="#tuesday" data-toggle="tab">Thuesday</a></li>
			<li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
			<li><a href="#thursday" data-toggle="tab">Thursday</a></li>
			<li><a href="#friday" data-toggle="tab">Friday</a></li>
		</ul> <!--nav nav-tabs-->
	</div> <!-- tabbable tabs -->

	<section class="tab-content">


		<?php include "snippet_schedule_monday.php"; ?>
		<?php include "snippet_schedule_tuesday.php"; ?>
		<?php include "snippet_schedule_wednesday.php"; ?>
		<?php include "snippet_schedule_thursday.php"; ?>
		<?php include "snippet_schedule_friday.php"; ?>


	</section> <!--tab-content -->

</article> <!-- schedule -->