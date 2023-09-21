@extends('admin.layout.base')

@section('content-header')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Announcement Create</h2>
@endsection

@section('content')
    {{-- @if (session('message'))
        <div class="bg-green-200 border-l-4 border-r-4 text-center border-green-500 text-green-700 p-4 relative">
            <span class="block sm:inline text-bold"><i class="fas fa-bullhorn"></i> {{ session('message') }}</span>
            <button class="absolute top-0 right-0 mt-4 mr-2 text-md text-green-700 hover:text-green-500 focus:outline-none"
                onclick="this.parentElement.style.display = 'none';">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M6.293 6.293a1 1 0 0 1 1.414 0L10 8.586l2.293-2.293a1 1 0 1 1 1.414 1.414L11.414 10l2.293 2.293a1 1 0 0 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 1 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 0-1.414z" />
                </svg>
            </button>
        </div>
    @endif --}}

    <div class="mt-5">
        <form action="{{ route('announcements.create') }}" method="POST"
            class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
            @csrf

            <p class="text-xl mb-2 text-center text-bold italic">
                Create
            </p>
            <hr>
            <div class="mb-4 mt-2">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg"
                    placeholder="Enter title">

                @error('title')
                    <div class="text-sm text-red-500 italic">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="remarks" class="block text-gray-700 font-semibold mb-2">Remarks</label>
                <textarea name="remarks" id="remarks" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter remarks"></textarea>

                @error('remarks')
                    <div class="text-sm text-red-500 italic">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white w-full rounded hover:bg-blue-600">Submit</button>
            </div>
            <div class="text-center mt-1">
                <a href="/admin/announcements"
                    class="btn px-4 py-2 bg-gray-500 text-white w-full rounded hover:bg-gray-600">Back</a>
            </div>
        </form>
    </div>
@endsection
