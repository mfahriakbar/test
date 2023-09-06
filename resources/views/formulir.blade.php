@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <center><h1>{{ $judul }}</h1></center>

    @foreach ($formulir as $form )

    <article class="m-5" style="display: inline-block;">
        <style>
            img{
                width: 150px;
            }
            h4{
                text-align: justify;
            }
        </style>
        <img src="/img/surat.png" alt="">
        <h3>
            <a href="/form/{{ $form->id }}" class="btn btn-primary">{{ $form["tittle"] }}</a>
        </h3>
    <h4>{{ $form->body }}</h4>


    </article>

    @endforeach

</div>
   
@endsection

