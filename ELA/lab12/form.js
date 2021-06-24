var sampleApp = angular.module("sampleApp", []);
sampleApp.controller("AngularController", function ($scope) {
	checkboxValues = [];

	$scope.AllCourses = [];
	$scope.AllCourses.push(
		"Database Management System",
		"Computer Organization and Architecture",
		"Operating Systems",
		"Computer Networks"
	);

	$scope.Display = function () {
		$scope.AllCourses.append($scope.checkboxValues);
	};
});
