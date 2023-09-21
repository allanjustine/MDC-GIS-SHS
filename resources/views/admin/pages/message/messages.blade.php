@extends('admin.layout.base')

@section('content-header')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Messages</h2>
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between mb-4">
            <span class="text-bold text-2xl">Total Entries: {{ $messages->count() }}</span>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">ID No.</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Full Name</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Email</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Phone Number</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Address</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Message</th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr class="hover:bg-gray-100 {{ $loop->iteration % 2 === 0 ? 'bg-gray-100' : '' }}">
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->id }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->full_name }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->email }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->phone_number }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->address }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->message }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ $message->created_at->format('F j, Y') }} -
                                <span class="italic text-gray-500">{{ $message->created_at->diffForHumans() }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($messages->count() === 0)
                <p class="text-center mt-3">
                    No one is contacting us. Please wait for a while.
                </p>
            @endif
            <div class="my-4">
                {{ $messages->links('admin.layout.pagination') }}
            </div>
        </div>
    </div>
@endsection
