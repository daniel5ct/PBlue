angular.module('newsletterApp',['ui.router']);

angular.module('newsletterApp').config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise("/login");
    $stateProvider
        .state('login',{
            url:'/login',
            templateUrl: 'views/login.html',
            controller: 'loginCtrl'
        })
        .state('newsletters',{
            url:'/newsletters',
            templateUrl: 'views/newsletters.html',
            controller: 'newsletterCtrl'
        })
        .state('newsletterDetail',{
            url:'/newsletters/:id',
            templateUrl: 'views/newsletterDetail.html',
            controller: 'newsletterDetailCtrl'
        })
        .state('newsletterEdit',{
            url:'/newsletters/:id/edit',
            templateUrl: 'views/editNewsletter.html',
            controller: 'newsletterDetailCtrl'
        })

        .state('newsletterAdd',{
            url:'/add',
            templateUrl: 'views/addNewsletter.html',
            controller: 'newsletterCtrl'
        });
});

angular.module("newsletterApp").run(function ($rootScope, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
});