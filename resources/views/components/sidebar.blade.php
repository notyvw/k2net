<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
       <a href="{{ route('dashboard') }}" class="flex items-center pl-2.5 mb-5">
          {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" /> --}}
          <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Admin K2Net</span>
       </a>
       <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.home') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <i class="fa-solid fa-house"></i>
                    <span class="ml-3 font-medium">Dashboard Admin</span>
                </a>
            </li>
            <li>
                <a href="{{ route('masteruser.index') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                    <i class="fa-solid fa-users"></i>
                    <span class="ml-3 font-medium">Master User</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap font-medium">Custom</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 font-medium">
                  <li>
                     <a href="{{ route('contact.index') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-700">Contact</a>
                  </li>
                  <li>
                     <a href="{{ route('product.index') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-700">Product</a>
                  </li>
                  <li>
                     <a href="{{ route('pricing.index') }}" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group text-white hover:bg-gray-700">Pricing</a>
                  </li>
                </ul>
            </li>
            <li>
               <a href="{{ route('message.index') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                  <i class="fa-solid fa-message"></i>
                  <span class="ml-3 font-medium">Message</span>
               </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="group">
                    @csrf
                    <a class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                        <i class="fa-solid fa-outdent"></i>
                        <button type="submit" class="ml-3 font-medium">Logout</button>
                    </a>
                </form>
            </li>
       </ul>
    </div>
 </aside>
