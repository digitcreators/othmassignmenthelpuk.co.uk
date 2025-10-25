<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(View::hasSection('noindex'))
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index, follow">
    @endif
   
    {{-- CSRF Token --}}
    <meta name="google-site-verification" content="UvlthUvdnkc58qe53a4E3HQghcQNxcfQe9yKHY7Svk8" />

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff"/>

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('title', '')"/>
    <meta name="twitter:description" content="@yield('description',)"/>
    <meta name="twitter:image" content="{{asset('imgs/logo.png')}}"/>

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    
    {{-- Tailwind CSS --}}
        
    <link rel="stylesheet" href="{{ asset('dist/css/styling-7.css')}}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">

   
    <!--Background image-->
    <link rel="preload" as="image" href="{{ asset('imgs/bg-img.webp.webp') }}" type="image/webp">
    <link rel="preload" as="image" href="https://othmassignmenthelpuk.co.uk/public/imgs/reviewsbank.svg" type="image/webp">
    <link rel="preload" as="image" href="https://othmassignmenthelpuk.co.uk/public/imgs//reviewsBank.webp" type="image/webp">
    <link rel="preload" as="image" href="https://othmassignmenthelpuk.co.uk/public/imgs/logo.webp" type="image/png">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTFD56XL');</script>
    <!-- End Google Tag Manager -->
    
    <meta name="DC.title" content="@yield('title', '')" />
    <meta name="geo.region" content="GB" />
    <meta name="geo.position" content="54.702355;-3.276575" />
    <meta name="ICBM" content="54.702355, -3.276575" />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "@yield('title', '')",
      "url": "@yield('canonical')",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    
    @yield('schema-script')
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "@yield('title', '')",
      "description": "@yield('description')",
      "brand": {
        "@type": "Brand",
        "name": "OTHM Assignment Help UK"
      },
      "offers": {
        "@type": "Offer",
        "url": "@yield('canonical')",
        "priceCurrency": "GBP",
        "price": "@yield('price', '4')",
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "ratingCount": "19112"
      }
    }
    </script>

    <link href="{{ asset('lib/owlcarousel/assets/owl2.carousel.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
     <script>
        // Asynchronously load Bootstrap CSS
        var swiperLink = document.createElement('link');
        swiperLink.rel = 'stylesheet';
        swiperLink.href = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css';
        document.head.appendChild(swiperLink);
        
        var swiperLink2 = document.createElement('link');
        swiperLink2.rel = 'stylesheet';
        swiperLink2.href = 'https://unpkg.com/swiper/swiper-bundle.min.css';
        document.head.appendChild(swiperLink2);
        
        var intelInput = document.createElement('link');
        intelInput.rel = 'stylesheet';
        intelInput.href = 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css';
        document.head.appendChild(intelInput);
        
        var bootstrapIcon = document.createElement('link');
        bootstrapIcon.rel = 'stylesheet';
        bootstrapIcon.href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css';
        document.head.appendChild(bootstrapIcon);
        
        var fontLink = document.createElement('link');
        fontLink.rel = 'stylesheet';
        fontLink.href = 'https://fonts.googleapis.com/css?family=Montserrat&display=swap';
        document.head.appendChild(fontLink);
        
        var fontAwe = document.createElement('link');
        fontAwe.rel = 'stylesheet';
        fontAwe.href = 'https://use.fontawesome.com/releases/v5.15.4/css/all.css';
        document.head.appendChild(fontAwe);
    </script>

    <style> .iti { width: 100%;  } </style>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    


    @yield('links')

    @yield('styles')
    <style>
        .calculator-bg {
            z-index: 0 !important;
        }
        
        .pricing {
            z-index: 1 !important;
            position: relative;
        }
        .swiper {
            width: 100%;
            height: 100%;
        }
    
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;
        }
    
        .swiper-button-next {
            color: white;
            right: 0;
            height: 2rem !important;
            padding: 1.2rem;
        }
    
        .swiper-button-prev {
            color: white;
            height: 2rem !important;
            left: 0px;
            padding: 1.2rem;
        }
    
        .swiper-button-next:after {
            font-size: 1.7rem !important;
        }
    
        .swiper-button-prev:after {
            font-size: 1.7rem !important;
        }
    
        .heart{
          animation: beat .7s infinite alternate;
          transform-origin: center;
        }
    
        @keyframes beat {
          to {
            transform: scale(1.2);
          }
        }
        .order-now-button{
            background-color: var(--color-primary);
        }
        

        .active-steps{
            background: #AE0000;
            color:#ffffff;
        }
        .back-to-top {
            position: fixed;
            background: var(--color-primary);
            justify-content: center;
            align-items: center;
            bottom: -17px;
            right: 90px;
            display: flex;
            width: 100px;
            height: 100px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            transform: scale(0.3);
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 12;
            -webkit-transition: all .3s;
            transition: all .3s;
        }
        
        .bg-primary{
           background: var(--color-primary);
           color: #ffffff;
        }

        .d-block{
            display: block !important;
        }
       
        .breadcrumb-test {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: -1rem 1.5rem;
            border-radius: .25rem;
        }
        .breadcrumb-item+.breadcrumb-item::before {
            float: left;
            padding-right: .5rem;
            color: #6c757d;
            content: "/";
        }
        .breadcrumb-item.active {
            color: #AE0000;
            font-weight: 600;
        }
        @media (max-width: 767px) {
          .best-assignment .arrow-buttons .swiper-button-prev {
            left: 12%;
          }
          .best-assignment .arrow-buttons {
            bottom: 7%;
        }
        .samples{
        width: 21rem !important;
        }
        .w-72 {
        width: 21rem !important;
        }
        }
        @media (max-width: 360px) {
          .samples {
            width: 19rem !important;
            left: 23px !important;
          }
          .w-72 {
            width: 19rem !important;
            position: relative;
            left: -1rem;
          }
        }

.btn-shine {
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    white-space: nowrap;
    color: var(--color-primary);
}
.btn-shine:hover {
    transform: translate(-50%, -50%);
    background: linear-gradient(to right, #281e1f 0%, #d35169 10%, #c55774 20%);
    background-size: 200%;
    background-position: 0;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shine 3s infinite  linear;
    animation-fill-mode: forwards;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    white-space: nowrap;
}
@keyframes shine{
    0% {
    background-position: 0;
}
60% {
    background-position: 180px;
}
100% {
    background-position: 180px;
}
}
.w-72 {
width: 22rem;
}

.h-96 {
height: 24rem;
}

.rotate-12 {
--tw-rotate: -5deg;
transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.inset-0 {
top: 0px;
right: 0px;
bottom: 0px;
left: 0px;
}
.mt-5 {
margin-top: 1.25rem;
}
.samples{
top: -8px;
right: 0px;
bottom: 0px;
left: 37px;
width: 22rem;
background: #b83e50;
}
.samples-front{
background: #e9a7b0;
border: 2px solid white;
box-shadow: 2px 2px 5px 3px #c45875 !important;
}
.samples-front hr{
color: black;
}

.step-icon {
  transition: transform 0.4s ease;
}

.step:hover .step-icon {
  transform: scale(1.1);
}

@media (min-width: 768px) {
    .md\:text-9xl {
        font-size: 8rem;
        line-height: 1;
    }
}
.qualificationLevel{
    background: #612235;
    border-bottom: 4px solid white;
}
.titleTab {
    background: var(--color-secondary);
    color: white;
    font-size: 20px;
    border-radius: 20px;
    width: 145px;
    text-align: center;
}
.iconTab {
    width: 64px;
    height: 64px;
    background: #fff;
    border-radius: 64px;
    padding-top: 10px;
    text-align: center;
    position: relative;
    left: 35px;
    border: 2px solid #612235;
}
.infotitleTab {
    color: var(--color-primary)!important;
    background: white;
    border-top-right-radius: 32px;
    padding: 5px 0;
    color: #fff;
    width: 300px;
    text-align: center;
    font-weight: 600;
    border-bottom-right-radius: 32px;
}
@media (min-width: 320px) and (max-width: 480px) {
    .iconTab {
        left: -11px;
        z-index: 2;
    }
    .infoTab {
        flex: 1;
        position: relative;
        left: -33px;
    }
}
.btn-order:hover {
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
  transform: translateY(-3px);
}

</style>

</head>

<body class="">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTFD56XL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <a href="#main-wrapper" id="backto-top" class="back-to-top" style="display: none;" aria-label="Back To Top">
      <i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i>
    </a>
    <div class="">
        @include('partials.frontend.navbar')
    @include('partials.frontend.stickynav')

    @yield('content')


    {{-- Footer --}}
    @include('partials.frontend.footer')

    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    {{-- custom js --}}
    <script src="{{ asset('js/stickynav6.js') }}"></script>
    {{-- js for powerpoint service --}}
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/countup.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>

   

    <script>

        // for Scroller
        document.addEventListener("DOMContentLoaded", function() {
            var offset = 500;
            var backToTop = document.getElementById('backto-top');
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > offset) {
                    backToTop.style.display = 'flex';
                } else {
                    backToTop.style.display = 'none';
                }
            });
            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
 
         // Initiate the wowjs
        new WOW().init();
        $('.counters').countUp({
            delay: 5,
            time: 2000
        });
       
    </script>
<script>
// for calculator 
const loading =
'<svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#000"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
// $("#cost").html(loading)               
$(".get-fare").change(function(e) {
e.preventDefault();
var data = {
    "_token": "{{ csrf_token() }}",
    "deadline_id": $('#deadline').val(),
    "academic_level_id": $('#academic_level').val(),
}
$.ajax({
    method: 'POST',
    url: '{{ route('get.fare') }}',
    beforeSend: function() {

        // $("#cost").html(loading)
    },
    complete: function() {
        // $("#loading").removeClass("block");
    },
    data: data,
    success: function(res) {
    let currentCost = parseFloat($("#cost").text()) || 0; 
    let newCost = res.per_page_price * ($("#no_of_pages").val() || 1);
    newCost = parseFloat(newCost.toFixed(2)); 
    let increment = (newCost - currentCost) / 30;
    let count = 0;
    let interval = setInterval(function() {
        if (count >= 30 || Math.abs(currentCost - newCost) < 0.01) {
            clearInterval(interval);
            $("#cost").text(newCost % 1 === 0 ? newCost.toFixed(0) : newCost.toFixed(2)); // 👈 updated here
        } else {
            currentCost += increment;
            $("#cost").text(currentCost % 1 === 0 ? currentCost.toFixed(0) : currentCost.toFixed(2)); // 👈 updated here too
            count++;
        }
    }, 20);
},

    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
});

</script>
 <script>
    
    (function () {
  $('.questions').on('click', function () {
    let parent = $(this).closest('.content');

    // Close all other answers
    $('.content').not(parent).find('.openSlide').slideUp();
    $('.content').not(parent).find('i')
      .removeClass("fa-minus-square")
      .addClass("fa-plus-square");

    // Toggle clicked answer
    parent.find('.openSlide').stop(true, true).slideToggle();
    parent.find('i').toggleClass("fa-plus-square fa-minus-square");
  });
})();
</script>
 <script>
   var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      768: { slidesPerView: 1 },
      1024: { slidesPerView: 1 },
      1280: { slidesPerView: 1 }
    }
  });
</script>

<script>
  var swiper = new Swiper(".professional-testimonial-slider", {
    loop: true,            
    spaceBetween: 20,       
    slidesPerView: 1,      
    autoplay: {
      delay: 4000,          
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next", 
      prevEl: ".swiper-button-prev", 
    },
    pagination: {
      el: ".swiper-pagination",     
      clickable: true,
    },
    breakpoints: {
      768: { slidesPerView: 1 },
      1024: { slidesPerView: 2 }, 
    }
  });
</script>

    @yield('scripts')
  
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68f5fbbbefa3f719526804bd/1j80dulp7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
