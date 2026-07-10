<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANS Malang - Admin Dashboard (Template Mockup)</title>
    
    <!-- Google Fonts: Inter & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/nasalization" rel="stylesheet">
    
    <!-- Load Tailwind v4 styling compiled by Vite / CDN Fallback -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <!-- Alpine.js CDN for Mockup Reactivity -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <script>
        // Support tailwind CDN dark mode class configuration
        if (typeof tailwind !== 'undefined') {
            tailwind.config = {
                darkMode: 'class'
            }
        }
        // Apply saved theme or default to dark
        if (localStorage.getItem('color-theme') === 'light' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            document.documentElement.classList.remove('dark');
        } else {
            document.documentElement.classList.add('dark');
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;
        }
        /* Custom shadcn-like scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(100, 116, 139, 0.2);
            border-radius: 99px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(100, 116, 139, 0.45);
        }
        /* Smooth Desktop Sidebar Transitions (Mini-Sidebar / Collapsed view) */
        @media (min-width: 768px) {
            #sidebar {
                transition: width 0.2s cubic-bezier(0.4, 0, 0.2, 1), padding 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
            }
            .sidebar-collapsed #sidebar {
                width: 4rem !important; /* w-16 */
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }
            .sidebar-collapsed .menu-text,
            .sidebar-collapsed .school-info,
            .sidebar-collapsed .chevron-icon,
            .sidebar-collapsed .user-info {
                display: none !important;
            }
            .sidebar-collapsed .menu-item {
                justify-content: center !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .sidebar-collapsed .workspace-selector {
                justify-content: center !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .sidebar-collapsed .user-selector {
                justify-content: center !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .sidebar-collapsed #sidebar .flex-1 {
                overflow: visible !important;
            }
            .sidebar-collapsed .sidebar-tooltip {
                display: block;
            }
        }
        /* Hidden by default, shown on hover when collapsed */
        .sidebar-tooltip {
            display: none;
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        
        /* Animated gradient logo background */
        @keyframes gradient-bg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .logo-gradient-bg {
            background: linear-gradient(135deg, #e91d1d, #f3e40fff, #33ee0dee, #070be2ff, #8a18c5ff);
            background-size: 400% 400%;
            animation: gradient-bg 16s ease-in-out infinite;
        }
    </style>
</head>
<body class="h-full bg-slate-50 dark:bg-[#09090b] text-[#09090b] dark:text-slate-50 antialiased overflow-x-hidden transition-colors duration-200">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR BACKDROP FOR MOBILE -->
        <div id="sidebar-backdrop" class="fixed inset-0 z-35 bg-slate-950/20 backdrop-blur-xs hidden md:hidden transition-opacity duration-200 opacity-0"></div>

        <!-- SIDEBAR -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex flex-col w-64 bg-white dark:bg-[#09090b] border-r border-slate-200 dark:border-slate-800 p-3 shrink-0 transition-transform duration-300 -translate-x-full md:translate-x-0 md:relative md:z-20 shadow-sm md:shadow-none">
            
            <!-- Workspace / School Selector (dropdown lookalike) -->
            <div class="workspace-selector flex items-center justify-between p-2 mb-4 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg cursor-pointer transition-colors relative group">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg logo-gradient-bg flex items-center justify-center shrink-0">
                        <span class="text-white text-lg font-bold" style="font-family: 'Nasalization Rg', sans-serif; font-weight: 400;">A</span>
                    </div>
                    <div class="school-info overflow-hidden">
                        <h1 class="text-lg text-slate-900 dark:text-slate-50 truncate leading-normal tracking-wide" style="font-family: 'Nasalization Rg', sans-serif; font-weight: 400;">SANS.dev</h1>
                    </div>
                </div>
                <!-- Dropdown selector arrow -->
                <i data-lucide="chevrons-up-down" class="chevron-icon w-4 h-4 text-slate-400 shrink-0 ml-1"></i>
                
                <!-- Tooltip for collapsed view -->
                <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                    SANS Malang
                </span>
            </div>

            <!-- Grouped Navigation Links (sidebar-07 style) -->
            <div class="flex-1 space-y-4 overflow-y-auto px-1 py-2 no-scrollbar">
                <!-- Group 1: Platform -->
                <div>
                    <h3 class="school-info px-2 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">Platform</h3>
                    <nav class="space-y-1">
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-slate-50 font-medium text-xs relative group">
                            <i data-lucide="layout-dashboard" class="menu-icon w-4 h-4 text-slate-900 dark:text-slate-50"></i>
                            <span class="menu-text">Dashboard</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Dashboard
                            </span>
                        </a>
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="users" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Data Siswa</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Data Siswa
                            </span>
                        </a>
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="graduation-cap" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Data Guru</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Data Guru
                            </span>
                        </a>
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-655 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="book-open" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Mata Pelajaran</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Mata Pelajaran
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Group 2: Manajemen -->
                <div>
                    <h3 class="school-info px-2 text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-2">Manajemen</h3>
                    <nav class="space-y-1">
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="calendar" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Jadwal Kelas</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Jadwal Kelas
                            </span>
                        </a>
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="bell" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Pengumuman</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                                Pengumuman
                            </span>
                        </a>
                        <a href="#" class="menu-item flex items-center gap-3 px-3 py-2 rounded-lg text-slate-650 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors text-xs font-medium relative group">
                            <i data-lucide="settings" class="menu-icon w-4 h-4"></i>
                            <span class="menu-text">Pengaturan</span>
                            <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
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
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    style="display: none;">
                    
                    <!-- User Header details -->
                    <div class="px-3 py-2 flex items-center gap-2.5">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256" alt="Avatar" class="w-8 h-8 rounded-lg object-cover ring-1 ring-slate-200 dark:ring-slate-800">
                        <div class="overflow-hidden">
                            <h4 class="text-xs font-bold text-slate-900 dark:text-slate-50 truncate leading-none">Admin SANS</h4>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400 truncate mt-1">admin@sansmalang.sch.id</p>
                        </div>
                    </div>
                    
                    <div class="border-t border-slate-100 dark:border-slate-900 my-1"></div>
                    
                    <!-- Account Info -->
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-xs text-slate-700 dark:text-slate-350 hover:bg-slate-50 dark:hover:bg-slate-900/50 hover:text-slate-900 dark:hover:text-slate-100 transition-colors">
                        <i data-lucide="badge-check" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                        <span>Account</span>
                    </a>
                    <a href="#" class="flex items-center gap-2 px-3 py-2 text-xs text-slate-700 dark:text-slate-350 hover:bg-slate-50 dark:hover:bg-slate-900/50 hover:text-slate-900 dark:hover:text-slate-100 transition-colors">
                        <i data-lucide="bell" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                        <span>Notifications</span>
                    </a>
                    
                    <div class="border-t border-slate-100 dark:border-slate-900 my-1"></div>
                    
                    <!-- Log Out -->
                    <a href="/" class="flex items-center gap-2 px-3 py-2 text-xs text-red-650 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/20 transition-colors">
                        <i data-lucide="log-out" class="w-4 h-4 text-red-500 dark:text-red-450"></i>
                        <span>Log out</span>
                    </a>
                </div>

                <div @click="open = !open" class="user-selector flex items-center justify-between p-2 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg cursor-pointer transition-colors relative group">
                    <div class="flex items-center gap-2.5 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=256" alt="Avatar" class="w-7 h-7 rounded-lg object-cover ring-1 ring-slate-200 dark:ring-slate-800">
                        <div class="user-info overflow-hidden">
                            <h4 class="text-xs font-semibold text-slate-900 dark:text-slate-50 truncate leading-none">Admin SANS</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 truncate mt-1">admin@sansmalang.sch.id</p>
                        </div>
                    </div>
                    <i data-lucide="chevrons-up-down" class="chevron-icon w-4 h-4 text-slate-400 shrink-0 ml-1"></i>
                    
                    <!-- Tooltip for collapsed view -->
                    <span class="sidebar-tooltip absolute left-full ml-3 px-2 py-1 bg-slate-950 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-50 dark:text-slate-100 text-xs font-semibold rounded-md shadow-md opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all origin-left duration-150 pointer-events-none whitespace-nowrap z-50">
                        Admin SANS
                    </span>
                </div>
            </div>
        </aside>

        <!-- MAIN LAYOUT -->
        <main class="flex-1 flex flex-col overflow-y-auto">

            <!-- HEADER -->
            <header id="header" class="flex items-center justify-between px-6 py-3 bg-white/85 dark:bg-[#09090b]/85 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 transition-colors duration-200">
                <!-- Sidebar Toggle, Close internally, and Breadcrumb -->
                <div class="flex items-center gap-3">
                    <button id="sidebar-toggle" class="p-1.5 text-slate-500 hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-md cursor-pointer transition-colors" title="Toggle Sidebar">
                        <i data-lucide="panel-left" class="w-4 h-4"></i>
                    </button>
                    <!-- Breadcrumbs display (sidebar-07 look) -->
                    <nav class="hidden sm:flex items-center space-x-1.5 text-xs font-medium text-slate-400 dark:text-slate-500 select-none">
                        <span class="hover:text-slate-700 dark:hover:text-slate-350 cursor-pointer">SANS Malang</span>
                        <span class="text-slate-300 dark:text-slate-700">/</span>
                        <span class="hover:text-slate-700 dark:hover:text-slate-350 cursor-pointer">Admin</span>
                        <span class="text-slate-300 dark:text-slate-700">/</span>
                        <span class="text-slate-700 dark:text-slate-200 font-semibold">Dashboard</span>
                    </nav>
                </div>

                <!-- Action items -->
                <div class="flex items-center gap-2">
                    <!-- Light / Dark Switch Button -->
                    <button id="theme-toggle" class="p-1.5 text-slate-500 hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-md cursor-pointer transition-colors" title="Toggle Tema">
                        <i data-lucide="sun" class="w-4 h-4 hidden dark:block"></i>
                        <i data-lucide="moon" class="w-4 h-4 block dark:hidden"></i>
                    </button>
                    
                    <button id="notify-btn" class="relative p-1.5 text-slate-500 hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-md cursor-pointer transition-colors" title="Notifikasi">
                        <i data-lucide="bell" class="w-4 h-4"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-slate-900 dark:bg-slate-100 rounded-full ring-2 ring-white dark:ring-[#09090b]"></span>
                    </button>
                </div>
            </header>

            <!-- MAIN CONTENT CONTAINER -->
            <div class="p-6 space-y-6">

                <!-- GREETING / PAGE TITLE -->
                <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div class="flex flex-col gap-0.5">
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50">Dashboard</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Selamat datang kembali! Aktivitas sekolah SANS Malang terpantau kondusif.</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-3 py-1.5 bg-slate-900 dark:bg-slate-50 hover:bg-slate-800 dark:hover:bg-slate-200 text-white dark:text-slate-900 font-medium rounded-md text-xs shadow-sm cursor-pointer transition-colors">
                            Unduh Laporan
                        </button>
                    </div>
                </section>

                <!-- STAT CARDS GRID -->
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    
                    <!-- Stat Card 1 -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Siswa Aktif</p>
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50 mt-1">
                                    <span class="stat-counter" data-target="1248">0</span>
                                </h3>
                            </div>
                            <div class="p-2 bg-slate-50 dark:bg-slate-900 rounded-lg">
                                <i data-lucide="users" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-slate-500 dark:text-slate-400">
                            <span class="text-emerald-600 dark:text-emerald-400 font-bold">+4.5%</span> dari bulan lalu
                        </div>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Guru & Staf</p>
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50 mt-1">
                                    <span class="stat-counter" data-target="86">0</span>
                                </h3>
                            </div>
                            <div class="p-2 bg-slate-50 dark:bg-slate-900 rounded-lg">
                                <i data-lucide="graduation-cap" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-slate-500 dark:text-slate-400">
                            <span class="text-emerald-600 dark:text-emerald-400 font-bold">98.2%</span> tingkat kehadiran
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Rombel / Kelas</p>
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50 mt-1">
                                    <span class="stat-counter" data-target="36">0</span>
                                </h3>
                            </div>
                            <div class="p-2 bg-slate-50 dark:bg-slate-900 rounded-lg">
                                <i data-lucide="layout-grid" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-slate-500 dark:text-slate-400">
                            Semua kelas terisi hari ini
                        </div>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Presensi Hari Ini</p>
                                <h3 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50 mt-1">
                                    <span class="stat-counter" data-target="96">0</span>%
                                </h3>
                            </div>
                            <div class="p-2 bg-slate-50 dark:bg-slate-900 rounded-lg">
                                <i data-lucide="clock" class="w-4 h-4 text-slate-500 dark:text-slate-400"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-slate-500 dark:text-slate-400">
                            <span class="text-emerald-600 dark:text-emerald-400 font-bold">+1.2%</span> dari kemarin
                        </div>
                    </div>
                </section>

                <!-- DETAILED SECTIONS: CHARTS & ACTIVITIES -->
                <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <!-- Graph Card (SVG) -->
                    <div class="animate-card lg:col-span-2 bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 relative flex flex-col justify-between overflow-hidden shadow-sm">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50">Ikhtisar Kehadiran Bulanan</h3>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Tingkat kehadiran siswa pada 7 bulan terakhir</p>
                                </div>
                            </div>
                            <!-- Mini Graphic SVG Container -->
                            <div class="relative w-full h-44 mt-4 flex items-end">
                                <svg viewBox="0 0 500 150" class="w-full h-full chart-line overflow-visible">
                                    <!-- Grids -->
                                    <line x1="0" y1="30" x2="500" y2="30" stroke="currentColor" class="text-slate-100 dark:text-slate-900" stroke-width="1" />
                                    <line x1="0" y1="75" x2="500" y2="75" stroke="currentColor" class="text-slate-100 dark:text-slate-900" stroke-width="1" />
                                    <line x1="0" y1="120" x2="500" y2="120" stroke="currentColor" class="text-slate-100 dark:text-slate-900" stroke-width="1" />
                                    
                                    <!-- Area path -->
                                    <path d="M 0,150 L 0,110 L 80,120 L 160,85 L 240,95 L 320,60 L 400,45 L 500,30 L 500,150 Z" 
                                          fill="url(#grad-area)" opacity="0.15"></path>
                                    
                                    <!-- Animated line path -->
                                    <path d="M 0,110 L 80,120 L 160,85 L 240,95 L 320,60 L 400,45 L 500,30" 
                                          fill="none" stroke="currentColor" class="text-slate-800 dark:text-slate-100" stroke-width="2" stroke-linecap="round"></path>
                                    
                                    <!-- Gradients defs -->
                                    <defs>
                                        <linearGradient id="grad-area" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="currentColor" class="text-slate-800 dark:text-slate-100" />
                                            <stop offset="100%" stop-color="currentColor" class="text-slate-800 dark:text-slate-100" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Month labels -->
                        <div class="flex justify-between text-xs text-slate-400 dark:text-slate-500 font-semibold uppercase px-1 mt-4">
                            <span>Jan</span>
                            <span>Feb</span>
                            <span>Mar</span>
                            <span>Apr</span>
                            <span>Mei</span>
                            <span>Jun</span>
                            <span>Jul</span>
                        </div>
                    </div>

                    <!-- Announcements / Information System -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-col justify-between shadow-sm">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50">Pengumuman Sekolah</h3>
                                <a href="#" class="text-xs text-slate-500 dark:text-slate-400 font-semibold hover:underline">Lihat Semua</a>
                            </div>

                            <!-- List of updates -->
                            <div class="space-y-3.5">
                                <div class="flex gap-2.5 items-start">
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-900 dark:bg-slate-50 mt-1.5 shrink-0"></div>
                                    <div>
                                        <h4 class="text-xs font-semibold text-slate-900 dark:text-slate-50">Ujian Akhir Semester</h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">UAS Semester Genap dimulai serentak pada 15 Juli 2026.</p>
                                    </div>
                                </div>
                                <div class="flex gap-2.5 items-start">
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-400 dark:bg-slate-600 mt-1.5 shrink-0"></div>
                                    <div>
                                        <h4 class="text-xs font-semibold text-slate-900 dark:text-slate-50">Rapat Wali Murid</h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Pertemuan sosialisasi kurikulum Merdeka Belajar Kelas X.</p>
                                    </div>
                                </div>
                                <div class="flex gap-2.5 items-start">
                                    <div class="w-1.5 h-1.5 rounded-full bg-slate-450 dark:bg-slate-550 mt-1.5 shrink-0"></div>
                                    <div>
                                        <h4 class="text-xs font-semibold text-slate-900 dark:text-slate-50">Prestasi Robotika</h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">SANS Robotik Club meraih Juara 1 tingkat Provinsi Jawa Timur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info tag footer -->
                        <div class="mt-6 pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-xs text-slate-455">
                            <span>Admin Update: Hari Ini</span>
                        </div>
                    </div>
                </section>

                <!-- QUICK ACTIONS & ACTIVITY FEED -->
                <section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <!-- Quick Actions Grid -->
                    <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
                        <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50 mb-4">Aksi Cepat</h3>
                        <div class="grid grid-cols-2 gap-2">
                            <button class="flex flex-col items-center justify-center p-3 border border-slate-200 dark:border-slate-850 hover:bg-slate-50 dark:hover:bg-slate-900 rounded-lg group transition-all duration-150 cursor-pointer">
                                <i data-lucide="user-plus" class="w-4 h-4 text-slate-650 dark:text-slate-450 group-hover:scale-105 transition-transform"></i>
                                <span class="text-xs font-medium text-slate-700 dark:text-slate-300 mt-1.5">Tambah Siswa</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-3 border border-slate-200 dark:border-slate-850 hover:bg-slate-50 dark:hover:bg-slate-900 rounded-lg group transition-all duration-150 cursor-pointer">
                                <i data-lucide="clipboard-list" class="w-4 h-4 text-slate-655 dark:text-slate-455 group-hover:scale-105 transition-transform"></i>
                                <span class="text-xs font-medium text-slate-700 dark:text-slate-300 mt-1.5">Input Nilai</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-3 border border-slate-200 dark:border-slate-850 hover:bg-slate-50 dark:hover:bg-slate-900 rounded-lg group transition-all duration-150 cursor-pointer">
                                <i data-lucide="send" class="w-4 h-4 text-slate-650 dark:text-slate-455 group-hover:scale-105 transition-transform"></i>
                                <span class="text-xs font-medium text-slate-700 dark:text-slate-300 mt-1.5">Kirim Pesan</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-3 border border-slate-200 dark:border-slate-850 hover:bg-slate-50 dark:hover:bg-slate-900 rounded-lg group transition-all duration-150 cursor-pointer">
                                <i data-lucide="receipt" class="w-4 h-4 text-slate-650 dark:text-slate-455 group-hover:scale-105 transition-transform"></i>
                                <span class="text-xs font-medium text-slate-700 dark:text-slate-300 mt-1.5">Cek SPP</span>
                            </button>
                        </div>
                    </div>

                    <!-- Recent Activity Logs -->
                    <div class="animate-card lg:col-span-2 bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
                        <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50 mb-4">Log Aktivitas Terbaru</h3>
                        <div class="space-y-3.5">
                            <div class="flex items-center justify-between py-1 border-b border-slate-50 dark:border-slate-900/60 pb-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-7 h-7 rounded-lg bg-slate-50 dark:bg-slate-900 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                        <i data-lucide="key" class="w-3.5 h-3.5"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200">Login Wali Kelas XI-IPA</p>
                                        <p class="text-xs text-slate-500">Guru: Drs. Eko Prasetyo</p>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-450">10 mnt yang lalu</span>
                            </div>
                            <div class="flex items-center justify-between py-1 border-b border-slate-50 dark:border-slate-900/60 pb-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-7 h-7 rounded-lg bg-slate-50 dark:bg-slate-900 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                        <i data-lucide="file-plus" class="w-3.5 h-3.5"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200">Unggah Materi Fisika Kuantum</p>
                                        <p class="text-xs text-slate-500">Kelas: XII-IPA</p>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-450">24 mnt yang lalu</span>
                            </div>
                            <div class="flex items-center justify-between py-1">
                                <div class="flex items-center gap-3">
                                    <div class="w-7 h-7 rounded-lg bg-slate-50 dark:bg-slate-900 flex items-center justify-center text-slate-600 dark:text-slate-400">
                                        <i data-lucide="user-check" class="w-3.5 h-3.5"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs font-semibold text-slate-800 dark:text-slate-200">Verifikasi Berkas Pendaftaran</p>
                                        <p class="text-xs text-slate-500">Gelombang 2 SANS Malang</p>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-455">45 mnt yang lalu</span>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>
        
    </div>

    <!-- TOAST NOTIFICATION CONTAINER -->
    <div id="toast-notification" class="fixed bottom-5 right-5 z-50 hidden bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-50 px-4 py-3 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800 flex items-center gap-3 max-w-sm">
        <div class="w-7 h-7 rounded-full bg-slate-100 dark:bg-slate-900 flex items-center justify-center shrink-0">
            <i data-lucide="check" class="w-4 h-4"></i>
        </div>
        <div>
            <h5 class="text-xs font-bold">Notifikasi</h5>
            <p class="text-xs text-slate-500 dark:text-slate-400">Pesan simulasi berhasil terkirim.</p>
        </div>
    </div>

    <!-- Anime.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" referrerpolicy="no-referrer"></script>
    
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
    </script>
    
    <!-- Custom Isolated Dashboard Animations Script -->
    <script src="{{ asset('js/dashboard.js') }}?v={{ time() }}"></script>
</body>
</html>
