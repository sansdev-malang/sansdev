<x-admin-layout>
    <!-- Main Content Wrapper -->
    <div class="main-content flex-1 bg-slate-50 dark:bg-slate-950 transition-all duration-300 ease-in-out">

        <!-- Top Header Bar -->
        <div class="h-16 flex items-center justify-between px-6 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm z-10">
            <h1 class="text-xl font-semibold text-slate-900 dark:text-slate-100">Profile</h1>
            <div class="flex items-center gap-4">
                <!-- Example of breadcrumbs or status -->
                <nav class="text-xs text-slate-500 dark:text-slate-400" aria-label="breadcrumb">
                    <ol class="flex items-center gap-1">
                        <li><a href="{{ route('admin.dashboard') }}" class="hover:text-primary">Dashboard</a></li>
                        <li>/</li>
                        <li>Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Content -->
        <div class="px-6 py-4">
            <div class="space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>
