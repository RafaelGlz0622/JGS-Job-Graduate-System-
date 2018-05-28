<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->



  <script type="text/javascript" src="{{asset('/js/JQuery/jquery-3.3.1.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('/js/Bootstrap/bootstrap.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('/css/Bootstrap/bootstrap.min.css')}}">
  <style type="text/css">


  @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');





</style>




<style type="text/css">
.card {



  max-width: 1000px;
  margin: 0 auto 100px;
  padding: 45px;

  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
hr {
  display: block;
  height: 2px;
  border: 0;
  border-top: 2px solid #ccc;
  margin: 2em 0;
  
}
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
  background: #DE6262;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #00cc99, #339966);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #00cc99, #339966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  float:left;
  
  padding : 50px 0;

}


.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.banner-sec{background:url(https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg)  no-repeat center bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; }
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#339966;}
.login-sec .copy-text a{color:#339966;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #00b386;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#00b386; display:block; margin-top:3px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #339966; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
.carousel-inner > .item > img {
  width:640px;
  height:160px;
}

</style>
</head>
<section class="login-block col-md-12">
  <div class="card">
   <div class="row">
    <div class="col-md-4 login-sec">
      <h2 class="text-center">Journs</h2>
      <form class="login-form"  method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">        
         <label class="text-uppercase">{{ __('E-Mail Address') }}</label>
         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

         @if ($errors->has('email'))
         <span class="invalid-feedback">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif       
      </div>



        <div class="form-group">
       <label for="password" class="text-md-left text-uppercase">{{ __('Password') }}</label>
       <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

       @if ($errors->has('password'))
       <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        </div>

        <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        <small>Remember Me</small>
      </label>





      <button type="submit" class="btn btn-login float-right">
        {{ __('Login') }}
      </button>

      <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
      </a>
      <a href="btn btn-link" href="Pages/MyAccount"> </a>
      
        </div>

    </form>
  <hr>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <h5>Register</h5>
    <div class="form-group">
      <label for="name" class="">{{ __('Name') }}</label>
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
      
    </div>

    <div class="form-group">
      <label for="email">{{ __('E-Mail Address') }}</label>

      
      <input id="emailRegister" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

      @if ($errors->has('email'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif

    </div>

    <div class="form-group">
      <label for="password">{{ __('Password') }}</label>


      <input id="passwordRegister" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

      @if ($errors->has('password'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
      
    </div>

    <div class="form-group">
      <label for="password-confirm">{{ __('Confirm Password') }}</label>


      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      
    </div>

    <div class="form-group mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
        </button>
      </div>
    </div>
  </form>
</div>
<div class="col-md-8 banner-sec">
  
</div>
</div>
</section>
