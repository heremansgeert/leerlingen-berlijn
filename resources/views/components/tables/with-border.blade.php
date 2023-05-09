@props(['thead'=>''])
<div class="px-4 sm:px-6 lg:px-8">
    <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:mx-0 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            @if($thead)
            <thead>
                    {{ $thead }}
            </thead>
            @endif
            <tbody>

            {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
