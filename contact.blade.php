@extends('main')

@section('tittle','Contact')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(120deg, #89f7fe, #66a6ff);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    p {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
        font-size: 1.6rem;
        line-height: 1.8;
        color: #1d3557;
    }

    strong {
        font-size: 2rem;
        color: #457b9d;
        text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.1);
    }
</style>

<p>
    <strong>Ini adalah halaman contact</strong>
</p>
@endsection
