<!DOCTYPE html>
<html lang="pt-br" id="index">
<head>
	<!-- Configurações -->
	<?php include "includes/head.php"; ?>
	<title>FiscalizaPE</title>
</head>

<!-- NAVBAR -->
<?php include "includes/header.php"; ?>

<body class="text-center" id="index">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

		<main role="main" class="inner cover">
			<h1 id="texto">FiscalizaPE</h1>
			<p class="lead">Seja você um fiscal das obras públicas, denuncie, cobre e faça do Brasil um país melhor e mais justo para todos!</p>
			<p class="lead">
				<div class="input-wrap">
					<form action="" class="form-box d-flex justify-content-between">
						<input type="text" placeholder="Procure por cidades, bairros ou obras..." class="form-control" name="search">
						<button type="submit" class="mybtn" id="indexbtnsearch">Buscar</button>
					</form>
				</div>
			</p>
		</main>
	</div>

	<!-- Footer -->
	<?php include "includes/footer.php" ?>
</body>
</html>