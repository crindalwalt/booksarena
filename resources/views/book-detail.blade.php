<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details - BooksArena</title>
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
                <a href="/books" class="text-brown-600 hover:text-brown-800 transition">Books</a>
                <svg class="w-4 h-4 text-brown-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-brown-800 font-medium">The Great Gatsby</span>
            </div>
        </div>
    </section>

    <!-- Book Details -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Book Image -->
                <div class="flex justify-center">
                    <div class="bg-white border-2 border-beige-200 rounded-2xl p-8 shadow-lg hover-lift max-w-md w-full">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-300 to-brown-500 rounded-xl flex items-center justify-center">
                            <svg class="w-32 h-32 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Book Info -->
                <div class="space-y-6">
                    <div>
                        <div class="inline-block px-3 py-1 bg-brown-100 border border-brown-200 rounded-full text-sm font-medium text-brown-700 mb-4">
                            Fiction / Classic
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold text-brown-800 mb-4">The Great Gatsby</h1>
                        <p class="text-xl text-brown-600 mb-2">by <a href="/authors/1" class="font-semibold hover:text-brown-800 transition underline">F. Scott Fitzgerald</a></p>

                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-1">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-brown-700 font-semibold">4.8</span>
                                <span class="text-brown-500">(2,547 reviews)</span>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-b border-beige-200 py-6">
                        <div class="flex items-baseline space-x-4">
                            <span class="text-4xl font-bold text-brown-700">$24.99</span>
                            <span class="text-xl text-brown-500 line-through">$32.99</span>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full">Save 24%</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-brown-700"><span class="font-semibold">In Stock</span> - Ships within 24 hours</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-brown-700">Fast Delivery: <span class="font-semibold">3-5 business days</span></span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="text-brown-700">Payment: <span class="font-semibold">Cash on Delivery Available</span></span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <div class="flex items-center space-x-3 bg-white border-2 border-beige-200 rounded-lg px-4 py-2">
                            <button class="text-brown-600 hover:text-brown-800 font-bold text-xl">-</button>
                            <span class="font-semibold text-brown-800 w-12 text-center">1</span>
                            <button class="text-brown-600 hover:text-brown-800 font-bold text-xl">+</button>
                        </div>
                        <a href="/checkout" class="flex-1 px-8 py-4 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition shadow-lg hover:shadow-xl text-center">
                            Add to Cart
                        </a>
                        <button class="px-6 py-4 bg-white border-2 border-brown-300 hover:border-brown-500 text-brown-700 font-semibold rounded-lg transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>

                    <div class="bg-beige-100 border-2 border-beige-200 rounded-xl p-6 mt-6">
                        <h3 class="font-semibold text-brown-800 mb-3">Book Details</h3>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-brown-600">Publisher:</span>
                                <p class="font-medium text-brown-800">Scribner</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Pages:</span>
                                <p class="font-medium text-brown-800">180</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Language:</span>
                                <p class="font-medium text-brown-800">English</p>
                            </div>
                            <div>
                                <span class="text-brown-600">ISBN:</span>
                                <p class="font-medium text-brown-800">978-0743273565</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Dimensions:</span>
                                <p class="font-medium text-brown-800">5.2 x 0.5 x 8 inches</p>
                            </div>
                            <div>
                                <span class="text-brown-600">Weight:</span>
                                <p class="font-medium text-brown-800">7.2 ounces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="bg-white border-2 border-beige-200 rounded-xl p-8 mb-12">
                <div class="border-b border-beige-200 mb-6">
                    <nav class="flex space-x-8">
                        <button class="pb-4 border-b-2 border-brown-600 font-semibold text-brown-800">Description</button>
                        <button class="pb-4 text-brown-600 hover:text-brown-800 transition">Reviews (2,547)</button>
                        <button class="pb-4 text-brown-600 hover:text-brown-800 transition">Shipping Info</button>
                    </nav>
                </div>

                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-brown-800 mb-4">About This Book</h3>
                    <p class="text-brown-700 leading-relaxed mb-4">
                        The Great Gatsby, F. Scott Fitzgerald's third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted "gin was the national drink and sex the national obsession," it is an exquisitely crafted tale of America in the 1920s.
                    </p>
                    <p class="text-brown-700 leading-relaxed mb-4">
                        The Great Gatsby is one of the great classics of twentieth-century literature. First published in 1925, this quintessential novel of the Jazz Age has been acclaimed by generations of readers. The story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when, as The New York Times remarked, "gin was the national drink and sex the national obsession," is an exquisitely crafted tale of America in the 1920s that resonates with the power of myth.
                    </p>
                    <p class="text-brown-700 leading-relaxed">
                        A true classic of twentieth-century literature, this edition has been updated to resonate with a new generation of readers. Powerful, poignant, and timeless, The Great Gatsby explores what it means to be human and whether we can ever truly grasp the American Dream.
                    </p>
                </div>
            </div>

            <!-- Related Books -->
            <div>
                <h2 class="text-3xl font-bold text-brown-800 mb-8">You May Also Like</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                    <!-- Related Book 1 -->
                    <a href="/books/2" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">1984</h3>
                        <p class="text-xs text-brown-500 mb-2">George Orwell</p>
                        <span class="text-sm font-bold text-brown-700">$19.99</span>
                    </a>

                    <!-- Related Book 2 -->
                    <a href="/books/3" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-400 to-brown-600 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">To Kill a Mockingbird</h3>
                        <p class="text-xs text-brown-500 mb-2">Harper Lee</p>
                        <span class="text-sm font-bold text-brown-700">$22.99</span>
                    </a>

                    <!-- Related Book 3 -->
                    <a href="/books/4" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-300 to-brown-300 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">Pride and Prejudice</h3>
                        <p class="text-xs text-brown-500 mb-2">Jane Austen</p>
                        <span class="text-sm font-bold text-brown-700">$18.99</span>
                    </a>

                    <!-- Related Book 4 -->
                    <a href="/books/5" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-brown-500 to-brown-700 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">The Catcher in the Rye</h3>
                        <p class="text-xs text-brown-500 mb-2">J.D. Salinger</p>
                        <span class="text-sm font-bold text-brown-700">$21.99</span>
                    </a>

                    <!-- Related Book 5 -->
                    <a href="/books/6" class="bg-white border-2 border-beige-200 rounded-xl p-4 hover-lift cursor-pointer group">
                        <div class="aspect-[2/3] bg-gradient-to-br from-beige-500 to-brown-500 rounded-lg mb-3 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-brown-800 text-sm mb-1 group-hover:text-brown-600 transition line-clamp-2">The Hobbit</h3>
                        <p class="text-xs text-brown-500 mb-2">J.R.R. Tolkien</p>
                        <span class="text-sm font-bold text-brown-700">$26.99</span>
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

    <script>
        // Quantity controls
        const minusBtn = document.querySelector('button:has-text("-")');
        const plusBtn = document.querySelector('button:has-text("+")');

        // Tab switching
        const tabs = document.querySelectorAll('nav button');
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => {
                    t.classList.remove('border-brown-600', 'font-semibold', 'text-brown-800');
                    t.classList.add('text-brown-600');
                });
                this.classList.add('border-brown-600', 'font-semibold', 'text-brown-800');
                this.classList.remove('text-brown-600');
            });
        });
    </script>
</body>
</html>
