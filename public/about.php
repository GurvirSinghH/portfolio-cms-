<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Gurvir Singh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* Fallback background */
        }
        h1, h2, .nav-logo {
            font-family: 'Space Grotesk', sans-serif;
        }
        .animated-gradient {
            background: linear-gradient(125deg, #f0f4f8, #e6e9f0, #f0f4f8);
            background-size: 400% 400%;
            animation: gradient-flow 15s ease infinite;
        }
        @keyframes gradient-flow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .content-fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.5s forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="animated-gradient text-slate-800 antialiased">

    <!-- Header & Navigation -->
    <?php include_once('../includes/header.php'); ?>

    <main class="max-w-3xl mx-auto px-6 pt-32 md:pt-40 content-fade-in">
        <!-- About Section -->
        <section id="about" class="mb-16 md:mb-24">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-8 text-center">About Me</h1>
            <div class="flex flex-col md:flex-row items-center justify-center gap-10 md:gap-16 text-left bg-white/50 p-8 rounded-lg shadow-sm">
                <div class="md:w-1/3 flex-shrink-0">
                     <img src="assets/images/gurvir.jpg"
                         onerror="this.onerror=null;this.src='https://placehold.co/400x400/E2E8F0/4A5568?text=Image+Not+Found';"
                         alt="Gurvir Singh" class="rounded-full shadow-lg mx-auto w-48 h-48 md:w-56 md:h-56 object-cover">
                </div>
                <div class="md:w-2/3">
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        I am a passionate software developer with a strong foundation in computer science and a keen interest in machine learning and full-stack web development. I enjoy solving complex problems and building applications that are both functional and user-friendly. My goal is to leverage my skills to create innovative solutions and contribute to impactful projects.
                    </p>
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Core Skills</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Python</span>
                        <span class="bg-gray-200 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">C++</span>
                         <span class="bg-orange-100 text-orange-800 text-sm font-medium px-3 py-1 rounded-full">Java</span>
                        <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded-full">Machine Learning</span>
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">JavaScript</span>
                        <span class="bg-sky-100 text-sky-800 text-sm font-medium px-3 py-1 rounded-full">HTML/CSS</span>
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Full-Stack</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once('../includes/footer.php'); ?>
    <script>
      (function() {
        lucide.createIcons();
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
      })();
    </script>
</body>
</html>
