'use strict';

var myApp = angular.module('myApp', ['ngRoute']);
myApp.controller('TodosController',
  function TodosController($scope, $routeParams, $http, $filter) {
    'use strict';

  var todos = $scope.todos = $http.get('/todos', function (success) {
    return todos;
  });

  $scope.newTodo = '';
  $scope.editedTodo = null;
  $scope.$watch('todos', function (newVal, oldVal) {
    $scope.remainingCount = $filter('filter')(todos, { completed: false }).length;
    $scope.completedCount = todos.length - $scope.remainingCount;
    $scope.allChecked = !$scope.remainingCount;
    if (newVal !== oldVal) {
      $http.post('todos', todo)
    }
  }, true);

  $scope.$on('$routeChangeSuccess', function() {
    var status = $scope.status = $routeParams.status || '';

    $scope.statusFilter = (status === 'active') ?
    {completed: false} : (status === 'completed') ?
    {completed: true} : null;
  });

  $scope.addTodo = function() {
    var newTodo = $scope.newTodo.trim();
    if (!newTodo.length) {
      return;
    }
    todos.push({
      body: newTodo,
      completed: false
    });

    $scope.newTodo = '';
  };

  $scope.editTodo = function(todo) {
    $scope.editedTodo = todo;
    $scope.originalTodo = angular.extend({}, todo);
  };

  $scope.doneEditing = function (todo) {
    $scope.editedTodo = null;
    todo.body = todo.body.trim();

    if (!todo.body) {
      $scope.removeTodo(todo);
    }
  };

  $scope.revertEditing = function (todo) {
    todos[todos.indexOf(todo)] = $scope.originalTodo;
    $scope.doneEditing($scope.originalTodo);
  };

  $scope.removeTodo = function (todo) {
    todos.splice(todos.indexOf(todo), 1);
  };

  $scope.clearCompletedTodos = function () {
    $scope.todos = todos = todos.filter(function(val) {
      return !val.completed;
    });
  };
  $scope.markAll = function (completed) {
    todos.forEach(function (todo) {
      todo.completed = !completed;
    });
  };
});

  /*
  $scope.remaining = function() {
    var count = 0;

    angular.forEach($scope.todos, function(todo) {
      count += todo.completed ? 0 : 1;
    });
    return count;
  }

  $scope.addTodo = function() {
    var todo = {
      body: $scope.newTodoText,
      completed: false
    };
    $scope.todos.push(todo);
    $http.post('todos', todo);
  };

  $scope.editTodo = function(todo) {
    $scope.editedTodo = todo;
    // Clone the original todo to restore it on demand
    $scope.originalTodo = angular.extend({}, todo);

  }
}
*/
