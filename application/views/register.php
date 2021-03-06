<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petfind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/register.css">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200&display=swap" rel="stylesheet">	
	
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <script src="../../assets/scripts/register.js"></script>


</head>
<body ng-app="application" ng-controller="controller_register">


    <!-- <div id="preloader_main" ng-show="queue_request > 0">
        <div class="container-preloader">
            <img src="../../assets/images/gif/loader1.gif" alt="">
        </div>
    </div> -->

    
    <div class="card card-panel-login">
		<div class="color-form-head" >
			<h4 class="card-title text-center">Regístrate</h4>

		</div>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                <input ng-model="txt_user" type="text" required maxlength="50" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
                <input ng-model="txt_first_name" type="text" maxlength="20" class="form-control">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                <input ng-model="txt_last_name" type="text" maxlength="20" class="form-control">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Celular</label>
                <input ng-model="txt_cellphone" type="text" maxlength="10" class="form-control">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
                <input ng-model="txt_password1" type="password" maxlength="10" class="form-control">
            </div>
			<div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Repetir contraseña</label>
                <input ng-model="txt_password2" type="password" maxlength="10" class="form-control">
            </div>


            <div class="alert alert-danger" ng-if="txt_err_register" role="alert">
                {{txt_err_register}}
            </div>

            <div class="text-center">
                <a href="" class="btn btn-primary" ng-click="check_login()">Registrarse</a>
            </div>

            <div class="text-center">
				<a class="btn-login" href="login">¿Ya tienes una cuenta?</a>
            </div>
        </div>
      </div>

</body>
</html>