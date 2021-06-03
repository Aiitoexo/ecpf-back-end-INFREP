<div id="navbar_desktop" class="w-screen h-auto fixed top-0 z-50 flex justify-between p-6 {{ isset($room_booking) || isset($room_available) ? 'shadow-2xl text-black bg-white' : 'text-white' }}">
    <h1><a href="{{ route('homepage') }}" class="serif font-semibold">Relais du phare</a></h1>
    <div class="flex items-center gap-x-4">
        <p class="text-xs">Site pédagogique</p>
        <img class="h-8" src="{{ asset('img/logo-infrep.png') }}" alt="">
    </div>
</div>
