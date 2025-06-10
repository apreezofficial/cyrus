<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cyrus - Learn modern web development and programming skills">
    <meta name="keywords" content="coding, programming, web development, tech education">
    <meta name="author" content="Your Name">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Tech School">
    <meta property="og:description" content="Learn modern web development and programming skills">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourwebsite.com">
    <meta property="og:image" content="/assets/social-preview.jpg">
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <!-- Tailwind CSS -->
<script>
  tailwind.config = { darkMode: 'class' }
</script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/styles/main.css">
    
    <title>Cyrus | Home</title>
        <script>
        // Check for saved theme preference or system preference
        if (localStorage.getItem('color-theme') === 'dark' || 
            (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="font-sans bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-200">
    <!-- Mobile Sidebar Backdrop (hidden by default) -->
    <div id="mobile-sidebar-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden"></div>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-30">
        <div class="flex items-center justify-between h-16 px-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold text-gray-900 dark:text-white">Cyrus</span>
                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Tech</span>
            </div>
            <button id="mobile-sidebar-close" class="text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="px-4 py-6 space-y-6">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Courses</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
            <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                <a href="#" class="block w-full px-4 py-2 text-center border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">Sign In</a>
                <a href="#" class="block w-full mt-3 px-4 py-2 text-center border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-700 bg-blue-100 hover:bg-blue-200 dark:text-white dark:bg-blue-600 dark:hover:bg-blue-700">Get Started</a>
            </div>
        </div>
    </div>
    <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Mobile menu button and Logo -->
                <div class="flex items-center space-x-4">
                    <button id="mobile-sidebar-toggle" class="md:hidden text-gray-500 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex items-center space-x-2">
                        <span class="text-xl font-bold text-gray-900 dark:text-white">Cyrus</span>
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">Tech</span>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-1 text-sm font-medium">Courses</a>
                    <a href="#" class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-1 text-sm font-medium">About</a>
                    <a href="#" class="text-gray-900 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-1 text-sm font-medium">Contact</a>
                </div>

                <!-- Right side (theme toggle + buttons) -->
                <div class="flex items-center space-x-4">
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg p-2">
                        <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- CTA Buttons -->
                    <a href="#" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600">Sign In</a>
                    <a href="#" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:text-white dark:bg-blue-600 dark:hover:bg-blue-700">Get Started</a>
                </div>
            </div>
        </div>
    </nav>
    
    <section class="pt-24 pb-12 md:pt-32 md:pb-16 relative overflow-hidden">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 overflow-hidden">
        <div id="animated-gradient" class="absolute inset-0 opacity-30 dark:opacity-20"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left content -->
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6">
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Master</span>
                    <span class="block">Modern Tech Skills</span>
                </h1>
                
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-lg mx-auto md:mx-0">
                    Join Cyrus Tech to learn from industry experts and build real-world projects that get you hired.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#" id="cta-button" class="px-8 py-3 rounded-lg shadow-lg bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        Start Learning Free
                    </a>
                    <a href="#" class="px-8 py-3 rounded-lg border-2 border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-200 font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                        Explore Courses
                    </a>
                </div>
                
                <!-- Trust indicators -->
                <div class="mt-12 flex flex-col sm:flex-row items-center gap-6 text-sm text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white dark:border-gray-800" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-white dark:border-gray-800" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-white dark:border-gray-800" src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                        </div>
                        <span class="ml-3">Join 10,000+ students</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="ml-1">4.9/5 (2,500+ reviews)</span>
                    </div>
                </div>
            </div>
            
            <!-- Right content - Interactive code editor preview -->
            <div class="relative">
                <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
                    <!-- Editor header -->
                    <div class="flex items-center px-4 py-3 bg-gray-700">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="ml-4 text-sm text-gray-300">script.js</div>
                    </div>
                    
                    <!-- Code editor -->
                    <div class="p-4 font-mono text-sm">
                        <pre id="typewriter" class="text-gray-300 overflow-hidden h-64"></pre>
                    </div>
                    
                    <!-- Terminal output -->
                    <div class="border-t border-gray-700 px-4 py-3 bg-gray-900 text-green-400 font-mono text-sm">
                        <div id="terminal-output">$ Initializing learning environment...</div>
                    </div>
                </div>
                
                <!-- Floating badge -->
                <div id="floating-badge" class="absolute -bottom-4 -right-4 bg-white dark:bg-gray-700 shadow-lg rounded-full px-4 py-2 flex items-center transform rotate-0 hover:rotate-6 transition-transform duration-300">
                    <div class="bg-blue-100 dark:bg-blue-900 rounded-full p-1 mr-2">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-800 dark:text-gray-200">Live Preview</span>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- JavaScript files -->
    <script src="/ts/app.ts" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>