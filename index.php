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
</section><!-- Courses Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Master In-Demand Tech Skills
            </h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 mx-auto">
                Industry-relevant courses taught by experts. Start learning today and build your future.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Course Card 1 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-r from-purple-500 to-indigo-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Beginner</span>
                        <span class="text-gray-500 dark:text-gray-300 text-sm ml-auto">12 Weeks</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Full-Stack Web Development</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Learn HTML, CSS, JavaScript, React, Node.js and build real-world projects.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$299</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium">View Course →</a>
                    </div>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">Intermediate</span>
                        <span class="text-gray-500 dark:text-gray-300 text-sm ml-auto">10 Weeks</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Data Science Fundamentals</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Master Python, Pandas, NumPy, and Machine Learning basics with hands-on projects.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$349</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium">View Course →</a>
                    </div>
                </div>
            </div>

            <!-- Course Card 3 -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="h-48 bg-gradient-to-r from-red-500 to-pink-600 flex items-center justify-center">
                    <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-800">Advanced</span>
                        <span class="text-gray-500 dark:text-gray-300 text-sm ml-auto">8 Weeks</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Mobile App Development</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Build cross-platform apps with React Native and Firebase backend integration.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-900 dark:text-white">$399</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 font-medium">View Course →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="courses.html" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition-colors duration-200">
                View All Courses
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Instructors Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Learn From Industry Experts
            </h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 mx-auto">
                Our instructors have real-world experience at top tech companies.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Instructor 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-teal-200 to-teal-800 flex items-center justify-center">
                    <img class="h-48 w-48 rounded-full object-cover border-4 border-white dark:border-gray-600 shadow-md" 
                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR17pSsaGjzAeU50waVPpLRgWeMPswuEv1T4oAycnEh0Q&s" 
                         alt="Precious Adedokun">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Precious Adedokun</h3>
                    <p class="text-blue-600 dark:text-blue-400 font-medium">Senior FullStack Engineer</p>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Fullstack Developer @proforms</p>
                    <div class="flex justify-center space-x-4 mt-4">
                                              <a href="https://preciousadedokun.com.ng" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400">
                            <i class="fa fa-code fa-lg"></i>
                        </a>
                        <a href="https://github.com/apreezoficial" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 dark:hover:text-blue-300">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="https://x.com/apcodesphere" class="text-gray-500 hover:text-red-500 dark:hover:text-red-400">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Instructor 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-blue-200 to-blue-600 flex items-center justify-center">
                    <img class="h-48 w-48 rounded-full object-cover border-4 border-white dark:border-gray-600 shadow-md" 
                         src="https://randomuser.me/api/portraits/men/32.jpg" 
                         alt="John Doe">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">John Doe</h3>
                    <p class="text-blue-600 dark:text-blue-400 font-medium">Data Scientist</p>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Ex-Machine Learning @Meta</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 dark:hover:text-blue-300">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-red-500 dark:hover:text-red-400">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Instructor 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center">
                    <img class="h-48 w-48 rounded-full object-cover border-4 border-white dark:border-gray-600 shadow-md" 
                         src="https://randomuser.me/api/portraits/women/65.jpg" 
                         alt="Priya Patel">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Priya Patel</h3>
                    <p class="text-blue-600 dark:text-blue-400 font-medium">DevOps Engineer</p>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Cloud Architect @AWS</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 dark:hover:text-blue-300">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-red-500 dark:hover:text-red-400">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Instructor 4 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <div class="h-64 bg-gradient-to-br from-orange-400 to-red-600 flex items-center justify-center">
                    <img class="h-48 w-48 rounded-full object-cover border-4 border-white dark:border-gray-600 shadow-md" 
                         src="https://randomuser.me/api/portraits/men/75.jpg" 
                         alt="David Kim">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">David Kim</h3>
                    <p class="text-blue-600 dark:text-blue-400 font-medium">Mobile Developer</p>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">Ex-iOS Lead @Apple</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#" class="text-gray-500 hover:text-blue-500 dark:hover:text-blue-400">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400 dark:hover:text-blue-300">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-red-500 dark:hover:text-red-400">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition-colors duration-200">
                Meet All Instructors
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Testimonials Section -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                What Our Students Say
            </h2>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 mx-auto">
                Join thousands of students who transformed their careers with Cyrus Tech.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img class="h-12 w-12 rounded-full object-cover" 
                         src="https://randomuser.me/api/portraits/women/28.jpg" 
                         alt="Emma Watson">
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Emma Watson</h4>
                        <div class="flex items-center mt-1">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-500 dark:text-gray-300 text-sm ml-2">5.0</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 italic">
                    "The Full-Stack course changed my career! I went from zero coding experience to landing a developer job in 6 months. The projects were real-world and the instructors were incredibly supportive."
                </p>
                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                    Completed: Full-Stack Web Development
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img class="h-12 w-12 rounded-full object-cover" 
                         src="https://randomuser.me/api/portraits/men/45.jpg" 
                         alt="Michael Chen">
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Michael Chen</h4>
                        <div class="flex items-center mt-1">
                            <div class="flex text-yellow-400">
                                <!-- 4.5 star rating -->
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                            <span class="text-gray-500 dark:text-gray-300 text-sm ml-2">4.8</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 italic">
                    "As a self-taught programmer, I needed structure. The Data Science course gave me exactly that - clear explanations, practical exercises, and career guidance that helped me transition into AI."
                </p>
                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                    Completed: Data Science Fundamentals
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img class="h-12 w-12 rounded-full object-cover" 
                         src="https://randomuser.me/api/portraits/women/62.jpg" 
                         alt="Priya Nair">
                    <div class="ml-4">
                        <h4 class="font-semibold text-gray-900 dark:text-white">Priya Nair</h4>
                        <div class="flex items-center mt-1">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                            <span class="text-gray-500 dark:text-gray-300 text-sm ml-2">5.0</span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 italic">
                    "The mobile development course exceeded my expectations. Within 3 months of completing it, I published my first app on the App Store! The React Native content was particularly outstanding."
                </p>
                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                    Completed: Mobile App Development
                </p>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 pt-8 border-t border-gray-200 dark:border-gray-700">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="text-center">
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-400">10K+</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Students Enrolled</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-400">4.9★</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Average Rating</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-400">92%</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Career Impact</p>
                </div>
                <div class="text-center">
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-400">15+</p>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="madd-credit" class="fixed bottom-4 right-4 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-lg rounded-2xl px-4 py-2 text-sm text-gray-800 dark:text-gray-200 transition-all">
  <p class="font-semibold" id="creditText"></p>
  <p class="text-xs text-gray-500 dark:text-gray-400" id="creditRep"></p>
</div>
<!-- FAQ Section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Frequently Asked Questions
            </h2>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-300">
                Find quick answers to common questions about Cyrus Tech.
            </p>
        </div>

        <div class="space-y-4" x-data="{ openFaq: null }">
            <!-- FAQ Item 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                <button 
                    @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                    class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                >
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        How do I enroll in a course?
                    </h3>
                    <svg 
                        class="h-6 w-6 text-gray-500 dark:text-gray-300 transform transition-transform duration-200" 
                        :class="{ 'rotate-180': openFaq === 1 }" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div 
                    x-show="openFaq === 1" 
                    x-collapse
                    class="px-6 pb-6 pt-0 text-gray-600 dark:text-gray-300"
                >
                    <p>
                        Click the "Enroll Now" button on any course page, choose your payment plan, and create an account. You’ll get immediate access to course materials upon payment confirmation.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                <button 
                    @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                    class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                >
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Do you offer certificates upon completion?
                    </h3>
                    <svg 
                        class="h-6 w-6 text-gray-500 dark:text-gray-300 transform transition-transform duration-200" 
                        :class="{ 'rotate-180': openFaq === 2 }" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div 
                    x-show="openFaq === 2" 
                    x-collapse
                    class="px-6 pb-6 pt-0 text-gray-600 dark:text-gray-300"
                >
                    <p>
                        Yes! All courses include a verifiable digital certificate upon completion. Certificates require passing all assignments and a final project.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                <button 
                    @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                    class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                >
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Can I get a refund if I’m unsatisfied?
                    </h3>
                    <svg 
                        class="h-6 w-6 text-gray-500 dark:text-gray-300 transform transition-transform duration-200" 
                        :class="{ 'rotate-180': openFaq === 3 }" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div 
                    x-show="openFaq === 3" 
                    x-collapse
                    class="px-6 pb-6 pt-0 text-gray-600 dark:text-gray-300"
                >
                    <p>
                        We offer a 14-day money-back guarantee. If you’re unsatisfied within the first two weeks of enrollment, email us for a full refund—no questions asked.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                <button 
                    @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                    class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                >
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        Are there prerequisites for courses?
                    </h3>
                    <svg 
                        class="h-6 w-6 text-gray-500 dark:text-gray-300 transform transition-transform duration-200" 
                        :class="{ 'rotate-180': openFaq === 4 }" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div 
                    x-show="openFaq === 4" 
                    x-collapse
                    class="px-6 pb-6 pt-0 text-gray-600 dark:text-gray-300"
                >
                    <p>
                        Beginner courses require no prior experience. Advanced courses list prerequisites on their description pages (e.g., "Python basics" for Data Science).
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow overflow-hidden">
                <button 
                    @click="openFaq === 5 ? openFaq = null : openFaq = 5"
                    class="w-full flex justify-between items-center p-6 text-left focus:outline-none"
                >
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                        How long do I have access to course materials?
                    </h3>
                    <svg 
                        class="h-6 w-6 text-gray-500 dark:text-gray-300 transform transition-transform duration-200" 
                        :class="{ 'rotate-180': openFaq === 5 }" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div 
                    x-show="openFaq === 5" 
                    x-collapse
                    class="px-6 pb-6 pt-0 text-gray-600 dark:text-gray-300"
                >
                    <p>
                        <strong>Lifetime access!</strong> Once enrolled, you can revisit course materials anytime, including future updates. Downloadable resources are yours to keep forever.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-12 text-center">
            <p class="text-gray-500 dark:text-gray-300 mb-4">
                Still have questions?
            </p>
            <a 
                href="#" 
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition-colors duration-200"
            >
                Contact Support
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Newsletter Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 dark:from-blue-800 dark:to-indigo-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl p-8 md:p-10 transform hover:scale-[1.01] transition-transform duration-300">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Stay Updated
            </h2>
            <p class="mt-4 text-xl text-gray-600 dark:text-gray-300">
                Subscribe to our newsletter for course updates, tech insights, and exclusive offers.
            </p>
            
            <form class="mt-8 sm:flex max-w-md mx-auto">
                <div class="flex-grow">
                    <label for="email" class="sr-only">Email address</label>
                    <input 
                        type="email" 
                        id="email" 
                        required
                        class="w-full px-5 py-3 placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-transparent rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
                        placeholder="Enter your email"
                    >
                </div>
                <button 
                    type="submit" 
                    class="mt-3 sm:mt-0 sm:ml-3 flex-shrink-0 px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200"
                >
                    Subscribe
                </button>
            </form>

            <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">
                We respect your privacy. Unsubscribe at any time.
            </p>
        </div>

        <!-- Trust Badges -->
        <div class="mt-12 flex flex-wrap justify-center gap-6">
            <div class="flex items-center">
                <svg class="h-8 w-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="ml-2 text-white font-medium">4.9/5 (2,000+ Reviews)</span>
            </div>
            <div class="flex items-center">
                <svg class="h-8 w-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="ml-2 text-white font-medium">14-Day Guarantee</span>
            </div>
        </div>
    </div>
</section>
    <script src="./ts/app.ts" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>