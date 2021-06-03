@extends('layout.default')

@section('main')
    <div class="min-h-screen bg-gray-500 py-20">
        <div class="w-10/12 xl:w-7/12 mx-auto mt-12  rounded-xl bg-white px-6 pt-5 pb-10 shadow-xl">
            @include('partials.form_room_available')
        </div>

        <div class="w-10/12 xl:w-7/12 mx-auto mt-14">
            <h2 class="text-5xl text-center serif font-semibold">Chambre Disponible</h2>
            <div class="w-full mt-20 mb-16">
                <div class="grid grid-cols-3 gap-x-6 gap-y-14">
                    @foreach($room_available as $room)
                        <div class="col-span-3 xl:col-span-1 flex flex-col items-center">
                            @include('partials.all_info_room')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
