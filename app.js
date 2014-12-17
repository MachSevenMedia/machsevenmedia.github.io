var myApp = angular.module('myApp',[]);

function MyCtrl($scope, $timeout) {
  $scope.frameUrl = 'http://www.symcat.com/';
  $scope.frameName = 'Symptom Checker';
  $timeout(function () {
  }, 1000)
};
