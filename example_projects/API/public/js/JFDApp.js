'use strict';

var jfd = angular.module('JFD', ['lumx', 'ngResource', 'ui.router'])

    .config(function ($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/projects');

        $stateProvider
            .state('projects', {
                url: '/projects',
                templateUrl: '/js/partials/projects.html',
                controller: 'ProjectsController'
            })
            .state('weeks', {
                url: '/weeks'
            })
            .state('students', {
                url: '/students'
            });
    });
