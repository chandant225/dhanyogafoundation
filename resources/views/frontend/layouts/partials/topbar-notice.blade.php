<div class="py-2 px-3 bg-gradient-to-r from-indigo-600 via-purple-500 to-blue-500 overflow-hidden" data-aos="fade-down">
    <div class="container mx-auto flex items-center justify-center space-x-3">
        <div class="text-sm font-medium text-white">{{ appSettings('topbar_notice') }}</div>
        <span aria-hidden="true" class="hidden sm:block mx-6 h-6 w-px bg-white bg-opacity-20"></span>
        @if(appSettings('topbar_notice_action_link'))
        <a class="whitespace-nowrap inline-flex rounded-md bg-white py-2 px-3 text-xs font-semibold uppercase text-blue-500 hover:bg-opacity-90" href="{{ appSettings('topbar_notice_action_link') }}">{{ appSettings('topbar_notice_action_text', 'Learn More') }} →</a>
        @endif
    </div>
</div>
