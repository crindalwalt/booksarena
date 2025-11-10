<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books - BooksArena</title>
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
    </style>
</head>
<body class="bg-beige-50 text-brown-800">
    <!-- Navigation -->
    <nav class="bg-white border-b border-beige-300 sticky top-0 z-50 backdrop-blur-lg bg-opacity-90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                        </svg>
                        <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-brown-600 hover:text-brown-800 font-medium transition">Home</a>
                    <a href="/books" class="text-brown-800 font-semibold border-b-2 border-brown-600">Books</a>
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

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-beige-100 via-white to-beige-50 py-16 border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-5xl font-bold text-brown-800 mb-4">Our Book Collection</h1>
                <p class="text-xl text-brown-600">Discover thousands of books across all genres</p>
            </div>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="Search for books, authors, or ISBN..." class="w-full px-6 py-4 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition bg-white">
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 px-6 py-2 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters and Books Grid -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Filters Sidebar -->
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6 sticky top-24">
                        <h3 class="font-semibold text-lg text-brown-800 mb-6">Filters</h3>

                        <!-- Category Filter -->
                        <div class="mb-6">
                            <h4 class="font-medium text-brown-700 mb-3">Categories</h4>
                            <div class="space-y-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Fiction</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Non-Fiction</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Mystery</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Romance</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Science Fiction</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600">Biography</span>
                                </label>
                            </div>
                        </div>

                        <!-- Price Range -->
                        <div class="mb-6 pb-6 border-b border-beige-200">
                            <h4 class="font-medium text-brown-700 mb-3">Price Range</h4>
                            <div class="space-y-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" name="price" class="mr-2 text-brown-600 focus:ring-brown-500">
                                    <span class="text-brown-600">Under $20</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" name="price" class="mr-2 text-brown-600 focus:ring-brown-500">
                                    <span class="text-brown-600">$20 - $40</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" name="price" class="mr-2 text-brown-600 focus:ring-brown-500">
                                    <span class="text-brown-600">$40 - $60</span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="radio" name="price" class="mr-2 text-brown-600 focus:ring-brown-500">
                                    <span class="text-brown-600">Over $60</span>
                                </label>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="mb-6">
                            <h4 class="font-medium text-brown-700 mb-3">Rating</h4>
                            <div class="space-y-2">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600 flex items-center">
                                        ⭐⭐⭐⭐⭐ <span class="ml-1">(5)</span>
                                    </span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600 flex items-center">
                                        ⭐⭐⭐⭐ <span class="ml-1">(4+)</span>
                                    </span>
                                </label>
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" class="mr-2 text-brown-600 focus:ring-brown-500 rounded">
                                    <span class="text-brown-600 flex items-center">
                                        ⭐⭐⭐ <span class="ml-1">(3+)</span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <button class="w-full px-4 py-2 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition">
                            Apply Filters
                        </button>
                    </div>
                </aside>

                <!-- Books Grid -->
                <main class="flex-1">
                    <!-- Sort and View Options -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                        <p class="text-brown-600">Showing <span class="font-semibold">1-24</span> of <span class="font-semibold">1,247</span> books</p>

                        <div class="flex items-center space-x-4">
                            <label class="text-brown-600">Sort by:</label>
                            <select class="px-4 py-2 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 bg-white">
                                <option>Popular</option>
                                <option>Newest</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Rating</option>
                            </select>
                        </div>
                    </div>

                    <!-- Books Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Book Card 1 -->
                        <a href="/books/1" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">The Great Gatsby</h3>
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
                        </a>

                        <!-- Book Card 2 -->
                        <a href="/books/2" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">1984</h3>
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
                        </a>

                        <!-- Book Card 3 -->
                        <a href="/books/3" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-brown-400 to-brown-600 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">To Kill a Mockingbird</h3>
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
                        </a>

                        <!-- Book Card 4 -->
                        <a href="/books/4" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-beige-300 to-brown-300 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">Pride and Prejudice</h3>
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
                        </a>

                        <!-- Book Card 5 -->
                        <a href="/books/5" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-brown-500 to-brown-700 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">The Catcher in the Rye</h3>
                            <p class="text-sm text-brown-500 mb-3">J.D. Salinger</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-brown-700">$21.99</span>
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="text-sm text-brown-600">4.5</span>
                                </div>
                            </div>
                        </a>

                        <!-- Book Card 6 -->
                        <a href="/books/6" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-beige-500 to-brown-500 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">The Hobbit</h3>
                            <p class="text-sm text-brown-500 mb-3">J.R.R. Tolkien</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-brown-700">$26.99</span>
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="text-sm text-brown-600">4.9</span>
                                </div>
                            </div>
                        </a>

                        <!-- Book Card 7 -->
                        <a href="/books/7" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-brown-300 to-brown-600 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">Harry Potter and the Sorcerer's Stone</h3>
                            <p class="text-sm text-brown-500 mb-3">J.K. Rowling</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-brown-700">$29.99</span>
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="text-sm text-brown-600">5.0</span>
                                </div>
                            </div>
                        </a>

                        <!-- Book Card 8 -->
                        <a href="/books/8" class="bg-white border-2 border-beige-200 rounded-xl p-6 hover-lift cursor-pointer group">
                            <div class="aspect-[2/3] bg-gradient-to-br from-beige-400 to-brown-500 rounded-lg mb-4 flex items-center justify-center overflow-hidden">
                                <svg class="w-16 h-16 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-brown-800 mb-1 group-hover:text-brown-600 transition line-clamp-2">The Lord of the Rings</h3>
                            <p class="text-sm text-brown-500 mb-3">J.R.R. Tolkien</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-brown-700">$45.99</span>
                                <div class="flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span class="text-sm text-brown-600">4.9</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <button class="px-4 py-2 border-2 border-beige-300 rounded-lg hover:border-brown-500 transition disabled:opacity-50" disabled>
                                <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>

                            <button class="px-4 py-2 bg-brown-600 text-white font-semibold rounded-lg">1</button>
                            <button class="px-4 py-2 border-2 border-beige-300 rounded-lg hover:border-brown-500 transition text-brown-600">2</button>
                            <button class="px-4 py-2 border-2 border-beige-300 rounded-lg hover:border-brown-500 transition text-brown-600">3</button>
                            <span class="px-4 py-2 text-brown-600">...</span>
                            <button class="px-4 py-2 border-2 border-beige-300 rounded-lg hover:border-brown-500 transition text-brown-600">52</button>

                            <button class="px-4 py-2 border-2 border-beige-300 rounded-lg hover:border-brown-500 transition">
                                <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </nav>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-beige-200 py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                        </svg>
                        <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                    </a>
                    <p class="text-brown-600 max-w-md">Your premier destination for discovering and purchasing books from around the world.</p>
                </div>

                <div>
                    <h3 class="font-semibold text-brown-800 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/books" class="text-brown-600 hover:text-brown-800 transition">All Books</a></li>
                        <li><a href="/authors" class="text-brown-600 hover:text-brown-800 transition">Authors</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Categories</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-brown-800 mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Help Center</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Shipping</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-beige-200 pt-8 text-center">
                <p class="text-brown-600">&copy; 2025 BooksArena. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
