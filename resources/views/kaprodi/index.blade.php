<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard Kaprodi</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body>
        <div>
            <div x-data="{ sidebarOpen: false }" class="flex bg-gray-200 h-full">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center mt-8">
                        <div class="flex items-center">
                            <svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                            </svg>                         
                            <span class="mx-2 text-2xl font-semibold text-white">Dashboard Kaprodi</span>
                        </div>
                    </div>
            
                    <nav class="mt-10">
                        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-900 bg-opacity-25 hover:bg-gray-700"  href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="mx-3">Dosen</span>
                        </a>

                        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-900 bg-opacity-25 hover:bg-gray-700" href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="mx-3">Kelas</span>
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
                        <div class="container px-6 py-8 mx-auto min-h-screen flex-grow">
                            <h3 class="text-3xl font-bold text-gray-700 ">Selamat Datang, {{ Auth::user()->username }}</h3>
                            <div class="container mx-auto p-6">
                                @if(session('success'))
                                    <div class="bg-green-500 text-white rounded-lg mb-auto inline-flex items-center p-2">
                                        <span>{{ session('success') }}</span>
                                    </div>
                                @endif
                            </div>                    

                            <div class="mt-auto">
                                <div class="flex flex-wrap -mx-6">
                                    <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                            <div class="p-3 bg-green-600 bg-opacity-75 rounded-full">
                                                <svg class="w-8 h-8 text-white" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z" fill="currentColor"></path>
                                                    <path d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z" fill="currentColor"></path>
                                                    <path d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z" fill="currentColor"></path>
                                                    <path d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z" fill="currentColor"></path>
                                                    <path d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z" fill="currentColor"></path>
                                                    <path d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z" fill="currentColor"></path>
                                                </svg>
                                            </div>
            
                                            <div class="mx-5">
                                                <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahMahasiswa }}</h4>
                                                <div class="text-gray-500">Mahasiswa</div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                            <div class="p-3 bg-blue-500 bg-opacity-75 rounded-full">
                                                <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2C10.3 2 9 3.3 9 5C9 6.7 10.3 8 12 8C13.7 8 15 6.7 15 5C15 3.3 13.7 2 12 2ZM12 10C9.8 10 8 11.8 8 14V18H16V14C16 11.8 14.2 10 12 10ZM6 18C6 15.4 8.4 13 12 13C15.6 13 18 15.4 18 18H6ZM4 20H20C21.1 20 22 19.1 22 18H2C2 19.1 2.9 20 4 20Z" fill="currentColor"/>
                                                </svg>
                                            </div>                                    
            
                                            <div class="mx-5">
                                                <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahDosen }}</h4>
                                                <div class="text-gray-500">Dosen</div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                            <div class="p-3 bg-yellow-300 bg-opacity-75 rounded-full">
                                                <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 2h12a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2zm0 2v16h12V4H6zm2 3h8v1H8V7zm0 3h8v1H8v-1zm0 3h8v1H8v-1z" />
                                                </svg>
                                            </div>
            
                                            <div class="mx-5">
                                                <h4 class="text-2xl font-semibold text-gray-700">{{ $jumlahKelas }}</h4>
                                                <div class="text-gray-500">Kelas</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="w-full sm:w-1/2 xl:w-1/3">
                                    <div class="flex flex-wrap mx-6">
                                        <a href="{{ route('kaprodi.dosen.create') }}" class="flex items-center px-4 py-2 text-sm text-white bg-green-500 rounded-lg shadow hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                            Tambah Dosen
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-col mt-3">
                                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                    <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                                        <table class="min-w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">NIP</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">NAMA DOSEN</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">KODE DOSEN</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">KELAS</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">STATUS</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">AKSI</th>
                                                </tr>
                                            </thead>
                                                    
                                            <tbody class="bg-white">
                                                @foreach ($dosens as $dosen)
                                                <tr>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $dosen->nip }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $dosen->name }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $dosen->kode_dosen }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $dosen->kelas->name ?? '-' }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $dosen->kelas_id ? 'Dosen Wali' : 'Bukan Dosen Wali' }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="flex space-x-2">
                                                            <a href="{{ route('kaprodi.dosen.edit', $dosen->id) }}" class="inline-block px-4 py-2 text-sm text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:scale-105">
                                                                Edit
                                                            </a>
                                                            <form action="{{ route('kaprodi.dosen.destroy', $dosen->id) }}" method="POST" class="inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="inline-block px-4 py-2 text-sm text-white bg-red-600 rounded-lg shadow hover:bg-red-700 transition duration-300 ease-in-out transform hover:scale-105">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>                                            
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="w-full sm:w-1/2 xl:w-1/3">
                                    <div class="flex flex-wrap mx-6">
                                        <a href="{{ route('kaprodi.kelas.create') }}" class="flex items-center px-4 py-2 text-sm text-white bg-green-500 rounded-lg shadow hover:bg-green-600 transition duration-300 ease-in-out transform hover:scale-105">
                                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                            Tambah Kelas
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col mt-3">
                                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                                    <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                                        <table class="min-w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">ID KELAS</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">NAMA KELAS</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">DOSEN WALI</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">JUMLAH MAHASISWA</th>
                                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">AKSI</th>
                                                </tr>
                                            </thead>
                                                                                    
                                            <tbody class="bg-white">
                                                @foreach ($kelas as $kls)
                                                <tr>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $kls->id }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $kls->name }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $kls->dosen ? $kls->dosen->name : 'Tidak ada dosen wali' }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">{{ $kls->jumlah }}</td>
                                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap border-b border-gray-200">
                                                        <div class="flex space-x-2">
                                                            <a href="{{ route('kaprodi.kelas.edit', $kls->id) }}" class="inline-block px-4 py-2 text-sm text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700 transition duration-300 ease-in-out transform hover:scale-105">
                                                                Edit
                                                            </a>
                                                            <form action="{{ route('kaprodi.kelas.destroy', $kls->id) }}" method="POST" class="inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="inline-block px-4 py-2 text-sm text-white bg-red-600 rounded-lg shadow hover:bg-red-700 transition duration-300 ease-in-out transform hover:scale-105">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>                                               
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>                       
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