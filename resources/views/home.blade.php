@extends('layouts.main')


@section('container')
    <h1>Halaman Home</h1>

    <div class="container text-center mt-3 pt-3 bg-white">
        <h1>Ini memakai for</h1>
        @for ($i = 0; $i < 3; $i++)
            <div class = "alert alert-info d-inline-block">
                Laravel
            </div>
        @endfor
    </div>

    <div class="container text-center mt-3 pt-3 bg-white">
    <?php $i = 1; ?>
    <h1>Ini memakai while</h1>
        @while ($i <= 5)
            <div class = "alert alert-info d-inline-block">
             {{$i}}
            </div>
            <?php $i++ ?>
        @endwhile
    </div>
@endsection
