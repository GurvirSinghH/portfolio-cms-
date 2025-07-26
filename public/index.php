<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gurvir Singh - Creative Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="animated-gradient text-slate-800 antialiased">

    <!-- Header & Navigation -->
    <?php include_once('../includes/header.php'); ?>

    <main class="max-w-3xl mx-auto px-6 pt-32 md:pt-40 content-fade-in">

        <!-- Hero/Intro Section -->
        <section id="home" class="mb-16 md:mb-24 text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-slate-900 mb-4">Gurvir Singh</h1>
            <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-8">
                Aspiring Software Engineer, Full Stack Developer, and Machine Learning Enthusiast.
            </p>
            <div class="flex justify-center items-center space-x-6">
                <a href="https://github.com/GurvirSinghH" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="text-slate-500 hover:text-blue-600 transition-colors">
                    <i data-lucide="github" class="w-6 h-6"></i>
                </a>
                <a href="#" aria-label="LinkedIn" class="text-slate-500 hover:text-blue-600 transition-colors">
                    <i data-lucide="linkedin" class="w-6 h-6"></i>
                </a>
                <a href="#" aria-label="Twitter" class="text-slate-500 hover:text-blue-600 transition-colors">
                    <i data-lucide="twitter" class="w-6 h-6"></i>
                </a>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <h2 class="text-2xl font-bold text-slate-800 mb-8">Selected Work</h2>

            <div class="space-y-12">
                <!-- Project 1 -->
                <article class="project-card p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Face Recognition Attendance System</h3>
                    <p class="text-slate-600 mb-4">
                        A Python-based application that uses facial recognition to mark attendance, built with OpenCV and Tkinter.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Python</span>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">OpenCV</span>
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Tkinter</span>
                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Machine Learning</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-blue-600 hover:underline font-medium flex items-center">
                            Live Demo <i data-lucide="arrow-up-right" class="w-4 h-4 ml-1"></i>
                        </a>
                        <a href="https://github.com/GurvirSinghH/Face-Recognition-Attendance-System" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-blue-600 font-medium flex items-center">
                            GitHub <i data-lucide="github" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Project 2 -->
                <article class="project-card p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">AI Virtual Mouse</h3>
                    <p class="text-slate-600 mb-4">
                        Control your computer's mouse using hand gestures, powered by OpenCV and MediaPipe for real-time tracking.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Python</span>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">OpenCV</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">MediaPipe</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Computer Vision</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-blue-600 hover:underline font-medium flex items-center">
                            Live Demo <i data-lucide="arrow-up-right" class="w-4 h-4 ml-1"></i>
                        </a>
                        <a href="https://github.com/GurvirSinghH/AI-Virtual-Mouse" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-blue-600 font-medium flex items-center">
                            GitHub <i data-lucide="github" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Project 3 -->
                <article class="project-card p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">E-commerce Website</h3>
                    <p class="text-slate-600 mb-4">
                        A responsive e-commerce website template designed with a focus on user experience, built with HTML, CSS, and JavaScript.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full">HTML</span>
                        <span class="bg-sky-100 text-sky-800 text-xs font-medium px-2.5 py-0.5 rounded-full">CSS</span>
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">JavaScript</span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Frontend</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-blue-600 hover:underline font-medium flex items-center">
                            Live Demo <i data-lucide="arrow-up-right" class="w-4 h-4 ml-1"></i>
                        </a>
                        <a href="https://github.com/GurvirSinghH/E-commerce-Website" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-blue-600 font-medium flex items-center">
                            GitHub <i data-lucide="github" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </article>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('../includes/footer.php'); ?>
    <script>
      // Using an IIFE (Immediately Invoked Function Expression) to avoid polluting the global scope
      // and to ensure all DOM elements are loaded before the script runs.
      (function() {
        // Initialize Lucide icons
        lucide.createIcons();

        // Header shadow on scroll
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-sm');
            } else {
                header.classList.remove('shadow-sm');
            }
        });
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when a link is clicked
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
      })();
    </script>
</body>
</html>
