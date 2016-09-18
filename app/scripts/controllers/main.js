'use strict';

/**
 * @ngdoc function
 * @name bokskarApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the bokskarApp
 */
angular.module('bokskarApp')
  .controller('MainCtrl', function () {
    angular.element(document).ready(function () {
        window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) { return t; }
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, 'script', 'twitter-wjs'));
    });
    this.scrollTo = function(scope, $elm) {
        $elm.on('click', function() {
            angular.element('body').animate({scrollTop: $elm.offset().top}, 'slow');
        });
    };
  });
