<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-40 flex flex-col w-64 bg-white dark:bg-[#09090b] border-r border-slate-200 dark:border-slate-800 p-3 shrink-0 transition-transform duration-300 -translate-x-full md:translate-x-0 md:relative md:z-20 shadow-sm md:shadow-none">

    <!-- Workspace / School Selector (dropdown lookalike) -->
    <div
        class="workspace-selector flex items-center justify-between p-2 mb-4 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg cursor-pointer transition-colors relative group">
        <div class="flex items-center gap-2.5">
            <div class="w-8 h-8 rounded-lg logo-gradient-bg flex items-center justify-center shrink-0">
                <span class="text-white text-lg font-bold"
                    style="font-family: 'Nasalization Rg', sans-serif; font-weight: 400;">A</span>
            </div>
            <div class="school-info overflow-hidden">
                <h1 class="text-lg text-slate-900 dark:text-slate-50 truncate leading-normal tracking-wide"
                    style="font-family: 'Nasalization Rg', sans-serif; font-weight: 400;">SANS.dev</h1>
            </div>
        </div>
        <!-- Dropdown selector arrow -->
        <i data-lucide="chevrons-up-down" class="chevron-icon w-4 h-4 text-slate-400 shrink-0 ml-1"></i>

        <!-- Tooltip for collapsed view -->
        <span
            class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
            SANS Malang
        </span>
    </div>

    <!-- Grouped Navigation Links (sidebar-07 style) -->
    <div class="flex-1 space-y-4 overflow-y-auto px-1 py-2 no-scrollbar">
        <!-- Group 1: Platform -->
        <div>
            <h3
                class="school-info px-2 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">
                Platform</h3>
            <nav class="space-y-1">
                <a href="{{ route('dashboard') }}" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg
                    {{ Request::routeIs('dashboard') ? 'bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-slate-50 font-medium' : 'text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50' }}
                    text-xs relative group">
                    <i data-lucide="layout-dashboard" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Dashboard</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Dashboard
                    </span>
                </a>

                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="users" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Data Siswa</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Data Siswa
                    </span>
                </a>
                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="graduation-cap" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Data Guru</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Data Guru
                    </span>
                </a>
                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-655 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="book-open" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Mata Pelajaran</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Mata Pelajaran
                    </span>
                </a>
            </nav>
        </div>

        <!-- Group 2: Manajemen -->
        <div>
            <h3
                class="school-info px-2 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">
                Manajemen</h3>
            <nav class="space-y-1">
                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="calendar" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Jadwal Kelas</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Jadwal Kelas
                    </span>
                </a>
                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="bell" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Pengumuman</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Pengumuman
                    </span>
                </a>
                <a href="#"
                    class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                    <i data-lucide="settings" class="menu-icon w-4 h-4"></i>
                    <span class="menu-text">Pengaturan</span>
                    <span
                        class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Pengaturan
                    </span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Bottom User Account Profile Menu (dropdown lookalike at bottom of sidebar-07) -->
    <div class="pt-2 border-t border-slate-200 dark:border-slate-800 relative" x-data="{ open: false }">
        <!-- Dropdown menu -->
        <div x-show="open" @click.outside="open = false"
            class="absolute bottom-full left-0 w-60 mb-2 bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl shadow-xl py-1.5 z-50 transition-all origin-bottom-left"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" style="display: none;">

            <!-- User Header details -->
            <div class="px-3 py-2 flex items-center gap-2.5">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256"
                    alt="Avatar" class="w-8 h-8 rounded-lg object-cover ring-1 ring-slate-200 dark:ring-slate-800">
                <div class="overflow-hidden">
                    <h4 class="text-xs font-bold text-slate-900 dark:text-slate-50 truncate leading-none">{{ Auth::user()->name }}</h4>
                    <p class="text-[10px] text-slate-500 dark:text-slate-400 truncate mt-1">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <div class="border-t border-slate-100 dark:border-slate-900 my-1"></div>

            <!-- Account Info -->
            <a href="{{ route('profile.edit') }}"
                class="flex items-center gap-2 px-3 py-2 text-xs text-slate-700 dark:text-slate-350 hover:bg-slate-50 dark:hover:bg-slate-900/50 hover:text-slate-900 dark:hover:text-slate-100 transition-colors">
                <i data-lucide="badge-check" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                <span>Account</span>
            </a>
            <a href="#"
                class="flex items-center gap-2 px-3 py-2 text-xs text-slate-700 dark:text-slate-350 hover:bg-slate-50 dark:hover:bg-slate-900/50 hover:text-slate-900 dark:hover:text-slate-100 transition-colors">
                <i data-lucide="bell" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                <span>Notifications</span>
            </a>

            <div class="border-t border-slate-100 dark:border-slate-900 my-1"></div>

            <!-- Log Out -->
            <a href="{{ route('logout') }}"
                class="flex items-center gap-2 px-3 py-2 text-xs text-red-650 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/20 transition-colors">
                <i data-lucide="log-out" class="w-4 h-4 text-red-500 dark:text-red-450"></i>
                <span>Log out</span>
            </a>
        </div>

        <div @click="open = !open"
            class="user-selector flex items-center justify-between p-2 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg cursor-pointer transition-colors relative group">
            <div class="flex items-center gap-2.5 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256"
                    alt="Avatar" class="w-7 h-7 rounded-lg object-cover ring-1 ring-slate-200 dark:ring-slate-800">
                <div class="user-info overflow-hidden">
                    <h4 class="text-xs font-semibold text-slate-900 dark:text-slate-50 truncate leading-none">{{ Auth::user()->name }}</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 truncate mt-1">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <i data-lucide="chevrons-up-down" class="chevron-icon w-4 h-4 text-slate-400 shrink-0 ml-1"></i>

            <!-- Tooltip for collapsed view -->
            <span
                class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                {{ Auth::user()->name }}
            </span>
        </div>
    </div>

</aside>