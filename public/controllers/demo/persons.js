'use strict';

angular.module('seedApp')
.controller('PersonsController', ['$scope', 'Persons',
  function($scope, Persons) {
    $scope.persons = [];
    Person.get({}, function(response) {
      $scope.persons = response;
    });

    $scope.item = {};

    $scope.savePerson = function(item) {
      Person.save(item, function(response) {
        $scope.persons.push(response);
      });
    }
  }
]);
