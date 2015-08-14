<!DOCTYPE html>
<html>
<head>
	<?php require 'head.php'; ?>
	<script src="<?php echo PATH_JS ?>jquery-2.1.4.js"></script>
</head>
<body>
<div id="wrapper">
	<header>
		<?php require 'header.php'; ?>
		<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">Examination</h2>
				</div>
			</div>
		</div>
		</section>
	</header>
	
	<section id="content">
	<div class="container">
		 <?php echo $content; ?>
	</div>
	</section>

	<footer>
		<?php require 'footer.php'; ?>
	</footer>
</div>
<a href="#" class="scrollup" style="display: none;"><i class="fa fa-angle-up active"></i></a>
<!-- JS -->

<script src="<?php echo PATH_JS ?>jquery.easing.1.3.js"></script>
<script src="<?php echo PATH_JS ?>bootstrap.min.js"></script>
<script src="<?php echo PATH_JS ?>jquery.fancybox.pack.js"></script>
<script src="<?php echo PATH_JS ?>jquery.fancybox-media.js"></script>
<script src="<?php echo PATH_JS ?>portfolio/jquery.quicksand.js"></script>
<script src="<?php echo PATH_JS ?>portfolio/setting.js"></script>
<script src="<?php echo PATH_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo PATH_JS ?>animate.js"></script>
<script src="<?php echo PATH_JS ?>jquery.twbsPagination.min.js"></script>
<script src="<?php echo PATH_JS ?>jquery.validate.min.js"></script>
<script src="<?php echo PATH_JS ?>jquery.blockUI.js"></script>
<script src="<?php echo PATH_JS ?>bootstrap-datepicker.min.js"></script>
<script src="<?php echo PATH_JS ?>bootstrap-datepicker.vi.min.js"></script>

<script src="<?php echo PATH_JS ?>custom.js"></script>

</body>
</html>