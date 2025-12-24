<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudTools - High Performance Online Utility Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        // Configure Tailwind for dark mode support
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        indigo: {
                            primary: '#4F46E5'
                        },
                        cyan: {
                            secondary: '#06B6D4'
                        },
                        amber: {
                            accent: '#F59E0B'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Custom transitions for smooth theme switching */
        body,
        nav,
        main,
        footer,
        div,
        section,
        button,
        input,
        a {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .tool-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tool-card:hover {
            border-color: #4F46E5;
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(79, 70, 229, 0.1), 0 10px 10px -5px rgba(79, 70, 229, 0.04);
        }

        .gradient-text {
            background: linear-gradient(135deg, #4F46E5 0%, #06B6D4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ad-placeholder {
            background-color: #F9FAFB;
            border: 1px dashed #D1D5DB;
        }

        .dark .ad-placeholder {
            background-color: #111827;
            border-color: #374151;
        }
    </style>
</head>

<body class="bg-white dark:bg-slate-950 text-[#111827] dark:text-slate-100 selection:bg-indigo-100 dark:selection:bg-indigo-900/40">

    <!-- Navbar -->
    <nav class="border-b border-gray-100 dark:border-slate-900 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-[#4F46E5] p-2 rounded-xl shadow-lg shadow-indigo-200 dark:shadow-none">
                    <i class="fas fa-cloud text-white text-xl"></i>
                </div>
                <span class="text-2xl font-bold tracking-tight text-[#111827] dark:text-white">Cloud<span class="text-[#4F46E5]">Tools</span></span>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <a href="#" class="text-sm font-semibold text-gray-600 dark:text-slate-400 hover:text-[#4F46E5] transition-colors">All Tools</a>
                <a href="#" class="text-sm font-semibold text-gray-600 dark:text-slate-400 hover:text-[#4F46E5] transition-colors">API</a>

                <!-- Theme Toggle Button -->
                <button id="themeToggle" class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-900 text-gray-600 dark:text-amber-400 hover:scale-105 transition-transform">
                    <i class="fas fa-sun dark:hidden"></i>
                    <i class="fas fa-moon hidden dark:block"></i>
                </button>

                <button class="bg-[#4F46E5] hover:bg-[#4338CA] px-6 py-2.5 rounded-full text-sm font-bold text-white transition-all shadow-md active:scale-95">
                    Create Account
                </button>
            </div>

            <button class="md:hidden text-gray-600 dark:text-slate-400">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Top Ad Leaderboard -->
    <div class="max-w-7xl mx-auto px-6 pt-8">
        <div class="ad-placeholder rounded-2xl h-24 flex flex-col items-center justify-center text-center">
            <span class="text-[10px] uppercase tracking-[0.2em] text-gray-400 dark:text-slate-600 font-bold mb-1">Advertisement</span>
            <div class="text-gray-400 dark:text-slate-700 font-mono text-xs italic">Leaderboard - 728x90</div>
        </div>
    </div>

    <!-- Hero Section -->
    <header class="max-w-7xl mx-auto px-6 pt-16 pb-20 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 dark:bg-indigo-900/20 border border-indigo-100 dark:border-indigo-800 text-[#4F46E5] dark:text-indigo-400 text-xs font-bold uppercase tracking-wider mb-6">
            <span class="bg-[#F59E0B] w-2 h-2 rounded-full animate-pulse"></span>
            New: Bulk PDF Compressor
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold text-[#111827] dark:text-white mb-6 tracking-tight leading-tight">
            The World's Most <span class="gradient-text">Powerful</span> <br class="hidden md:block">
            Online Utility Engine.
        </h1>
        <p class="text-gray-500 dark:text-slate-400 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
            Free, high-speed tools for modern workflows. Securely process images,
            documents, and code without ever leaving your browser.
        </p>

        <!-- Search Bar -->
        <div class="mt-10 max-w-2xl mx-auto relative group">
            <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-[#4F46E5] transition-colors"></i>
            <input type="text" placeholder="What tool do you need today?"
                class="w-full bg-gray-50 dark:bg-slate-900 border border-gray-200 dark:border-slate-800 rounded-2xl py-5 pl-14 pr-6 focus:ring-4 focus:ring-indigo-500/10 focus:border-[#4F46E5] focus:outline-none text-[#111827] dark:text-white transition-all shadow-sm">
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Sidebar: Navigation -->
            <div class="space-y-6">
                <div class="bg-gray-50 dark:bg-slate-900/50 p-6 rounded-2xl border border-gray-100 dark:border-slate-800">
                    <h3 class="text-[#111827] dark:text-slate-300 font-bold mb-4 text-sm uppercase tracking-wider">Toolbox</h3>
                    <nav class="space-y-1">
                        <a href="#images" class="flex items-center justify-between p-3 rounded-xl bg-white dark:bg-slate-900 border border-indigo-100 dark:border-indigo-900/50 text-[#4F46E5] dark:text-indigo-400 font-bold shadow-sm">
                            Image Tools <i class="fas fa-chevron-right text-[10px]"></i>
                        </a>
                        <a href="#pdf" class="flex items-center justify-between p-3 rounded-xl hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm transition-all text-gray-600 dark:text-slate-400 font-medium border border-transparent hover:border-gray-100 dark:hover:border-slate-800">
                            PDF & Docs <i class="fas fa-chevron-right text-[10px]"></i>
                        </a>
                        <a href="#marketing" class="flex items-center justify-between p-3 rounded-xl hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm transition-all text-gray-600 dark:text-slate-400 font-medium border border-transparent hover:border-gray-100 dark:hover:border-slate-800">
                            Marketing <i class="fas fa-chevron-right text-[10px]"></i>
                        </a>
                        <a href="#dev" class="flex items-center justify-between p-3 rounded-xl hover:bg-white dark:hover:bg-slate-900 hover:shadow-sm transition-all text-gray-600 dark:text-slate-400 font-medium border border-transparent hover:border-gray-100 dark:hover:border-slate-800">
                            Calculators <i class="fas fa-chevron-right text-[10px]"></i>
                        </a>
                    </nav>
                </div>

                <!-- Sticky Sidebar Ad -->
                <div class="ad-placeholder rounded-2xl h-[400px] flex flex-col items-center justify-center sticky top-28">
                    <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold mb-2">Advertisement</span>
                    <div class="text-gray-400 dark:text-slate-700 font-mono text-xs italic text-center">Vertical Banner<br>300x600</div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="md:col-span-3 space-y-12">

                <!-- Category: Images -->
                <section id="images">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-8 w-1.5 bg-[#06B6D4] rounded-full"></div>
                        <h2 class="text-2xl font-bold text-[#111827] dark:text-white">Visual Optimization</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- Image Compressor -->
                        <a href="image-compressor.php" class="tool-card p-8 rounded-3xl block relative overflow-hidden group bg-white dark:bg-slate-900 border border-gray-100 dark:border-slate-800">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-indigo-50 dark:bg-indigo-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-150"></div>
                            <div class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-900/30 flex items-center justify-center mb-6 text-[#4F46E5] dark:text-indigo-400">
                                <i class="fas fa-compress-arrows-alt text-2xl"></i>
                            </div>
                            <h4 class="text-[#111827] dark:text-white font-bold text-xl mb-3">Image Compressor</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-4">
                                Industrial grade compression for PNG, JPG, and WebP. Save up to 90% space.
                            </p>
                            <span class="text-[#4F46E5] dark:text-indigo-400 font-bold text-sm flex items-center gap-2 group-hover:translate-x-2 transition-transform">
                                Launch Tool <i class="fas fa-arrow-right"></i>
                            </span>
                        </a>

                        <!-- PDF to Word -->
                        <div class="tool-card p-8 rounded-3xl block relative overflow-hidden group bg-white dark:bg-slate-900 border border-gray-100 dark:border-slate-800">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-cyan-50 dark:bg-cyan-900/20 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-150"></div>
                            <div class="w-14 h-14 rounded-2xl bg-cyan-50 dark:bg-cyan-900/30 flex items-center justify-center mb-6 text-[#06B6D4]">
                                <i class="fas fa-file-pdf text-2xl"></i>
                            </div>
                            <h4 class="text-[#111827] dark:text-white font-bold text-xl mb-3">PDF to Word</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-4">
                                Convert any PDF back into an editable Word document with layout retention.
                            </p>
                            <span class="text-[#06B6D4] font-bold text-sm flex items-center gap-2">
                                Launch Tool <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </section>

                <!-- Mid-Feed Ad Unit -->
                <div class="ad-placeholder rounded-2xl h-32 flex flex-col items-center justify-center">
                    <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold mb-1">Advertisement</span>
                    <div class="text-gray-400 dark:text-slate-700 font-mono text-xs italic">In-feed Banner - 728x120</div>
                </div>

                <!-- Category: Marketing -->
                <section id="marketing">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-8 w-1.5 bg-[#F59E0B] rounded-full"></div>
                        <h2 class="text-2xl font-bold text-[#111827] dark:text-white">Marketing & Productivity</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                        <!-- QR Gen -->
                        <div class="tool-card p-8 rounded-3xl block bg-white dark:bg-slate-900 border border-gray-100 dark:border-slate-800">
                            <div class="w-14 h-14 rounded-2xl bg-amber-50 dark:bg-amber-900/20 flex items-center justify-center mb-6 text-[#F59E0B]">
                                <i class="fas fa-qrcode text-2xl"></i>
                            </div>
                            <h4 class="text-[#111827] dark:text-white font-bold text-xl mb-3">QR Generator</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed">
                                Generate high-res QR codes for menus, business cards, or Wi-Fi.
                            </p>
                        </div>
                        <!-- Text Tools -->
                        <div class="tool-card p-8 rounded-3xl block bg-white dark:bg-slate-900 border border-gray-100 dark:border-slate-800">
                            <div class="w-14 h-14 rounded-2xl bg-gray-100 dark:bg-slate-800 flex items-center justify-center mb-6 text-gray-700 dark:text-slate-300">
                                <i class="fas fa-font text-2xl"></i>
                            </div>
                            <h4 class="text-[#111827] dark:text-white font-bold text-xl mb-3">Text Utilities</h4>
                            <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed">
                                Word counter, case converter, and markdown editor.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 dark:bg-slate-950 border-t border-gray-100 dark:border-slate-900 pt-20 pb-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-[#4F46E5] p-1.5 rounded-lg shadow-md">
                            <i class="fas fa-cloud text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold tracking-tight text-[#111827] dark:text-white">Cloud<span class="text-[#4F46E5]">Tools</span></span>
                    </div>
                    <p class="text-gray-500 dark:text-slate-400 text-sm max-w-sm leading-relaxed mb-6">
                        A modern ecosystem of web utilities built for professionals. We prioritize privacy, speed, and clean design.
                    </p>
                    <div class="flex gap-4 text-gray-400 dark:text-slate-600">
                        <a href="#" class="hover:text-[#4F46E5] transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="hover:text-[#4F46E5] transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="hover:text-[#4F46E5] transition-colors"><i class="fab fa-github text-xl"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="text-[#111827] dark:text-white font-bold mb-6">Popular Tools</h5>
                    <ul class="space-y-4 text-sm text-gray-500 dark:text-slate-400 font-medium">
                        <li><a href="image-compressor.html" class="hover:text-[#4F46E5] transition-colors">Image Compressor</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">PDF to Word</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">QR Generator</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">Unit Converter</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-[#111827] dark:text-white font-bold mb-6">Support</h5>
                    <ul class="space-y-4 text-sm text-gray-500 dark:text-slate-400 font-medium">
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">API Access</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-[#4F46E5] transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Ad Slot -->
            <div class="ad-placeholder rounded-2xl h-40 flex flex-col items-center justify-center text-center mb-12">
                <span class="text-[10px] uppercase tracking-[0.2em] text-gray-400 dark:text-slate-600 font-bold mb-2">Advertisement</span>
                <div class="text-gray-400 dark:text-slate-700 font-mono text-xs italic">Bottom Billboard Unit - 970x250</div>
            </div>

            <div class="pt-12 border-t border-gray-200 dark:border-slate-900 text-center text-gray-400 dark:text-slate-600 text-xs">
                © 2024 CloudTools Global. Handcrafted with passion and precision.
            </div>
        </div>
    </footer>

    <script>
        const themeToggle = document.getElementById('themeToggle');

        // --- Theme Toggle Logic ---
        function initTheme() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.className = savedTheme;
        }

        themeToggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            const newTheme = isDark ? 'light' : 'dark';
            document.documentElement.className = newTheme;
            localStorage.setItem('theme', newTheme);
        });

        initTheme();
    </script>
</body>

</html>