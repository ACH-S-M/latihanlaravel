
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .transition-sidebar {
            transition: all 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Desktop -->
        <div id="desktop-sidebar" class="hidden md:block transition-sidebar bg-gradient-to-b from-blue-800 to-blue-600 text-white w-64 flex-shrink-0">
            <!-- Logo Area -->
            <div class="flex items-center justify-between p-4 border-b border-blue-700">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="text-blue-800 font-bold text-xl">S</span>
                    </div>
                    <span class="font-bold text-lg sidebar-text">Shoping</span>
                </div>
                <button id="toggle-sidebar" class="p-1 rounded-full hover:bg-blue-700 transition-colors">
                    <i class="fas fa-chevron-left" id="sidebar-icon"></i>
                </button>
            </div>

            <!-- Navigation -->
            <div class="py-4 overflow-y-auto ">
                <ul class="navigation-drawer">
                    <li>
                        <a href="/" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative {{request()->is('/') ?'text-yellow-400' : 'text-white' }}">
                            <i class="fas fa-home w-5 text-center"></i>
                            <span class="ml-4 sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative {{request()->is('admin') ?'text-yellow-400' : 'text-white' }}">
                            <i class="fas fa-user w-5 text-center"></i>
                            <span class="ml-4 sidebar-text">Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                            <i class="fas fa-cog w-5 text-center"></i>
                            <span class="ml-4 sidebar-text">Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                            <i class="fas fa-question-circle w-5 text-center"></i>
                            <span class="ml-4 sidebar-text">Bantuan</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Profile Section -->
            <div class="mt-auto p-4 border-t border-blue-700 flex items-center">
                <div class="w-10 h-10 rounded-full bg-gray-300 flex-shrink-0">
                    <img src="" alt="Profile" class="w-full h-full rounded-full object-cover">
                </div>
                <div class="ml-3 overflow-hidden sidebar-text">
                    <p class="text-sm font-medium">Achaiaa</p>
                    <p class="text-xs text-blue-200 truncate"></p>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden fixed top-4 left-4 z-50">
            <button id="mobile-toggle" class="p-2 bg-blue-600 rounded-full text-white shadow-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Sidebar (Hidden by default) -->
        <div id="mobile-sidebar" class="fixed inset-0 z-40 md:hidden hidden">
            <!-- Backdrop -->
            <div id="sidebar-backdrop" class="fixed inset-0 bg-gray-800 bg-opacity-50"></div>
            
            <!-- Sidebar -->
            <div class="fixed inset-y-0 left-0 w-64 flex flex-col bg-gradient-to-b from-blue-800 to-blue-600 text-white shadow-xl">
                <!-- Logo Area -->
                <div class="flex items-center justify-between p-4 border-b border-blue-700">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <span class="text-blue-800 font-bold text-xl">S</span>
                        </div>
                        <span class="font-bold text-lg">SidebarApp</span>
                    </div>
                    <button id="close-mobile-sidebar" class="p-1 rounded-full hover:bg-blue-700 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Navigation -->
                <div class="py-4 overflow-y-auto">
                    <ul>
                        <li>
                            <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                                <i class="fas fa-home w-5 text-center"></i>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                                <i class="fas fa-user w-5 text-center"></i>
                                <span class="ml-4">Profil</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                                <i class="fas fa-cog w-5 text-center"></i>
                                <span class="ml-4">Pengaturan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-3 text-white hover:bg-blue-700 transition-colors relative">
                                <i class="fas fa-question-circle w-5 text-center"></i>
                                <span class="ml-4">Bantuan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Profile Section -->
                <div class="mt-auto p-4 border-t border-blue-700 flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-300">
                        <img src="/api/placeholder/100/100" alt="Profile" class="w-full h-full rounded-full object-cover">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium">Alex Johnson</p>
                        <p class="text-xs text-blue-200">alex@example.com</p>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
       


    <script>
        // Toggle sidebar desktop
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('desktop-sidebar');
            const sidebarTexts = document.querySelectorAll('.sidebar-text');
            const sidebarIcon = document.getElementById('sidebar-icon');
            const nav = document.querySelector('.navigation-drawer')
            
            if (sidebar.classList.contains('w-64')) {
                // Perkecil sidebar
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                sidebarIcon.classList.remove('fa-chevron-left');
                sidebarIcon.classList.add('fa-chevron-right');
                
                // Sembunyikan teks
                sidebarTexts.forEach(function(text) {
                    text.classList.add('hidden');
                });

                nav.add.classList('flex flex-col items-center bg-yellow-500');
                
            } else {
                // Perluas sidebar
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                sidebarIcon.classList.remove('fa-chevron-right');
                sidebarIcon.classList.add('fa-chevron-left');
               
                // Tampilkan teks
                sidebarTexts.forEach(function(text) {
                    text.classList.remove('hidden');
                });
                nav.remove.classList('flex flex-col items-center');
            }
        });

        // Toggle sidebar mobile
        document.getElementById('mobile-toggle').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.remove('hidden');
        });

        // Tutup sidebar mobile
        document.getElementById('close-mobile-sidebar').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.add('hidden');
        });

        // Tutup sidebar mobile dengan klik backdrop
        document.getElementById('sidebar-backdrop').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.add('hidden');
        });
    </script>
</body>
</html>