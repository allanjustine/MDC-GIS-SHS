@extends('admin.layout.base')

@section('content-header')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Announcement Update</h2>
@endsection

@section('content')
    <div class="mt-5">
        <form action="{{ route('admin.announcements.update', $announcement->id) }}" method="POST"
            class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
            @csrf
            @method('PUT')

            <p class="text-xl mb-2 text-center text-bold italic">
                Update
            </p>
            <hr>
            <div class="mb-4 mt-2">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg"
                    placeholder="Enter title" value="{{ $announcement->title }}">

                @error('title')
                    <div class="text-sm text-red-500 italic">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="remarks" class="block text-gray-700 font-semibold mb-2">Remarks</label>
                <textarea name="remarks" id="remarks" class="w-full px-3 py-2 border rounded-lg" placeholder="Enter remarks">{{ $announcement->remarks }}</textarea>

                @error('remarks')
                    <div class="text-sm text-red-500 italic">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white w-full rounded hover:bg-blue-600">Update</button>
            </div>
            <div class="text-center mt-1">
                <a href="/admin/announcements"
                    class="btn px-4 py-2 bg-gray-500 text-white w-full rounded hover:bg-gray-600">Back</a>
            </div>
        </form>
    </div>
@endsection
