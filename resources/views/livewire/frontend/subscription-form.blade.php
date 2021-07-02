<div class="grid sm:grid-cols-2 sm:gap-3 z-10">
    <div>
        <h1 class="text-lg sm:text-2xl text-primary font-bold">Subscribe to our newsletter which inform you about upcoming events and interesting CHARITY activities.</h1>
    </div>
    <div>
        <form id="subscribe-form" wire:submit.prevent="subscribe()" class="sm:flex space-y-3 sm:space-y-0 space-x-4" autocomplete="off">
            <input wire:model.defer="email" type="email" class="flex-grow py-3 px-5 text-lg font-medium border border-secondary rounded-full placeholder-secondary focus:outline-none focus:ring ring-primary" placeholder="Enter your email">
            <button class="py-3 px-6 font-bold tracking-wide bg-secondary rounded-full text-white hover:bg-primary focus:outline-none focus:ring ring-primary">Subscribe</button>
        </form>
        @error('email')
        <p class="text-xs text-red-500 my-1 sm:pl-2">{{ $message }}</p>
        @enderror
    </div>
</div>
