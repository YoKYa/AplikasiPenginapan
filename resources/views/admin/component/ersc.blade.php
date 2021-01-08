@if ($errors->any())
<div class="alert alert-danger alert-dismissible mx-5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@elseif(Session::get('status') != null)
<div class="alert alert-success mx-5" role="alert">
    {{ Session::get('status')  }}
</div>
@endif