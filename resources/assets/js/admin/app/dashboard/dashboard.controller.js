(function() {

    'use strict';

    angular
        .module("app.dashboard")
        .controller('DashboardController', DashboardController);

    DashboardController.$inject = ['$http'];
    /* @nginject */
    function DashboardController($http) {

        var vm = this;
        vm.getData = getData;

        vm.colours = ['#077386', '#C5C5', '#666', '#F5F5','#287aa7', '#00bcd4'];

        getData();

        /**
         * Get Data
         */
        function getData() {
            $http.get('/admin/api/dashboard').success(function(res) {
                vm.users_count      = res.users_count;
                vm.posts_count      = res.posts_count;
                vm.galleries_count  = res.galleries_count;
                vm.ready = true;

                vm.labels =["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"];

                vm.data = [
                        [65, 59, 90, 81, 56, 55, 40],
                        [28, 48, 40, 19, 96, 27, 100]
                      ];

                vm.labels_1 = ["Download Sales", "In-Store Sales", "Mail-Order Sales"];
                vm.data_1 = [300, 500, 100];

                vm.labels_2 = ["Download Sales", "In-Store Sales", "Mail-Order Sales"];
                vm.data_2 = [300, 500, 100];

                vm.labels_3 = ['2006', '2007', '2008', '2009', '2010', '2011', '2012'];
                vm.series_3 = ['Series A', 'Series B'];

                vm.data_3 = [
                    [65, 59, 80, 81, 56, 55, 40],
                    [28, 48, 40, 19, 86, 27, 90]
                ];

            });

        }
    }

}());
