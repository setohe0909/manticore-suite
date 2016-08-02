
<!-- main heading 1-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Counters</h3>
        <page-loading ng-show="!vm.ready"></page-loading>
    </div>
</div>

<div class="row" ng-show="vm.ready">

    <!-- users count -->
    <div class="col-md-4 col-sm-12">
        <a ui-sref="users" class="dashboard-link">
            <div class="count-container galleries-count">
                <div class="count-dark">
                    <i class="material-icons">face</i>
                </div>
                <p>
                    Users
                    <span class="count-number" ng-bind="vm.users_count"></span>
                </p>
            </div>
        </a>
    </div>

    <!-- posts count -->
    <div class="col-md-4 col-sm-12">
        <a ui-sref="posts" class="dashboard-link">
            <div class="count-container galleries-count">
                <div class="count-dark">
                    <i class="material-icons">assessment</i>
                </div>
                <p>
                    Posts
                    <span class="count-number" ng-bind="vm.posts_count"></span>
                </p>
            </div>
         </a>
    </div>

    <!-- galleries count -->
    <div class="col-md-4 col-sm-12">
        <a ui-sref="gallery" class="dashboard-link">
            <div class="count-container galleries-count">
                <div class="count-dark">
                    <i class="material-icons">image</i>
                </div>
                <p>
                    Galleries
                    <span class="count-number" ng-bind="vm.galleries_count"></span>
                </p>
            </div>
        </a>
    </div>

    <!-- main heading 2-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Dashboard</h3>
            <page-loading ng-show="!vm.ready"></page-loading>
        </div>
    </div>

    <!-- Radar Chart -->
    <div class="col-md-6 col-sm-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                <a>Radar Chart</a>
            </div>
                <canvas id="radar" class="chart chart-radar" chart-data="vm.data" chart-colors="vm.colours"
                        chart-options="options" chart-labels="vm.labels">
                </canvas> 
            </div>
    </div>
    
    <!-- Doughnut Chart -->
    <div class="col-md-6 col-sm-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                <a>Doughnut Chart</a>
            </div>
                <canvas id="doughnut" class="chart chart-doughnut" chart-colors="vm.colours"
                        chart-data="vm.data_1" chart-labels="vm.labels_1">
                </canvas>  
            </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-md-6 col-sm-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                <a>Pie Chart</a>
            </div>
                <canvas id="pie" class="chart chart-pie" chart-colors="vm.colours"
                        chart-data="vm.data_2" chart-labels="vm.labels_2" chart-options="options">
                </canvas>   
            </div>
    </div>
    
    <!-- Bar Chart -->
    <div class="col-md-6 col-sm-12">
            <div class=" panel panel-default">
                <div class="panel-heading">
                <a>Bar Chart</a>
            </div>
                <canvas id="bar" class="chart chart-bar" chart-colors="vm.colours"
                        chart-data="vm.data_3" chart-labels="vm.labels_3" chart-series="vm.series_3">
                </canvas>
            </div>
    </div>

</div>