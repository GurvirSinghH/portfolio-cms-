<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Gurvir Singh</title>
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
        <!-- Contact Section -->
        <section id="contact" class="mb-16 md:mb-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">Get In Touch</h1>
                <p class="text-lg text-slate-600 max-w-xl mx-auto">Have a question or a project in mind? I'd love to hear from you. Fill out the form below or email me directly.</p>
            </div>

            <div class="mt-12 max-w-xl mx-auto bg-white/50 p-8 rounded-lg shadow-sm">
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">Full Name</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" autocomplete="name" class="w-full px-4 py-3 rounded-lg bg-slate-50 border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" autocomplete="email" class="w-full px-4 py-3 rounded-lg bg-slate-50 border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700">Message</label>
                        <div class="mt-1">
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-slate-50 border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="inline-block bg-blue-600 text-white font-medium px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors transform hover:scale-105">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
             <div class="mt-12 text-center">
                <p class="text-slate-600">You can also reach me here:</p>
                <div class="flex justify-center items-center space-x-6 mt-4">
                     <a href="mailto:g2207552@gmail.com" class="text-slate-500 hover:text-blue-600 transition-colors flex items-center gap-2">
                        <i data-lucide="mail" class="w-5 h-5"></i>
                        g2207552@gmail.com
                    </a>
                    <a href="https://github.com/GurvirSinghH" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="text-slate-500 hover:text-blue-600 transition-colors">
                        <i data-lucide="github" class="w-6 h-6"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/gurvirsingh2/" aria-label="LinkedIn" class="text-slate-500 hover:text-blue-600 transition-colors">
                        <i data-lucide="linkedin" class="w-6 h-6"></i>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="max-w-3xl mx-auto px-6 py-12 text-center text-slate-500">
        <p class="text-sm">&copy; 2025 Gurvir Singh. All rights reserved.</p>
    </footer>

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
