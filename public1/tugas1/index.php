<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<!-- ======= Start Form ======= -->
	<section id="form" class="form-mf sect-pt4 route">
		<div class="container mt-4">
			<h1 class="text-center">Form Biodata</h1>
			<form id="formbio" action="tampil.html" method="GET">
				<div class="form-group mb-4">
					<label for="fullname">Full Name :</label>
					<input type="text" class="form-control" id="fullname" name="fullname" required>
				</div>
				<div class="form-group mb-4">
					<label for="username">Username :</label>
					<input type="text" class="form-control" id="username" name="username" required>
				</div>
				<div>
					<label for="password" class="form-label">Password</label>
					<input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock"
						required>
					<div id="passwordHelpBlock" class="form-text mb-4">
						Your password must be 8-20 characters long, contain letters and numbers, and must not contain
						spaces,
						special characters, or emoji.
					</div>
				</div>
				<div class="form-group mb-4">
					<label for="nim">NIM :</label>
					<input type="text" class="form-control" id="nim" name="nim" required>
				</div>
				<div class="form-group mb-4">
					<label for="email">Email :</label>
					<input type="text" class="form-control" id="email" name="email" required>
				</div>
				<div class="form-group mb-4">
					<label for="agama" class="form-label">Agama :</label>
					<select class="form-select" id="agama" name="agama" aria-label="Default select example">
						<option selected>Select this option</option>
						<option value="Hindu">Hindu</option>
						<option value="Islam">Islam</option>
						<option value="Budha">Budha</option>
						<option value="Kristen Protestan">Kristen Protestan</option>
						<option value="Kristen Katolik">Kristen Katolik</option>
						<option value="Kong Hu Chu">Kong Hu Chu</option>
					</select>
				</div>
				<div>
					<label for="jeniskelamin" class="form-label">Jenis Kelamin :</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin1"
						value="Laki - Laki">
					<label class="form-check-label" for="jeniskelamin1">Male</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin2"
						value="Perempuan">
					<label class="form-check-label" for="jeniskelamin2">Female</label>
				</div>
				<div>
					<button type="submit" class="btn btn-primary mb-4">Submit</button>
				</div>
			</form>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<script src="js/biodata.js"></script>
</body>

</html>