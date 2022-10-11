@if($errors->any())
    @foreach($errors->all() as $error)
    <h2><span class="label label-danger">{{$error}}</span></h2>
    @endforeach
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif