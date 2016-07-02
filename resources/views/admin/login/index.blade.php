@include('admin.layouts.header')

<div style="height: 100%;" ng-controller="LoginController as vm">

    <div class="wrap">
        <div class="fleft">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default login-form">

                        <div class="panel-body">

                    <div class="login-logo">
                        <img src="http://manticore.com.co/images/logo.jpg" alt=" logo">
                    </div>

                            <form>

                            <!-- errors -->
                            <div class="alert alert-danger" role="alert" ng-if="vm.error">
                                <i class="material-icons">error</i>
                                <p ng-bind="vm.error"></p>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email" ng-model="vm.user.email" type="text" autofocus>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Password" ng-model="vm.user.password" type="password">
                                </div>
                            </div>

                            <p style="font-size: 14px;">Emal: demo@demo.com</p>
                            <p style="font-size: 14px; margin-top: -20px">password: demodemo</p>

                            <!-- Remember -->
                            <div class="remember">
                                <input type='checkbox' name='remember' value='1' ng-model="vm.user.remember">
                                Recuerdame
                            </div>

                            <!-- Submit -->
                            <input type='submit' value="Login" class="btn btn-login" ng-click="vm.login()" value="Login"></input>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fright">
            <div>
                <img src="https://pixabay.com/static/uploads/photo/2014/12/15/12/51/coffee-568968_960_720.jpg" height="100%" width="100%"/>
            </div>
        </div>
    </div>
    
</div>

@include('admin.layouts.footer')