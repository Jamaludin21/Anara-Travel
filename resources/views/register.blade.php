 @extends('Layout.header')

 @section('title', 'Register')

 <!-- Validation Errors -->
 <x-auth-validation-errors class="mb-4" :errors="$errors" />

 <body class="animsition">
     <div class="page-wrapper">
         <div class="page-content--bge5">
             <div class="container">
                 <div class="login-wrap">
                     <div class="login-content">
                         <div class="login-logo">
                             <a href="#">
                                 <img src="images/icon/logo.png" alt="CoolAdmin">
                             </a>
                         </div>
                         <div class="login-form">
                             <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                     <label for="name" :value="__('Name')">Username</label>
                                     <input class="au-input au-input--full" id="name" type="text" name="name"
                                         placeholder="Username" :value="old('name')" required autofocus>
                                 </div>
                                 <div class="form-group">
                                     <label for="email" :value="__('Email')">Email Address</label>
                                     <input class="au-input au-input--full" id="email" type="email" name="email"
                                         placeholder="Email" :value="old('email')" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="password" :value="__('Password')">Password</label>
                                     <input class="au-input au-input--full" id="password" type="password"
                                         name="password" placeholder="Password" required autocomplete="new-password">
                                 </div>
                                 <div class="form-group">
                                     <label for="password_confirmation" :value="__('Confirm Password')">Confirm
                                         Password</label>
                                     <input class="au-input au-input--full" id="password_confirmation" type="password"
                                         name="password_confirmation" placeholder="Confirm Password" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="avatar">Profile Picture</label>
                                     <input id="avatar" type="file"
                                         class="au-input au-input--full @error('avatar') is-invalid @enderror"
                                         name="avatar" required autocomplete="avatar">
                                     {{-- <img src="/avatars/{{ Auth::user()->avatar }}"
                                         style="width:80px;margin-top: 10px;"> --}}
                                     @error('avatar')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <div class="login-checkbox">
                                     <label>
                                         <input type="checkbox" name="aggree">Agree the terms and policy
                                     </label>
                                 </div>
                                 <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                     {{ __('Register') }}</button>
                                 {{-- <div class="social-login-content">
                                     <div class="social-button">
                                         <button class="au-btn au-btn--block au-btn--blue m-b-20">register with
                                             facebook</button>
                                         <button class="au-btn au-btn--block au-btn--blue2">register with
                                             twitter</button>
                                     </div>
                                 </div> --}}
                             </form>
                             <div class="register-link">
                                 <p>
                                     Already have account?
                                     <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!-- Jquery JS-->
     <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
     <!-- Bootstrap JS-->
     <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
     <!-- Vendor JS -->
     <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
     <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
     <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
     <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
     <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
     <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
     <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
     <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
     <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

     <!-- Main JS-->
     <script src="{{ asset('js/main.js') }}"></script>

 </body>

 </html>
 <!-- end document-->
