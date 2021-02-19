<header class="bg-gray-900 pattern">
    <div class="container px-6 mx-auto sm:py-32">
        <nav class="flex flex-col py-2 sm:flex-row sm:justify-between sm:items-center lg:pt-10">
            <div>
                <a href="#" class="text-2xl font-semibold text-white hover:text-gray-300">Snippet Collector</a>
            </div>

            <div class="flex items-center mt-2 -mx-2 sm:mt-0">
                @guest
                    <a href="{{ route('register') }}" class="px-3 py-1 text-sm font-semibold text-white transition-colors duration-200 transform border-2 rounded hover:bg-gray-700">Sign Up</a>
                @endguest
            </div>
        </nav>

        <div class="flex flex-col items-center py-6 md:h-128 md:flex-row lg:py-20 md:mr-2">
            <div class="md:w-1/2">
                <h2 class="text-4xl font-semibold text-gray-100">Snippet Collector</h2>

                <h3 class="text-2xl font-semibold text-gray-100">
                    Hello <span class="text-indigo-400">Laravel Artisan</span>
                </h3>

                <p class="mt-3 text-gray-100">Platform to save & get review of code snippets for Laravel Community.</p>
            </div>

            <div class="flex mt-8 w-full md:w-1/2 md:justify-end md:mt-0">
                <div class="max-w-md bg-white rounded-lg dark:bg-gray-800 w-full">
                    <div class="p-5 text-center">
                        <h2 class="text-2xl font-semibold text-gray-700 dark:text-white fo">Sign In</h2>

                        <form action="{{ route('login') }}" method="POST">
                            @method('POST') @csrf
                            <div class="mt-4">
                                <input name="email" class="block w-full px-4 py-2 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="email" placeholder="Email address" aria-label="Email address" value="{{ old('email', '') }}">
                                @error('email')
                                    <span class="my-2 text-xs font-semibold text-red-500 tracking-tight block flex">{{ $message }}</span>
                                @enderror
                                <input name="password" class="block w-full px-4 py-2 mt-4 text-gray-700 placeholder-gray-500 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="password" placeholder="Password" aria-label="Password" value="{{ ! app()->environment('production') ? 'password' : '' }}">
                                @error('password')
                                    <span class="my-2 text-xs font-semibold text-red-500 tracking-tight block flex">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 dark:text-gray-200 hover:underline">Forget Password?</a>

                                <button type="submit" class="px-4 py-2 font-semibold text-white transition-colors duration-200 transform bg-gray-900 rounded hover:bg-gray-800 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-800 dark:focus:bg-gray-700">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
