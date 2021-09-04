@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <h1>
        Hello <?php echo $name; ?>
    </h1>
@stop

@section('js')
<script>
    $(window).scroll(function(){
        var sticky = $('header'),
            scroll = $(window).scrollTop();

        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
</script>
@stop
