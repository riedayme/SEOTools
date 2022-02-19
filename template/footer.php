<?php defined('BASEPATH') OR exit('no direct script access allowed');?>

<!-- ========== footer start =========== -->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 order-last order-md-first">
				<div class="copyright text-center text-md-start">
					<p class="text-sm">
						&copy;<?php echo date('Y').' '.$appinfo['name'] ?>						
					</a>
				</p>
			</div>
		</div>
		<!-- end col-->
		<div class="col-md-6">
			<div class="terms d-flex justify-content-center justify-content-md-end">
				<a class="text-decoration-none fw-bold px-2 py-0 " href="javascript:;" data-bs-toggle="modal" data-bs-target="#about">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
						<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
						<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
					</svg>
					About
				</a>
			</div>
		</div>
	</div>
	<!-- end row -->
</div>
<!-- end container -->
</footer>
<!-- ========== footer end =========== -->
</main>

<?php include "template/about.php"; ?>

<!-- ========= All Javascript files linkup ======== -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/dynamic-pie-chart.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.js"></script>
<script src="assets/js/jvectormap.min.js"></script>
<script src="assets/js/world-merc.js"></script>
<script src="assets/js/polyfill.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>