<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>PHP Seed</title>

		<script src="./public/bower_components/angular/angular.js"></script>
		<script src="./public/bower_components/jquery/dist/holder.js"></script>
		<script src="./public/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
		<script src="./public/bower_components/angular-resource/angular-resource.js"></script>
		<script src="./public/bower_components/angular-route/angular-route.js"></script>
		<script src="./public/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
		<script src="./public/bower_components/jquery/dist/jquery.js"></script>

		<link rel="stylesheet" href="./public/assets/css/style.css">
		<link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/bootstrap.css">

		<script src="./public/app.js"></script>
		<script src="./public/routes/home.js"></script>
		<script src="./public/routes/public.js"></script>
		<script src="./public/routes/demo.js"></script>

		<script src="./public/services/persons.js"></script>

		<script src="./public/controllers/main.js"></script>
		<script src="./public/controllers/home.js"></script>
		<script src="./public/controllers/contact.js"></script>
		<script src="./public/controllers/demo/persons.js"></script>

	</head>

	<body>

		<div ng-app="seedApp">

			<div ui-view>
			</div>

		</div>

	</body>

</html>
