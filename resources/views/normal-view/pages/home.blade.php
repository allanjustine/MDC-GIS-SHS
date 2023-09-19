@extends('normal-view.layout.base')

@section('content')
    <div class="mx-auto px-10">
        <div class="text-right mb-8">
            <h1 class="float-right bg-gray-200 px-2 rounded"></h1>
        </div>
        <div class="flex items-center justify-center pt-10 pb-5 px-20"
            style="
            background-color: rgba(137, 43, 226, 0.185);
            border-radius: 20px;
        ">
            <div class="max-w-[1130px] shadow-lg rounded-lg overflow-hidden">
                <div class="p-4">
                    <div class="flex items-center">
                        <div class="logo h-20 w-20 mr-5">
                            <img src="/images/logo.png" alt="Logo" class="rounded-full" />
                        </div>
                        <div class="text-center ml-5">
                            <p class="text-white text-6xl font-extrabold"
                                style="
                                text-align: left;
                                font-family: sans-serif;
                            ">
                                <strong class="font-extrabold">MDC GUIDANCE</strong>
                                <br />
                                <strong>INFORMATION SYSTEM</strong>
                            </p>
                        </div>
                    </div>
                    <p class="ml-[8rem] mt-10 text-4xl font-extrabold text-white"
                        style="font-family: 'Times New Roman', Times, serif">
                        Discover yourself
                    </p>
                    <p class="mb-4 ml-[8rem] text-4xl font-extrabold text-white"
                        style="font-family: 'Times New Roman', Times, serif">
                        Take the test to find the perfect who you are
                    </p>
                    <br />
                    <a v-if="!auth.user" href="/login"
                        class="bg-sky-500 ml-[8rem] text-white py-3 font-bold px-20 rounded-md hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2"
                        style="border-radius: 20px;">Getting Started</a>
                </div>
            </div>
        </div>
    </div>
@endsection
