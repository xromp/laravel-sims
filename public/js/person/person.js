var app;
define('sims.person',[
	'angular',
	'js/module-loader/dependencyResolverFor.js',
], function(angular, dependencyResolver){
	'use strict';
	 app = angular
		.module('sims.person',['ngRoute','ngAnimate','ngSanitize','ui.bootstrap', 'blockUI', function($interpolateProvider) {
			$interpolateProvider.startSymbol = '<%';
			$interpolateProvider.endSymbol = '%>';
		}])
		.config(Config)

		Config.$inject = ['$routeProvider', '$locationProvider', '$controllerProvider', '$compileProvider', '$filterProvider', '$provide', 'blockUIConfig']
		function Config($routeProvider, $locationProvider, $controllerProvider, $compileProvider, $filterProvider, $provide, blockUIConfig){
			app.lazy = {	
				controller :$controllerProvider.register,
				directive  :$compileProvider.directive,
				filter     :$filterProvider.register,
				factory    :$provide.factory,
				service    :$provide.service,
				blockUI    : blockUIConfig,
			}

			$locationProvider.html5Mode(true);
			$routeProvider
			.when('/person/finder',{
				templateUrl:'person.finder',
				controller:'PersonFinderCtrl',
				controllerAs:'pf',
				resolve: dependencyResolver([
					'/js/person/PersonFinderApp.js'
				])
			})
			.when('/person/create',{
				templateUrl:'person.create',
				controller:'PersonCreateCtrl',
				controllerAs:'p',
				resolve:dependencyResolver([
					'/js/person/PersonCreateApp.js'
				])
			})
			.otherwise({template:'<p>Wrong Url.</p>'})

            var markUp = '';
            markUp += '<div class="block-ui-overlay">'
            markUp += '</div>'
            markUp += '<div class="block-ui-message-container">'
            markUp += '  <div class="block-ui-message" style="color: black!important;font-size: 13px;background-color: transparent;">'
            markUp += '    <i class="fa fa-circle-o-notch fa-spin"></i> Loading... '
            markUp += '    </div>'
            markUp += '</div>'

            blockUIConfig.message='loading message from module';
            blockUIConfig.template = markUp;
            blockUIConfig.autoInjectBodyBlock = false;
		}

	return app;
});
requirejs(['/js/module-loader/requirejs-config.js'], function (){
  requirejs([
	'jquery',
	'angular',
	'sims.person',

	'angular-route',
	'angular-block-ui',
	'angular-animate',
	'angular-sanitize',
	'ui.bootstrap'
  ],function($,angular,app){
	angular.bootstrap(document, [app.name]);
  });
});
// requirejs(['/js/module-loader/requirejs-config.js'], function(){
// 	requirejs([
// 		'jquery',
// 		'angular',
// 		'sims.people',

// 		'angular-route',
// 		'angular-block-ui',
// 		'angular-animate',
// 		'angular-sanitize',
// 		'ui.bootstrap'
// 	], function($, angular, app){
// 		angular.bootstrap(document, [app.name]);
// 	})
// })