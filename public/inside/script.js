/*global angular */
function AppCtrl($scope) {
  $scope.user = null;
  $scope.master = null;
  $scope.save = function() {
    $scope.master = angular.copy($scope.user);
  }
}
