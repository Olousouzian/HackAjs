/**
 * Main AngularJS Web Application
 */
var app = angular.module('HackAjsApp', [
    'ngRoute'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {

    $routeProvider
        // Home
        .when("/", {
            templateUrl: window.pathView + "/partials/home.html",
            controller: "HomeCtrl"
        })

        // else 404
        // TODO : place 404 page here
        .otherwise({redirectTo: "/"});
    }]);

    // .run(function ($rootScope, $templateCache) {
    //     $rootScope.$on('$viewContentLoaded', function () {
    //         $templateCache.removeAll();
    //     });
    // });

