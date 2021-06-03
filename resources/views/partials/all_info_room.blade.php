@if (isset($room_available))
    <a class="booking relative z-10 h-64" href="{{ route('booking', ['id' => $room->id]) }}">
        <img class="w-full h-full object-cover object-center mb-4 shadow-2xl rounded" src="{{ asset($room->img) }}" alt="">
        <p class="absolute top-0 w-full h-full flex justify-center items-center text-white z-30 text-2xl">Reserver</p>
    </a>
@else
    <img class="w-full mb-4 " src="{{ asset($room->img) }}" alt="">
@endif
<h4 class="serif font-semibold text-lg">{{ $room->name }}</h4>
<p class="text-sm italic mt-1">({{ $room->typeRoom->type_room }})</p>
@if (isset($room_available))
    <p>{{ $room->max_people }} Personne max</p>
@endif
<p class="text-yellow-400 my-3">{{ $room->price }} € / <span class="tracking-widest">PAR NUIT</span></p>
<p class="text-sm text-gray-400">{{ $room->typeRoom->type_bed }}</p>
