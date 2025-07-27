<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Introduction to Machine Learning - Gurvir Singh</title>
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
            <p class="text-sm text-slate-500">July 15, 2025</p>
            <h1 class="text-4xl font-bold text-slate-900 mt-2 mb-8">An Introduction to Machine Learning</h1>
            <p>Machine Learning (ML) is more than just a buzzword; it's a transformative field of computer science that gives computers the ability to learn without being explicitly programmed. From recommending your next movie to powering self-driving cars, ML is everywhere. In this post, we'll break down the core concepts in a beginner-friendly way.</p>

            <h2>What is Machine Learning?</h2>
            <p>At its heart, machine learning is about creating algorithms that can learn from and make predictions on data. Instead of writing code that tells the computer exactly how to solve a problem, you provide it with a large amount of data and let it figure out the patterns and rules on its own. My <a href="project.html">Face Recognition Attendance System</a> is a practical example, where the model learns to identify faces from images.</p>

            <h2>Types of Machine Learning</h2>
            <p>There are three main types of machine learning:</p>
            <h3>1. Supervised Learning</h3>
            <p>This is the most common type of ML. In supervised learning, you train the model on a labeled dataset, which means each data point is tagged with a correct output. It's like learning with a teacher. The goal is for the model to learn a mapping function that can predict the output for new, unseen data. Two main types of supervised learning problems are:</p>
            <ul>
                <li><strong>Classification:</strong> The output variable is a category, like 'spam' or 'not spam', or 'cat' or 'dog'.</li>
                <li><strong>Regression:</strong> The output variable is a continuous value, like the price of a house or the temperature tomorrow.</li>
            </ul>

            <h3>2. Unsupervised Learning</h3>
            <p>In unsupervised learning, you work with unlabeled data. The algorithm tries to find patterns and structure in the data on its own, without any predefined outcomes. It's like learning without a teacher. A common technique is clustering, where the algorithm groups similar data points together. This is useful for customer segmentation or anomaly detection.</p>

            <h3>3. Reinforcement Learning</h3>
            <p>This type of learning is about taking suitable actions to maximize reward in a particular situation. It is employed by various software and machines to find the best possible behavior or path it should take in a specific situation. Reinforcement learning differs from supervised learning in that the training data has no answer key, so the agent decides what to do to perform the given task.</p>

            <p>Machine learning is a vast and exciting field. This was just a brief introduction, but hopefully, it gives you a clearer understanding of what it is and how it's shaping our future. The best way to learn is by doing, so I encourage you to explore some of the amazing libraries out there like Scikit-learn and TensorFlow and start building your own models!</p>
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
