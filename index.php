<?php
// Ottieni la lista delle cartelle in htdocs
$directories = array_filter(glob('*'), 'is_dir');
?>

<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Progetti PHP</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

	<style>
		body {
			background-color: #e0f7fa;
			color: #0277bd;
		}

		.folder-item {
			text-align: center;
			padding: 20px;
			border-radius: 10px;
			background-color: #ffffff;
			transition: background-color 0.3s ease;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			margin-bottom: 30px;
		}

		.folder-item:hover {
			background-color: #b2ebf2;
		}

		.folder-item i {
			font-size: 3em;
			color: #0277bd;
		}

		.folder-item a {
			display: block;
			color: #0277bd;
			text-decoration: none;
			margin-top: 10px;
		}

		.folder-item a:hover {
			color: #01579b;
		}

		.row>.col-md-4 {
			margin-bottom: 30px;
		}
	</style>
</head>

<body>
	<div class="container mt-5">
		<h1 class="text-center mb-5">Progetti PHP</h1>
		<div class="row">
			<div class="col d-flex align-items-center justify-content-evenly">


				<?php
				foreach ($directories as $directory) {
					echo '<a class="folder-item text-decoration-none text-dark card" href="' . $directory . '" style="width: 18rem;">
								<div class="card-body">
									<div class="">
										<i class="fas fa-folder in"></i>
									</div>
									<span>' . $directory . '</span>
								</div>
							</a>';
				}

				?>

			</div>
		</div>

	</div>

	<!-- Includi Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>