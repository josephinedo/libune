{{-- @if ($request->session()->has('mensaje'))
    <div class="alert alert-danger">
        {{ $request->session()->get('mensaje') }}
    </div>
@endif --}}

@if(Session::has('mensaje'))
    <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('mensaje') }}
    </div>
@endif

