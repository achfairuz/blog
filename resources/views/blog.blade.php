<head>
    <link rel="icon" href="{{ asset('img/F.png') }}" type="image/x-icon">
</head>

<body>
    <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>


        <div class="container mx-auto py-10 px-4">
            <article
                class="rounded-md bg-white p-10 shadow-md mx-auto w-full max-w-5xl format format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $post->author->username }}">
                            <div>
                                <a href="/posts?author={{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>


                                <p class="text-base text-gray-500 dark:text-gray-400">Category:
                                    <a href="/posts?category={{ $post->category->slug }}"
                                        class="bg-{{ $post->category->color }}-100 hover:underline text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name ?? 'Unknown Category' }}
                                    </a>
                                </p>


                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="{{ $post->created_at }}"
                                        title="{{ $post->created_at }}">{{ $post->created_at ? $post->created_at->diffForHumans() : 'Date not available' }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-0 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <div class="flex flex-col items-center mb-4">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="rounded-md mb-2">
                    <p class="text-gray-500 text-center text-sm md:text-base lg:text-lg dark:text-gray-400 mt-2">
                        {{ $post->title }}</p>
                </div>
                <div class="prose dark:prose-dark">
                    <p class="text-justify">{{ $post->body }}</p>
                </div>
            </article>
        </div>
    </x-layout>
</body>

</html>
