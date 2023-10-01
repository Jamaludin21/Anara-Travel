   <!-- HEADER MOBILE-->
   <header class="header-mobile d-block d-lg-none">
       <div class="header-mobile__bar">
           <div class="container-fluid">
               <div class="header-mobile-inner">
                   <a class="logo-mobile" href="{{ url('/') }}">
                       <img src="{{ asset('images/png putih (2).png') }}" class="logo-desktop" alt="Anara Explore" />
                   </a>
                   <button class="hamburger hamburger--slider" type="button">
                       <span class="hamburger-box">
                           <span class="hamburger-inner"></span>
                       </span>
                   </button>
                   <div class="header-wrap" style="justify-content: right;">
                       <div class="account-wrap">
                           <div class="account-item clearfix js-item-menu">
                               <div class="image">
                                   <img src="{{ asset('/storage/' . Auth::user()->avatar) }}" alt="" />
                               </div>
                               <div class="content">
                                   <a class="js-acc-btn" href="#">{{ auth()->user()->name }}</a>
                               </div>
                               <div class="account-dropdown js-dropdown">
                                   <div class="info clearfix">
                                       <div class="image">
                                           <a href="#">
                                               <img src="{{ asset('/storage/' . Auth::user()->avatar) }}"
                                                   alt="" />
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h5 class="name">
                                               <a href="#">{{ auth()->user()->name }}</a>
                                           </h5>
                                           <span class="email">{{ auth()->user()->email }}</span>
                                       </div>
                                   </div>
                                   {{-- <div class="account-dropdown__body">
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-account"></i>Account</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-settings"></i>Setting</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-money-box"></i>Billing</a>
                                 </div>
                             </div> --}}
                                   <div class="account-dropdown__footer">
                                       <form action="{{ Route('logout') }}" method="POST">
                                           @csrf
                                           <button class="btn btn-primary"><i
                                                   class="zmdi zmdi-power">Logout</i></button>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <nav class="navbar-mobile">
           <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
                   <li class="has-sub {{ request()->is('/') ? 'active' : '' }}">
                       <a class="js-arrow" href="{{ url('/') }}">
                           <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                   </li>
                   <li class="has-sub">
                       <a class="js-arrow" href="#">
                           <i class="far fa-check-square"></i>Form</a>
                       <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                           <li class="has-sub {{ request()->is('/form_participant') ? 'active' : '' }}">
                               <a href="{{ url('/form_participant') }}">Participant
                                   Personal Data</a>
                           </li>
                           <li class="has-sub {{ request()->is('/form_group') ? 'active' : '' }}">
                               <a href="{{ url('/form_group') }}">Group Data</a>
                           </li>
                           <li class="has-sub {{ request()->is('/form_payment') ? 'active' : '' }}">
                               <a href="{{ url('/form_payment') }}">Payment Data</a>
                           </li>
                       </ul>
                   </li>
                   <li class="has-sub">
                       <a class="js-arrow" href="#">
                           <i class="fas fa-user"></i>View</a>
                       <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                           <li>
                               <a href="{{ url('/view_participant') }}">Participant Personal Data</a>
                           </li>
                           <li>
                               <a href="{{ url('/view_group') }}">Group Data</a>
                           </li>
                           <li>
                               <a href="{{ url('/view_payment') }}">Payment Data</a>
                           </li>
                       </ul>
                   </li>
                   <li>
                       <a href="#">
                           <i class="fas fa-chart-bar"></i>Invoice</a>
                   </li>
               </ul>
           </div>
       </nav>
   </header>
   <!-- END HEADER MOBILE-->

   <!-- HEADER DESKTOP-->
   <header class="header-desktop">
       <div class="section__content section__content--p30">
           <div class="container-fluid">
               <div class="header-wrap" style="justify-content: right;">
                   <div class="account-wrap">
                       <div class="account-item clearfix js-item-menu">
                           <div class="image">
                               <img src="{{ asset('/storage/' . Auth::user()->avatar) }}" alt="" />
                           </div>
                           <div class="content">
                               <a class="js-acc-btn" href="#">{{ auth()->user()->name }}</a>
                           </div>
                           <div class="account-dropdown js-dropdown">
                               <div class="info clearfix">
                                   <div class="image">
                                       <a href="#">
                                           <img src="{{ asset('/storage/' . Auth::user()->avatar) }}" alt="" />
                                       </a>
                                   </div>
                                   <div class="content">
                                       <h5 class="name">
                                           <a href="#">{{ auth()->user()->name }}</a>
                                       </h5>
                                       <span class="email">{{ auth()->user()->email }}</span>
                                   </div>
                               </div>
                               {{-- <div class="account-dropdown__body">
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-account"></i>Account</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-settings"></i>Setting</a>
                                 </div>
                                 <div class="account-dropdown__item">
                                     <a href="#">
                                         <i class="zmdi zmdi-money-box"></i>Billing</a>
                                 </div>
                             </div> --}}
                               <div class="account-dropdown__footer">
                                   <form action="{{ Route('logout') }}" method="POST">
                                       @csrf
                                       <button class="btn btn-primary"><i class="zmdi zmdi-power">Logout</i></button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- HEADER DESKTOP-->

   <style>
       .logo-desktop {
           border: 1px solid #ffffff
       }

       @media (max-width: 992px) {
           .logo-mobile {
               max-width: 70px;
           }
       }
   </style>
