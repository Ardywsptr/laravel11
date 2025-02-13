<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <main class="pt-8 pb-16 antialiased bg-white lg:pt-16 lg:pb-24 dark:bg-gray-900">
    <div class="flex justify-between max-w-screen-xl px-4 mx-auto ">
        <article class="w-full max-w-4xl mx-auto format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
              <a href="/posts" class="text-sm font-medium text-blue-600 hover:underline">&laquo; Back to all posts</a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="w-16 h-16 mr-4 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                        <div>
                            <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="mb-1 text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="{{ $post->created_at->diffForHumans() }}" title="{{ $post->created_at->diffForHumans() }}">{{ $post->created_at->diffForHumans() }}</time></p>
                            <a href="/posts?category={{ $post->category->slug }}">
                              <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-{{ $post->category->color }}-200 dark:text-primary-800 hover:shadow-sm hover:bg-{{ $post->category->color }}-200">
                                  {{ $post->category->name }}
                              </span>
                            </a>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <p>{{ $post->body }}</p>
        </article>
    </div>
  </main>
</x-layout>