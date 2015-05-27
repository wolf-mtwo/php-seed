'use strict';

angular.module('seedApp').factory('Persons', ['$resource',
  function($resource) {
    return $resource('./api/demo/person', {
    }, {
      get: {
        method: 'GET',
        isArray: true
      },
      update: {
        method: 'PUT'
      }
    });
  }
]);
