<x-mail::message>
# Your Post was Liked

{{ $liker->name }} liked one of your posts

<x-mail::button :url="route('posts.show', $post)">
Veiw Post
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
