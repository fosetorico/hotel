@if(count($errors) > 0)
    <div class="alert alert-danger" style="margin-left: 15%; width: 70%;">
        {{--<strong>Whoops!!!</strong> There was some problem with your input--}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
