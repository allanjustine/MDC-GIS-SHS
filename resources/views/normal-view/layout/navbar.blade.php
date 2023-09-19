<br /><br />
<section class="shadow rounded-lg bg-gray-900"
    style="
        width: 80%;
        margin-left: 10%;
        background-color: rgba(0, 0, 0, 0.664);
    ">
    <div class="wrapper opacity-100 flex">
        <div id="brand" class="py-1">
            <img src="/images/logo.png" alt="mdc logo" class="h-20 w-auto rounded-full ml-5" />
        </div>
        <nav class="flex space-x-2 py-4 px-2 text-white font-semibold mt-2 py-2 ml-10">
            <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500 ml-20" href="/">Home</a>
            <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/services">Services</a>
            <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/feedback">Feedback</a>
            <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/about-us">About Us</a>
            <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/contact-us">Contact Us</a>
        </nav>
        <div class="flex space-x-2 py-4 px-2 text-white font-semibold mt-2 p-2 ml-auto">
            @if (!auth()->check())
                <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/login">Log In</a>
                <a class="py-4 px-2 text-white font-semibold hover:bg-gray-500" href="/register">Register</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="py-4 text-white font-semibold hover:bg-gray-500 px-2" type="submit">Log Out</button>
                </form>
            @endif
        </div>
    </div>
</section>
