@include('user.inc.headersource')
<!--=============================responsive menu bar start here======================================-->
@include('user.inc.responsive-menubar')
<!--=============================responsive menu bar end here======================================-->
@include('user.inc.menubar')
<!--============================================Menu Bar end here================================================-->
<!--Modal start Here-->
@include('user.inc.modal')
<!--Modal End Here-->



        <div style="width:80%;margin: 0 auto;">
            <div id="container" class="container">
                <div class="login-title">
                    <h3>Welcome to Runtime Terror! Please login.</h3>
                    <div class="login-other">
                        <span>New member? <a href="{{url('signup')}}">Register</a> here.</span>
                    </div>
                </div>
                <div>
                    <form>
                        <div style="background-color: #E9EAEB;padding:15px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mod-login-col1">
                                        <div class="form-group">
                                            <label for="email">Email address or phone:</label>
                                            <input type="email" placeholder="Enter your email or phone" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Password:</label>
                                            <input type="email" placeholder="Enter your password" class="form-control" id="email">
                                        </div>
                                        <div class="mod-login-forgot">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mod-login-col2">
                                        <div class="form-group">
                                            <br/>
                                            <input style="color:white;" type="submit" value="Login" class="form-control btn btn-warning" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Or Login with:</label>
                                            <input style="background-color:#3b5998;color:white;" type="submit" value="Facebook" class="form-control btn" id="email">
                                        </div>
                                        <div class="form-group">
                                            <input style="background-color:#d34836;color:white;" value="Google" type="submit" class="form-control btn" id="email">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
@include('user.inc.live chat box')
        <!-- ========================================== Footer Bar Bellow Here================================================= -->
@include('user.inc.footer')