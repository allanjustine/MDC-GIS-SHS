@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('content')
    <div class="container mx-auto bg-gray-200 flex flex-col items-center justify-center p-8 w-[700px]"
        style="border-radius: 50px">
        <div class="flex items-center">
            <div class="logo h-20 w-20 mr-5">
                <img src="/images/logo.png" alt="Logo" class="rounded-full" />
            </div>
            <div class="text-center">
                <p class="text-white text-4xl"
                    style="
                        color: black;
                        -webkit-text-stroke: 2px rgb(255, 255, 255);
                    ">
                    <strong
                        style="
                            font-family: 'Courier New', monospace;
                            font-size: 60px;
                            font-weight: 900;
                        ">MDC
                        SHS-GIS</strong>
                </p>
            </div>
        </div>

        <p class="text-black text-2xl" style="font-family: serif">
            <strong>Guidance Information System</strong>
        </p>
        <div class="w-[400px] bg-black shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <p class="text-white text-center text-xl font-bold">
                <u>Log in</u>
            </p>
            <div>
                <br />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4 relative">
                        <label for="email" class="block text-white font-bold mb-2">Email</label>
                        <div class="flex items-center">
                            <input type="email" id="email" placeholder="Email" name="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                                required autocomplete="email" autofocus />

                            <i
                                class="fas fa-envelope text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"></i>
                        </div>
                        @error('email')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6 relative">
                        <label for="password" class="block text-white font-bold mb-2">Password</label>
                        <div class="flex items-center">
                            <input type="password" name="password" id="password" placeholder="Password" required autofocus
                                autocomplete="current-password"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" />
                            <i class="fas fa-lock text-gray-400 absolute right-4 top-1/10 transform -translate-y-1/10"></i>
                        </div>
                        @error('password')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="items-center" style="margin-left: -25px">
                            <div>
                                <label class="text-white">
                                    <input type="checkbox" class="mr-1" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }} />
                                    Remember Me </label><br />
                                <a href="#" class="text-blue-500">Forgot Password</a><br />
                            </div>
                            <a href="/register" class="text-green-500">Register new account</a><br />
                        </div>
                        <button
                            class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-3 px-10 focus:outline-none focus:shadow-outline"
                            type="submit"
                            style="
                                border-radius: 20px;
                                margin-top: -20px;
                                margin-left: 80px;
                            ">
                            Log in
                        </button>
                    </div>

                    <div class="text-sm text-red-500 italic">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
