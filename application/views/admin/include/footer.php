
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/abz.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    	<!-- jQuery and JS bundle w/ Popper.js -->
	<script type="text/javascript">
		/* WOW.js init */
		new WOW().init();
		// Tooltips Initialization
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		// Material Select Initialization
		$(document).ready(function () {
			$('.mdb-select').material_select();
		});

		// SideNav Initialization
		$(".button-collapse").sideNav();

	</script>


	<script>
		// initialize and show Bootstrap 4 toast
		$('.toast').toast('show');

	</script>
</body>
</html>