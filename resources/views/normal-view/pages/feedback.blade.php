@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex items-center justify-center mt-10">
            <div class="max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-64 p-4" style="background-image: url('/images/bg2.png')"></div>
                <div class="p-10">
                    <p class="mb-4 text-4xl font-extrabold">
                        WE TRULY APPRECIATE FOR CHOOSING & TRUSTING MATER DEI
                        GUIDANCE INFORMATION SYSTEM !
                    </p>

                    <p class="mt-4 text-3xl font-extrabold" style="font-family: serif">
                        "You believe," "You've noticed," and "You sense." Please
                        share your feedback with us so we can improve.
                    </p>
                </div>
                <div class="flex justify-center">
                    <a href="/contact-us"
                        class="mb-5 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline"
                        style="color: black; border-radius: 20px;">Give Feedback</a>
                </div>
            </div>
        </div>
    </div>
@endsection
