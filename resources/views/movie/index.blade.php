

    @foreach($movies as $movie)
    <div>{{$movie->id}} => {{$movie->title}} ({{$movie->premiered->format('Y')}})</div>
    @endforeach


