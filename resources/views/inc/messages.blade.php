
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<!-- @if(Session::has('success'))
    <div class="alert alert-info">
        {{Session::get('message')}}
            </div>
@endif -->