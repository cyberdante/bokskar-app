function useStrict() {
    "use strict";
}

useStrict();

// Define the `bokskarApp` module
var bokskarApp = angular.module('bokskarApp', []);

bokskarApp.controller('LoggedInController', function LoggedInController($scope) {
    "use strict";
    $scope.loggedIn = !$scope.loggedIn;
});
