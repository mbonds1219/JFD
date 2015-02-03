'use strict';

var jfd = angular.module('JFD');

jfd.directive('weekInfo', ['Week', function (Week) {
    return {
        restrict: 'E',
        scope: {
            weekid: '@weekId'
        },
        link: function (scope, element, attrs) {
            var week = new Week({id: attrs.weekId});
            week.$show(function (data) {
                scope.week = data;
            });

            return scope.week;
        },
        template: function (elem, attr) {
            return '<i>{{week.subject}}</i>';
        }
    }
}]);
