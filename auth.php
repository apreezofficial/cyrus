<?php
// auth.php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyrus Tech | Authentication</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .auth-transition {
            transition: all 0.3s ease-in-out;
        }
        .auth-hidden {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transform: translateY(20px);
        }
        .auth-visible {
            opacity: 1;
            height: auto;
            transform: translateY(0);
        }
    </style>
    <script>
  tailwind.config = { darkMode: 'class' }
</script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center p-4">
  <div id="madd-credit" class="fixed bottom-4 right-4 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-lg rounded-2xl px-4 py-2 text-sm text-gray-800 dark:text-gray-200 transition-all">
  <p class="font-semibold" id="creditText"></p>
  <p class="text-xs text-gray-500 dark:text-gray-400" id="creditRep"></p>
</div>
    <div class="w-full max-w-md mx-auto">
       
        <!-- Auth Toggle Buttons -->
        <div class="flex mb-8 rounded-lg bg-gray-200 dark:bg-gray-700 p-1">
            <button id="login-tab" class="flex-1 py-2 px-4 rounded-md font-medium text-center transition-colors bg-white dark:bg-gray-800 text-blue-600 dark:text-blue-400 shadow-sm">
                Login
            </button>
            <button id="signup-tab" class="flex-1 py-2 px-4 rounded-md font-medium text-center transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                Sign Up
            </button>
        </div>

        <!-- Login Form -->
        <div id="login-form" class="auth-visible auth-transition">
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">Welcome Back</h2>
                
                <form id="login-form-submit" class="space-y-6">
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" id="login-email"   
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label for="login-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" id="login-password"   
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••">
                        <div class="flex justify-end mt-2">
                            <a href="#" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">Forgot password?</a>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Login
                    </button>
                </form>
                
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Or continue with</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-google text-red-500 mr-2 mt-0.5"></i> Google
                        </a>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-github text-gray-800 dark:text-gray-300 mr-2 mt-0.5"></i> GitHub
                        </a>
                    </div>
                    
                    <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
                        Don't have an account? <button id="show-signup" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">Sign up</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signup Form -->
        <div id="signup-form" class="auth-hidden auth-transition">
            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">Create Account</h2>
                
                <form id="signup-form-submit" class="space-y-6">
                    <div>
                        <label for="signup-email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" id="signup-email"   
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label for="signup-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" id="signup-password"   
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••">
                        <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">Minimum 8 characters with at least one number</p>
                    </div>
                    
                    <div>
                        <label for="signup-confirm-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                        <input type="password" id="signup-confirm-password"   
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="••••••••">
                    </div>
                    
                    <button type="submit" class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 text-white font-medium rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Create Account
                    </button>
                </form>
                
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">Or sign up with</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-google text-red-500 mr-2 mt-0.5"></i> Google
                        </a>
                        <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-github text-gray-800 dark:text-gray-300 mr-2 mt-0.5"></i> GitHub
                        </a>
                    </div>
                    
                    <div class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">
                        Already have an account? <button id="show-login" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="./ts/auth.ts"></script>
</body>
</html>