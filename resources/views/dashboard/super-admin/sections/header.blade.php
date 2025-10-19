<!-- Header -->
<div class="mb-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Super Admin Dashboard</h1>
            <p class="mt-2 text-gray-600">Selamat datang, {{ $user->name }}!</p>
        </div>
        <div class="text-sm text-gray-500">
            Role: <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">{{ $user->role->display_name }}</span>
        </div>
    </div>
</div>