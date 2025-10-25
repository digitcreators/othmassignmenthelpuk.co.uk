<style>
    .rev{
        white-space: nowrap;
    }
</style>
<!-- Topbar Start -->
<div class="bg-primary-one d-xl-block w-100 py-2" style="background: linear-gradient(to bottom, var(--color-secondary), var(--color-primary));">
    <div class=" lg:flex justify-between items-center mx-auto px-10 ">
        <a href="https://reviewsbank.org/review/othmassignmenthelpuk.co.uk" target="_blant" class="text-white flex items-center lg:justify-start justify-center">
            <div class="flex items-center justify-center mr-2" bis_skin_checked="1">
                <span class="exc">Excellent</span>
               <img alt="rating" title="rating" src="{{ asset('imgs/reviewsbank.svg') }}" width="91px" height="21px" class="img-fluid rating px-2" loading="eager">
                <p class="text-sm new-hover">4.9</p>
            </div>
            <div class="flex text-sm justify-center " style="align-items:end" bis_skin_checked="1">
                <img src="{{ asset('imgs//reviewsBank.webp') }}" alt="Reviewsbank" title="Reviewsbank" height="22" width="45" class="" loading="eager">
                <span class="rev ml-1">Reviews Bank</span>
            </div>
        </a>
        <div class="lg:flex space-x-3 text-center py-2 lg:py-0">
        <div class="space-x-3 text-center sm:grid mt-1">
            <a href="https://api.whatsapp.com/send?phone=447403663991" class="text-white mr-4" target="_blank" aria-label="WhatsApp">
                <i class="fab fa-whatsapp text-white mr-2"></i>+44 7403 663991
            </a>
            <a href="tel:+44 7403 663991" class="text-white mr-4" aria-label="Phone">
                <i class="fas fa-phone-alt text-white mr-2"></i>+44 7403 663991
            </a>
            <a href="mailto:info@othmassignmenthelpuk.co.uk" class="text-white mr-0" aria-label="Email">
                <i class="fas fa-envelope text-white mr-2"></i>info@othmassignmenthelpuk.co.uk
            </a>
        </div>
        <a href="https://www.facebook.com/othmassignmenthelpuk.co.uk/" class="btn btn-light btn-sm-square rounded-full" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.instagram.com/othmassignmenthelpuk.co.uk/" class="btn btn-light btn-sm-square rounded-full" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    </div>
</div>
</div>
<!-- Topbar End -->

<!-- Header -->

<div class="w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800  py-1" style="background-color: #FFFFFF; box-shadow: 2px 0px 13px -2px #da4f65;">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-2 mx-auto xl:items-center xl:justify-between xl:flex-row">
        <div class="flex flex-row items-center justify-between md:justify-between">
            <a class="px-2" href="{{ route('home') }}">
                <img src="{{asset('imgs/logo.webp')}}" alt="Logo" title="Logo" width="176" height="91" loading="eager">
            </a>
            <button class="xl:hidden rounded-lg focus:outline-none focus:shadow-outline text-white" @click="open = !open" aria-label="Toggle Menu">
                <svg fill="" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" style="display: none;"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow pb-4 xl:pb-0 hidden xl:flex xl:justify-end xl:flex-row text-md xl:text-base ">

            <a href="{{ route('home') }}"
                class="nav-link block font-semibold py-2 px-4 hover:text-primary-one {{ request()->routeIs('home') ? 'nav-item active' : '' }}" >Home</a>

            <a href="{{ route('about') }}"
                class="nav-link block font-semibold  py-2 px-4 hover:text-primary-one {{ request()->routeIs('about') ? 'nav-item active' : '' }}">About</a>
        
            <a href="{{ route('price') }}"
                class="nav-link block font-semibold   py-2 px-4 hover:text-primary-one {{ request()->routeIs('price') ? 'nav-item active' : '' }}">Pricing</a>

            <a href="{{ route('reviews') }}"
                class="nav-link block font-semibold   py-2 px-4 hover:text-primary-one {{ request()->routeIs('reviews') ? 'nav-item active' : '' }}">Reviews</a>
        
            <a href="{{ route('contact') }}"
                class="nav-link block font-semibold  py-2 px-4 hover:text-primary-one {{ request()->routeIs('contact') ? 'nav-item active' : '' }}">Contact</a>

            <a href="{{ route('order') }}"
                class="order-now-button text-white  rounded-full bg-primary-one  tada lg:my-auto my-2 mx-4 px-4 py-2 font-semibold w-32 xl:w-auto whitespace-nowrap overflow-hidden">Order
                Now</a>

            <a href="javascript:void(Tawk_API.toggle())" class="rounded hover:text-primary-one lg:my-auto lg:mx-0 my-2 mx-2 px-4 py-2 font-semibold w-32 xl:w-auto">Live Chat</a>

            <a href="{{ route('login') }}" class="rounded hover:text-primary-one lg:my-auto lg:mx-0 my-2 mx-2 px-4 py-2 font-semibold w-32 xl:w-auto whitespace-nowrap overflow-hidden">
                <span class="text-center">Login</span>
            </a>

        </nav>
    </div>
</div>




















