    // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (document.documentElement.classList.contains('dark')) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggle.addEventListener('click', function() {
            // Toggle icons
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');
            
            // Toggle theme
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });

        // Mobile sidebar functionality
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
        const mobileSidebarClose = document.getElementById('mobile-sidebar-close');
        const mobileSidebarBackdrop = document.getElementById('mobile-sidebar-backdrop');

        mobileSidebarToggle.addEventListener('click', function() {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebarBackdrop.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });

        mobileSidebarClose.addEventListener('click', function() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarBackdrop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });

        mobileSidebarBackdrop.addEventListener('click', function() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarBackdrop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    
    
    
    