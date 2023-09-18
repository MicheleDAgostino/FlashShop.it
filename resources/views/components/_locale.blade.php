<form class="inline" action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-xs rounded-2xl">
        {{$lang}}
    </button>
</form>