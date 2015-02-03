'use strict';

var jfd = angular.module('JFD');

jfd.directive('studentName', ['Student', function (Student) {
    return {
        restrict: 'E',
        scope: {
            studentId: '@studentId'
        },
        link: function (scope, element, attrs) {
            var student = new Student({id: attrs.studentId});
            student.$show(function (data) {
                scope.student = data;
            });

            return scope.student;
        },
        template: function (elem, attr) {
            return '<b>{{ student.first_name }}&nbsp;{{ student.last_name }}';
        }
    };
}]);
