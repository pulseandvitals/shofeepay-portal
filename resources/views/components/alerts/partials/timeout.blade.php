@section('scripts')
<script>
    window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(200, function(){
        $(this).remove();
    });
}, 4000);
</script>
@endsection
