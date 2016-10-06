'use strict';

/**
 * @ngdoc function
 * @name bokskarApp.directive:header
 * @description
 * # header directive
 */
angular.module('bokskarApp')
  .directive('header', function() {
    return {
      restrict: 'A', // This means that it will be used as an attribute and NOT as an element.
      replace: true,
      scope: {user: '='}, // This is one of the cool things :). Will be explained in post.
      templateUrl: '../../views/header.html',
      controller: ['$scope', '$filter', function($scope, $filter) {
        // Your behaviour goes here :)
        console.log('printing scope: ' + typeof $scope);
        console.log('printing filter: ' + typeof $filter);
      }]
    };
  });
