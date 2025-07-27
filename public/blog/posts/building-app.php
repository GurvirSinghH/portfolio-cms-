<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building My First Full-Stack App - Gurvir Singh</title>
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
            <p class="text-sm text-slate-500">June 28, 2025</p>
            <h1 class="text-4xl font-bold text-slate-900 mt-2 mb-8">Building My First Full-Stack Application</h1>
            <p>Moving from frontend templates or simple backend scripts to a complete full-stack application is a huge step for any developer. It's a journey filled with challenges, learning, and immense satisfaction. I recently completed my <a href="project.html">Snippix</a> project, and I wanted to share my experience building it with the MERN stack.</p>

            <h2>Choosing the Stack: MERN</h2>
            <p>MERN stands for MongoDB, Express, React, and Node.js. I chose this stack because of its consistency—using JavaScript/TypeScript across the entire application, from the frontend to the backend, simplifies the development process. React is fantastic for building dynamic user interfaces, while Node.js and Express make creating a robust API relatively straightforward. MongoDB's flexible, document-based nature is great for projects that evolve over time.</p>

            <h2>The Backend: Node.js, Express, and MongoDB</h2>
            <p>The first step was to build the API. I set up a simple Express server to handle incoming requests. I defined routes for user authentication (login/register), and CRUD (Create, Read, Update, Delete) operations for the code snippets. Connecting to MongoDB with the Mongoose library made defining schemas and interacting with the database a breeze. The biggest challenge here was designing a secure authentication flow using JSON Web Tokens (JWT).</p>

            <h2>The Frontend: React</h2>
            <p>With the backend API in place, I moved to the frontend. I used <code>create-react-app</code> to bootstrap the project. I designed components for everything: the navigation bar, the snippet cards, the editor form, and the user profile page. Managing state was a key consideration. For a project like this, React's Context API was sufficient to handle global state like the authenticated user's information. For more complex apps, I would consider a library like Redux or Zustand.</p>

            <h2>Connecting the Pieces and Deployment</h2>
            <p>The magic happens when the frontend starts making requests to the backend API. I used the <code>axios</code> library to handle these HTTP requests. A major hurdle was dealing with Cross-Origin Resource Sharing (CORS) errors, which I solved by enabling the <code>cors</code> middleware on my Express server. Finally, I deployed the backend to Heroku and the frontend to Netlify, connecting them via environment variables.</p>
            <p>Building a full-stack application is a fantastic learning experience. It forces you to think about the entire ecosystem of an application, from the database to the user interface. It was challenging, but seeing Snippix come to life was incredibly rewarding.</p>
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
