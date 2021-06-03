@extends('layout.default')

@section('main')
    <div class="bg-header relative">
        <img class="w-screen object-cover filter brightness-50 img_header absolute top-0 z-20" src="{{ asset('img/hero_4.jpg') }}" alt="">
        <img class="w-screen object-cover filter brightness-50 img_header absolute top-0 opacity-0" src="{{ asset('img/hero_3.jpg') }}" alt="">
        <img class="w-screen object-cover filter brightness-50 img_header absolute top-0 opacity-0" src="{{ asset('img/hero_2.jpg') }}" alt="">
        <img class="w-screen object-cover filter brightness-50 img_header absolute top-0 opacity-0" src="{{ asset('img/hero_1.jpg') }}" alt="">
        <div class="h-full w-full flex flex-col justify-start lg:justify-center items-center absolute top-0 z-40 mt-40 lg:mt-0">
            <div class="flex items-center">
                <p class="text-white tracking-widest">BIENVENUE DANS UN HOTEL 5</p>
                <svg class="h-5 w-5 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
            </div>
            <h1 class="text-4xl lg:text-7xl text-white serif">Nature et convivialité</h1>
        </div>
        <div class="sm:hidden h-full w-full absolute -bottom-60 z-40 px-12">
            @include('partials.form_room_available')

            @if (session()->has('no_room_available'))
                <div class="w-full mt-4">
                    <p class="text-center text-red-500">{{ session('no_room_available') }}</p>
                </div>
            @endif

            @if (session()->has('to_much_customer'))
                <div class="w-full mt-4">
                    <p class="text-center text-red-500">{{ session('to_much_customer') }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="bg-gray-500 relative flex justify-center sm:pt-44 xl:pt-0">
        <div class="w-10/12 xl:w-7/12 py-10 xl:py-0 xl:pt-40 xl:pb-28 grid grid-cols-5 xl:gap-x-32">
            <div class="col-span-5 xl:col-span-2 text-center xl:text-left">
                <h2 class="text-5xl mb-8 serif font-bold">Bienvenue !</h2>
                <p class="leading-7">Lorem ipsum dolor sit amet, Accusamus accusantium atque blanditiis, do dolor sit amet, Accusamus accusantium atque blanditiis, dolorum, eligendi est hic neque nihil nisi obcaecati officia placeat, provident reiciendis repudiandae sapiente ullam vero! Doloremque, maxime?</p>
                <div class="grid grid-cols-12 mt-4 flex items-center">
                    <button class="col-span-12 xl:col-span-5 rounded-full bg-yellow-500 text-white py-2">En savoir plus</button>
                    <p class="col-span-12 xl:col-span-2 text-center">ou</p>
                    <a class="col-span-12 xl:col-span-5 text-center tracking-widest text-yellow-400 text-sm font-semibold" href="">VOIR LA VIDEO</a>
                </div>
            </div>

            <div class="col-span-5 xl:col-span-3 relative mt-10 xl:mt-0">
                <img src="{{ asset('img/img_1.jpg') }}" alt="">
                <img class="hidden xl:block h-48 rounded-full border-8 border-gray-200 -bottom-20 -right-20 absolute"
                     src="{{ asset('img/food-1.jpg') }}" alt="">
            </div>
        </div>

        <div class="hidden sm:block sm:w-11/12 xl:w-7/12 rounded-xl bg-white px-6 pt-5 pb-10 absolute -top-10 shadow-xl z-30">
            @include('partials.form_room_available')

            @if (session()->has('no_room_available'))
                <div class="w-full mt-4">
                    <p class="text-center text-red-500">{{ session('no_room_available') }}</p>
                </div>
            @endif

            @if (session()->has('to_much_customer'))
                <div class="w-full mt-4">
                    <p class="text-center text-red-500">{{ session('to_much_customer') }}</p>
                </div>
            @endif
        </div>
    </div>

    <div class="bg-white w-full py-16">
        <div class="w-10/12 xl:w-4/12 mx-auto">
            <h2 class="text-5xl text-center mb-6 serif font-bold">Chambres & Suites</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium corporis doloremque ea ex, inventore ipsum laborum, magni maxime nam officia quae quas quasi quibusdam repellat sed sint soluta voluptate.</p>
        </div>
        <div class="w-9/12 mx-auto flex flex-wrap justify-center gap-7 mt-10">
            @foreach($all_rooms as $room)
                <div class="w-10/12 xl:w-1/4 flex flex-col items-center mb-8">
                    @include('partials.all_info_room')
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-gray-500 w-full py-16">
        <div class="w-12/12 xl:w-7/12 mx-auto">
            <div class="w-10/12 xl:w-7/12 mx-auto flex flex-col items-center justify-center mb-12">
                <h2 class="text-5xl mb-5 serif font-semibold">Photos</h2>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorum facere hic inventore officia quam reprehenderit? Dolore earum hic ipsa magnam molestiae molestias mollitia omnis provident quidem, similique. Minima, saepe?</p>
            </div>

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                        <li class="splide__slide"><img src="https://placeimg.com/640/480/any" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="menu_section" class="bg-gray-900 bg-center bg-cover menu_bg" style="background-image: url('{{ asset('img/hero_3.jpg') }}')">
        <div class="h-full bg-black bg-opacity-30 pt-20 pb-28">
            <div class="w-10/12 xl:w-5/12 mx-auto mb-12">
                <h2 class="text-5xl text-white text-center mb-4 serif font-semibold">Notre Restaurant</h2>
                <p class="xl:px-10 text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur doloribus est et ex incidunt magni maxime quaerat quia, repellendus rerum sapiente soluta vero voluptatem, voluptatibus? Fuga iure minima provident.</p>
            </div>
            <div class="w-full xl:w-5/12 mx-auto">
                <div class="flex justify-between px-2 xl:px-0 w-full xl:w-6/12 mx-auto">
                    @foreach($all_menus as $menu)
                        <p class="menu_section uppercase text-2xl pb-3 cursor-pointer border-white mb-12 {{ $loop->first ? 'text-white border-b-2' : 'text-yellow-400 border-b-0' }}">menu {{ $menu->name }}</p>
                    @endforeach
                </div>
                @foreach($all_menus as $menu)
                    <div class="menu {{ $loop->first ? 'flex' : 'hidden' }} flex-col items-center text-center">

                        <p class="mb-6 text-white text-xl capitalize">{{ $menu->description }}</p>

                        <p class="text-2xl text-white mb-4">. {{ $menu->price }} € .</p>

                        @if ($menu->name !== 'enfant')
                            <div class="py-4 flex flex-col justify-center items-center">
                                <p class="text-lg text-yellow-400 mb-3 serif font-semibold">Entrees</p>
                                @foreach($menu->starterMenu as $starter)
                                    <p class="text-white">{!! $starter->content !!}</p>
                                @endforeach
                            </div>
                        @else
                            <div class="py-4 flex flex-col justify-center items-center">
                                <p class="text-lg text-yellow-400 mb-3 serif font-semibold">Boisson</p>
                                <p class="text-white">{!! $menu->drink !!}</p>
                            </div>
                        @endif

                        <div class="py-4 flex flex-col justify-center items-center">
                            <p class="text-lg text-yellow-400 mb-3 serif font-semibold">Plats</p>
                            @foreach ($menu->mainCourseMenu as $mainCourse)
                                <p class="text-white">{!! $mainCourse->content !!}</p>
                            @endforeach
                        </div>

                        <div class="py-4 flex flex-col justify-center items-center">
                            <p class="text-lg text-yellow-400 mb-3 serif font-semibold">Desserts</p>
                            @foreach ($menu->dessertMenu as $dessert)
                                <p class="text-white">{!! $dessert->content !!}</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="w-10/12 xl:w-7/12 mx-auto">
            <h2 class="text-center text-5xl mb-20 serif font-semibold">Nos clients témoignent</h2>
            <div class="grid grid-cols-3 gap-x-10">
                @foreach ($all_testimony as $testimony)
                    <div class="col-span-3 xl:col-span-1 flex flex-col items-center">
                        <img class="h-16 rounded-full" src="{{ asset($testimony->img) }}" alt="">
                        <div class="flex py-6">
                            @for ($i = 0; $i < $testimony->star; $i++)
                                <svg class="h-5 w-5 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                            @if ($testimony->star < 5)
                                @for ($i = 0; $i < 5 - $testimony->star; $i++)
                                    <svg class="h-5 w-5 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            @endif
                        </div>
                        <p class="text-center px-6 mb-6">{{ nl2br(e($testimony->comment))  }}</p>
                        <p class="italic mb-1"><span class="mr-1">—</span> {{ $testimony->name }}</p>
                        <p class="italic text-gray-400 text-sm">Publie le {{ $testimony->created_at->format('d/m/y') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
{{--    <script type="text/javascript">--}}
{{--        new Splide('.splide', {--}}
{{--            type: 'fade',--}}
{{--            rewind: true,--}}
{{--        }).mount();--}}
{{--    </script>--}}
    <script>
        new Splide( '.splide' ).mount();
    </script>
    <script src="{{ mix('js/bg-header.js') }}"></script>
    <script src="{{ mix('js/navbar_desktop.js') }}"></script>
    <script src="{{ mix('js/section_menu.js') }}"></script>
@endsection
