<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-blue-100 flex items-center justify-center px-4">
        <!-- Registration Card -->
        <div class="max-w-md w-full bg-white shadow-lg rounded-xl p-6 sm:p-10">
            <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">সাইন আপ</h2>
            <p class="text-center text-sm text-gray-600 mb-6">
                একটি নতুন অ্যাকাউন্ট তৈরি করুন এবং আমাদের পরিষেবাগুলি উপভোগ করুন।
            </p>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
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
                        <input id="phone" name="phone" type="tel"
                            class="flex-1 bg-transparent border-none focus:ring-0 focus:outline-none px-3 py-3 text-gray-700 text-sm @error('phone') border-red-500 @enderror"
                            placeholder="আপনার ফোন নম্বর লিখুন" value="{{ old('phone') }}" <!-- Retains input value
                            after validation failure -->
                       
                    </div>
                    <!-- Display Error Message -->
                    @error('phone')
                        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        পাসওয়ার্ড
                    </label>
                    <input id="password" name="password" type="password"
                        class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 text-gray-700 text-sm"
                        placeholder="পাসওয়ার্ড লিখুন" required />
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                        পাসওয়ার্ড নিশ্চিত করুন
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        class="w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-3 focus:ring-2 focus:ring-blue-500 text-gray-700 text-sm"
                        placeholder="পাসওয়ার্ড পুনরায় লিখুন" required />
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 rounded-md text-sm hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        সাইন আপ
                    </button>
                </div>
            </form>

            <!-- Divider -->
            <div class="flex items-center mt-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="mx-3 text-sm text-gray-500">অথবা</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Already Registered -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    আপনার একটি অ্যাকাউন্ট আছে?
                    <a href="{{ route('login') }}" class="text-blue-500 font-medium hover:underline">
                        লগইন করুন
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
