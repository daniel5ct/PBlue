angular.module('newsletterApp').factory('newsletterService', ['$http', '$q', function($http, $q) {

    var login = function(email_login, password) {
        var deferred = $q.defer();
        $http.post("http://localhost:8080/PBlue/public/index.php/login", {'email':email_login, 'password':password})
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var getAllNewsletters = function() {
        var deferred = $q.defer();
        $http.get("http://localhost:8080/PBlue/public/index.php/getAll")
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var getNewsletterDetail = function(id) {
        var deferred = $q.defer();
        $http.get("http://localhost:8080/PBlue/public/index.php/getById/"+id)
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var editNewsletter = function(id, title, introduction, body) {
        var deferred = $q.defer();
        $http.post("http://localhost:8080/PBlue/public/index.php/editNewsletter/"+id,{'title':title, 'introduction':introduction,'body':body})
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var addNewsletter = function(title, introduction, body) {
        var deferred = $q.defer();
        $http.post("http://localhost:8080/PBlue/public/index.php/createNewsletter/",{'title':title, 'introduction':introduction,'body':body})
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var removeNewsletter = function(id) {
        var deferred = $q.defer();
        $http.get("http://localhost:8080/PBlue/public/index.php/deleteNewsletter/"+id)
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var addEmail = function(id_newsletter, email) {
        var deferred = $q.defer();
        $http.post("http://localhost:8080/PBlue/public/index.php/addEmailToNewsletter/",{'id_newsletter':id_newsletter, 'email':email})
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var getEmailsNewsletter = function(id) {
        var deferred = $q.defer();
        $http.get("http://localhost:8080/PBlue/public/index.php/getEmailsNewsletter/"+id)
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var removeEmailFromNewsletter = function(id, email) {
        var deferred = $q.defer();
        $http.get("http://localhost:8080/PBlue/public/index.php/deleteEmailFromNewsletter/"+id+"/"+email)
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function(response){
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    var sendEmail = function(id,email) {
        var deferred = $q.defer();
        $http.post("http://localhost:8080/PBlue/public/index.php/sendEmail/" + id,{'email':email})
            .success(function (response) {
                deferred.resolve(response);
            })
            .error(function (response) {
                deferred.reject("ERROR");
            });
        return deferred.promise;
    };

    return {
        login : login,
        getAllNewsletters : getAllNewsletters,
        getNewsletterDetail: getNewsletterDetail,
        editNewsletter: editNewsletter,
        addNewsletter : addNewsletter,
        removeNewsletter : removeNewsletter,
        addEmail : addEmail,
        getEmailsNewsletter : getEmailsNewsletter,
        sendEmail : sendEmail,
        removeEmailFromNewsletter : removeEmailFromNewsletter,
    };
}]);