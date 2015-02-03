'use strict';

var jfd = angular.module('JFD');

jfd.controller('RegisterController', ['$scope', '$timeout', 'Registration', 'LxNotificationService', 'LxProgressService', '$window', function ($scope, $timeout, Registration, LxNotificationService, LxProgressService, $window) {

    $scope.register = function (textField) {
        if (textField === undefined) {
            return LxNotificationService.error('Fill out the damn Form!');
        }

        if (textField.firstEmail !== textField.secondEmail) {
            return LxNotificationService.error('Emails do not match!');
        }
        var registration = new Registration(textField);

        registration.$register(function(data) {
            LxNotificationService.success("Account Created!");
            LxProgressService.circular.show('#5fa2db', '#progress');
            return $timeout(function () {
                return $window.location = '/login';
            }, 5000);
        }, function (err) {
            LxNotificationService.error(err.data);
        });
    };
}]);
