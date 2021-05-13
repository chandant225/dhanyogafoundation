<div id="contact-form" class="bg-white shadow-lg p-4 s">
    <div class="mb-3">
        <h4 class="text-2xl text-indigo-900 font-bold mb-3">Reach out to us for any inquiry</h4>
        <p style="color: #6e7279; font-size: .9rem;">Fill out the form below and we will get back to you shortly</p>
    </div>
    <form wire:submit.prevent="send()" method="POST">
        <div class="my-2">
            <label for="" class="font-bold text-gray-600 mb-2 required">Full Name</label>
            <input type="text" wire:model="name" class="mt-1 block w-full bg-gray-50 border border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0 @error('name') border-red-400  @enderror">
            <x-tailwind-invalid-feedback field="name"></x-tailwind-invalid-feedback>
        </div>
        <div class="my-2">
            <label for="" class="font-bold text-gray-600 mb-2 required">E-mail</label>
            <input type="text" wire:model.defer="email" class="mt-1 block w-full bg-gray-50 border border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0 @error('email') border-red-400  @enderror">
            <x-tailwind-invalid-feedback field="email"></x-tailwind-invalid-feedback>
        </div>
        <div class="my-2">
            <label for="" class="font-bold text-gray-600 mb-2 ">Mobile</label>
            <input type="text" wire:model.defer="mobile" class="mt-1 block w-full bg-gray-50 border border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0 @error('mobile') border-red-400  @enderror">
            <x-tailwind-invalid-feedback field="mobile"></x-tailwind-invalid-feedback>
        </div>
        <div class="my-2">
            <label for="" class="font-bold text-gray-600 mb-2 required">Message</label>
            <textarea wire:model.defer="message" class="mt-1 block w-full bg-gray-50 border border-gray-200 focus:border-gray-500 focus:bg-white focus:ring-0 @error('message') border-red-400 @enderror" cols="30" rows="5"></textarea>
            <x-tailwind-invalid-feedback field="message"></x-tailwind-invalid-feedback>
        </div>
        @if($sent == true)
        <div class="my-2">
            <div class="flex items-center bg-gradient-to-r from-indigo-500 via-indigo-500 to-purple-500 text-white text-sm font-semibold px-4 py-3">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                Your message has been sent. We will get back to you as early as possible.
            </div>
        </div>
        <script>
            setTimeout(() => {
                @this.sent = false;
            }, 10000);

        </script>
        @endif
        <div class="my-3">
            <button type="submit" class="py-3 px-5 bg-red-500 text-gray-50 w-full uppercase font-semibold tracking-wide rounded">
                <span wire:loading.remove>Send Now</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
</div>
