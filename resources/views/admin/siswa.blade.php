<x-admin-layout>
   <div class="p-6 space-y-6">

   <!-- GREETING / PAGE TITLE -->
    <section class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div class="flex flex-col gap-0.5">
            <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-slate-50">Daftar Siswa</h2>
            <p class="text-xs text-slate-500 dark:text-slate-400">Aktivitas sekolah SANS Malang terpantau kondusif.</p>
        </div>
        <div class="flex gap-2">
            <button class="px-3 py-1.5 bg-slate-900 dark:bg-slate-50 hover:bg-slate-800 dark:hover:bg-slate-200 text-white dark:text-slate-900 font-medium rounded-md text-xs shadow-sm cursor-pointer transition-colors">
                Unduh Laporan
            </button>
        </div>
    </section>

    <!-- SECTON 2: SEARCH & FILTERS -->
    <section class="bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm overflow-hidden">
        <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-900/50 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <i data-lucide="search" class="w-5 h-5 text-slate-500 dark:text-slate-400"></i>
                <input type="text" placeholder="Cari nama siswa..." class="w-64 bg-transparent border-none focus:ring-0 p-0 text-sm text-slate-900 dark:text-slate-50 placeholder-slate-400 dark:placeholder-slate-500">
            </div>
        </div>
    </section>

    <!-- SECTON 3: STATS -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        
    </section>

    <!-- SECTON 4: TABLE -->
    <section class="bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-200 dark:border-slate-800">
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">No</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">NISN</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Nama Siswa</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Kelas</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Rombel</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Jenis Kelamin</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Status</th>
                        <th class="px-4 py-2 text-left font-medium text-slate-900 dark:text-slate-50">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">1</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">1234567890</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">Andi Santoso</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">10</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">X-A</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">Laki-laki</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">Aktif</td>
                        <td class="px-4 py-2 text-slate-900 dark:text-slate-50">
                            <button class="px-3 py-1.5 bg-slate-900 dark:bg-slate-50 hover:bg-slate-800 dark:hover:bg-slate-200 text-white dark:text-slate-900 font-medium rounded-md text-xs shadow-sm cursor-pointer transition-colors">
                                Edit
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
   </div> 
</x-admin-layout>