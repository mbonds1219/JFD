'use strict';

var jfd = angular.module('JFD');

// Resource for registering new student
jfd.factory('Registration', ['$resource', function ($resource) {
    return $resource('/api/register', null, {
        'register': {
            method: "POST"
        }
    });
}]);

// Resource for logging in
jfd.factory('Session', ['$resource', function ($resource) {
    return $resource('/api/session', null, {
        'login': {
            method: "POST"
        },
        'logout': {
            method: "delete"
        }
    });
}]);

// resource for students
jfd.factory('Student', ['$resource', function ($resource) {
    return $resource('/api/student/:id', {
        id: '@id'
    }, {
        'show': {
            method: 'GET',
            params: {
                id: '@id'
            }
        }
    })
}]);

jfd.factory('Week', ['$resource', function ($resource) {
    return $resource('/api/week/:id', {
        id: '@id'
    }, {
        'show': {
            method: 'GET',
            params: {
                id: '@id'
            }
        }
    });
}]);

jfd.factory('Project', ['$resource', function ($resource) {
    return $resource('/api/project/:id', {
        id: '@id'
    }, {
        'show': {
            method: 'GET',
            params: {
                id: '@id'
            }
        }
    });
}]);
