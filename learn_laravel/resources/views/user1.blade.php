<x-header data="user componet header" />
<h1>user1 : {{ count($users)}}</h1>

<h2>if</h2>
@if($user === "mario")
<h3>hi {{$user}}</h3>
@elseif($user === "otong")
<h3>hi {{$user}}</h3>
@else
<h3>unknown user</h3>
@endif

<h2>for</h2>
@for($i = 0; $i < count($users); $i++)
<h3>{{$users[$i]}}</h3>
@endfor

<h2>foreach</h2>
@foreach($users as $person)
<h3>{{$person}}</h3>
@endforeach