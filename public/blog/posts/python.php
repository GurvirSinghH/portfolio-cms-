<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Power of Python for Computer Vision - Gurvir Singh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        h1, h2, h3, .nav-logo {
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
        .prose-custom {
            color: #334155;
        }
        .prose-custom h2 {
            color: #1e293b;
            margin-top: 2em;
            margin-bottom: 1em;
        }
        .prose-custom p {
            line-height: 1.75;
            margin-bottom: 1.25em;
        }
        .prose-custom a {
            color: #2563eb;
            text-decoration: none;
        }
        .prose-custom a:hover {
            text-decoration: underline;
        }
        .prose-custom code {
            background-color: #e2e8f0;
            padding: 0.2em 0.4em;
            margin: 0;
            font-size: 85%;
            border-radius: 3px;
        }
    </style>
</head>
<body class="animated-gradient text-slate-800 antialiased">

    <!-- Header & Navigation -->
    <header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-900/10 transition-shadow duration-300">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="../../index.php" class="nav-logo text-2xl font-bold text-slate-900 tracking-tighter">GS.</a>
                </div>
                <nav class="hidden md:flex justify-center flex-grow">
                    <div class="flex items-center space-x-10">
                        <a href="../../projects.php" class="text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                        <a href="../../about.php" class="text-slate-600 hover:text-slate-900 transition-colors">About</a>
                        <a href="../blog.php" class="text-slate-900 font-medium transition-colors">Blog</a>
                    </div>
                </nav>
                <div class="flex items-center space-x-6">
                     <a href="contact.html" class="hidden md:block text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
                    <button id="mobile-menu-button" class="md:hidden text-slate-700">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white/80 backdrop-blur-md">
             <div class="px-6 py-4 space-y-4 border-t border-slate-900/10">
                <a href="../../projects.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                <a href="../../about.php" class="block text-slate-600 hover:text-slate-900 transition-colors">About</a>
                <a href="../blog.php" class="block text-slate-900 font-medium transition-colors">Blog</a>
                <a href="../../contact.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
             </div>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 pt-32 md:pt-40 content-fade-in">
        <article class="prose-custom max-w-none">
            <p class="text-sm text-slate-500">May 10, 2025</p>
            <h1 class="text-4xl font-bold text-slate-900 mt-2 mb-8">The Power of Python for Computer Vision</h1>
            <p>Computer Vision (CV) is a field of artificial intelligence that trains computers to interpret and understand the visual world. While the concepts can be complex, the tools available today make it more accessible than ever. And when it comes to tools, Python is the undisputed king.</p>

            <h2>Why Python?</h2>
            <p>Python's popularity in the CV space comes down to a few key factors: its simple, readable syntax, a massive and active community, and, most importantly, its incredible ecosystem of libraries. These libraries handle the complex mathematics and algorithms, allowing developers to focus on building applications.</p>

            <h2>The Dynamic Duo: OpenCV and MediaPipe</h2>
            <p>For my <a href="project.html">AI Virtual Mouse</a> project, I relied on two essential Python libraries:</p>
            <h3>1. OpenCV</h3>
            <p>OpenCV (Open Source Computer Vision Library) is the workhorse of computer vision. It provides all the fundamental tools you need to work with images and video streams. You can use it to read and write files, capture video from a webcam, draw shapes, and perform a vast array of image processing tasks like color space conversion, thresholding, and feature detection. It's the foundation upon which most CV projects are built.</p>

            <h3>2. MediaPipe</h3>
            <p>While OpenCV provides the tools, MediaPipe provides the solutions. Developed by Google, MediaPipe offers fast, cross-platform, and highly optimized pre-trained models for common CV tasks. For my virtual mouse, I used its Hand Tracking model, which can detect 21 keypoints on a hand in real-time. This saved me from having to train a complex model from scratch, which would have required a massive dataset and significant computational power. MediaPipe makes advanced capabilities like face detection, pose estimation, and object detection incredibly easy to implement.</p>

            <p>The combination of Python's simplicity with the power of libraries like OpenCV and MediaPipe is what makes modern computer vision so exciting. It lowers the barrier to entry and empowers developers to create amazing applications, from fun projects like a virtual mouse to life-changing technologies in healthcare and automation.</p>
        </article>
        <div class="mt-12">
            <a href="../blog.php" class="text-blue-600 hover:underline font-medium flex items-center">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i> Back to Blog
            </a>
        </div>
    </main>

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
