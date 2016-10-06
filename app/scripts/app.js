'use strict';

/**
 * @ngdoc overview
 * @name bokskarApp
 * @description
 * # bokskarApp
 *
 * Main module of the application.
 */
angular
  .module('bokskarApp', [
    'ngRoute'
  ])
  .config(function($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      .when('/customer-support', {
        templateUrl: 'views/customer-support.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/at-your-service', {
        templateUrl: 'views/at-your-service.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/sign-up', {
        templateUrl: 'views/sign-up.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .otherwise({
        redirectTo: '/',
        controller: 'MainCtrl',
        controllerAs: 'main'
      });
  });
