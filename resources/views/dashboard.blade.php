@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Sobre</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Adicionar Poema</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <tr>
                                <th>
                                    Para esse projeto final do curso, quis fazer um site de publicação de poemas. <br>O usuário pode se cadastrar ou logar, entrar no site e adicionar poemas.<br> Existe uma página de perfil, mas ela não apresenta nada de muito relevante. <br>Utilizei o template argon e modifiquei o html, em suma para retirar coisas desnecessárias.
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush