'use strict';

var jfd = angular.module('JFD');

jfd.controller('LoginController', ['$scope', '$timeout', '$window', 'Session', 'LxNotificationService', 'LxProgressService', function ($scope, $timeout, $window, Session, LxNotificationService, LxProgressService) {
    $scope.login = function (creds) {
        var session = new Session(creds);

        session.$login(function (data) {
            LxNotificationService.success('Logged In!');
            LxProgressService.circular.show('#5fa2db', '#progress');
            return $timeout(function () {
                $window.location = '/home';
            }, 2000);
        }, function (err) {
            LxNotificationService.error(err.data);
        });
    };
}]);
