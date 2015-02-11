'use strict';
var angular;

angular.module('JFD')

    .controller('ProjectsController', ['$scope', 'Project', 'LxDialogService', function ($scope, Project, LxDialogService) {
        Project.query().$promise.then(function (data) {
            console.log(data);
            $scope.projects = data;
        });

        $scope.clickProject = function (project) {
            LxDialogService.open('project');
            $scope.select = project.$copy;
        };
    }]);
