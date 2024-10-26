<body class="h-full">

    <x-layout class="">
        <x-slot:title>{{ $title }}</x-slot:title>
        <section class="mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8" style="background: url(img/bg-contact.jpg)">
            <div class="max-w-3xl h-60 mx-auto flex flex-col items-center justify-center text-center">
                <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl text-indigo-400">Contact Us</h1>
                <h2 class="text-slate-500 text-sm sm:text-base md:text-lg flex mt-3">Get in touch and let us know how we
                    can
                    help</h2>
            </div>
        </section>

        <div class="flex justify-center">
            <div
                class="container flex flex-col items-center relative sm:absolute mt-14 px-4 sm:top-1/2 md:mt-10 sm:mt-10">
                <div class="max-w-3xl bg-white w-full shadow-md rounded-xl p-8 mb-20 sm:mt-10">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="name" id="name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Nama Anda" aria-placeholder="Nama Anda">
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" id="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Email" aria-placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <textarea name="contact" id="contact" cols="30" rows="10"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Isi Pesan Anda Disini !" aria-placeholder="Isi Pesan Anda Disini !"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white rounded-md w-32 focus:outline-none focus:ring-2 focus:ring-indigo-500">SEND</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </x-layout>
</body>

</html>
