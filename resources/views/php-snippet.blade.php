@extends('layouts.landing')

@section('With php snippet')

@section('style')
    <x-style />
@endsection

@section('headerTitle')
    <?php echo 'This is a good title'; ?>
@endsection

@section('main')
    <?php echo 'This is main section'; ?>
    <!-- Não é muito vantajoso pois polui o código e fica difícil dar manutenção
            Códigos com blade seguem uma sintaxe mais reconhecível e mais popular
            Mais parecida com frameworks frontend -->
@endsection
