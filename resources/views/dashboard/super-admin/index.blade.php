@extends('layouts.dashboard')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('dashboard.super-admin.sections.header')
        
        @include('dashboard.super-admin.sections.statistics')
        
        @include('dashboard.super-admin.sections.info-controls')
        
        @include('dashboard.super-admin.sections.user-management')
    </div>
</div>
@endsection