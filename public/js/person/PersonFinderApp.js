define(['angular'], function() {
	'use strict';
	// angular
	// 	.module('PersonApp')
		app.lazy.controller('PersonFinderCtrl', PersonFinderCtrl)
		app.lazy.directive('showdetail', showdetail)

		PersonFinderCtrl.$inject = ['$scope']
		function PersonFinderCtrl($scope) {
			var vm = this;
			vm.personData = [
				{'id':1,'name':'Rommel Penaflor','level':1,'section':'B','representative':'Mr. Yu','course':'Software Engineering'},
				{'id':2,'name':'Erikson Supent','level':2,'section':'A','representative':'Mr. Chin','course':'Mechanical Engineering'},
				{'id':3,'name':'Bryan Evangelista','level':3,'section':'A','representative':'Mr. Cho','course':'E-Commerce'}
			];

	    	vm.showPersonDetail = function (person) {
		      if (person.isshowdetails) {
		        person.isshowdetails = false;
		      } else {
		        person.isshowdetails = true;
		      }
		    };
		};

		function showdetail() {
			return {
				restrict:'A',
				scope:{
					'person':'=person'
				},
				templateUrl: 'person.finder-showdetail',
				controller: function($scope){
					$scope.personDetails = [];
					$scope.classSchedDetails = [];
					$scope.showdetail = function (person, i) {
					
					  var personDetails = [
						  {'person00id':1,'contactno':'+639123456789','address':'jan lang yan','representative':'Roberto Penaflor','respresentative_relationship':'Father','emergency_person':'Kim Miran','emergency_person_relationship':'Auntie','emergency_person_contactno':'+639471727639','address':'043 Del Rosario St. Loob, Gainza Camarines Sur 4412'},
						  {'person00id':2,'contactno':'+639000000000','address':'dito din'},
						  {'person00id':3,'contactno':'+639111111111','address':'0001 lang'},
					  ];

					  var classSchedDetails = [
						{'person00id':1,'classsched':[
						  {'schedcode':'1B-001','subjectname':'Math Algebra','time':'01:00-04:00','teacher':'Mary Joy Chu','classroom':'1-kindness'},
						  {'schedcode':'1B-002','subjectname':'English (Advance for Proficiency)','time':'05:00-07:00','teacher':'Tan Herman','classroom':'2-Joy'},
						  {'schedcode':'1B-006','subjectname':'History (Kulturang Pilipino)','time':'07:00-09:00','teacher':'Joseph Yii','classroom':'3-Hope'}
						  ]
						}
					  ]
					  // get request;
					  angular.forEach(personDetails , function (v, k) {
						if (v.person00id == person.id) {
						  $scope.personDetails[0] = v;
						}
					  });

					  angular.forEach(classSchedDetails, function (v, k) {
						console.log("here!");
						if (v.person00id == person.id) {
						  $scope.classSchedDetails[0] = v;
						  console.log($scope.classSchedDetails);
						}
					  }); 
					};

					$scope.$watch('person.isshowdetails', function (e) {
					  if (e) {
						$scope.showdetail($scope.person);
					  }
					});
				},
				link : function(scope, elem, atrr){

				}

			}
		}
})
