<x-app-layout>
@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Gekkode">
@endsection

@section('title')
    <title>lou</title>
@endsection

<div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Résultat de recherche pour:
            <small>{{$key}}</small>
        </h1>
        {{ $domains }}
    </div>
    @include('sidebar')
</div>

@section('content')



@endsection
</x-app-layout>



