<?php
// Array of blog post data
$blog_posts = [
    [
        'date' => 'July 15, 2025',
        'title' => 'An Introduction to Machine Learning',
        'excerpt' => 'A beginner-friendly guide to the core concepts of machine learning, from supervised to unsupervised learning, and the real-world applications that are changing our world.',
        'link' => 'posts/intro-ml.php'
    ],
    [
        'date' => 'June 28, 2025',
        'title' => 'Building My First Full-Stack Application',
        'excerpt' => 'A walkthrough of my journey creating a full-stack web application, the challenges I faced, the technologies I used, and the lessons I learned along the way.',
        'link' => 'posts/building-app.php'
    ],
    [
        'date' => 'May 10, 2025',
        'title' => 'The Power of Python for Computer Vision',
        'excerpt' => 'Exploring why Python, combined with libraries like OpenCV and MediaPipe, is the go-to language for computer vision projects, from virtual mice to facial recognition.',
        'link' => 'posts/python.php'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Gurvir Singh</title>
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
        .blog-post-card {
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }
        .blog-post-card:hover {
            transform: translateY(-4px);
            background-color: rgba(255, 255, 255, 0.5);
            border-color: #e2e8f0;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
        }
    </style>
</head>
<body class="animated-gradient text-slate-800 antialiased">

    <!-- Header & Navigation -->
    <header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-900/10 transition-shadow duration-300">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="../index.php" class="nav-logo text-2xl font-bold text-slate-900 tracking-tighter">GS.</a>
                </div>
                <nav class="hidden md:flex justify-center flex-grow">
                    <div class="flex items-center space-x-10">
                        <a href="../projects.php" class="text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                        <a href="../about.php" class="text-slate-600 hover:text-slate-900 transition-colors">About</a>
                        <a href="blog.php" class="text-slate-900 font-medium transition-colors">Blog</a>
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
                <a href="../projects.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                <a href="../about.php" class="block text-slate-600 hover:text-slate-900 transition-colors">About</a>
                <a href="blog.php" class="block text-slate-900 font-medium transition-colors">Blog</a>
                <a href="../contact.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
             </div>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 pt-32 md:pt-40 content-fade-in">
        <!-- Blog Section -->
        <section id="blog" class="mb-16 md:mb-24">
             <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-8 text-center">From the Blog</h1>
            <div class="space-y-12">
                <?php foreach ($blog_posts as $post): ?>
                <article class="blog-post-card p-6 rounded-lg">
                    <p class="text-sm text-slate-500 mb-2"><?php echo htmlspecialchars($post['date']); ?></p>
                    <h2 class="text-2xl font-bold text-slate-900 mb-3"><?php echo htmlspecialchars($post['title']); ?></h2>
                    <p class="text-slate-600 mb-4">
                        <?php echo htmlspecialchars($post['excerpt']); ?>
                    </p>
                    <a href="<?php echo htmlspecialchars($post['link']); ?>" class="text-blue-600 hover:underline font-medium flex items-center">
                        Read More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                    </a>
                </article>
                <?php endforeach; ?>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php include_once __DIR__ . '/../../includes/footer.php';?>

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
