<div class="col-sm-6">
    <a href="{{ URL::previous() }}" type="button" class="btn btn-secondary">
        <i class="bi bi-arrow-left"> </i>
        Go Back
    </a>
    <button type="submit" class="btn btn-dark"> {{ $slot }} </button>
</div>
@section('scripts')
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(200, function(){
        $(this).remove();
    });
}, 4000);
</script>
@endsection
