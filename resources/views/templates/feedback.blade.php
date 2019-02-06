@if(session('success'))
    <div class="alert alert-success fade in">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"> &times; </span>
        </button>
        {!! session ('success')!!}

    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger fade in">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {!! session ('error')!!}
    </div>
    @endif