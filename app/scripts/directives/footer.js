'use strict';

/**
 * @ngdoc function
 * @name bokskarApp.directive:footer
 * @description
 * # footer directive
 */
angular.module('bokskarApp')
  .directive('footer', function() {
    return {
      restrict: 'A', // This means that it will be used as an attribute and NOT as an element.
      replace: true,
      templateUrl: '../../views/footer.html',
      controller: ['$scope', '$filter', function($scope, $filter) {
        // Your behaviour goes here :)
        console.log('printing scope: ' + typeof $scope);
        console.log('printing filter: ' + typeof $filter);
      }]
    };
  });
