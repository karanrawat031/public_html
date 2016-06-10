'use strict';

// Declare app level module which depends on views, and components
angular.module('mySite', [
  'ngRoute',
  'mySite.home'
]).
config(['$routeProvider', function($routeProvider) {

  $routeProvider
   .when('/about',{
  templateUrl: '/webpages/aboutme/aboutme.php'
})
   .when('/contact',{
  templateUrl: '/webpages/contact/contact.php'
    })

   .otherwise({redirectTo: '/home'});
}]);
