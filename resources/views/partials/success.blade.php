@if (session('success'))
    <div class="">
        {{session('success')}}
    </div>

@elseif (session('success') == '')
    <div class="">
        <h1></h1>
    </div>
@else
    <div class="">
        <h1>error</h1>
    </div>
@endif
