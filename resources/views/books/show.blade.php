<form action="/books/{{ $singleBook->id }}/destroy" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Dzēst">
</form>

<h2>{{ $title->title }}</h2>
<h3>{{ $author->author }}</h3>
<p>{{ $released_at->released_at }}</p>
<a href="/books">All books</a>