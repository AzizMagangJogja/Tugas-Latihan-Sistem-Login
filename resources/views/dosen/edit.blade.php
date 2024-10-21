<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard Dosen</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body>
        <div>
            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                            <svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                            </svg>
                            <span class="mx-2 text-2xl font-semibold text-white">Dashboard Dosen</span>
                        </div>
                    </div>
            
                    <nav class="mt-10">
                        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-900 bg-opacity-25 hover:bg-gray-700" href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="mx-3">Request Edit</span>
                        </a>
                    </nav>
                </div>

                <div class="flex flex-col flex-1 overflow-hidden">
                    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
            
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600" type="text" placeholder="Search">
                            </div>
                        </div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>
                            <div x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl" style="display: none;">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profil</a>
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </header>

                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        <div class="max-w-4xl px-4 py-8 min-h-screen flex-grow">
                            <h3 class="text-3xl font-bold text-gray-700">Silakan Edit Mahasiswa</h3>

                            <div class="container mx-auto p-6">
                                @if(session('success'))
                                    <div class="bg-green-500 text-white rounded-lg mb-auto inline-flex items-center p-2">
                                        <span>{{ session('success') }}</span>
                                    </div>
                                @endif
                            </div>  
                        
                            <div class="flex flex-col mt-auto">
                                <div class="py-6 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                    <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow-lg rounded-lg bg-white">
                                        <div class="p-6">
                                            <form action="{{ route('dosen.update', $mahasiswa->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                            
                                                <div class="mb-4">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                                                    <input type="text" id="name" name="name" value="{{ $mahasiswa->name }}" required class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                                                </div>
                            
                                                <div class="mb-4">
                                                    <label for="nim" class="block text-sm font-medium text-gray-700">NIM:</label>
                                                    <input type="text" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                                                </div>
                            
                                                <div class="mb-4">
                                                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir:</label>
                                                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}" required class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                                                </div>
                                        
                                                <div class="mb-4">
                                                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir:</label>
                                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" required class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                                                </div>
                            
                                                <div class="flex space-x-4">
                                                    <a href="{{ route('dosen.index') }}" class="flex items-center justify-center w-24 text-base font-sans bg-red-600 text-white p-2 rounded-lg shadow hover:bg-red-800 transition duration-300 ease-in-out transform hover:scale-105">
                                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H3m0 0l6 6m-6-6l6-6" />
                                                        </svg>
                                                        Kembali
                                                    </a>
                                                    
                                                    <button type="submit" class="flex items-center justify-center w-24 text-base font-sans bg-green-500 text-white p-2 rounded-lg shadow hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
                                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                        Simpan
                                                    </button>
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        
                        <footer class=" w-full bg-gray-900 text-white py-6 mt-auto">
                            <div class="container mx-auto text-center">
                                <p class="text-sm">© {{ date('Y') }} Kampus Kita™</p>
                                <div class="mt-2">
                                    <a href="#" class="text-gray-400 hover:text-white mx-2">Tentang</a>
                                    <a href="#" class="text-gray-400 hover:text-white mx-2">Kebijakan Privasi</a>
                                    <a href="#" class="text-gray-400 hover:text-white mx-2">Kontak</a>
                                </div>
                            </div>
                        </footer> 
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>