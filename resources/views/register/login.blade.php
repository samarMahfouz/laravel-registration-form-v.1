@extends('master')
@section('content')
<!-- START LOGIN FORM -->
    <div class="login">
      <h2 class="text-center">
        S<span>amara</span>
        <img src="../upload/imageicon.jpg">
      </h2>
      <div class="container">
        <div class="row">
          <div class="imageform col-md-6">
            <img src="../upload/imagelogin.jpeg" alt="imageform" class="pull-right img-responsiveidth" >
          </div>
          <div class="contentform col-md-6 col-xs-12">
            <form  action="/login" method="POST">
              {{ csrf_field() }}
              <h4>welcome back, continue your successful brand.</h4>
              <div class="form-group">
                 <input type="email"    placeholder="Email" name="email" class="form-control emails" >
                 <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                </svg>                <span class="alerts">* Email not valid.</span>
               </div>
               <div class="form-group">
                  <input type="password" placeholder="Password" name="password" class="form-control" >
                  <span class="alerts pull-right"> Forget password?</span>
               </div>
              <input type="submit"    value="Login" class="btn btn-success" >
              <p class="pull-right">Need an account | <a href="/"> Sign up</a></p>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- END LOGIN FORM -->
@stop
