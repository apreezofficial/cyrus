    // Theme Management System
(function() {
    // Check for saved theme preference or system preference
    const storedTheme = localStorage.getItem('color-theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    // Determine initial theme
    let theme = 'light';
    if (storedTheme) {
        theme = storedTheme;
    } else if (systemPrefersDark) {
        theme = 'dark';
    }
    
    // Apply the theme
    function applyTheme(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.setAttribute('data-theme', 'light');
        }
    }
    
    // Initialize
    applyTheme(theme);
    
    // Watch for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        // Only respond if user hasn't set a preference
        if (!localStorage.getItem('color-theme')) {
            const newTheme = e.matches ? 'dark' : 'light';
            applyTheme(newTheme);
        }
    });
    
    // Optional: Make this function available globally if you need to change theme programmatically
    window.setTheme = function(newTheme) {
        if (newTheme === 'dark' || newTheme === 'light') {
            localStorage.setItem('color-theme', newTheme);
            applyTheme(newTheme);
        } else if (newTheme === 'system') {
            localStorage.removeItem('color-theme');
            const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            applyTheme(systemTheme);
        }
    };
})();
        // Form toggle functionality
        const loginTab = document.getElementById('login-tab');
        const signupTab = document.getElementById('signup-tab');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const showLogin = document.getElementById('show-login');
        const showSignup = document.getElementById('show-signup');

        function showLoginForm() {
            loginTab.classList.add('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
            loginTab.classList.remove('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
            signupTab.classList.remove('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
            signupTab.classList.add('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
            
            loginForm.classList.remove('auth-hidden');
            loginForm.classList.add('auth-visible');
            signupForm.classList.remove('auth-visible');
            signupForm.classList.add('auth-hidden');
        }

        function showSignupForm() {
            signupTab.classList.add('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
            signupTab.classList.remove('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
            loginTab.classList.remove('bg-white', 'dark:bg-gray-800', 'text-blue-600', 'dark:text-blue-400', 'shadow-sm');
            loginTab.classList.add('text-gray-600', 'dark:text-gray-300', 'hover:text-gray-900', 'dark:hover:text-white');
            
            signupForm.classList.remove('auth-hidden');
            signupForm.classList.add('auth-visible');
            loginForm.classList.remove('auth-visible');
            loginForm.classList.add('auth-hidden');
        }

        loginTab.addEventListener('click', showLoginForm);
        signupTab.addEventListener('click', showSignupForm);
        showLogin.addEventListener('click', showLoginForm);
        showSignup.addEventListener('click', showSignupForm);

// Custom Toast Notification Function
function showToast(icon, title, message, isSuccess = false) {
    const toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        background: isSuccess ? 
            'linear-gradient(to right, #2563eb, #1e40af)' : 
            'linear-gradient(to right, #dc2626, #b91c1c)',
        color: '#ffffff',
        iconColor: '#ffffff',
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    
    toast.fire({
        icon: icon,
        text: message
    })
}

// Login Form Submission
document.getElementById('login-form-submit').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;
    
    // Show loading state
    const loginBtn = this.querySelector('button[type="submit"]');
    const originalBtnText = loginBtn.innerHTML;
    loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Authenticating...';
    loginBtn.disabled = true;
    
    // AJAX call to login.php
    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('success', 'Login Successful', 'Redirecting to dashboard...', true);
            setTimeout(() => {
                window.location.href = 'dashboard.php';
            }, 2000);
        } else {
            showToast('error', 'Login Failed', data.message || 'Invalid credentials');
        }
    })
    .catch(error => {
        showToast('error', 'Error', 'Connection error. Please try again.');
    })
    .finally(() => {
        loginBtn.innerHTML = originalBtnText;
        loginBtn.disabled = false;
    });
});

// Signup Form Submission
document.getElementById('signup-form-submit').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;
    const confirmPassword = document.getElementById('signup-confirm-password').value;
    
    if (password !== confirmPassword) {
        showToast('error', 'Password Mismatch', 'Passwords do not match!');
        return;
    }
    
    if (password.length < 8) {
        showToast('error', 'Weak Password', 'Password must be at least 8 characters');
        return;
    }
    
    // Show loading state
    const signupBtn = this.querySelector('button[type="submit"]');
    const originalBtnText = signupBtn.innerHTML;
    signupBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Creating Account...';
    signupBtn.disabled = true;
    
    // AJAX call to signup.php
    fetch('signup.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showToast('success', 'Account Created', 'You can now login with your credentials', true);
            setTimeout(() => {
                showLoginForm();
            }, 2000);
        } else {
            showToast('error', 'Signup Failed', data.message || 'Error creating account');
        }
    })
    .catch(error => {
        showToast('error', 'Error', 'Connection error. Please try again.');
    })
    .finally(() => {
        signupBtn.innerHTML = originalBtnText;
        signupBtn.disabled = false;
    });
});
const encryptedMain = 'U3RpbGwgdW5kZXIgcHJvZ3Jlc3MgYnkgPGEgY2xhc3M9InRleHQtYmx1ZS02MDAgZGFyay10ZXh0LWJsdWUtNDAwIiBocmVmPSIjIj5DeXJ1czwvYT4gJmNvcHk7IDIwMjU=';
  const encryptedRep = 'UmVwcmVzZW50ZWQgYnkgPGEgY2xhc3M9ImZvbnQtYm9sZCB0ZXh0LXB1cnBsZS02MDAgZGFyay10ZXh0LXB1cnBsZS00MDAiIGhyZWY9Imh0dHBzOi8vcHJlY2lvdXNhZGVkb2t1bi5jb20ubmciPkFQQ29kZVNwaGVyZTwvYT4=';

  // 🔓 Decryption function
  function decrypt(text) {
    try {
      return atob(text);
    } catch (e) {
      document.body.innerHTML = '';
      alert("Credit decryption failed. App disabled.");
      throw new Error("Tampering detected.");
    }
  }

  // 🧠 Insert decrypted content
  const creditText = document.getElementById('creditText');
  const creditRep = document.getElementById('creditRep');

  if (!creditText || !creditRep) {
    document.body.innerHTML = '';
    alert("Credit element missing. App disabled.");
    throw new Error("Credit elements not found.");
  }

  const mainDecoded = decrypt(encryptedMain);
  const repDecoded = decrypt(encryptedRep);

  creditText.innerHTML = mainDecoded;
  creditRep.innerHTML = repDecoded;