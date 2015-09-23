angular.module('newsletterApp').controller('loginCtrl',loginCtrl);
loginCtrl.$inject = ['$scope','$state', 'newsletterService'];

function loginCtrl($scope, $state, newsletterService){
    $scope.login = function(email_login, password){
        var promise = newsletterService.login(email_login,password);

        promise.then(function (response) {
            $state.go('newsletters');
        })
    }
}
