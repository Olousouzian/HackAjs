angular.module('HackAjsApp')
    .controller("HomeCtrl", ["$rootScope", "$scope",
     function ($rootScope, $scope) {
   		$scope.homeVar = "Home";
   }]);
