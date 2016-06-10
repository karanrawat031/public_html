'use strict';

angular.module('mySite.home', ['ngRoute','ngAnimate'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {
    templateUrl: 'home/home.php',
    controller: 'View1Ctrl'
  });
}])

.controller('View1Ctrl', ['$scope','$log',function($scope, $log) {

//console logging for checking do this in ng-click $log.log(message)
  $scope.$log = $log;
  $scope.message = 'Hello World!';
  $scope.class="hidden";
  $scope.navbar=function(){
    if($scope.class=="hidden")
    {
    	$scope.class="show";

    }
    else{
    	$scope.class="hidden";
        
   }
  };

}]);

















































































































/*
var d=new Date();
var weekday=new Array(7);
weekday[0]="Sunday";
weekday[1]="Monday";
weekday[2]="Tuesday";
weekday[3]="Wednesday";
weekday[4]="Thursday";
weekday[5]="Friday";
weekday[6]="Saturday";

var currentDay = weekday[d.getDay()];
currentDay = currentDay.toLowerCase();

  $('.color-swatch').addClass(currentDay);


$('.js-day').text(currentDay);

*/
