@extends('main')

@section('tittle','About')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #FFC371, #FF5F6D);
        color: #fff;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    p {
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        font-size: 1.5rem;
        text-align: center;
        line-height: 1.6;
        max-width: 600px;
    }

    strong {
        font-size: 1.8rem;
        color: #FFD700;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }
</style>

<p>
    <strong>Ini adalah halaman about</strong>
</p>
@endsection
