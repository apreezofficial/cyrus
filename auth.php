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
        <div style="height: 850px"></div>
      <div id="madd-credit" class="fixed bottom-4 right-4 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-lg rounded-2xl px-4 py-2 text-sm text-gray-800 dark:text-gray-200 transition-all">
  <p class="font-semibold" id="creditText"></p>
  <p class="text-xs text-gray-500 dark:text-gray-400" id="creditRep"></p>
</div>
<script>
  // THEME MANAGEMENT SYSTEM
  (function () {
    const storedTheme = localStorage.getItem('color-theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    let theme = storedTheme || (systemPrefersDark ? 'dark' : 'light');

    function applyTheme(theme) {
      document.documentElement.classList.toggle('dark', theme === 'dark');
      document.documentElement.setAttribute('data-theme', theme);
    }

    applyTheme(theme);

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
      if (!localStorage.getItem('color-theme')) {
        applyTheme(e.matches ? 'dark' : 'light');
      }
    });

    window.setTheme = function (newTheme) {
      if (newTheme === 'dark' || newTheme === 'light') {
        localStorage.setItem('color-theme', newTheme);
        applyTheme(newTheme);
      } else if (newTheme === 'system') {
        localStorage.removeItem('color-theme');
        applyTheme(window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
      }
    };
  })();

  // FORM TOGGLE FUNCTIONALITY
  const loginTab = document.getElementById('login-tab');
  const signupTab = document.getElementById('signup-tab');
  const loginForm = document.getElementById('login-form');
  const signupForm = document.getElementById('signup-form');
  const showLogin = document.getElementById('show-login');
  const showSignup = document.getElementById('show-signup');

  function setTabState(activeTab, inactiveTab) {
    activeTab.classList.add('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
    activeTab.classList.remove('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
    inactiveTab.classList.remove('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
    inactiveTab.classList.add('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
  }

  function showLoginForm() {
    setTabState(loginTab, signupTab);
    loginForm.classList.replace('auth-hidden', 'auth-visible');
    signupForm.classList.replace('auth-visible', 'auth-hidden');
  }

  function showSignupForm() {
    setTabState(signupTab, loginTab);
    signupForm.classList.replace('auth-hidden', 'auth-visible');
    loginForm.classList.replace('auth-visible', 'auth-hidden');
  }

  loginTab?.addEventListener('click', showLoginForm);
  signupTab?.addEventListener('click', showSignupForm);
  showLogin?.addEventListener('click', showLoginForm);
  showSignup?.addEventListener('click', showSignupForm);

  // TOAST FUNCTION
  function showToast(icon, title, message, isSuccess = false) {
    Swal.fire({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2500,
      timerProgressBar: true,
      icon: icon,
      title: message,
      background: isSuccess
        ? 'linear-gradient(to right, #2563eb, #1e40af)'
        : 'linear-gradient(to right, #dc2626, #b91c1c)',
      color: '#ffffff',
      iconColor: '#ffffff',
      didOpen: toast => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
      }
    });
  }

  // LOGIN SUBMIT
  loginForm?.addEventListener('submit', async function (e) {
    e.preventDefault();

    const email = document.getElementById('login-email').value.trim();
    const password = document.getElementById('login-password').value;

    const loginBtn = loginForm.querySelector('button[type="submit"]');
    const originalBtnText = loginBtn.innerHTML;

    if (!email || !password) {
      showToast('error', 'Validation Error', 'Email and password are required');
      return;
    }

    loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Logging in...';
    loginBtn.disabled = true;

    try {
      const response = await fetch('login.php', {
        method: 'POST',
        credentials: 'include',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password })
      });

      let data;
      try {
        data = await response.json();
      } catch {
        throw new Error('Invalid JSON response from server');
      }

      if (response.ok && data.success) {
        showToast('success', 'Login Successful', 'Redirecting...', true);
        setTimeout(() => window.location.href = './dashboard/', 2000);
      } else {
        showToast('error', 'Login Failed', data.message || 'Invalid credentials');
      }
    } catch (err) {
      showToast('error', 'Error', err.message || 'Connection error.');
    } finally {
      loginBtn.innerHTML = originalBtnText;
      loginBtn.disabled = false;
    }
  });

  // SIGNUP SUBMIT
  signupForm?.addEventListener('submit', async function (e) {
    e.preventDefault();

    const email = document.getElementById('signup-email').value.trim();
    const password = document.getElementById('signup-password').value;
    const confirmPassword = document.getElementById('signup-confirm-password').value;

    const signupBtn = signupForm.querySelector('button[type="submit"]');
    const originalBtnText = signupBtn.innerHTML;

    if (!email || !password || !confirmPassword) {
      showToast('error', 'Missing Fields', 'Please fill out all fields.');
      return;
    }

    if (password !== confirmPassword) {
      showToast('error', 'Password Mismatch', 'Passwords do not match!');
      return;
    }

    if (password.length < 8) {
      showToast('error', 'Weak Password', 'Password must be at least 8 characters');
      return;
    }

    signupBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Creating Account...';
    signupBtn.disabled = true;

    try {
      const response = await fetch('signup.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email, password })
      });

      let data;
      try {
        data = await response.json();
      } catch {
        throw new Error('Invalid response from server');
      }

      if (response.ok && data.success) {
        showToast('success', 'Account Created', 'You can now login.', true);
        setTimeout(showLoginForm, 2000);
      } else {
        showToast('error', 'Signup Failed', data.message || 'Error creating account');
      }
    } catch (err) {
      showToast('error', 'Error', err.message || 'Connection error. Please try again.');
    } finally {
      signupBtn.innerHTML = originalBtnText;
      signupBtn.disabled = false;
    }
  });
  const encryptedMain = 'U3RpbGwgdW5kZXIgcHJvZ3Jlc3MgYnkgPGEgY2xhc3M9InRleHQtYmx1ZS02MDAgZGFyay10ZXh0LWJsdWUtNDAwIiBocmVmPSIjIj5DeXJ1czwvYT4gJmNvcHk7IDIwMjU=';
  const encryptedRep = 'UmVwcmVzZW50ZWQgYnkgPGEgY2xhc3M9ImZvbnQtYm9sZCB0ZXh0LXB1cnBsZS02MDAgZGFyay10ZXh0LXB1cnBsZS00MDAiIGhyZWY9Imh0dHBzOi8vcHJlY2lvdXNhZGVkb2t1bi5jb20ubmciPkFQQ29kZVNwaGVyZTwvYT4=';

  function decrypt(text) {
    try {
      return atob(text);
    } catch (e) {
      document.body.innerHTML = '';
      alert("Credit decryption failed. App disabled.");
      throw new Error("Tampering detected.");
    }
  }

  const creditText = document.getElementById('creditText');
  const creditRep = document.getElementById('creditRep');

  if (!creditText || !creditRep) {
    document.body.innerHTML = '';
    alert("Credit element missing. App disabled.");
    throw new Error("Credit elements not found.");
  }

  creditText.innerHTML = decrypt(encryptedMain);
  creditRep.innerHTML = decrypt(encryptedRep);
</script>
</body>
</html>