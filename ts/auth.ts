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

        // AJAX form submission
