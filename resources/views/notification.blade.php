@if(session()->has('success'))
    <div class="alert alert-success"  align="center">{{session()->get('success')}}</div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger"  align="center">{{session()->get('error')}}</div>
@endif
