<?php
//funcion esta ubicada en views/vendor/adminlte/layouts/partials/sidebar.blade.php
//esto permite que los botones de sidebar se mantengan seleccionados
	function active($path)
	{
		return request()-> is($path) ? 'active' : '';
	}
