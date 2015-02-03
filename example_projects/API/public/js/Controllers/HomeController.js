'use strict';

var jfd = angular.module('JFD');

jfd.controller('HomeController', ['$scope', 'LxDialogService', function ($scope, LxDialogService) {
    $scope.solutions = [
        {
            'project_id': '1',
            'student_id': '1'
        }
    ];
    $scope.view = function (solution) {
        LxDialogService.open('view');
    };

    $scope.comment = function (solution) {

    };
}]);
