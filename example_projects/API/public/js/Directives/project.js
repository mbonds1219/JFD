'use strict';

var jfd = angular.module('JFD');

jfd.directive('projectInfo', ['Project', function (Project) {
    return {
        restrict: 'E',
        scope: {
            projectId: '@projectId'
        },
        link: function (scope, elem, attrs) {
            var project = new Project({id: attrs.projectId});
            project.$show(function (data) {
                scope.project = data;
            });
            return scope.project;
        },
        template: function (elem, attr) {
            return '{{project.title}}';
        }
    };
}]);
