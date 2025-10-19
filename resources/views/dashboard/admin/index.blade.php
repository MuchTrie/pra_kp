@extends('layouts.dashboard')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        {{-- Header Section --}}
        @include('dashboard.admin.sections.header')

        {{-- Statistics Section --}}
        @include('dashboard.admin.sections.statistics')

        {{-- Info Cards Section --}}
        @include('dashboard.admin.sections.info-cards')

        {{-- User Table Section --}}
        @include('dashboard.admin.sections.user-table')
        
    </div>
</div>
@endsection