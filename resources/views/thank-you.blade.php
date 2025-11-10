<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed - BooksArena</title>
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

        @keyframes checkmark {
            0% {
                stroke-dashoffset: 100;
            }
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale-in {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .checkmark-circle {
            animation: scale-in 0.5s ease-out;
        }

        .checkmark-path {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: checkmark 0.5s ease-out 0.3s forwards;
        }
    </style>
</head>
<body class="bg-beige-50 text-brown-800">
    <!-- Navigation -->
    <nav class="bg-white border-b border-beige-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                    </svg>
                    <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                </a>

                <div class="flex items-center space-x-4">
                    <a href="/" class="text-brown-600 hover:text-brown-800 font-medium transition">Back to Home</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Thank You Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Success Icon -->
            <div class="text-center mb-8">
                <div class="inline-block">
                    <svg class="w-32 h-32 checkmark-circle" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="#6d5647" opacity="0.1"/>
                        <circle cx="50" cy="50" r="40" fill="none" stroke="#6d5647" stroke-width="3" class="checkmark-circle"/>
                        <path class="checkmark-path" fill="none" stroke="#6d5647" stroke-width="4" stroke-linecap="round" d="M30 50 L45 65 L70 35"/>
                    </svg>
                </div>
            </div>

            <!-- Success Message -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-brown-800 mb-4">Thank You for Your Order!</h1>
                <p class="text-xl text-brown-600 mb-2">Your order has been successfully placed</p>
                <p class="text-brown-600">We'll send you a confirmation email shortly</p>
            </div>

            <!-- Order Details Card -->
            <div class="bg-white border-2 border-beige-200 rounded-xl p-8 mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 pb-6 border-b border-beige-200">
                    <div>
                        <h2 class="text-2xl font-bold text-brown-800 mb-2">Order Confirmed</h2>
                        <p class="text-brown-600">Order #<span class="font-semibold text-brown-800">BA-2025-001247</span></p>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <span class="inline-block px-4 py-2 bg-green-100 border-2 border-green-300 text-green-800 font-semibold rounded-lg">
                            ✓ Confirmed
                        </span>
                    </div>
                </div>

                <!-- Order Info Grid -->
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-beige-50 border border-beige-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <h3 class="font-semibold text-brown-800">Customer</h3>
                        </div>
                        <p class="text-sm text-brown-700">John Doe</p>
                        <p class="text-sm text-brown-600">john.doe@example.com</p>
                        <p class="text-sm text-brown-600">+1 (555) 000-0000</p>
                    </div>

                    <div class="bg-beige-50 border border-beige-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <h3 class="font-semibold text-brown-800">Shipping To</h3>
                        </div>
                        <p class="text-sm text-brown-700">123 Main Street</p>
                        <p class="text-sm text-brown-600">New York, NY 10001</p>
                        <p class="text-sm text-brown-600">United States</p>
                    </div>

                    <div class="bg-beige-50 border border-beige-200 rounded-lg p-4">
                        <div class="flex items-center space-x-3 mb-2">
                            <svg class="w-5 h-5 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <h3 class="font-semibold text-brown-800">Payment</h3>
                        </div>
                        <p class="text-sm text-brown-700 font-medium">Cash on Delivery</p>
                        <p class="text-sm text-brown-600">Pay when delivered</p>
                        <p class="text-sm text-brown-600">Total: $75.57</p>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="mb-6">
                    <h3 class="font-semibold text-lg text-brown-800 mb-4">Order Items</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 pb-4 border-b border-beige-200">
                            <div class="w-16 h-24 bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg flex-shrink-0 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-brown-800">The Great Gatsby</h4>
                                <p class="text-sm text-brown-600">by F. Scott Fitzgerald</p>
                                <p class="text-sm text-brown-600 mt-1">Quantity: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="font-semibold text-brown-700">$24.99</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 pb-4 border-b border-beige-200">
                            <div class="w-16 h-24 bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg flex-shrink-0 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-brown-800">1984</h4>
                                <p class="text-sm text-brown-600">by George Orwell</p>
                                <p class="text-sm text-brown-600 mt-1">Quantity: 2</p>
                            </div>
                            <div class="text-right">
                                <p class="font-semibold text-brown-700">$39.98</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Total -->
                <div class="bg-beige-50 border border-beige-200 rounded-lg p-4">
                    <div class="space-y-2">
                        <div class="flex justify-between text-brown-700">
                            <span>Subtotal</span>
                            <span>$64.97</span>
                        </div>
                        <div class="flex justify-between text-brown-700">
                            <span>Shipping</span>
                            <span>$5.00</span>
                        </div>
                        <div class="flex justify-between text-brown-700">
                            <span>Tax</span>
                            <span>$5.60</span>
                        </div>
                        <div class="border-t border-beige-300 pt-2 mt-2">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-brown-800">Total</span>
                                <span class="text-2xl font-bold text-brown-700">$75.57</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delivery Info -->
            <div class="bg-gradient-to-br from-brown-600 to-brown-700 border-2 border-brown-800 rounded-xl p-8 mb-8 text-white">
                <div class="flex items-start space-x-4">
                    <svg class="w-12 h-12 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold mb-2">What Happens Next?</h3>
                        <ul class="space-y-2 text-brown-100">
                            <li class="flex items-start">
                                <span class="mr-2">1.</span>
                                <span>You'll receive an order confirmation email at your registered email address</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">2.</span>
                                <span>We'll process your order and prepare it for shipment within 24 hours</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">3.</span>
                                <span>Your books will be delivered within 3-5 business days</span>
                            </li>
                            <li class="flex items-start">
                                <span class="mr-2">4.</span>
                                <span>Pay in cash when your order arrives at your doorstep</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="px-8 py-4 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition shadow-lg hover:shadow-xl text-center">
                    Continue Shopping
                </a>
                <a href="/books" class="px-8 py-4 bg-white border-2 border-brown-300 hover:border-brown-500 text-brown-700 font-semibold rounded-lg transition text-center">
                    Browse More Books
                </a>
            </div>

            <!-- Help Section -->
            <div class="mt-12 text-center">
                <p class="text-brown-600 mb-4">Need help with your order?</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="text-brown-700 hover:text-brown-800 font-medium underline">Track Your Order</a>
                    <span class="text-brown-400">•</span>
                    <a href="#" class="text-brown-700 hover:text-brown-800 font-medium underline">Contact Support</a>
                    <span class="text-brown-400">•</span>
                    <a href="#" class="text-brown-700 hover:text-brown-800 font-medium underline">FAQs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-beige-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <a href="/" class="flex items-center space-x-2 mb-4">
                        <svg class="w-8 h-8 text-brown-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 2.18l7 3.89v7.43c0 4.28-2.91 8.27-7 9.37-4.09-1.1-7-5.09-7-9.37V8.07l7-3.89z"/>
                        </svg>
                        <span class="text-2xl font-bold text-brown-700">BooksArena</span>
                    </a>
                    <p class="text-brown-600 max-w-md">Thank you for choosing BooksArena. We're excited to deliver your books!</p>
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
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Track Order</a></li>
                        <li><a href="#" class="text-brown-600 hover:text-brown-800 transition">Contact Us</a></li>
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
