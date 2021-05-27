<div x-data="{ open: false }" class="my-3">
    <div class="flex items-center bg-gradient-to-r from-indigo-600 via-purple-500 to-blue-500 text-gray-50 py-2 px-4 sm:px-5 md:px-8"  @click="open = !open">
        <div class="font-bold tracking-wide">{{ $title }}</div>
        <div class="ml-auto">
            <svg x-show="!open" @click="open = true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
            </svg>
            <svg x-show="open" @click="open = false" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>
    <div x-show="open" class="bg-gray-50 py-2 px-4 sm:px-5 md:px-8">
        <p class="text-gray-700">
            {{ $content }}
        </p>
    </div>
</div>