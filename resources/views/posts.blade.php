<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)
    <article class="max-w-screen-md py-8 border-b border-gray-300">
      <a href="/posts/{{ $post['id'] }}">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900 hover:underline">{{ $post['title'] }}</h2>
      </a>
      <div class="text-base text-gray-500">
        <a href="#">{{ $post['author'] }}</a> | 03 January 2025
      </div>
      <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
      <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
  @endforeach
  
</x-layout>