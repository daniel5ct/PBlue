angular.module('newsletterApp').controller('newsletterCtrl',newsletterCtrl);
newsletterCtrl.$inject = ['$scope','$state','newsletterService'];


function newsletterCtrl($scope, $state, newsletterService) {
    var promise = newsletterService.getAllNewsletters();

    promise.then(function (response) {
        $scope.newsletters = response;
    })

    $scope.getNewsletterDetail = function(id){
        var promise = newsletterService.getNewsletterDetail(id);

        promise.then(function (response) {
            $scope.newsletterDetail = response;
        })
    }

    $scope.addNewsletter = function(){
        var promise = newsletterService.addNewsletter($scope.title, $scope.introduction,$scope.body);

        promise.then(function (response) {
            $state.go('newsletters');
        })
    }

    $scope.removeNewsletter = function(id){
        var promise = newsletterService.removeNewsletter(id);

        promise.then(function (response) {
            $state.go('newsletters');
        })
    }

    $scope.reloadPage = function(){
        window.location.reload();
    }
}

