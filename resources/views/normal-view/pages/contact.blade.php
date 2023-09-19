@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('content')
    <div class="container mx-auto p-10">
        <div class="flex items-center justify-center mt-10">
            <div class="max-w-[700px] bg-white shadow-lg rounded-lg overflow-hidden px-20">
                <div class="p-4">
                    <h1 class="text-4xl font-bold mb-4 mt-5 text-indigo-900 text-center">
                        Contact Us
                    </h1>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit.
                    </p>
                </div>
                <form class="px-6 py-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="fullName" class="block text-gray-700 font-bold mb-2">Full Name</label>
                            <input type="text" id="fullName" placeholder="Full Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" placeholder="Email"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="phoneNumber" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                            <input type="tel" id="phoneNumber" placeholder="Phone Number"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                            <input type="text" id="address" placeholder="Address"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" placeholder="Type your message here"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"></textarea>
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
