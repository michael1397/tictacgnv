var app = angular.module('tictacgnv', [
    'ngRoute'
]);
app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
        .when("/", {templateUrl: "templates/home.html", controller: "HomeCtrl"})
        
        .when("/home", {templateUrl: "templates/home.html", controller: "Home"})
        .when("/sobre", {templateUrl: "templates/sobre.html", controller: "SobreCtrl"})
        .when("/servicos", {templateUrl: "templates/servicos.html", controller: "ServicosCtrl"})
        .when("/portfolio", {templateUrl: "templates/portfolio.html", controller: "PortfolioCtrl"})
        .when("/contato", {templateUrl: "templates/contato.html", controller: "contatoCtrl"})

        .when('/404', {templateUrl: "templates/404.html"})
        .otherwise("/404");
}]);

/*
 * Controllers
 */
app.controller('HomeCtrl', function ($scope, $location) {

});

app.controller('SobreCtrl', function ($scope, $location) {

});

app.controller('ServicosCtrl', function ($scope, $location) {

});

app.controller('PortfolioCtrl', function ($scope, $location) {

});

app.controller('contatoCtrl', function ($scope, $location) {

});