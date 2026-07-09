<header id="header" class="flex items-center justify-between px-6 py-3 bg-white/85 backdrop-blur-md border-b border-slate-200 transition-colors duration-200">
    <!-- Sidebar Toggle, Close internally, and Breadcrumb -->
    <div class="flex items-center gap-3">
        <button id="sidebar-toggle" class="p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 border border-slate-200 rounded-md cursor-pointer transition-colors" title="Toggle Sidebar">
            <i data-lucide="panel-left" class="w-4 h-4"></i>
        </button>
        <!-- Breadcrumbs display (sidebar-07 look) -->
        <nav class="hidden sm:flex items-center space-x-1.5 text-xs font-medium text-slate-400 select-none">
            <span class="hover:text-slate-700 cursor-pointer">SANS Malang</span>
            <span class="text-slate-300">/</span>
            <span class="hover:text-slate-700 cursor-pointer">Admin</span>
            <span class="text-slate-300">/</span>
            <span class="text-slate-700 font-semibold">Dashboard</span>
        </nav>
    </div>

    <!-- Search bar -->
    <div class="relative w-40 sm:w-48 md:w-64">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i data-lucide="search" class="w-4 h-4 text-slate-400"></i>
        </span>
        <input type="text" placeholder="Cari..." class="w-full bg-transparent border border-slate-200 rounded-md py-1.5 pl-9 pr-4 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-400 transition-all">
    </div>

    <!-- Action items -->
    <div class="flex items-center gap-2">
        <!-- Light / Dark Switch Button -->
        <button id="theme-toggle" class="p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 border border-slate-200 rounded-md cursor-pointer transition-colors" title="Toggle Tema">
            <i data-lucide="sun" class="w-4 h-4 hidden"></i>
            <i data-lucide="moon" class="w-4 h-4 block"></i>
        </button>

        <button id="notify-btn" class="relative p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 border border-slate-200 rounded-md cursor-pointer transition-colors" title="Notifikasi">
            <i data-lucide="bell" class="w-4 h-4"></i>
            <span class="absolute top-1 right-1 w-2 h-2 bg-slate-900 rounded-full ring-2 ring-white"></span>
        </button>

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="flex items-center rounded-full border border-slate-200 overflow-hidden focus:outline-none focus:ring-2 focus:ring-slate-400">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256"
                    alt="Avatar"
                    class="w-8 h-8 object-cover">
            </button>

            <!-- Dropdown menu -->
            <div x-show="open" @click.outside="open = false"
                class="absolute right-0 mt-2 w-48 bg-white border border-slate-200 rounded-md shadow-lg py-1"
                x-transition>
                <a href="{{ route('profile.edit') }}"
                class="block px-3 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <i data-lucide="user" class="w-4 h-4 inline-block mr-2"></i> Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-3 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                        <i data-lucide="log-out" class="w-4 h-4 inline-block mr-2"></i> Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
