<Div class="row justify-content-center">
    <div class="col-xs-12 text-center" style="width: 30%">

        <!-- LOGIN -->
        <div id="login-div">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="Password">
                </div>
                <!-- LOGIN ERROR -->
                <div id="login-error" class="alert alert-danger" role="alert" style="display:none">
                    Error! PLease check credentials.
                </div>
                <!-- REGISTERED SUCCESS -->
                <div id="reg-success" class="alert alert-success" role="alert" style="display:none">
                    Registered successful! Please login.
                </div>

                <button type="button" id="login-btn" class="btn btn-primary pull-left">Login</button>
                
                <div id="register-link" class="pull-right toggle-form">
                    <span>Register</span>
                </div>
            </form>
            
        </div>


        <!-- REGISTER -->
        <div id="register-div" style="display:none">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="register-email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="reg-password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="reg-password-confirm" placeholder="Confirm Password">
                </div>

                <div id="reg-error" class="alert alert-danger" role="alert" style="display:none">
                    There is an error in your form!
                </div>
                

                <button type="button" id="register-btn" class="btn btn-primary pull-left">Register</button>
                
                <div id="login-link" class="pull-right toggle-form">
                    <span>Login</span>
                </div>
            </form>
            
        </div>

    </div>
</div>