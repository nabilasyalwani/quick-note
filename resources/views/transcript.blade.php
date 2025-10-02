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
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-white text-sm font-medium hidden sm:block">Upload File</span>
                    </div>
                    
                    <div class="w-8 h-0.5 bg-white"></div>
                    
                    <!-- Step 3: Transcript -->
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-white border-2 border-white rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <span class="text-white text-sm font-medium hidden sm:block">Transcript</span>
                    </div>
                </nav>
                
                <!-- Back or Next -->
                <div class="flex flex-row space-x-2">
                    <div class="bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <a href="/upload" class="text-sm font-semibold mx-2 p-2 flex items-center space-x-1">
                            Back
                        </a>
                    </div>
                    <div class="bg-white/20 rounded-xl flex items-center justify-center text-white hover:bg-white/30 transition">
                        <a href="/started" class="text-sm font-semibold mx-2 p-2 flex items-center space-x-1">
                            Next
                        </a>
                    </div>
                </div>
            </div>

            <!-- Download Area -->
            <div class="flex-1 p-10 flex items-center justify-center">
                <div class="w-full max-w-4xl">
                    <div class="text-center mb-8">
                        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                            Your video has been transcribed to an PDF document!
                        </h1>
                        <p class="text-sm text-gray-600 mb-8">
                            You can download it using the button below.
                        </p>
                    </div>

                    <!-- Transcript Result -->
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden">
                        <div class="px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">transcript_audio.pdf</h3>
                                        <p class="text-sm text-gray-500">Generated • 2.3 MB • PDF Document</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>