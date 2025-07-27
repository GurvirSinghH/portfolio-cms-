<?php
// Array of project data
$projects = [
    [
        'title' => 'Snippix',
        'description' => 'A full-stack MERN application for creating, storing, and sharing code snippets with a supportive community.',
        'tags' => ['HTML', 'CSS', 'JS', 'Node.js'],
        'live_demo' => 'https://gurvirsinghh.github.io/Snippix/',
        'github_link' => 'https://github.com/GurvirSinghH/Snippix'
    ],
    [
        'title' => 'AI Virtual Mouse',
        'description' => 'Control your computer\'s mouse using hand gestures, powered by OpenCV and MediaPipe for real-time tracking.',
        'tags' => ['Python', 'OpenCV', 'MediaPipe', 'Computer Vision'],
        'live_demo' => '#',
        'github_link' => 'https://github.com/GurvirSinghH/AI-Virtual-Mouse'
    ],
    [
        'title' => 'E-commerce Website',
        'description' => 'A responsive e-commerce website template designed with a focus on user experience, built with HTML, CSS, and JavaScript.',
        'tags' => ['HTML', 'CSS', 'JavaScript', 'Frontend'],
        'live_demo' => '#',
        'github_link' => 'https://github.com/GurvirSinghH/E-commerce-Website'
    ]
];

// Helper function to assign a color class based on the tag name
function getTagClass($tag) {
    $tag_lower = strtolower($tag);
    switch ($tag_lower) {
        case 'html':
            return 'bg-orange-100 text-orange-800';
        case 'css':
            return 'bg-sky-100 text-sky-800';
        case 'js':
        case 'javascript':
            return 'bg-yellow-100 text-yellow-800';
        case 'node.js':
            return 'bg-green-100 text-green-800';
        case 'python':
            return 'bg-blue-100 text-blue-800';
        case 'opencv':
            return 'bg-green-100 text-green-800';
        case 'mediapipe':
            return 'bg-yellow-100 text-yellow-800';
        case 'computer vision':
            return 'bg-indigo-100 text-indigo-800';
        case 'frontend':
            return 'bg-gray-100 text-gray-800';
        default:
            return 'bg-gray-100 text-gray-800';
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Gurvir Singh</title>
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
        .project-card {
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-4px);
            background-color: rgba(255, 255, 255, 0.5);
            border-color: #e2e8f0;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
        }
    </style>
</head>
<body class="animated-gradient text-slate-800 antialiased">

    <!-- Header & Navigation -->
    <?php include_once('../includes/header.php'); ?>

    <main class="max-w-3xl mx-auto px-6 pt-32 md:pt-40 content-fade-in">

        <!-- Projects Section -->
        <section id="projects" class="mb-16 md:mb-24">
             <h1 class="text-4xl md:text-5xl font-bold text-slate-800 mb-8 text-center">Selected Work</h1>
            <div class="space-y-12">
                <?php foreach ($projects as $project): ?>
                <article class="project-card p-6 rounded-lg">
                    <h3 class="text-xl font-bold text-slate-900 mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                    <p class="text-slate-600 mb-4">
                        <?php echo htmlspecialchars($project['description']); ?>
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <span class="<?php echo getTagClass($tag); ?> text-xs font-medium px-2.5 py-0.5 rounded-full">
                                <?php echo htmlspecialchars($tag); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="<?php echo htmlspecialchars($project['live_demo']); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-medium flex items-center">
                            Live Demo <i data-lucide="arrow-up-right" class="w-4 h-4 ml-1"></i>
                        </a>
                        <a href="<?php echo htmlspecialchars($project['github_link']); ?>" target="_blank" rel="noopener noreferrer" class="text-slate-500 hover:text-blue-600 font-medium flex items-center">
                            GitHub <i data-lucide="github" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>

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
