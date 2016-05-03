var app = angular.module('app_etes', []);

app.controller('login', ['$scope', function($scope){
	$scope.formData = {};

	$scope.save = function(){



		if (!$scope.formData.hasOwnProperty('name') && !$scope.formData.hasOwnProperty('pass'))
			console.log($scope.formData);
	};

	$scope.submitForm = function (formData) {
	    alert('Form submitted with' + JSON.stringify(formData));
	};
}]);


var module = angular.module('app_etes', []);

module.controller('NewUserController', function($scope) {
	$scope.save = function() {
		if ($scope.userForm.$valid) {
			alert('User saved');
			$scope.reset();
		} else {
			alert("There are invalid fields");
		}
	};
	
	$scope.reset = function() {
		$scope.user = { name: '', email: '' };
	}
});