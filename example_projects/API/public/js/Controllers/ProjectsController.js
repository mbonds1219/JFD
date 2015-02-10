'use strict';
var angular;

angular.module('JFD')

    .controller('ProjectsController', ['$scope', 'Project', function ($scope, Project) {
        Project.query().$promise.then(function (data) {
            console.log(data);
            $scope.projects = data;
        });
    }]);
