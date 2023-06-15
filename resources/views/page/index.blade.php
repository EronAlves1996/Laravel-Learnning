@extends('layouts.landing')

@section('title', 'Landing Page')

@section('style')
    * {
    margin:0;
    padding: 0;
    }

    body{
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    align-items: center;
    }

    .upper {
    flex: 1;
    }

    section, header {
    text-align: center;
    }
@endsection

@section('headerTitle')
    Landing Page de Teste
@endsection

@section('main')
    <section>
        <p>Bem vindo a landing page de teste</p>
        <p>Inclui dados de API que você pode consultar abaixo</p>
        <div>
            <form action="/landing-page/search" method="GET">
                <label for="busca">
                    <p>Busca</p>
                </label>
                <input type="text" name="busca" id="busca">
                <button type="submit">Buscar</button>
            </form>

            @yield('results')
        </div>
    </section>
@endsection

@section('footer')
    <div>
        <p>Eron Alves! Todos os direitos reservados</p>
    </div>
@endsection
