<footer class="flex justify-center px-4 text-white bg-gray-800">
    <div class="container py-6">
        <h1 class="text-lg font-bold text-center lg:text-2xl">
            Join Thousands of Artisans developers and never miss <br> out on new tips, tutorials, and more.
        </h1>

        <div class="flex justify-center mt-6">
            <form method="POST" action="{{ route('newsletter') }}" class="relative text-gray-700 w-full md:w-1/3">
                @csrf @method('POST')
                <label for="newsletter" class="hidden">newsletter</label>
                <input id="newsletter" name="newsletter" value="{{ old('newsletter') }}" class="w-full h-10 pl-3 pr-8 text-base text-gray-600 border rounded-lg focus:shadow-outline {{ $errors->has('newsletter') ? 'placeholder-red-500' : 'placeholder-gray-400' }}" type="text" placeholder="{{ $errors->has('newsletter') ? $errors->first('newsletter') :'Enter your email...'}}"/>
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-4 font-bold text-white bg-indigo-600 rounded-r-lg hover:bg-indigo-500 focus:bg-indigo-700 focus:outline-none">Subscribe</button>
            </form>
        </div>

        <hr class="h-px mt-6 border-gray-300 border-none dark:bg-gray-700">

        <div class="flex flex-col items-center justify-between mt-6 md:flex-row">
            <div>
                <a href="#" class="text-xl font-bold text-white hover:text-gray-300">Snippet Collector</a>
            </div>

            <div class="flex mt-4 md:m-0">
                <div class="-mx-4">
                    <a href="#" class="px-4 text-sm font-medium text-gray-200 hover:text-gray-400 hover:underline">About</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-200 hover:text-gray-400 hover:underline">Blog</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-200 hover:text-gray-400 hover:underline">News</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-200 hover:text-gray-400 hover:underline">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
