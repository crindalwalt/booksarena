<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooksArena - Discover Your Next Great Read</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        beige: {
                            50: '#fdfcfb',
                            100: '#f8f6f3',
                            200: '#f5f1eb',
                            300: '#e8dfd3',
                            400: '#d4c4b0',
                            500: '#c0a98f',
                            600: '#a88f72',
                        },
                        brown: {
                            50: '#f6f4f2',
                            100: '#e8e3dc',
                            200: '#d4c8ba',
                            300: '#b8a593',
                            400: '#9d8372',
                            500: '#8a6f5b',
                            600: '#6d5647',
                            700: '#5a4639',
                            800: '#4a3a2f',
                            900: '#3d3128',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(109, 86, 71, 0.15);
        }

        .smooth-scroll {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-beige-50 text-brown-800 smooth-scroll">
    <!-- Navigation -->
    <nav class="bg-white border-b border-beige-300 sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center space-x-2">
                        <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                        </svg>
                        <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-brown-600 hover:text-brown-800 font-medium transition">Home</a>
                    <a href="/books" class="text-brown-600 hover:text-brown-800 font-medium transition">Books</a>
                    <a href="/authors" class="text-brown-600 hover:text-brown-800 font-medium transition">Authors</a>
                    <a href="#about" class="text-brown-600 hover:text-brown-800 font-medium transition">About</a>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="text-brown-600 hover:text-brown-800 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    <button class="relative text-brown-600 hover:text-brown-800 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-brown-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-beige-100 via-white to-beige-50 py-20 md:py-32 border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="inline-block px-4 py-2 bg-brown-100 border border-brown-200 rounded-full">
                        <span class="text-brown-700 text-sm font-medium">📚 Welcome to BooksArena</span>
                    </div>

                    <h1 class="text-5xl md:text-6xl font-bold text-brown-800 leading-tight">
                        Discover Your<br/>
                        <span class="text-brown-600">Next Great Read</span>
                    </h1>

                    <p class="text-xl text-brown-600 leading-relaxed">
                        Explore thousands of books from bestselling authors. From timeless classics to modern masterpieces, find your perfect story today.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/books" class="px-8 py-4 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition shadow-lg hover:shadow-xl text-center">
                            Browse Books
                        </a>
                        <a href="/authors" class="px-8 py-4 bg-white border-2 border-brown-300 hover:border-brown-500 text-brown-700 font-semibold rounded-lg transition text-center">
                            Meet Authors
                        </a>
                    </div>

                    <div class="flex items-center space-x-8 pt-4">
                        <div class="text-center">
                            <p class="text-3xl font-bold text-brown-700">10K+</p>
                            <p class="text-sm text-brown-500">Books</p>
                        </div>
                        <div class="h-12 w-px bg-beige-300"></div>
                        <div class="text-center">
                            <p class="text-3xl font-bold text-brown-700">500+</p>
                            <p class="text-sm text-brown-500">Authors</p>
                        </div>
                        <div class="h-12 w-px bg-beige-300"></div>
                        <div class="text-center">
                            <p class="text-3xl font-bold text-brown-700">50K+</p>
                            <p class="text-sm text-brown-500">Happy Readers</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10 bg-white border-2 border-brown-200 rounded-2xl p-8 shadow-2xl hover-lift">
                        <div class="aspect-[3/4] bg-gradient-to-br from-brown-200 to-brown-400 rounded-lg flex items-center justify-center">
                            <svg class="w-32 h-32 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute top-8 -left-8 bg-white border-2 border-brown-200 rounded-2xl p-6 shadow-xl hover-lift">
                        <div class="w-24 h-32 bg-gradient-to-br from-beige-300 to-beige-500 rounded-lg"></div>
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-white border-2 border-brown-200 rounded-2xl p-6 shadow-xl hover-lift">
                        <div class="w-24 h-32 bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Books Section -->
    <section class="py-20 bg-white border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-4xl font-bold text-brown-800 mb-2">Popular Books</h2>
                    <p class="text-brown-600">Trending reads everyone's talking about</p>
                </div>
                <a href="/books" class="hidden md:flex items-center space-x-2 text-brown-600 hover:text-brown-800 font-medium transition group">
                    <span>View All</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Book Card 1 -->
                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                    <div class="aspect-[2/3] bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition">The Great Gatsby</h3>
                    <p class="text-sm text-brown-500 mb-3">F. Scott Fitzgerald</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-brown-700">$24.99</span>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm text-brown-600">4.8</span>
                        </div>
                    </div>
                </div>

                <!-- Book Card 2 -->
                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                    <div class="aspect-[2/3] bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition">1984</h3>
                    <p class="text-sm text-brown-500 mb-3">George Orwell</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-brown-700">$19.99</span>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm text-brown-600">4.9</span>
                        </div>
                    </div>
                </div>

                <!-- Book Card 3 -->
                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                    <div class="aspect-[2/3] bg-gradient-to-br from-brown-400 to-brown-600 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition">To Kill a Mockingbird</h3>
                    <p class="text-sm text-brown-500 mb-3">Harper Lee</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-brown-700">$22.99</span>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm text-brown-600">4.7</span>
                        </div>
                    </div>
                </div>

                <!-- Book Card 4 -->
                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                    <div class="aspect-[2/3] bg-gradient-to-br from-beige-300 to-brown-300 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                        <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition">Pride and Prejudice</h3>
                    <p class="text-sm text-brown-500 mb-3">Jane Austen</p>
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-brown-700">$18.99</span>
                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="text-sm text-brown-600">4.6</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:hidden text-center mt-8">
                <a href="/books" class="inline-flex items-center space-x-2 text-brown-600 hover:text-brown-800 font-medium transition">
                    <span>View All Books</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Authors Section -->
    <section class="py-20 bg-beige-50 border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-4xl font-bold text-brown-800 mb-2">Popular Authors</h2>
                    <p class="text-brown-600">Meet the minds behind the stories</p>
                </div>
                <a href="/authors" class="hidden md:flex items-center space-x-2 text-brown-600 hover:text-brown-800 font-medium transition group">
                    <span>View All</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Author Card 1 -->
                <div class="bg-white border-2 border-beige-200 rounded-xl p-8 hover-lift cursor-pointer group text-center">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-brown-300 to-brown-500 rounded-full mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl text-brown-800 mb-1 group-hover:text-brown-600 transition">F. Scott Fitzgerald</h3>
                    <p class="text-brown-500 mb-4">American Novelist</p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-brown-600">
                        <span>📚 12 Books</span>
                        <span>⭐ 4.8</span>
                    </div>
                </div>

                <!-- Author Card 2 -->
                <div class="bg-white border-2 border-beige-200 rounded-xl p-8 hover-lift cursor-pointer group text-center">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-beige-400 to-brown-400 rounded-full mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl text-brown-800 mb-1 group-hover:text-brown-600 transition">Jane Austen</h3>
                    <p class="text-brown-500 mb-4">English Novelist</p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-brown-600">
                        <span>📚 8 Books</span>
                        <span>⭐ 4.9</span>
                    </div>
                </div>

                <!-- Author Card 3 -->
                <div class="bg-white border-2 border-beige-200 rounded-xl p-8 hover-lift cursor-pointer group text-center">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-brown-400 to-brown-600 rounded-full mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-xl text-brown-800 mb-1 group-hover:text-brown-600 transition">George Orwell</h3>
                    <p class="text-brown-500 mb-4">English Novelist</p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-brown-600">
                        <span>📚 10 Books</span>
                        <span>⭐ 4.7</span>
                    </div>
                </div>
            </div>

            <div class="md:hidden text-center mt-8">
                <a href="/authors" class="inline-flex items-center space-x-2 text-brown-600 hover:text-brown-800 font-medium transition">
                    <span>View All Authors</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-brown-800 mb-4">Why Choose BooksArena?</h2>
                <p class="text-xl text-brown-600">Your trusted partner in literary discovery</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 mx-auto bg-brown-100 border-2 border-brown-200 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-brown-800 mb-2">Cash on Delivery</h3>
                    <p class="text-brown-600">Pay safely when your books arrive at your doorstep</p>
                </div>

                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 mx-auto bg-brown-100 border-2 border-brown-200 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-brown-800 mb-2">Fast Delivery</h3>
                    <p class="text-brown-600">Get your books delivered within 3-5 business days</p>
                </div>

                <div class="bg-beige-50 border-2 border-beige-200 rounded-xl p-8 text-center hover-lift">
                    <div class="w-16 h-16 mx-auto bg-brown-100 border-2 border-brown-200 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-brown-800 mb-2">Quality Guaranteed</h3>
                    <p class="text-brown-600">Authentic books from verified publishers and sellers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-brown-600 to-brown-700 border-b border-brown-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Start Your Reading Journey Today</h2>
            <p class="text-xl text-brown-100 mb-8">Join thousands of book lovers discovering their next favorite read</p>
            <a href="/books" class="inline-block px-10 py-4 bg-white text-brown-700 font-semibold rounded-lg hover:bg-beige-50 transition shadow-xl">
                Explore Books Collection
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-beige-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="#" class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                        </svg>
                        <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                    </a>
                    <p class="text-brown-600 max-w-md">Your premier destination for discovering and purchasing books from around the world. Quality reads, delivered to your door.</p>
                </div>

                <div>
                    <h3 class="font-semibold text-brown-800 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/books" class="text-brown-600 hover:text-brown-800 transition">All Books</a></li>
                        <li><a href="/authors" class="text-brown-600 hover:text-brown-800 transition">Authors</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Categories</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">New Releases</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-brown-800 mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Help Center</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Shipping Info</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Returns</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-beige-200 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-brown-600 mb-4 md:mb-0">&copy; 2025 BooksArena. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition">Privacy Policy</a>
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition">Terms of Service</a>
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
