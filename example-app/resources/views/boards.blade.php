
<h1>{{$heading}}</h1>
@foreach ($boards as $board)
    {{$board['id']}}
    {{$board['title']}}
    {{$board['description']}}
@endforeach