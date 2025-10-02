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
        <div class="flex flex-col h-full">
            <!-- Navbar -->
            <div class="bg-gradient-to-b from-blue-500 to-purple-600 p-4 flex flex-row items-center justify-between">
                <!-- Cancel -->
                <div class="bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                    <a href="/started" class="text-sm font-semibold mx-2 p-2 flex items-center space-x-1 ">
                        Cancel
                    </a>
                </div>

                <!-- Step Information -->
                <nav class="flex flex-row items-center space-x-2">
                    <!-- Step 1: Information -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-white text-sm font-medium hidden sm:block">Information</span>
                    </div>
                    
                    <div class="w-8 h-0.5 bg-white"></div>
                    
                    <!-- Step 2: Upload File -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white border-2 border-white rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                            </svg>
                        </div>
                        <span class="text-white text-sm font-medium hidden sm:block">Upload File</span>
                    </div>
                    
                    <div class="w-8 h-0.5 bg-white/30"></div>
                    
                    <!-- Step 3: Transcript -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white/20 border-2 border-white/30 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white/50" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-white/50 text-sm font-medium hidden sm:block">Transcript</span>
                    </div>
                </nav>
                
                <!-- Back or Next -->
                <div class="flex flex-row space-x-2">
                    <div class="bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <a href="/started" class="text-sm font-semibold mx-2 p-2 flex items-center space-x-1">
                            Back
                        </a>
                    </div>
                    <div class="bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <a href="/transcript" class="text-sm font-semibold mx-2 p-2 flex items-center space-x-1">
                            Next
                        </a>
                    </div>
                </div>
            </div>

            <!-- Upload Area -->
            <div class="flex-1 p-10 flex items-center justify-center">
                <div class="w-full max-w-4xl">
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                            Upload Your Media
                        </h1>
                        <p class="text-sm text-gray-600 mb-8">
                            Drag and drop your files or paste a link to get started
                        </p>
                    </div>

                    <!-- Upload Options -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Drag & Drop Area -->
                        <div class="bg-white rounded-2xl shadow-lg border-2 border-dashed border-gray-300 hover:border-blue-400 transition-all duration-300">
                            <div class="p-8 text-center" id="dropZone">
                                <div class="mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Drop files here</h3>
                                    <p class="text-gray-600 mb-4 text-md">or click to browse</p>
                                </div>
                                
                                <input type="file" id="fileInput" class="hidden" accept=".mp3,.mp4,.wav,.m4a,.avi,.mov,.wmv,.flv" multiple>
                                <button onclick="document.getElementById('fileInput').click()" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-xl hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    Choose Files
                                </button>
                                
                                <div class="mt-4 text-sm text-gray-500 space-y-4">
                                    <p>Supported: MP3, MP4, WAV, M4A, AVI, MOV, WMV, FLV</p>
                                    <p>Max size: 500MB per file</p>
                                </div>
                            </div>
                        </div>

                        <!-- URL/Link Input -->
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                            <div class="p-8">
                                <div class="mb-6">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">Paste Link</h3>
                                    <p class="text-gray-600 mb-6 text-center text-md">from YouTube, Google Drive, or any URL</p>
                                </div>
                                
                                <form class="space-y-4">
                                    <div>
                                        <label for="mediaUrl" class="block text-sm font-medium text-gray-700 mb-2">Media URL</label>
                                        <input type="url" id="mediaUrl" name="mediaUrl" placeholder="https://youtube.com/watch?v=..." class="text-sm w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                    </div>
                                    <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold rounded-xl hover:from-purple-600 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                        Import from URL
                                    </button>
                                </form>
                                
                                <div class="mt-4 text-sm text-gray-500 text-center">
                                    Supports YouTube, Vimeo, Google Drive, Dropbox
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- File Preview Area -->
                    <div id="filePreview" class="mt-8 hidden">
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                                </svg>
                                Selected Files
                            </h3>
                            <div id="fileList" class="space-y-2">
                            </div>
                            <div class="mt-6 pt-6 border-t border-gray-200 flex justify-center">
                                <button class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"/>
                                    </svg>
                                    Start Transcription
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>