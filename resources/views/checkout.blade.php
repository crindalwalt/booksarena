<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - BooksArena</title>
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

                <div class="flex items-center space-x-2 text-sm">
                    <span class="text-brown-600">Need help?</span>
                    <a href="#" class="text-brown-700 font-semibold hover:text-brown-800 transition">Contact Support</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Progress Steps -->
    <section class="bg-white border-b border-beige-200 py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center space-x-4">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-brown-600 text-white rounded-full flex items-center justify-center font-semibold">1</div>
                    <span class="ml-2 font-medium text-brown-800">Cart</span>
                </div>
                <div class="w-16 h-0.5 bg-brown-600"></div>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-brown-600 text-white rounded-full flex items-center justify-center font-semibold">2</div>
                    <span class="ml-2 font-medium text-brown-800">Checkout</span>
                </div>
                <div class="w-16 h-0.5 bg-beige-300"></div>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-beige-200 text-brown-600 rounded-full flex items-center justify-center font-semibold">3</div>
                    <span class="ml-2 font-medium text-brown-500">Complete</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Form -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Left Column - Form -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Contact Information -->
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-2xl font-bold text-brown-800">Contact Information</h2>
                            <span class="text-sm text-brown-600">Step 1 of 2</span>
                        </div>

                        <div class="space-y-4">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-brown-700 mb-2">First Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="John">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-brown-700 mb-2">Last Name *</label>
                                    <input type="text" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="Doe">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brown-700 mb-2">Email Address *</label>
                                <input type="email" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="john.doe@example.com">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brown-700 mb-2">Phone Number *</label>
                                <input type="tel" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6">
                        <h2 class="text-2xl font-bold text-brown-800 mb-6">Shipping Address</h2>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-brown-700 mb-2">Street Address *</label>
                                <input type="text" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="123 Main Street">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brown-700 mb-2">Apartment, Suite, etc. (Optional)</label>
                                <input type="text" class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="Apt 4B">
                            </div>

                            <div class="grid md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-brown-700 mb-2">City *</label>
                                    <input type="text" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="New York">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-brown-700 mb-2">State *</label>
                                    <select required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition bg-white">
                                        <option value="">Select State</option>
                                        <option>New York</option>
                                        <option>California</option>
                                        <option>Texas</option>
                                        <option>Florida</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-brown-700 mb-2">ZIP Code *</label>
                                    <input type="text" required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="10001">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brown-700 mb-2">Country *</label>
                                <select required class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition bg-white">
                                    <option value="">Select Country</option>
                                    <option selected>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6">
                        <h2 class="text-2xl font-bold text-brown-800 mb-6">Payment Method</h2>

                        <div class="space-y-4">
                            <label class="flex items-center p-4 border-2 border-brown-600 bg-brown-50 rounded-lg cursor-pointer">
                                <input type="radio" name="payment" value="cod" checked class="mr-3 text-brown-600 focus:ring-brown-500">
                                <div class="flex-1">
                                    <span class="font-semibold text-brown-800">Cash on Delivery</span>
                                    <p class="text-sm text-brown-600 mt-1">Pay when you receive your order</p>
                                </div>
                                <svg class="w-12 h-12 text-brown-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </label>

                            <label class="flex items-center p-4 border-2 border-beige-300 rounded-lg cursor-pointer hover:border-brown-400 transition opacity-50 cursor-not-allowed">
                                <input type="radio" name="payment" value="card" disabled class="mr-3 text-brown-600 focus:ring-brown-500">
                                <div class="flex-1">
                                    <span class="font-semibold text-brown-800">Credit / Debit Card</span>
                                    <p class="text-sm text-brown-600 mt-1">Coming Soon</p>
                                </div>
                                <svg class="w-12 h-12 text-brown-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </label>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6">
                        <h2 class="text-xl font-bold text-brown-800 mb-4">Order Notes (Optional)</h2>
                        <textarea rows="4" class="w-full px-4 py-3 border-2 border-beige-300 rounded-lg focus:outline-none focus:border-brown-500 transition" placeholder="Any special instructions for your order..."></textarea>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white border-2 border-beige-200 rounded-xl p-6 sticky top-24">
                        <h2 class="text-2xl font-bold text-brown-800 mb-6">Order Summary</h2>

                        <!-- Cart Items -->
                        <div class="space-y-4 mb-6 pb-6 border-b border-beige-200">
                            <div class="flex gap-4">
                                <div class="w-16 h-24 bg-gradient-to-br from-brown-300 to-brown-500 rounded-lg flex-shrink-0 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-brown-800 text-sm mb-1">The Great Gatsby</h3>
                                    <p class="text-xs text-brown-600 mb-2">F. Scott Fitzgerald</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-brown-600">Qty: 1</span>
                                        <span class="font-semibold text-brown-700">$24.99</span>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-16 h-24 bg-gradient-to-br from-beige-400 to-brown-400 rounded-lg flex-shrink-0 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white opacity-30" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-brown-800 text-sm mb-1">1984</h3>
                                    <p class="text-xs text-brown-600 mb-2">George Orwell</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-brown-600">Qty: 2</span>
                                        <span class="font-semibold text-brown-700">$39.98</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <div class="space-y-3 mb-6 pb-6 border-b border-beige-200">
                            <div class="flex justify-between text-brown-700">
                                <span>Subtotal</span>
                                <span class="font-medium">$64.97</span>
                            </div>
                            <div class="flex justify-between text-brown-700">
                                <span>Shipping</span>
                                <span class="font-medium">$5.00</span>
                            </div>
                            <div class="flex justify-between text-brown-700">
                                <span>Tax</span>
                                <span class="font-medium">$5.60</span>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-xl font-bold text-brown-800">Total</span>
                            <span class="text-2xl font-bold text-brown-700">$75.57</span>
                        </div>

                        <!-- Info Box -->
                        <div class="bg-beige-100 border-2 border-beige-200 rounded-lg p-4 mb-6">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-brown-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                <div class="text-sm text-brown-700">
                                    <p class="font-semibold mb-1">Cash on Delivery</p>
                                    <p>Pay when your order is delivered to your doorstep. No advance payment required.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="/thank-you" class="block w-full px-6 py-4 bg-brown-600 hover:bg-brown-700 text-white font-semibold rounded-lg transition shadow-lg hover:shadow-xl text-center">
                            Place Order
                        </a>

                        <p class="text-xs text-brown-600 text-center mt-4">
                            By placing your order, you agree to our <a href="#" class="underline hover:text-brown-800">Terms & Conditions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-beige-200 py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-brown-600 mb-4 md:mb-0">&copy; 2025 BooksArena. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition text-sm">Privacy Policy</a>
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition text-sm">Terms of Service</a>
                    <a href="#" class="text-brown-600 hover:text-brown-800 transition text-sm">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
