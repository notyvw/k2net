
<nav class="md:h-screen bg-blue-500 border-gray-200 dark:bg-gray-900 overflow-hidden">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between sm:mx-24 p-4 z-50">
      <a href="https://flowbite.com/" class="flex items-center">
          {{-- <img src="Cyber Security.png" /> --}}
          <span class="self-center sm:text-2xl font-semibold whitespace-nowrap text-white">K2 NET</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
            <li>
                <a href="#pricing" data-scroll class="block py-2 pl-3 pr-4 text-white transform transition-transform hover:scale-110 rounded  md:border-0 md:p-0">Pricing</a>
            </li>
            <li id="menu-item-46988" class="new-mega-menu menu-col-3 nav item">
                <a href="#product" data-scroll class="block py-2 pl-3 pr-4 text-white transform transition-transform hover:scale-110 rounded md:bg-transparent md:p-0 aria-current="page">Product</a>
            </li>
            <li>
                <a href="#contact" data-scroll class="block py-2 pl-3 pr-4 text-white transform transition-transform hover:scale-110 rounded  md:border-0 md:p-0">Contact</a>
            </li>
            <li>
              <a href="#aboutus" data-scroll class="block py-2 pl-3 pr-4 text-white transform transition-transform hover:scale-110 rounded  md:border-0 md:p-0">About Us</a>
            </li>
            <li>
            @if(auth()->check())
                @if(auth()->user()->type == 'admin')
                    <a href="{{ route('admin.home') }}" class="text-white">Admin Dashboard</a>
                @elseif (auth()->user()->type == 'user')
                    <p class="block py-2 pl-3 pr-4 text-white rounded  md:border-0 md:p-0">Hai, {{ auth()->user()->name }}</p>
                @endif
            @else
                <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-blue-500 rounded bg-white hover:bg-gray-100 md:hover:bg-yellow-300 md:border-0 md:hover:text-white md:py-2">Login</a>
            @endif
            </li>
            @if(auth()->check())
                @if (auth()->user()->type == 'user')
            <li>
                <form action="{{ route('logout') }}" method="POST" class="group">
                    @csrf
                    <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-white rounded bg-red-500 hover:bg-gray-100 md:hover:bg-white md:border-0 md:hover:text-red-500 md:py-2">
                        <button type="submit">Logout</button>
                    </a>
                </form>
            </li>
                @endif
            @endif
        </ul>
      </div>

      <div class="hidden md:grid md:grid-cols-2 sm:mt-24">
        <div class="col-span-2 sm:col-span-1">
            <p class="text-white font-semibold sm:text-6xl leading-relaxed">Kemudahan Layanan Jaringan Terjangkau & Fleksibel</p>
        </div>
        <div class="flex justify-end items-end">
            <img src="{{ asset('icon.png') }}" alt="">
        </div>
      </div>
    </div>
  </nav>

  <script>
    // Menambahkan event listener pada elemen navbar
    document.querySelector('nav').addEventListener('click', function(event) {
        // Mencari elemen yang memiliki atribut `data-scroll`
        const scrollTarget = event.target.closest('[data-scroll]');

        // Jika ditemukan elemen dengan atribut `data-scroll`
        if (scrollTarget) {
            event.preventDefault();

            // Mendapatkan ID dari konten yang di klik (tanpa tanda #)
            const targetId = scrollTarget.getAttribute('href').slice(1);

            // Mendapatkan elemen konten berdasarkan ID
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                // Menggulir halus ke konten yang di klik
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
</script>
