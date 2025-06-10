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
    // Animated gradient background
    const gradientBg = document.getElementById('animated-gradient');
    let angle = 0;
    
    function updateGradient() {
        angle = (angle + 0.5) % 360;
        gradientBg.style.background = `linear-gradient(${angle}deg, rgba(99, 102, 241, 0.3), rgba(168, 85, 247, 0.3), rgba(236, 72, 153, 0.3))`;
        requestAnimationFrame(updateGradient);
    }
    updateGradient();

    // Typewriter effect for code editor
    const typewriterElement = document.getElementById('typewriter');
    const codeSnippets = [
        `// Welcome to Cyrus Tech\nconst learn = (skill, projects) => {\n  return {\n    skill,\n    projects,\n    hired: true\n  };\n};\n\n// Start your journey\nconst result = learn('React', 5);`,
        `// Interactive Learning\nclass Student {\n  constructor(name) {\n    this.name = name;\n    this.skills = [];\n  }\n\n  learn(skill) {\n    this.skills.push(skill);\n    console.log(\`\${this.name} learned \${skill}\`);\n  }\n}\n\nconst you = new Student('Awesome Dev');`,
        `// Real Projects\nasync function buildPortfolio() {\n  const response = await fetch('/api/projects');\n  const projects = await response.json();\n  \n  projects.forEach(project => {\n    if (project.completed) {\n      addToPortfolio(project);\n    }\n  });\n}`
    ];
    
    let currentSnippet = 0;
    let charIndex = 0;
    let isDeleting = false;
    let isPaused = false;
    
    function typeWriter() {
        if (isPaused) return;
        
        const snippet = codeSnippets[currentSnippet];
        
        if (isDeleting) {
            typewriterElement.textContent = snippet.substring(0, charIndex - 1);
            charIndex--;
            
            if (charIndex === 0) {
                isDeleting = false;
                currentSnippet = (currentSnippet + 1) % codeSnippets.length;
                setTimeout(typeWriter, 500);
            } else {
                setTimeout(typeWriter, 30);
            }
        } else {
            typewriterElement.textContent = snippet.substring(0, charIndex + 1);
            charIndex++;
            
            if (charIndex === snippet.length) {
                isDeleting = true;
                isPaused = true;
                setTimeout(() => {
                    isPaused = false;
                    setTimeout(typeWriter, 1500);
                }, 2000);
            } else {
                setTimeout(typeWriter, 30 + (Math.random() * 50));
            }
        }
    }
    
    // Start typewriter after a delay
    setTimeout(typeWriter, 1000);
    
    // Terminal output animation
    const terminalOutput = document.getElementById('terminal-output');
    const terminalMessages = [
        "$ Loading curriculum...",
        "$ Connecting to expert mentors...",
        "$ Preparing interactive exercises...",
        "$ Ready to start learning!"
    ];
    
    let currentMessage = 0;
    
    function updateTerminal() {
        terminalOutput.textContent = terminalMessages[currentMessage];
        currentMessage = (currentMessage + 1) % terminalMessages.length;
        setTimeout(updateTerminal, 3000);
    }
    
    setTimeout(updateTerminal, 1500);
    
    // CTA button animation
    const ctaButton = document.getElementById('cta-button');
    
    ctaButton.addEventListener('mouseenter', () => {
        ctaButton.style.background = 'linear-gradient(to right, #4f46e5, #7c3aed)';
    });
    
    ctaButton.addEventListener('mouseleave', () => {
        ctaButton.style.background = 'linear-gradient(to right, #2563eb, #4f46e5)';
    });
    
    // Floating badge animation
    const floatingBadge = document.getElementById('floating-badge');
    
    function floatBadge() {
        const rotation = Math.sin(Date.now() / 1000) * 5;
        floatingBadge.style.transform = `rotate(${rotation}deg)`;
        requestAnimationFrame(floatBadge);
    }
    floatBadge();
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