<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="flex flex-col lg:flex-row mx-auto my-5 md:py-5 xl:px-40">
        <!-- Main Content -->
        <div class="flex-1 p-4">
            <h1 class="text-center mb-10 font-bold text-2xl">Kebakaran Hutan Di Tanah Indonesia</h1>

            <img src="img/kebakaran.jpg" class="w-full h-auto rounded-md mb-3" alt="blog2">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, id. Similique dignissimos ratione
                perferendis laborum doloribus? Reprehenderit non quisquam, exercitationem placeat labore cupiditate ipsa
                saepe sit. Adipisci deleniti quo facere!</p>
        </div>

        <!-- Sidebar -->
        <div class="">
            <x-sidebar></x-sidebar>
        </div>
    </div>
</x-layout>
