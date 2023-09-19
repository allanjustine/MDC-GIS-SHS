@extends('admin.layout.base')

@section('content')
    <div class="container mt-3">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="col-span-1">
                <a href="#">
                    <div class="info-box dash elevation-3" style="height: 110px;">
                        <div class="info-box-content">
                            <span class="info-box-text text-gray-500" style="font-size: 11px;">ADMINS</span>
                            <span class="info-box-number text-gray-500">10</span>
                        </div>
                        <span class="info-box-icon"><i class="fa-solid fa-user-lock text-gray-500"
                                style="font-size: 43px;"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-span-1">
                <a href="#">
                    <div class="info-box dash elevation-3" style="height: 110px;">
                        <div class="info-box-content">
                            <span class="info-box-text text-gray-500" style="font-size: 11px;">USERS</span>
                            <span class="info-box-number text-gray-500">10</span>
                        </div>
                        <span class="info-box-icon"><i class="fa-solid fa-users text-gray-500"
                                style="font-size: 43px;"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
