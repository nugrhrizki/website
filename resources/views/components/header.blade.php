<div class="hidden md:block bg-blue-500">
    <div
        class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 py-2 text-white text-sm">
        <p>Alamat Sekolah : Jln.Sayuran No 39 Desa Mekarmukti Kec. Cihampelas Kab. Bandung Barat</p>
        <p>Email : smkn1cihampelas@yahoo.com</p>
    </div>
</div>
<header
    class="sticky -top-px inset-0 flex flex-wrap sm:justify-start sm:flex-col z-50 w-full bg-black/90 backdrop-blur-lg text-sm py-4 sm:py-0">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
        aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex items-center gap-x-2 flex-none" href="/" aria-label="Brand">
                <img src={{ Vite::asset('resources/images/c1logo.png') }} alt="logo" class="w-10 h-10" />
                <div class="flex flex-col text-white">
                    <span class="text-xl font-semibold">C1-HITECH R&D</span>
                    <span class="text-xs">SMK NEGERI 1 CIHAMPELAS</span>
                </div>
            </a>
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle w-9 h-9 flex justify-center items-center text-white text-sm font-semibold rounded-lg border border-gray-200 hover:text-gray-800 focus:text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                    aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6"></line>
                        <line x1="3" x2="21" y1="12" y2="12"></line>
                        <line x1="3" x2="21" y1="18" y2="18"></line>
                    </svg>
                    <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <x-navbar />
    </nav>
</header>
