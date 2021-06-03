<form action="{{ route('available.room') }}" method="get" class="grid grid-cols-11 xl:grid-cols-11 sm:grid-cols-12  gap-x-6">
    <div class="flex flex-col sm:col-span-3 col-span-11">
        <label class="sm:text-black text-white" for="">Arrive</label>
        <input name="arrival_date" class="w-full border border-gray-300 px-2 py-1 rounded @error('arrival_date') border-red-500 @enderror" type="date" value="{{ isset($research) ? $research['arrival_date'] : '' }}">
        @error('arrival_date')
        <p class="error">La date d'arrivé n'est pas valide</p>
        @enderror
    </div>

    <div class="flex flex-col sm:col-span-3 col-span-11">
        <label class="sm:text-black text-white" for="">Depart</label>
        <input name="departure_date" class="w-full border border-gray-300 px-2 py-1 rounded @error('departure_date') border-red-500 @enderror" type="date" value="{{ isset($research) ? $research['departure_date'] : '' }}">
        @error('departure_date')
        <p class="error">La date de depart n'est pas valide</p>
        @enderror
    </div>

    <div class="flex flex-col sm:col-span-3 xl:col-span-1 col-span-11">
        <label class="sm:text-black text-white" for="">Adultes</label>
        <input name="adult" class="w-full border border-gray-300 px-2 py-1 rounded @error('adult') border-red-500 @enderror" type="text" value="{{ isset($research) ? $research['adult'] : '1' }}">
    </div>

    <div class="flex flex-col sm:col-span-3 xl:col-span-1 col-span-11">
        <label class="sm:text-black text-white" for="">Enfants</label>
        <input name="child" class="w-full border border-gray-300 px-2 py-1 rounded @error('child') border-red-500 @enderror" type="text" value="{{ isset($research) ? $research['child'] : '0' }}">

    </div>

    <div class="xl:col-span-3 sm:col-span-12 col-span-11 flex justify-center items-center px-4">
        <button class="mt-5 py-1 w-full sm:w-auto xl:w-full sm:px-16 xl:px-0 rounded-full bg-yellow-500 text-white">Valider</button>
    </div>

    @error('adult')
    <p class="col-span-11 error">Une personne minimum nécessaire pour effectuer une reservation</p>
    @enderror

    @error('child')
    <p class="col-span-11 error">Désolé ce n'est pas chiffre valide</p>
    @enderror
</form>
