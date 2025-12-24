<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Compressor - CloudTools</title>
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
        input {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .dropzone-active {
            border-color: #4F46E5 !important;
            background-color: rgba(79, 70, 229, 0.05) !important;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #4F46E5;
            cursor: pointer;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
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
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2">
                <div class="bg-[#4F46E5] p-1.5 rounded-lg shadow-md shadow-indigo-100 dark:shadow-none">
                    <i class="fas fa-cloud text-white text-sm"></i>
                </div>
                <span class="text-xl font-bold tracking-tight text-[#111827] dark:text-white">Cloud<span class="text-[#4F46E5]">Tools</span></span>
            </a>

            <div class="flex items-center gap-4">
                <a href="index.html" class="hidden md:block text-sm font-semibold text-gray-500 dark:text-slate-400 hover:text-[#4F46E5]">Explore Tools</a>

                <!-- Theme Toggle Button -->
                <button id="themeToggle" class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-900 text-gray-600 dark:text-amber-400 hover:scale-105 transition-transform">
                    <i class="fas fa-sun dark:hidden"></i>
                    <i class="fas fa-moon hidden dark:block"></i>
                </button>

                <button class="bg-gray-100 dark:bg-slate-800 text-gray-700 dark:text-slate-300 px-4 py-2 rounded-full text-sm font-bold hover:bg-gray-200 dark:hover:bg-slate-700">
                    Sign In
                </button>
            </div>
        </div>
    </nav>

    <!-- Top Ad Slot -->
    <div class="max-w-5xl mx-auto px-6 pt-6">
        <div class="ad-placeholder rounded-xl h-24 flex flex-col items-center justify-center text-center">
            <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold mb-1">Advertisement</span>
            <div class="text-gray-400 dark:text-slate-700 font-mono text-xs">Leaderboard - 728x90</div>
        </div>
    </div>

    <main class="max-w-5xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="mb-10">
            <nav class="flex items-center gap-2 text-xs font-bold text-gray-400 dark:text-slate-500 uppercase tracking-widest mb-4">
                <a href="index.html" class="hover:text-[#4F46E5]">Home</a>
                <i class="fas fa-chevron-right text-[8px]"></i>
                <span class="text-[#4F46E5]">Image Compressor</span>
            </nav>
            <h1 class="text-3xl md:text-4xl font-extrabold text-[#111827] dark:text-white flex items-center gap-3">
                <i class="fas fa-compress-arrows-alt text-[#4F46E5]"></i>
                Image Compressor
            </h1>
            <p class="text-gray-500 dark:text-slate-400 mt-2">Professional pixel-perfect optimization for PNG, JPG, and WebP.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">
                <!-- Dropzone -->
                <div id="dropzone" class="relative group cursor-pointer rounded-3xl border-2 border-dashed border-gray-200 dark:border-slate-800 bg-gray-50/50 dark:bg-slate-900/30 p-16 text-center transition-all duration-300">
                    <input type="file" id="fileInput" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    <div class="flex flex-col items-center gap-4">
                        <div class="w-16 h-16 rounded-2xl bg-white dark:bg-slate-800 shadow-sm border border-gray-100 dark:border-slate-700 flex items-center justify-center group-hover:scale-110 transition-transform text-[#4F46E5]">
                            <i class="fas fa-cloud-upload-alt text-3xl"></i>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-[#111827] dark:text-white">Drop your images here</p>
                            <p class="text-gray-500 dark:text-slate-400 mt-1">or click to browse from device</p>
                        </div>
                    </div>
                </div>

                <!-- File List Area -->
                <div id="dashboard" class="hidden animate-in fade-in slide-in-from-bottom-4 duration-500">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold text-[#111827] dark:text-white">Processing Queue</h3>
                        <button onclick="clearQueue()" class="text-xs font-bold text-red-500 hover:text-red-600">
                            Clear Queue
                        </button>
                    </div>
                    <div id="fileList" class="space-y-3">
                        <!-- JS injected cards -->
                    </div>

                    <!-- In-queue Ad -->
                    <div class="ad-placeholder rounded-2xl h-32 flex flex-col items-center justify-center mt-6">
                        <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold">Advertisement</span>
                        <div class="text-gray-400 dark:text-slate-700 font-mono text-xs">In-feed Unit</div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="bg-white dark:bg-slate-900 border border-gray-100 dark:border-slate-800 rounded-3xl p-6 shadow-sm sticky top-24">
                    <h3 class="font-bold text-[#111827] dark:text-white mb-6 flex items-center gap-2">
                        <i class="fas fa-sliders-h text-[#06B6D4]"></i>
                        Settings
                    </h3>

                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between mb-3">
                                <label class="text-sm font-bold text-gray-600 dark:text-slate-400">Target Quality</label>
                                <span id="qualityVal" class="text-sm font-mono text-[#4F46E5] font-bold">80%</span>
                            </div>
                            <input type="range" id="qualityRange" min="10" max="100" value="80"
                                class="w-full h-2 bg-gray-100 dark:bg-slate-800 rounded-lg appearance-none cursor-pointer accent-[#4F46E5]">
                        </div>

                        <div class="bg-indigo-50/50 dark:bg-indigo-900/10 p-4 rounded-2xl border border-indigo-100 dark:border-indigo-900/30">
                            <p class="text-xs text-indigo-700 dark:text-indigo-400 leading-relaxed">
                                <i class="fas fa-info-circle mr-1"></i>
                                <strong>Tip:</strong> 80% quality usually reduces file size by 70% with no visible changes.
                            </p>
                        </div>

                        <button id="processBtn" onclick="processFiles()" class="w-full py-4 bg-[#4F46E5] hover:bg-[#4338CA] text-white rounded-2xl font-bold flex items-center justify-center gap-2 transition-all shadow-lg shadow-indigo-200 dark:shadow-none active:scale-[0.98]">
                            <i class="fas fa-bolt"></i> Compress Images
                        </button>
                    </div>

                    <!-- Sidebar Ad -->
                    <div class="ad-placeholder rounded-2xl h-[250px] flex flex-col items-center justify-center mt-8">
                        <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold">Advertisement</span>
                        <div class="text-gray-400 dark:text-slate-700 font-mono text-xs">300x250 Square</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Banner Ad -->
        <div class="mt-16 ad-placeholder rounded-2xl h-48 flex flex-col items-center justify-center">
            <span class="text-[10px] uppercase tracking-widest text-gray-400 dark:text-slate-600 font-bold">Advertisement</span>
            <div class="text-gray-400 dark:text-slate-700 font-mono text-xs">Large Bottom Banner - 970x250</div>
        </div>
    </main>

    <footer class="mt-20 border-t border-gray-100 dark:border-slate-900 py-12 text-center text-gray-400 dark:text-slate-600 text-xs">
        <p>© 2024 CloudTools. High Speed Content Optimization.</p>
    </footer>

    <script>
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

        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');
        const dashboard = document.getElementById('dashboard');
        const fileList = document.getElementById('fileList');
        const qualityRange = document.getElementById('qualityRange');
        const qualityVal = document.getElementById('qualityVal');

        let filesArray = [];

        qualityRange.addEventListener('input', (e) => {
            qualityVal.innerText = e.target.value + '%';
        });

        fileInput.addEventListener('change', handleFiles);
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('dropzone-active');
        });
        dropzone.addEventListener('dragleave', () => dropzone.classList.remove('dropzone-active'));
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('dropzone-active');
            handleFiles({
                target: {
                    files: e.dataTransfer.files
                }
            });
        });

        function handleFiles(e) {
            const files = Array.from(e.target.files);
            if (files.length > 0) {
                dashboard.classList.remove('hidden');
            }
            files.forEach(file => {
                const fileObj = {
                    id: Math.random().toString(36).substr(2, 9),
                    name: file.name,
                    size: (file.size / 1024).toFixed(2) + ' KB'
                };
                filesArray.push(fileObj);
                renderFile(fileObj);
            });
        }

        function renderFile(file) {
            const div = document.createElement('div');
            div.id = file.id;
            div.className = "bg-white border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-sm animate-in fade-in slide-in-from-bottom-2 duration-300";
            div.innerHTML = `
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center text-[#4F46E5]">
                        <i class="fas fa-image"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-[#111827] truncate max-w-[150px] md:max-w-xs">${file.name}</p>
                        <p class="text-[11px] text-gray-400 font-bold uppercase tracking-wider">${file.size}</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div id="status-${file.id}" class="hidden flex items-center gap-1 text-[10px] font-bold text-emerald-500 uppercase">
                        <i class="fas fa-check-circle"></i> Done
                    </div>
                    <button onclick="removeFile('${file.id}')" class="w-8 h-8 rounded-full hover:bg-red-50 text-gray-300 hover:text-red-500 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            fileList.appendChild(div);
        }

        function removeFile(id) {
            filesArray = filesArray.filter(f => f.id !== id);
            document.getElementById(id).remove();
            if (filesArray.length === 0) dashboard.classList.add('hidden');
        }

        function clearQueue() {
            filesArray = [];
            fileList.innerHTML = '';
            dashboard.classList.add('hidden');
        }

        function processFiles() {
            const formData = new FormData();
            const quality = document.getElementById("qualityRange").value;

            formData.append("quality", quality);

            for (let file of fileInput.files) {
                formData.append("images[]", file);
            }

            fetch("compress.php", {
                    method: "POST",
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    data.forEach((file, i) => {
                        const status = document.getElementById(`status-${filesArray[i].id}`);
                        status.classList.remove("hidden");

                        // 🔹 Add download button
                        const parent = document.getElementById(filesArray[i].id);
                        const btnArea = parent.querySelector(".flex.items-center.gap-2");

                        const downloadBtn = document.createElement("a");
                        downloadBtn.href = file.output;
                        downloadBtn.download = "";
                        downloadBtn.className =
                            "px-3 py-1 text-[11px] font-bold rounded-full bg-emerald-50 text-emerald-600 hover:bg-emerald-100 transition";
                        downloadBtn.innerHTML = `<i class="fas fa-download mr-1"></i> Download`;

                        btnArea.prepend(downloadBtn);
                    });
                })

        }
    </script>
</body>

</html>