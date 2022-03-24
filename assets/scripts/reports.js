angular.module("application").controller("controller_reports", function($scope, $http, $timeout){

  $scope.txt_cities_id = "";
  $scope.txt_lost_address = "";
  $scope.txt_lost_date = "";
  $scope.txt_name = "";
  $scope.txt_type_pet_id = "";
  $scope.txt_breed = "";
  $scope.txt_color = "";
  $scope.txt_size_pet_id = "";
  $scope.txt_cellphone1 = "";
  $scope.txt_cellphone2 = "";
  $scope.txt_reward = "";
  $scope.txt_status_id = "";
  $scope.txt_users_id = "";
  $scope.txt_description = "";
  $scope.txt_err_report = "";
  $scope.queue_request = 0;
  $scope.list_cities = []
  $scope.list_type = []
  $scope.list_size = []


  $scope.validate_report = function(){

    $scope.txt_err_report = "";

    if($scope.txt_cities_id.length < 1){
      $scope.txt_err_report = "Debes seleccionar una ciudad";
      return false;
    }
    if($scope.txt_lost_address.length < 1 || $scope.txt_lost_address.length > 50){
      $scope.txt_err_report = "Debes ingresar una dirección válida";
      return false;
    }
	if($scope.txt_lost_date.length < 1 || $scope.txt_lost_date.length > 50){
		$scope.txt_err_report = "Debes ingresar una fecha válida";
		return false;
	}
	if($scope.txt_name.length < 1 || $scope.txt_name.length > 50){
		$scope.txt_err_report = "Debes ingresar un nombre válido";
		return false;
	}
	if($scope.txt_type_pet_id.length < 1){
		$scope.txt_err_report = "Debes seleccionar el tipo de tu mascota";
		return false;
	}
	if($scope.txt_breed.length < 1 || $scope.txt_breed.length > 50){
		$scope.txt_err_report = "Debes ingresar una raza válida";
		return false;
	}
	if($scope.txt_color.length < 1 || $scope.txt_color.length > 50){
		$scope.txt_err_report = "Debes ingresar un color válido";
		return false;
	}
	if($scope.txt_size_pet_id.length < 1){
		$scope.txt_err_report = "Debes seleccionar el tamaño de tu mascota";
		return false;
	}
	if($scope.txt_cellphone1.length != 10 ){
		$scope.txt_err_report = "Debes ingresar un número válido";
		return false;
	}
	if($scope.txt_status_id.length < 1){
		$scope.txt_err_report = "Debes seleccionar un estado";
		return false;
	}
	if($scope.txt_description.length > 100){
		$scope.txt_err_report = "La descripción contiene demasiados caracteres";
		return false;
	}
    return true;
  };


  //  $scope.queue_request++;

  $scope.get_cities = function(){
	  console.log("obtener ciudades")
	  $http({
		method: "get",
		url : "../reports/get_cities",
		data : {}
	  })
	  .then(function(response){
		  $scope.list_cities = response.data
	   console.log(response);
	  });
  }
  $scope.get_cities();

  $scope.get_type = function(){
	$http({
	  method: "get",
	  url : "../reports/get_type",
	  data : {}
	})
	.then(function(response){
		$scope.list_type = response.data
	 console.log(response);
	});
}
$scope.get_type();

$scope.get_size = function(){
	$http({
	  method: "get",
	  url : "../reports/get_size",
	  data : {}
	})
	.then(function(response){
		$scope.list_size = response.data
	 console.log(response);
	});
}
$scope.get_size();

$scope.get_status = function(){
	$http({
	  method: "get",
	  url : "../reports/get_status",
	  data : {}
	})
	.then(function(response){
		$scope.list_status = response.data
	 console.log(response);
	});
}
$scope.get_status();


$scope.check_report = function(){
    if(!$scope.validate_report()){
      return;
    }

	$http({
		method: "post",
		url : "../reports/do_report",
		data : {
			cities_id : $scope.txt_cities_id,
			lost_address : $scope.txt_lost_address,
			lost_date : $scope.txt_lost_date,
			name : $scope.txt_name,
			type_pet_id : $scope.txt_type_pet_id,
			breed : $scope.txt_breed,
			color : $scope.txt_color,
			size_pet_id : $scope.txt_size_pet_id,
			cellphone1 : $scope.txt_cellphone1,
			cellphone2 :  $scope.txt_cellphone2,
			reward : $scope.txt_reward,
			status_id : $scope.txt_status_id,
			users_id : $scope.txt_users_id,
			description : $scope.txt_description,
		}
	  })
	  .then(function(response){
  
		  if(response.data.status == "error"){
			$scope.txt_err_report = response.data.message;
			return;
		}
		window.location.href="reports";
	  });

};

});