angular.module('newsletterApp').controller('newsletterDetailCtrl',newsletterDetailCtrl);
newsletterDetailCtrl.$inject = ['$scope', '$state', '$stateParams','newsletterService'];


function newsletterDetailCtrl($scope, $state, $stateParams, newsletterService) {

    var promise = newsletterService.getNewsletterDetail($stateParams.id);

    promise.then(function (response) {
        $scope.newsletterDetail = response;
    })

    $scope.editNewsletter = function(){
        var promise = newsletterService.editNewsletter($stateParams.id,$scope.newsletterDetail.title, $scope.newsletterDetail.introduction,$scope.newsletterDetail.body);

        promise.then(function (response) {
           $state.go('newsletterDetail',{id:$scope.newsletterDetail.id});
        })
    }

    var promiseEmailNewsletter = newsletterService.getEmailsNewsletter($stateParams.id);

    promiseEmailNewsletter.then(function (response) {
        $scope.emails_n = response;
    })

    $scope.addEmail = function(id){
        var promise = newsletterService.addEmail(id, $scope.n_email);

        promise.then(function (response) {
            $scope.emails_n.push($scope.n_email);
            $scope.n_email = "";
        })
    }

    $scope.removeEmailFromNewsletter = function(id,email){
        var promise = newsletterService.removeEmailFromNewsletter(id, email);

        promise.then(function (response) {
            $scope.emails_n.pop(email);
        })
    }

    $scope.sendEmail = function(id){
        angular.forEach($scope.emails_n, function(email){
            var promise = newsletterService.sendEmail(id, email);

            promise.then(function (response) {
                $state.go('newsletterDetail',{id:$scope.newsletterDetail.id});
            })
        });
    }
}

