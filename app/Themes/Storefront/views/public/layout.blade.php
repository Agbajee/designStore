<!DOCTYPE html>
<html lang="{{ locale() }}">
    <head>
        <base href="{{ config('app.url') }}">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000" />
    <meta name="google-site-verification" content="H2ZM6rWCg4-wudXnT-0iJ_iiXBcTNfnLxIPsQROZa60" />

    <meta name="msvalidate.01" content="F960681800377F5DA7011199DDA2EE75" />


        <title>
            @hasSection('title')
                @yield('title') | {{ setting('store_name') }}
            @else
                {{ setting('store_name') }}
            @endif
        </title>

    <meta name="description" content="#1 global creative platform for entrepreneurs to brand or rebrand their business to what the love.">
    <meta name="keywords" content="logo design, website design, Logo Animation, Print flyer design, Mascot &amp; Cartoon Logo, Signature Logo, Minimalistic Logo">
    <meta property="og:title" content="Logo Design, Graphic Design & Web Design | Designkago" />
    <meta property="og:description" content="#1 global creative platform for entrepreneurs to brand or rebrand their business to what the love." />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="6Wm05elDJr7wPKpJKcben9A2Mk8XtBUrSNWJgO5a">

    <link href="{{ v(Theme::url('public/images/favicons/kago-icon.png')) }}" type="image/x-icon" rel="shortcut icon" />

        @stack('meta')

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap" rel="stylesheet">

        @if (is_rtl())
            <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.rtl.css')) }}">
        @else
            <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.css')) }}">
            
            <link rel="stylesheet" href="{{ v(Theme::url('public/css/frontend.css')) }}">
            <link rel="stylesheet" href="{{ v(Theme::url('public/frontend/css/master.css')) }}">
        @endif

        <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">
        
         <style>

.home-items .section-title .main-title:before {
    width: 150px;
    bottom: 1px;
    margin-left: -77px;
}

.home-items .section-title .main-title:after {
    width: 26px;
    bottom: 0;
    margin-left: -18px;
}

.grahpics-by-designkago .section-title .main-title:before {
    width: 150px;
    bottom: 1px;
    margin-left: -77px;
}

.grahpics-by-designkago .section-title .main-title:after {
    width: 26px;
    bottom: 0;
    margin-left: -18px;
}

.home-testimonial-section .section-title .main-title:before {
    width: 150px;
    bottom: 1px;
    margin-left: -77px;
}

.home-testimonial-section .section-title .main-title:after {
    width: 26px;
    bottom: 0;
    margin-left: -18px;
}


.statistics-section .section-title .main-title:before {
    width: 150px;
    bottom: 1px;
    margin-left: -77px;
}

.statistics-section .section-title .main-title:after {
    width: 26px;
    bottom: 0;
    margin-left: -18px;
}
.trusted-by-business .past-customer--section {
    background-color: #b8c2cc29;
}

.home-testimonial-section, .statistics-section{
    background-color: #b8c2cc29;
 }

.trusted-by-business .customer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    align-items: center;
}


.customer-container .past-customer-image {
    width: 140px;
    margin: 0 10px;
    text-align: center;
    min-height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.past-customer-image-group {
    display: flex;
}

.customer-container .past-customer-image {
    width: 140px;
    margin: 0 10px;
    text-align: center;
    min-height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.customer-container .past-customer-image img {
    height: auto;
    border: 0;
}
.trusted-by-business .past-customer-image.past-customer-content {
    flex-wrap: wrap;
    justify-content: start;
    text-align: left;
    line-height: 1.5;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: .2px;
    min-width: 150px;
}

@media (max-width: 1200px){
    .past-customer-image-group {
        display: flex;
        justify-content: center;
    }
    .past-customer-image-group, .newsFeature-images {
        -webkit-overflow-scrolling: touch;
        width: 100%;
        overflow: hidden;
        overflow-x: auto;
        white-space: nowrap;
    }

    .trusted-by-business .customer-container .past-customer-image {
     width: 110px;
    }

    .trusted-by-business .past-customer-image.past-customer-content {
        font-size: 16px;
    }
    .trusted-by-business .past-customer-image.past-customer-content {
        min-width: 100%;
        max-width: 100%;
        justify-content: center;
    }
}

.client-say-section .testimony-item .dkg-review-massage p:after {
    content: '';
    position: absolute;
    display: block;
    width: 35px;
    height: 30px;
    top: 0px;
    opacity: 1;
    left: 0px;
    opacity: 1;
    background-image: url(images/1588054545-quote.png);
    background-repeat: no-repeat;
}

.client-say-section .testimony-item .dkg-review-massage .dkg-author-detail .tp-verify-order {
    position: relative;
    display: block;
    font-size: 16px;
    margin-top: 15px;
    color: #a1a1a1;
}

.home-testimonial-section .dkg-review-massage .stars-tp .fa-star{
    /*padding:0 3px; */
}
.home-testimonial-section .main-title {
    padding-bottom: 10px;
    font-size: 30px;
}

.home-testimonial-section .dkg-author-detail .author-name {
    color: #454545;
    position: relative;
    display: block;
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    margin: 0 0 15px;
    font-weight: 600;
}

.home-testimonial-section .dkg-author-detail .author-name span {
    font-size: 13px;
    color: #757575;
    line-height: 20px;
    display: block;
    position: relative;
    margin-top: 10px;
    font-weight: 400;
}

.home-testimonial-section  .owl-nav {
    visibility: hidden;
}

.grahpics-by-designkago .port-item .card{
    border:none;
    margin: 0 10px;
}

.grahpics-by-designkago .owl-theme .owl-nav button{
    position: absolute;
    top: 41%;
    padding: 16px 7px !important;
    background: gainsboro;
}
.grahpics-by-designkago .owl-theme .owl-nav button:focus {
     outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}
.grahpics-by-designkago .owl-theme .owl-nav button:hover {
    background-color: black;
}
.grahpics-by-designkago .owl-theme .owl-nav .owl-prev{
    left: 20px;
}

.grahpics-by-designkago .owl-theme .owl-nav .owl-next{
    right: 20px;
}

@media (max-width: 992px) and (min-width: 768px){
  .trusted-by-business .container{
    padding-right: 0px;
  }
}

.home-testimonial-section .reviewer-image{
    padding: 4px 4px;
}
.home-testimonial-section .reviewer-image img{
    width: 100px;
    margin: 0 auto;
    border-radius: 50%;
    border: 7px solid #f8fafc;
}
.statistics-section .dkg-sts-box .dkg-sts-heading{
   font-size: 45px;
   color: black;
   font-weight: 800 !important;
    margin: 21px 0;
}
.statistics-section .dkg-sts-box .dkg-sts-text{
    font-size: 22px;
}
.statistics-section .card{
    border: none
}

@media (max-width: 768px){
    .trusted-by-business .container{
        padding-right: 0px;
        padding-left: 0px;
    }

    .home-testimonial-section .main-title {
        font-size: 22px;
    }

    .statistics-section .dkg-sts-box .dkg-sts-heading {
        font-size: 38px;
    }
    .statistics-section .dkg-sts-box .dkg-sts-text {
        font-size: 14px;
    }

    .statistics-section .dkg-sts-box .fa{
        font-size: 2rem !important;
    }
}

</style>

<style>

    body {
          margin: 0;
          font-family: 'Montserrat', sans-serif;
          font-size: 1rem;
          font-weight: 400;
          line-height: 1.5;
          color: #212529;
          text-align: left;
      }
      .card.shadow {
        font-weight: 400;
        border: 0;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
      }
      .brand-logo{
        max-width: 170px;
      }
      .main-nav-sub-list{
        top: 54px;
        left: 0;
        right:0;
        background: transparent;
      }

      .main-nav-sub-list::after{
        position: absolute;
        content:"";
        top:-25px;
        left: 0;
        right: 0;
        height: 35px;
      }

      @media  screen and (max-width:767px) {
        .brand-logo{
          max-width: 141px;
        }
      }

      #form-search-input{
        width: 600px;
        border-radius: 0.5em;
      }
      #form-search-input + button{
        border-radius: 0.5em;
      }

      @media  screen and (max-width:997px) {
        #form-search-input{
          width: 300px;
        }
      }
        .modal {
            z-index:1045 !important;
        }
          .text-yellow {
              color: #fffc01 !important;
          }
          .hover\:text-white:hover {
              color: #fff !important;
          }

          a:focus,a:hover {
              text-decoration: none;
          }

          #login-modal input:-webkit-autofill,
          #login-modal input:-webkit-autofill:hover,
          #login-modal input:-webkit-autofill:focus{
            border: 1px solid rgba(0, 128, 0, 0);
            -webkit-text-fill-color: #000;
            -webkit-box-shadow: 0 0 0px 1000px rgba(0, 128, 0, 0) inset;
            transition: background-color 5000s ease-in-out 0s;
          }

          #login-modal input.form-control:focus,
          #customer-login-form select.form-control:focus {
             outline:none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            background: transparent;
            color: #000000;
          }
          #login-modal .form-control{
            border-top:none;
            border-right:none;
            border-left:none;
            border-bottom: 1px solid #ced4da !important;
            border-radius:0;
            color: #000000;
            font-size: 13px;
           background: transparent;
          }
          #login-modal .form-group{
            position: relative;
          }

          #login-modal .form-group input[type='email'], #login-modal .form-group input[type='text'], #login-modal .form-group input[type='password']{
            margin-top: 1.5rem;
          }

          #login-modal .floating-label {
            position: absolute;
            pointer-events: none;
            left: 16px;
            opacity: 0.5;
            top: 7px;
            font-size: 13px;
            transition: 0.2s ease all;
          }

          #login-modal select:focus ~ .floating-label,
          #login-modal select:valid ~ .floating-label,
          #login-modal input:focus ~ .floating-label,
          #login-modal input:not(:focus):valid ~ .floating-label{
            left: 0px;
            top: -22px;
            font-size: 13px;
            opacity: 1;
            font-style: italic;
          }
          #login-modal .dropdown-menu.show,
          #login-modal .dropdown-menu{
              width: 100%;
              min-width: 100% !important;
          }
          #login-modal .bootstrap-select .dropdown-item .text{
            font-size: 14px;
          }
          #login-modal .bootstrap-select .btn.dropdown-toggle{
            background-color: transparent !important;
            border: none !important;
            outline: none;
            box-shadow: none;
            height: calc(1.5em + 0.75rem + 2px);
          }

          #login-modal .bootstrap-select .filter-option{
            display: flex;
            align-items: center !important;
          }
          #login-modal .bootstrap-select button.btn:focus{
            outline: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
          }

          #login-modal .form-control{
            background-color: transparent !important;
          }

          #login-modal .filter-option-inner-inner{
            font-size: 13px;
          }

          hr.hr-text {
            position: relative;
            border: none;
            height: 1px;
            background: #999;
          }

          hr.hr-text::before {
            content: attr(data-content);
            display: inline-block;
            background: #fff;
            font-weight: bold;
            font-size: 0.75rem;
            color: #999;
            border-radius: 30rem;
            padding: 0.2rem 1.2rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          }

          .brand-color{
            color: #fcb815  !important;
          }
          .brand-bg{
            background: #fcb815 !important;
          }
          .navSearch{
            position: relative;
          }
          .navSearch button{
              position: absolute;
              right: 0;
              top: 0;
          }
          .navSearch button:focus{
              border: none;
              outline: none;
          }
          .main--topbar{
            -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
          }
          .page-busy{
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 9999;
            background: #f1f5f891;
          }
    </style>

        @stack('styles')

        {!! setting('custom_header_assets') !!}

        <script>
            window.FleetCart = {
                baseUrl: '{{ config("app.url") }}',
                rtl: {{ is_rtl() ? 'true' : 'false' }},
                storeName: '{{ setting("store_name") }}',
                storeLogo: '{{ $logo }}',
                loggedIn: {{ auth()->check() ? 'true' : 'false' }},
                csrfToken: '{{ csrf_token() }}',
                stripePublishableKey: '{{ setting("stripe_publishable_key") }}',
                razorpayKeyId: '{{ setting("razorpay_key_id") }}',
                cart: {!! $cart !!},
                wishlist: {!! $wishlist !!},
                compareList: {!! $compareList !!},
                langs: {
                    'storefront::layout.next': '{{ trans("storefront::layout.next") }}',
                    'storefront::layout.prev': '{{ trans("storefront::layout.prev") }}',
                    'storefront::layout.search_for_products': '{{ trans("storefront::layout.search_for_products") }}',
                    'storefront::layout.all_categories': '{{ trans("storefront::layout.all_categories") }}',
                    'storefront::layout.most_searched': '{{ trans("storefront::layout.most_searched") }}',
                    'storefront::layout.search_for_products': '{{ trans("storefront::layout.search_for_products") }}',
                    'storefront::layout.category_suggestions': '{{ trans("storefront::layout.category_suggestions") }}',
                    'storefront::layout.product_suggestions': '{{ trans("storefront::layout.product_suggestions") }}',
                    'storefront::layout.product_suggestions': '{{ trans("storefront::layout.product_suggestions") }}',
                    'storefront::layout.more_results': '{{ trans("storefront::layout.more_results") }}',
                    'storefront::product_card.out_of_stock': '{{ trans("storefront::product_card.out_of_stock") }}',
                    'storefront::product_card.new': '{{ trans("storefront::product_card.new") }}',
                    'storefront::product_card.add_to_cart': '{{ trans("storefront::product_card.add_to_cart") }}',
                    'storefront::product_card.view_options': '{{ trans("storefront::product_card.view_options") }}',
                    'storefront::product_card.compare': '{{ trans("storefront::product_card.compare") }}',
                    'storefront::product_card.wishlist': '{{ trans("storefront::product_card.wishlist") }}',
                    'storefront::product_card.available': '{{ trans("storefront::product_card.available") }}',
                    'storefront::product_card.sold': '{{ trans("storefront::product_card.sold") }}',
                    'storefront::product_card.years': '{{ trans("storefront::product_card.years") }}',
                    'storefront::product_card.months': '{{ trans("storefront::product_card.months") }}',
                    'storefront::product_card.weeks': '{{ trans("storefront::product_card.weeks") }}',
                    'storefront::product_card.days': '{{ trans("storefront::product_card.days") }}',
                    'storefront::product_card.hours': '{{ trans("storefront::product_card.hours") }}',
                    'storefront::product_card.minutes': '{{ trans("storefront::product_card.minutes") }}',
                    'storefront::product_card.seconds': '{{ trans("storefront::product_card.seconds") }}',
                },
            };
        </script>

        {!! $schemaMarkup->toScript() !!}

        @stack('globals')

        @routes
    </head>

    <body
        class="page-template {{ is_rtl() ? 'rtl' : 'ltr' }}"
        data-theme-color="#{{ $themeColor->getHex() }}"
        style="--color-primary: #{{ $themeColor->getHex() }};
            --color-primary-hover: #{{ $themeColor->darken(8) }};
            --color-primary-transparent: {{ color2rgba($themeColor, 0.8) }};
            --color-primary-transparent-lite: {{ color2rgba($themeColor, 0.3) }};"
    >
        <div class="wrapper" id="app">
            @include('public.layout.header')
            

            @yield('content')

            @include('public.layout.footer')

            <div class="overlay"></div>

            @include('public.layout.sidebar_menu')
            
            @include('public.layout.alert')
            @include('public.layout.sidebar_cart')
        </div>

        @stack('pre-scripts')

        <script src="{{ v(Theme::url('public/js/app.js')) }}"></script>
        
     
        <script src="{{ v(Theme::url('public/js/frontend.js')) }}"></script>
    

    <script src="{{ v(Theme::url('public/frontend/js/master.js')) }}" ></script> 

        @stack('scripts')

        {!! setting('custom_footer_assets') !!}
    </body>
    </footer>
</html>
