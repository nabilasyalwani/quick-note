<!DOCTYPE html>
<html>
<head>
    <title>Get Started</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-200 to-white p-10 h-screen w-screen overflow-auto">
    <div class="h-full bg-white/90 backdrop-blur-sm shadow-lg rounded-3xl overflow-hidden">
        <div class="flex flex-row h-full">
            <!-- Sidebar-->
            <div class="bg-gradient-to-b from-blue-500 to-purple-600 p-4 flex flex-col items-center justify-between h-full">
                <!-- Profile -->
                <div class="text-center flex flex-col items-center space-y-4">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="text-white text-xs font-medium">John</div>
                </div>
                
                <!-- Menu Icons -->
                <nav class="flex flex-col items-center space-y-4">
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3h4v1a1 1 0 102 0V3a2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </nav>
                
                <!-- Logo -->
                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center text-white  hover:bg-white/30 transition">
                    <a href="/started" class="text-lg font-bold">
                        Q!
                    </a>
                </div>
            </div>
            
            <!-- Welcome Content Area -->
            <div class="flex-1 p-10 flex items-center justify-center">
                <div class="text-center max-w-3xl">
                    <div class="mb-8">
                        <div class="mb-6">
                            <h1 class="text-8xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">
                                Q!
                            </h1>
                        </div>
                        <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                            Welcome to QuickNote! 
                        </h2>
                        <p class="text-sm text-gray-600 mb-8">
                            Upload your audio or video files and get clear, accurate transcripts in minutes. Perfect for meetings, interviews, lectures, and more. No stress, no hassle — just words that work for you.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="p-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                                </svg>
                            </div>
                            <div class="text-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-blue-500 text-white text-sm font-bold rounded-full mb-2">1</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2 text-center">Upload Media</h3>
                            <p class="text-gray-600 text-sm text-center">Upload your audio or video files (MP3, MP4, WAV, etc.)</p>
                        </div>
                        
                        <div class="p-6 bg-gradient-to-br from-purple-50 to-violet-100 rounded-2xl hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3h4v1a1 1 0 102 0V3a2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm7 4a1 1 0 10-2 0v1H8a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="text-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-purple-500 text-white text-sm font-bold rounded-full mb-2">2</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2 text-center">AI Processing</h3>
                            <p class="text-gray-600 text-sm text-center">Our AI analyzes and converts speech to accurate text</p>
                        </div>
                        
                        <div class="p-6 bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl hover:shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                </svg>
                            </div>
                            <div class="text-center">
                                <span class="inline-flex items-center justify-center w-6 h-6 bg-green-500 text-white text-sm font-bold rounded-full mb-2">3</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2 text-center">Download & Edit</h3>
                            <p class="text-gray-600 text-sm text-center">Get your transcript and edit it as needed</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/upload" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                            </svg>
                            Start Transcribing Now
                        </a>
                        <a href="/demo" class="inline-flex items-center px-8 py-4 bg-white text-gray-700 font-semibold rounded-full shadow-lg hover:shadow-xl border-2 border-gray-200 hover:border-gray-300 transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            </svg>
                            Watch Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>