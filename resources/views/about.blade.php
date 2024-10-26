<body class="h-full">
    <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>

        <section class=" mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8" style="background: url(img/section.jpg)">
            <div class="max-w-7xl mx-auto">
                <div class="lg:text-center">
                    <h2 class="text-base text-white uppercase font-semibold tracking-wide uppercas e">About Us</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-slate-100 sm:text-4xl">
                        We are a team of passionate individuals
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-400 lg:mx-auto">
                        Our mission is to provide the best services and create a positive impact in the industry.
                    </p>
                </div>

                <div class="mt-14">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8 text-center">
                        <div class="flex flex-col items-center bg-gray-700 rounded-md p-10">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: globe-alt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <h3 class="mt-5 text-lg leading-6 font-medium  text-white">Our Mission</h3>
                            <p class="mt-2 text-base text-white opacity-50">
                                To deliver the best quality and services that exceed our customers' expectations.
                            </p>
                        </div>

                        <div class="flex flex-col items-center mt-10 lg:mt-0  bg-gray-700 rounded-md p-10 ">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <h3 class="mt-5 text-lg leading-6 font-medium text-white">Our Vision</h3>
                            <p class="mt-2 text-base text-white opacity-50">
                                To be the leading company in our field and a trusted partner for our clients.
                            </p>
                        </div>

                        <div class="flex flex-col items-center mt-10 lg:mt-0  bg-gray-700 rounded-md p-10">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Heroicon name: lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <h3 class="mt-5 text-lg leading-6 font-medium text-white">Our Values</h3>
                            <p class="mt-2 text-base text-white opacity-50 text-center">
                                Integrity, Innovation, and Excellence are the core values that drive us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-layout>


</body>

</html>
