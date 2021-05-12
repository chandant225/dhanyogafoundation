<aside x-show="show" class="py-3 px-5 fixed w-screen h-screen top-0 left-0 bg-black bg-opacity-90 text-gray-50 z-50 animate__animated animate__faster" x-transition:enter="animate__slideInLeft" x-transition:leave="animate__slideOutLeft">
    <div class="text-right py-2 px-4">
        <button role="button" class="" @click="show = false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg> </button>
    </div>
    <div class="text-center">
        <div class="text-2xl my-3 font-semibold"><a class="" href="{{ url('/') }}">Home</a></div>
        <div class="text-2xl my-3 font-semibold"><a class="" href="{{ route('products.index') }}">Products</a></div>
        <div class="text-2xl my-3 font-semibold"><a class="" href="{{ route('stores.index') }}">Find a Store</a></div>
        <div class="text-2xl my-3 font-semibold"><a class="" href={{ url(appSettings('about_us_page_url', '/')) }}"">About Us</a></div>
        <div class="text-2xl my-3 font-semibold"><a class="" href="{{ route('contact-us.index') }}">Contact Us</a></div>
        <div class="text-center mt-4">
            <div>
                <a href="tel:{{ appSettings('mobile') }}"> <i class="fa fa-phone mr-1" aria-hidden="true"></i>{{ appSettings('mobile') }}</a>
            </div>
            <div>
                <a href="mailto:{{ appSettings('email') }}"> <i class="fa fa-envelope mr-2" aria-hidden="true"></i>{{ appSettings('email') }}</a>
            </div>
            <div class="">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('facebook_url') }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('twitter_url') }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ appSettings('youtube_url') }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</aside>
