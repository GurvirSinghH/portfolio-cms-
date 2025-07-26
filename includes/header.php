<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-900/10 transition-shadow duration-300">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <!-- Left: Logo -->
                <div class="flex-shrink-0">
                    <a href="../public/index.php" class="nav-logo text-2xl font-bold text-slate-900 tracking-tighter">GS.</a>
                </div>

                <!-- Center: Desktop Nav Links -->
                <nav class="hidden md:flex justify-center flex-grow">
                    <div class="flex items-center space-x-10">
                        <a href="../public/projects.php" class="text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                        <a href='../public/about.php' class="text-slate-600 hover:text-slate-900 transition-colors">About</a>
                        <a href="#" class="text-slate-600 hover:text-slate-900 transition-colors">Blog</a>
                    </div>
                </nav>

                <!-- Right: Contact & Mobile Menu Button -->
                <div class="flex items-center space-x-6">
                     <a href="../public/contact.php" class="hidden md:block text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
                    <button id="mobile-menu-button" class="md:hidden text-slate-700">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/80 backdrop-blur-md">
             <div class="px-6 py-4 space-y-4 border-t border-slate-900/10">
                <a href="../public/projects.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Work</a>
                <a href="../public/about.php" class="block text-slate-600 hover:text-slate-900 transition-colors">About</a>
                <a href="../public/projects.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Blog</a>
                <a href="../public/contact.php" class="block text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
             </div>
        </div>
    </header>
</body>
</html>