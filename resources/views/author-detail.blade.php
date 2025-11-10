<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Profile - BooksArena</title>
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

    <!-- Breadcrumb -->
    <section class="bg-white border-b border-beige-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-sm">
                <a href="/" class="text-brown-600 hover:text-brown-800 transition">Home</a>
                <svg class="w-4 h-4 text-brown-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="/authors" class="text-brown-600 hover:text-brown-800 transition">Authors</a>
                <svg class="w-4 h-4 text-brown-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-brown-800 font-medium">F. Scott Fitzgerald</span>
            </div>
        </div>
    </section>

    <!-- Author Profile Header -->
    <section class="bg-gradient-to-br from-beige-100 via-white to-beige-50 py-16 border-b border-beige-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="w-40 h-40 bg-gradient-to-br from-brown-300 to-brown-500 rounded-full flex items-center justify-center shadow-xl">
                    <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>

                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-brown-800 mb-3">F. Scott Fitzgerald</h1>
                    <p class="text-xl text-brown-600 mb-4">American Novelist & Short Story Writer</p>

                    <div class="flex flex-wrap justify-center md:justify-start gap-6 mb-6">
                        <div class="text-center">
                            <p class="text-2xl font-bold text-brown-700">12</p>
                            <p class="text-sm text-brown-500">Books</p>
                        </div>
                        <div class="h-12 w-px bg-beige-300"></div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-brown-700 flex items-center justify-center">
                                4.8
                                <svg class="w-5 h-5 text-yellow-500 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </p>
                            <p class="text-sm text-brown-500">Avg. Rating</p>
                        </div>
                        <div class="h-12 w-px bg-beige-300"></div>
                        <div class="text-center">
                            <p class="text-2xl font-bold text-brown-700">50K+</p>
                            <p class="text-sm text-brown-500">Readers</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                        <span class="px-4 py-2 bg-brown-100 border border-brown-200 rounded-full text-sm font-medium text-brown-700">Fiction</span>
                        <span class="px-4 py-2 bg-brown-100 border border-brown-200 rounded-full text-sm font-medium text-brown-700">Classic</span>
                        <span class="px-4 py-2 bg-brown-100 border border-brown-200 rounded-full text-sm font-medium text-brown-700">Jazz Age</span>
                        <span class="px-4 py-2 bg-brown-100 border border-brown-200 rounded-full text-sm font-medium text-brown-700">American Literature</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Author Biography -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="md:col-span-2">
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-8">
                        <h2 class="text-3xl font-bold text-brown-800 mb-6">About the Author</h2>
                        <div class="prose max-w-none text-brown-700 leading-relaxed space-y-4">
                            <p>
                                Francis Scott Key Fitzgerald (September 24, 1896 – December 21, 1940) was an American novelist, essayist, and short story writer. He is best known for his novels depicting the flamboyance and excess of the Jazz Age—a term he popularized. During his lifetime, he published four novels, four story collections, and 164 short stories.
                            </p>
                            <p>
                                Born into a middle-class family in Saint Paul, Minnesota, Fitzgerald attended Princeton University, where he befriended Edmund Wilson and John Peale Bishop. He dropped out in 1917 to join the United States Army during World War I. While stationed in Alabama, he met Zelda Sayre, a Southern debutante who belonged to Montgomery's exclusive country club set. After he was discharged from the army, the couple relocated to New York City where Fitzgerald's debut novel, This Side of Paradise, was published in 1920.
                            </p>
                            <p>
                                His most famous work, The Great Gatsby, published in 1925, is widely regarded as a masterpiece of American literature and has been the basis for numerous adaptations of the same name, spanning film, television, theater, and literature. His third novel, Tender Is the Night, was published in 1934. His fourth and final completed novel, The Love of the Last Tycoon, was published posthumously in 1941.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6">
                        <h3 class="font-semibold text-lg text-brown-800 mb-4">Author Details</h3>
                        <div class="space-y-3 text-sm">
                            <div>
                                <span class="text-brown-600">Born:</span>
                                <p class="font-medium text-brown-800">September 24, 1896</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Nationality:</span>
                                <p class="font-medium text-brown-800">American</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Genre:</span>
                                <p class="font-medium text-brown-800">Fiction, Romance, Tragedy</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Notable Works:</span>
                                <p class="font-medium text-brown-800">The Great Gatsby, Tender Is the Night</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Awards:</span>
                                <p class="font-medium text-brown-800">Literary Hall of Fame</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-beige-100 border-2 border-beige-200 rounded-xl p-6">
                        <h3 class="font-semibold text-lg text-brown-800 mb-3">Famous Quote</h3>
                        <blockquote class="text-brown-700 italic">
                            "So we beat on, boats against the current, borne back ceaselessly into the past."
                        </blockquote>
                        <p class="text-sm text-brown-600 mt-2">— The Great Gatsby</p>
                    </div>
                </div>
            </div>

            <!-- Author's Books -->
            <div>
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-bold text-brown-800">Books by F. Scott Fitzgerald</h2>
                    <select class="px-4 py-2 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 bg-white">
                        <option>All Books</option>
                        <option>Most Popular</option>
                        <option>Newest</option>
                        <option>Highest Rated</option>
                    </select>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
                    <!-- Book 1 -->
                    <a href="/books/1" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">The Great Gatsby</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$24.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.8</span>
                            </div>
                        </div>
                    </a>

                    <!-- Book 2 -->
                    <a href="/books/2" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">Tender Is the Night</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$22.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.6</span>
                            </div>
                        </div>
                    </a>

                    <!-- Book 3 -->
                    <a href="/books/3" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-400 to-brown-600 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">This Side of Paradise</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$20.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.5</span>
                            </div>
                        </div>
                    </a>

                    <!-- Book 4 -->
                    <a href="/books/4" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-300 to-brown-300 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">The Beautiful and Damned</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$21.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.4</span>
                            </div>
                        </div>
                    </a>

                    <!-- Book 5 -->
                    <a href="/books/5" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-500 to-brown-700 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">Tales of the Jazz Age</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$19.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.7</span>
                            </div>
                        </div>
                    </a>

                    <!-- Book 6 -->
                    <a href="/books/6" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-500 to-brown-500 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">The Last Tycoon</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-sm font-bold text-brown-700">$18.99</span>
                            <div class="flex items-center space-x-1">
                                <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-brown-600">4.5</span>
                            </div>
                        </div>
                    </a>
                </div>
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
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold text-brown-800 mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Help Center</a></li>
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
