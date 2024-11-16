<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-blue-100 flex items-center justify-center px-4">
        <!-- Login Card -->
        <div class="max-w-md w-full bg-white shadow-lg rounded-xl p-6 sm:p-10">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">সাইন ইন</h2>
            <p class="text-center text-sm text-gray-600 mb-6">
                আপনার অ্যাকাউন্টে লগইন করুন
            </p>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Phone Number Field -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                        মোবাইল ফোন অ্যাকাউন্ট
                    </label>
                    <div class="flex items-center bg-gray-100 rounded-md border border-gray-300">
                        <span class="bg-gray-200 px-4 py-3 text-gray-500 text-sm rounded-l-md border-r border-gray-300">
                            +880
                        </span>
                        <input
                            id="phone"
                            name="phone"
                            type="tel"
                            class="flex-1 bg-transparent border-none focus:ring-0 focus:outline-none px-3 py-3 text-gray-700 text-sm"
                            placeholder="আপনার ফোন নম্বর লিখুন"
                            required
                        />
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        পাসওয়ার্ড
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 text-gray-700 text-sm"
                        placeholder="পাসওয়ার্ড লিখুন"
                        required
                    />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center text-sm text-gray-600">
                        <input
                            type="checkbox"
                            name="remember"
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        />
                        <span class="ml-2">পাসওয়ার্ড মনে আছে?</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 font-medium hover:underline">
                        পাসওয়ার্ড ভুলে গেছেন?
                    </a>
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 rounded-md text-sm hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
                    >
                        সাইন ইন
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="flex items-center mt-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-3 text-sm text-gray-500">অথবা</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Create Account -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    আপনার একটি অ্যাকাউন্ট নেই?
                    <a href="{{ route('register') }}" class="text-blue-500 font-medium hover:underline">
                        একটি নতুন অ্যাকাউন্ট তৈরি করুন
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
