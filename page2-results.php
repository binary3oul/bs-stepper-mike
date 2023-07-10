<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="extras/styles/bootstrap.min.css">
    <link rel="stylesheet" href="extras/styles/font-awesome.min.css">
    <link rel="stylesheet" href="extras/styles/index.css">
    <link rel="stylesheet" href="extras/styles/main.css" type="text/css">
    
    <title>TEST | Lorem ipsum dolor sit amet</title>
</head>

<body>

<main>
	<div class="container"><!-- container -->
        <header><!-- Header -->
        <!--
        -->
            <img width="100%" src="extras/images/main_headerbg_sm.png" alt="Header Image">
        </header>

        <div class="row mt-3 mb-4">
            <div class="col-12">
				
            
				<p>Form results here</p>
				<?php 
					foreach ($_POST as $index => $value) {
						?>
						<p><?php echo $index; ?> = <?php echo $value;?></p>
				<?php	}
				?>
				
			</div>
		</div><!-- row -->
		
	</div><!-- /container -->
</main>

	<!-- Footer -->
	<!--[Include:'/SDAS/includes/footer.inc']-->
	<footer style="border-top: 2px solid grey;">
		<div class="row pt-3">
			<div class="col-12 text-center">
				<p class="p-0 m-0">
					<small style="color: grey;">
						&copy;2023 Company Name. All Rights Reserved.<BR>
						<img src="extras/images/logo.png" alt="Logo"><BR><BR>
					</small>
				</p>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assetsNEW/js/jquery.min.js"></script>
    <script type="text/javascript" src="extras/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>