<!-- Features & Info -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <!-- Available Features -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-green-50 px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900 flex items-center">
                <svg class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Fitur Tersedia
            </h2>
        </div>
        <div class="p-6">
            <div class="space-y-3">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Kelola Profil Pribadi</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Ubah Password</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Lihat Aktivitas Login</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="text-gray-400">Akses Admin (Terbatas)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Account Info -->
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900 flex items-center">
                <svg class="h-5 w-5 text-gray-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Informasi Akun
            </h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-3">
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">Nama Lengkap</span>
                        <span class="text-sm font-medium text-gray-900">{{ $user->name }}</span>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-3">
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">Email</span>
                        <span class="text-sm font-medium text-gray-900">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-3">
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">Role</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            {{ $user->role->display_name }}
                        </span>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-3">
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">Tanggal Dibuat</span>
                        <span class="text-sm font-medium text-gray-900">{{ $user->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between">
                        <span class="text-sm text-gray-500">Terakhir Update</span>
                        <span class="text-sm font-medium text-gray-900">{{ $user->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>