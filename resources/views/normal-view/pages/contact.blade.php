@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('title')
    Contact Us
@endsection

@section('content')
    <div class="container mx-auto md:p-10">
        <div class="flex items-center justify-center mt-10">
            <div class="max-w-[700px] bg-white shadow-lg rounded-lg overflow-hidden px-20">
                <div class="p-4">
                    @if (session('message'))
                        <div
                            class="bg-green-200 border-l-4 border-r-4 text-center border-green-500 text-green-700 p-4 relative">
                            <span class="block sm:inline text-bold"><i class="fas fa-paper-plane"></i>
                                {{ session('message') }}</span>
                            <button
                                class="absolute top-0 right-0 mt-4 mr-2 text-md text-green-700 hover:text-green-500 focus:outline-none"
                                onclick="this.parentElement.style.display = 'none';">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 10l2.293 2.293a1 1 0 0 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 1 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 0-1.414z" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <h1 class="text-4xl font-bold mb-4 mt-5 text-indigo-900 text-center">
                        Contact Us
                    </h1>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit.
                    </p>
                </div>
                <form class="px-6 py-4" action="{{ route('contact-us.submit') }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="full_name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                            <input type="text" @if (auth()->check()) disabled @endif
                                value="{{ auth()->check() ? auth()->user()->name : '' }}" id="full_name" name="full_name"
                                placeholder="Full Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @if (auth()->check()) cursor-not-allowed @endif" />
                            @error('full_name')
                                <div class="text-sm text-red-500 italic">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" @if (auth()->check()) disabled @endif
                                value="{{ auth()->check() ? auth()->user()->email : '' }}" name="email" id="email"
                                placeholder="Email"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @if (auth()->check()) cursor-not-allowed @endif" />
                            @error('email')
                                <div class="text-sm text-red-500 italic">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="phone_number" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                            <input type="tel" @if (auth()->check()) disabled @endif
                                value="{{ auth()->check() ? auth()->user()->phone_number : '' }}" id="phone_number"
                                name="phone_number" placeholder="Phone Number"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @if (auth()->check()) cursor-not-allowed @endif" />
                            @error('phone_number')
                                <div class="text-sm text-red-500 italic">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                            <input type="text" @if (auth()->check()) disabled @endif
                                value="{{ auth()->check() ? auth()->user()->address : '' }}" id="address" name="address"
                                placeholder="Address"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @if (auth()->check()) cursor-not-allowed @endif" />
                            @error('address')
                                <div class="text-sm text-red-500 italic">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" name="message" placeholder="Type your message here"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"></textarea>
                        @error('message')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <div class="mb-4 flex items-center">
                            <input type="checkbox" id="agreeTerms" class="form-checkbox h-5 w-5 text-indigo-600" />
                            <p for="agreeTerms" class="ml-2 text-gray-700">
                                I have read and understand the Terms of
                                <a href="#" class="text-blue-500">Service and Privacy Policy</a>
                            </p>
                        </div>
                        <div class="flex items-center">
                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-10 rounded focus:outline-none focus:shadow-outline"
                                style="border-radius: 20px;">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
