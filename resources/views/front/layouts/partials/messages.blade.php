@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif(Session::has('done'))
    <div class="alert alert-success">
        {{ Session::get('done') }}
    </div>
@endif
