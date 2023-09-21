@extends('admin.layout.base')

@section('content-header')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Deletion Confirmation</h2>
@endsection

@section('content')
    <div class="mt-5">
        <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST"
            class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
            @csrf
            @method('DELETE')

            <p class="p-3 text-lg text-red-700">Are you sure you want to delete this announcement <span
                    class="text-bold italic text-1xl underline">{{ $announcement->title }}</span> permanently?</p>

            <div class="text-center">
                <button type="submit" class="px-4 py-2 bg-red-500 text-white w-full rounded hover:bg-red-600">Yes,
                    Delete</button>
            </div>
            <div class="text-center mt-1">
                <a href="/admin/announcements"
                    class="btn px-4 py-2 bg-gray-500 text-white w-full rounded hover:bg-gray-600">Cancel</a>
            </div>

        </form>
    </div>
@endsection
