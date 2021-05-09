@include("header")
<h1>user2 page</h1>
@include('inner')


@foreach($users as $person)
<h3>{{$person}}</h3>
@endforeach

@csrf
<script>
    let data = @json($users);
    console.log("data", data);
</script>