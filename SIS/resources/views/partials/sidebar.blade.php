<aside class="flex flex-col w-64 px-4 py-8 overflow-y-auto bg-[#1a4a2f]">
    <div class="text-white text-center mb-6">
        <img src="{{ asset('storage/images/image.png') }}" alt="SIS Logo" class="h-16 w-auto mx-auto mb-2">
    </div>

    <nav class="mt-10">
        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-gray-300 hover:bg-[#296041] hover:text-white group overflow-hidden" href="#">
            <span class="ml-2">Dashboard</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00] scale-y-0 group-hover:scale-y-100 transition-transform origin-top"></span>
        </a>

        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-gray-300 hover:bg-[#296041] hover:text-white group overflow-hidden" href="#">
            <span class="ml-2">Academic</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00] scale-y-0 group-hover:scale-y-100 transition-transform origin-top"></span>
        </a>

        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-gray-300 hover:bg-[#296041] hover:text-white group overflow-hidden" href="#">
            <span class="ml-2">E-Library</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00] scale-y-0 group-hover:scale-y-100 transition-transform origin-top"></span>
        </a>

        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-gray-300 hover:bg-[#296041] hover:text-white group overflow-hidden" href="#">
            <span class="ml-2">Financial</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00] scale-y-0 group-hover:scale-y-100 transition-transform origin-top"></span>
        </a>

        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-gray-300 hover:bg-[#296041] hover:text-white group overflow-hidden" href="#">
            <span class="ml-2">Forms & Requests</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00] scale-y-0 group-hover:scale-y-100 transition-transform origin-top"></span>
        </a>

        {{-- Active (luôn có viền vàng) --}}
        <a class="relative flex items-center mt-4 py-2 pl-8 pr-4 text-white bg-[#296041] overflow-hidden" href="#">
            <span class="ml-2">Profile & Records</span>
            <span class="absolute left-0 top-0 h-full w-[4px] bg-[#ffcc00]"></span>
        </a>
    </nav>
</aside>
