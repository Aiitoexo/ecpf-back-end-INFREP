@extends('layout.default')

@section('main')
    <div class="bg-white pt-28 pb-24 relative">
        <div class="xl:w-7/12 1xl:w-10/12 mx-auto">
            <div class="xl:flex xl:items-end mb-8 text-center">
                <h1 class="text-7xl serif font-semibold">{{ $room_booking->name }}</h1>
                <p class="text-gray-400 ml-3 text-lg serif">{{ $room_booking->typeRoom->type_room }}</p>
            </div>
            <div class="xl:grid xl:grid-cols-12 xl:gap-x-10">
                <div class="col-span-8">
                    <img class="mx-auto" src="{{ asset($room_booking->img) }}" alt="">
                    <div class="grid grid-cols-2 mt-6 gap-x-5 text-center xl:text-left px-6 xl:px-0 mb-8">
                        <p class="col-span-2 xl:col-span-1">Lorem as qutempora! A aliquid dol ing elit. Assumenda diisquam reiciendis repellat, reoremque ex aliquid doloremque ercitationem, facilis,LorA aliquid doloremque exercitationem, facilis, illo incidunt illo incidunt ipsam nobis omnis, quae sed similique vel. Ducimus, iste, voluptates.</p>
                        <p class="col-span-2 xl:col-span-1">Lorem ing elit. Assumenda diisquam reiciendis repellat, repudi ing elit. Assumenda diisquam reiciendis repellat, reandae sit voluptatum. Eum laet excepturi expedita id minima, odit officia pariatur quas quisquam reiciendis repellat, repudiandae sit voluptatum. Eum labore nobis veritatis.</p>
                    </div>
                </div>

                <form action="{{ route('booking.store') }}" class="xl:col-span-4 xl:px-0 px-6" method="post">
                    @csrf
                    <h3 class="text-3xl mb-3 serif font-semibold">Reserver cette chambre</h3>

                    <input type="hidden" name="room_and_suites_id" value="{{ $room_booking->id }}">

                    <div class="flex flex-col mb-3">
                        <label class="text-sm" for="">Votre Mail</label>
                        <input class="border border-gray-300 rounded-md py-2 px-4 @error('mail') border-red-500 @enderror" name="mail" type="email">
                        @error('mail')
                        <p class="error">Email non valide</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label class="text-sm" for="">Date d'arrivée</label>
                        <input class="border border-gray-300 rounded-md py-2 px-4 @error('arrival_date') border-red-500 @enderror" name="arrival_date" type="date" value="{{ session('research')['arrival_date'] }}">
                        @error('arrival_date')
                        <p class="error">La date d'arrivé n'est pas valide</p>
                        @enderror
                    </div>

                    <div class="flex flex-col mb-3">
                        <label class="text-sm" for="">Date de depart</label>
                        <input class="border border-gray-300 rounded-md py-2 px-4 @error('departure_date') border-red-500 @enderror" name="departure_date" type="date" value="{{ session('research')['departure_date'] }}">
                        @error('departure_date')
                        <p class="error">La date de depart n'est pas valide</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-x-6">
                        <div class="col-span-1 flex flex-col mb-3">
                            <label class="text-sm" for="">Nombre d'adultes</label>
                            <input class="border border-gray-300 rounded-md py-2 px-4 @error('adult') border-red-500 @enderror" name="adult" type="text" value="{{ session('research')['adult'] }}">
                            @error('adult')
                            <p class="error">Une personne minimum nécessaire pour effectuer une reservation</p>
                            @enderror
                        </div>

                        <div class="col-span-1 flex flex-col mb-3">
                            <label class="text-sm" for="">Nombre d'enfants</label>
                            <input class="border border-gray-300 rounded-md py-2 px-4 @error('child') border-red-500 @enderror" name="child" placeholder="0" type="text" value="{{ session('research')['child'] }}">
                            @error('child')
                            <p class="error">Désolé ce n'est pas chiffre valide</p>
                            @enderror
                        </div>
                    </div>

                    <button class="bg-yellow-400 w-full py-1 rounded-full text-white mt-2">Envoyer</button>

                    @if (session('not_available'))
                        <p class="text-md mt-6 text-center text-red-500">{!! session('not_available') !!}<p>
                    @endif
                </form>
            </div>
        </div>

        @if (session('room_not_exist'))
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-40 modal_booking">
                <div class="bg-white flex flex-col justify-center items-center py-6 px-10 rounded-lg shadow-2xl relative">
                    <div class="w-full flex justify-end absolute top-2 right-2">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </button>
                    </div>
                    <p class="text-xl">{{ session('room_not_exist') }}</p>
                </div>
            </div>
        @endif

        @if (session('reference_booking'))
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-40">
                <div class="bg-white flex flex-col justify-center items-center py-6 px-10 rounded-lg shadow-2xl relative">
                    <a href="{{ route('homepage') }}" class="w-full flex justify-end absolute top-2 right-2">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </button>
                    </a>
                    <p class="text-3xl pb-4 border-b-2 border-yellow-500">N° {{ session('reference_booking') }}</p>
                    <p class="text-2xl">Reservation confirmer.</p>
                    <p class="text-2xl">Merci pour votre confiance a bientôt.</p>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('js')
    @parent
    <script>
        const modal = document.querySelector('.modal_booking');
        const button_modal = document.querySelector('.modal_booking button')

        button_modal.addEventListener('click', function () {
           modal.classList.add('hidden')
        })
    </script>
@endsection
