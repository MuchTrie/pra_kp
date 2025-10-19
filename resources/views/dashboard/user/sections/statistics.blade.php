<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <!-- Account Status -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-green-500">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-green-600 uppercase tracking-wider">Status Akun</div>
                    <div class="text-lg font-bold text-gray-900">Aktif</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Member Since -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-blue-500">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 0v4m0-4h3a2 2 0 012 2v2m-6 0h6" />
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-blue-600 uppercase tracking-wider">Member Sejak</div>
                    <div class="text-lg font-bold text-gray-900">{{ $user->created_at->format('M Y') }}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Completion -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-yellow-500">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-yellow-600 uppercase tracking-wider">Profil</div>
                    <div class="text-lg font-bold text-gray-900">100%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Count -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-purple-500">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-8 w-8 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-purple-600 uppercase tracking-wider">Login Hari Ini</div>
                    <div class="text-lg font-bold text-gray-900">{{ date('j') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>