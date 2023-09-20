@extends('admin.layout.base')

@section('content-header')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Dashboard</h2>
@endsection

@section('content')
    <div class="container mt-3">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="col-span-1">
                <a href="/admin/announcements">
                    <div class="info-box dash elevation-3" style="height: 110px;">
                        <div class="info-box-content">
                            <span class="info-box-text text-gray-500" style="font-size: 11px;">ANNOUNCEMENTS</span>
                            <span class="info-box-number text-gray-500">{{ $countA }}</span>
                        </div>
                        <span class="info-box-icon"><i class="fa-solid fa-bullhorn text-gray-500"
                                style="font-size: 43px;"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-span-1">
                <a href="/admin/messages">
                    <div class="info-box dash elevation-3" style="height: 110px;">
                        <div class="info-box-content">
                            <span class="info-box-text text-gray-500" style="font-size: 11px;">MESSAGES</span>
                            <span class="info-box-number text-gray-500">{{ $countM }}</span>
                        </div>
                        <span class="info-box-icon"><i class="fa-solid fa-inbox text-gray-500"
                                style="font-size: 43px;"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
