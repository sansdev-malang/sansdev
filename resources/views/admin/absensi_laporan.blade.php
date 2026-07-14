<x-admin-layout>
    <div class="p-6 space-y-6">

        <!-- GREETING / PAGE TITLE -->
        <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div class="flex flex-col gap-0.5">
                <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50">Laporan Absensi</h2>
                <p class="text-xs text-slate-500 dark:text-slate-400">Selamat datang kembali! Aktivitas sekolah SANS Malang terpantau kondusif.</p>
            </div>
        </section>

        <!-- STAT CARDS GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            
            <!-- Stat Card 1 -->
            <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Bonus</p>
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

            <!-- Calendar Card -->
            <div class="animate-card bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-col justify-between shadow-sm">
                <div>
                    <!-- Calendar Header -->
                    <div class="flex items-center justify-between mb-6">
                        <button id="calendar-prev" class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg text-slate-500 dark:text-slate-400 transition-colors cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m15 18-6-6 6-6"/></svg>
                        </button>
                        <h3 id="calendar-title" class="text-sm font-bold text-slate-800 dark:text-slate-100 tracking-wide">Juli 2026</h3>
                        <button id="calendar-next" class="p-1.5 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-lg text-slate-500 dark:text-slate-400 transition-colors cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>

                    <!-- Weekdays -->
                    <div class="grid grid-cols-7 gap-y-2 text-center text-xs font-semibold mb-3" style="display: grid; grid-template-columns: repeat(7, minmax(0, 1fr));">
                        <span class="text-rose-400 dark:text-rose-500">Sun</span>
                        <span class="text-slate-500 dark:text-slate-400">Mon</span>
                        <span class="text-slate-500 dark:text-slate-400">Tue</span>
                        <span class="text-slate-500 dark:text-slate-400">Wed</span>
                        <span class="text-slate-500 dark:text-slate-400">Thu</span>
                        <span class="text-slate-500 dark:text-slate-400">Fri</span>
                        <span class="text-rose-400 dark:text-rose-500">Sat</span>
                    </div>

                    <!-- Days Grid -->
                    <div id="calendar-days-grid" class="grid grid-cols-7 gap-y-2 text-center text-xs font-semibold" style="display: grid; grid-template-columns: repeat(7, minmax(0, 1fr));">
                        <!-- Populated by JS -->
                    </div>
                </div>

                <!-- Footer with current date info -->
                <div class="mt-6 pt-4 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between text-xs text-slate-400 dark:text-slate-500">
                    <span id="calendar-today-btn" class="hover:text-slate-850 dark:hover:text-slate-200 cursor-pointer font-semibold transition-colors">Hari Ini</span>
                    <span id="calendar-selected-info" class="font-bold text-slate-800 dark:text-slate-200"></span>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const monthNames = [
                        "January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                    ];
                    const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

                    // Indonesian national holidays lookup list
                    const indonesianHolidays = {
                        // Fixed annual holidays
                        '01-01': 'Tahun Baru Masehi',
                        '05-01': 'Hari Buruh Internasional',
                        '06-01': 'Hari Lahir Pancasila',
                        '08-17': 'Hari Kemerdekaan Republik Indonesia',
                        '12-25': 'Hari Raya Natal',
                        
                        // 2026-specific calculated holidays (Islamic, Buddhist, Hindu, Christian)
                        '2026-01-19': 'Isra Mikraj Nabi Muhammad SAW',
                        '2026-02-17': 'Tahun Baru Imlek 2577 Kongzili',
                        '2026-03-20': 'Hari Suci Nyepi (Tahun Baru Saka 1948)',
                        '2026-03-21': 'Hari Raya Idul Fitri 1447 H',
                        '2026-04-03': 'Wafat Yesus Kristus',
                        '2026-04-05': 'Hari Paskah',
                        '2026-05-14': 'Kenaikan Yesus Kristus',
                        '2026-05-27': 'Hari Raya Waisak 2570 BE / Idul Adha 1447 H',
                        '2026-06-16': 'Tahun Baru Islam 1448 Hijriah',
                        '2026-08-25': 'Maulid Nabi Muhammad SAW'
                    };

                    // Current real local date: 14 July 2026
                    const today = new Date(2026, 6, 14); // July is 6 (0-indexed)
                    let currentYear = 2026;
                    let currentMonth = 6; // 0-indexed (July)

                    let selectedDate = new Date(today);

                    const titleEl = document.getElementById('calendar-title');
                    const gridEl = document.getElementById('calendar-days-grid');
                    const infoEl = document.getElementById('calendar-selected-info');
                    const todayBtn = document.getElementById('calendar-today-btn');

                    // Mock status patterns matching user's reference image
                    const mockStatus = {
                        1: 'green',
                        15: 'purple',
                        20: 'red',
                        29: 'green',
                        30: 'outline'
                    };

                    function getHolidayName(date) {
                        const y = date.getFullYear();
                        const m = String(date.getMonth() + 1).padStart(2, '0');
                        const d = String(date.getDate()).padStart(2, '0');
                        
                        // Check specific date or fixed annual day (MM-DD)
                        const specificKey = `${y}-${m}-${d}`;
                        const annualKey = `${m}-${d}`;
                        
                        return indonesianHolidays[specificKey] || indonesianHolidays[annualKey] || null;
                    }

                    function formatDateString(date) {
                        const dayName = dayNames[date.getDay()];
                        const day = date.getDate();
                        const month = monthNames[date.getMonth()];
                        return `${dayName}, ${day} ${month}`;
                    }

                    function renderCalendar() {
                        gridEl.innerHTML = '';
                        titleEl.textContent = `${monthNames[currentMonth]} ${currentYear}`;
                        
                        // First day of current displayed month
                        const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();
                        // Last date of current displayed month
                        const lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();

                        // Fill in previous month empty spaces
                        for (let i = 0; i < firstDayIndex; i++) {
                            const emptyCell = document.createElement('div');
                            emptyCell.className = 'py-2';
                            gridEl.appendChild(emptyCell);
                        }

                        // Fill in current month days
                        for (let d = 1; d <= lastDate; d++) {
                            const dayButton = document.createElement('button');
                            dayButton.textContent = d;
                            
                            const thisDate = new Date(currentYear, currentMonth, d);
                            const dayOfWeek = thisDate.getDay();
                            const holidayName = getHolidayName(thisDate);
                            
                            // Base day style
                            let btnClasses = 'w-9 h-9 mx-auto rounded-xl flex items-center justify-center transition-all duration-150 cursor-pointer focus:outline-none hover:bg-slate-100 dark:hover:bg-slate-800 ';
                            
                            // Check Sunday or Holiday for red text color
                            if (dayOfWeek === 0 || holidayName) {
                                btnClasses += 'text-rose-500 dark:text-rose-450 font-bold ';
                            } else {
                                btnClasses += 'text-slate-850 dark:text-slate-200 ';
                            }

                            // Match the statuses/highlights from screenshot
                            const status = mockStatus[d];
                            if (status === 'green') {
                                btnClasses += 'bg-emerald-100 dark:bg-emerald-950/60 text-emerald-800 dark:text-emerald-300 ';
                            } else if (status === 'purple') {
                                btnClasses += 'bg-indigo-100 dark:bg-indigo-950/60 text-indigo-850 dark:text-indigo-300 ';
                            } else if (status === 'red') {
                                btnClasses += 'bg-rose-100 dark:bg-rose-950/60 text-rose-800 dark:text-rose-350 ';
                            } else if (status === 'outline') {
                                btnClasses += 'border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-850 dark:text-slate-200 ';
                            }

                            // If selected, apply special focus/active border or overlay if not already outlined
                            const isSelected = thisDate.toDateString() === selectedDate.toDateString();
                            if (isSelected && status !== 'outline') {
                                btnClasses += 'ring-2 ring-slate-800 dark:ring-slate-200 ';
                            }

                            dayButton.className = btnClasses.trim();
                            dayButton.style.width = '36px';
                            dayButton.style.height = '36px';
                            dayButton.style.aspectRatio = '1/1';

                            // Set title attribute for native tooltip on hover
                            if (holidayName) {
                                dayButton.title = holidayName;
                            }

                            dayButton.addEventListener('click', () => {
                                selectedDate = thisDate;
                                updateFooterInfo();
                                renderCalendar();
                            });

                            gridEl.appendChild(dayButton);
                        }

                        updateFooterInfo();
                    }

                    function updateFooterInfo() {
                        const holiday = getHolidayName(selectedDate);
                        if (holiday) {
                            infoEl.innerHTML = `<div class="text-right"><div class="font-bold text-slate-800 dark:text-slate-200">${formatDateString(selectedDate)}</div><div class="text-rose-500 text-[10px] font-extrabold mt-0.5 tracking-tight">${holiday}</div></div>`;
                        } else {
                            infoEl.innerHTML = `<span class="font-bold text-slate-800 dark:text-slate-200">${formatDateString(selectedDate)}</span>`;
                        }
                    }

                    document.getElementById('calendar-prev').addEventListener('click', () => {
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        renderCalendar();
                    });

                    document.getElementById('calendar-next').addEventListener('click', () => {
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        renderCalendar();
                    });

                    todayBtn.addEventListener('click', () => {
                        selectedDate = new Date(today);
                        currentYear = today.getFullYear();
                        currentMonth = today.getMonth();
                        renderCalendar();
                    });

                    renderCalendar();
                });
            </script>
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
</x-admin-layout>
