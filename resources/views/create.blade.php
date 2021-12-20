@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Criar poema</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <tr>
                                <th>
                                    <form action="{{ route('store') }}" method="post">
                                        @csrf
                                        <label for="titulo">Título:</label>
                                        <br>
                                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"/>
                                        @error('titulo')
                                        
                                            <span class="alert alert-danger">{{ $errors->first('titulo') }}</span>

                                        @enderror
                                        <br><br>
                                        <label for="poesia">Conteúdo:</label>
                                        <br>
                                        <input type="text" name="poesia" id="poesia" value="{{ old('poesia') }}"/>
                                        @error('poesia')
                                        
                                            <span class="alert alert-danger">{{ $errors->first('poesia') }}</span>

                                        @enderror
                                        <br><br>

                                        <button type="submit">Enviar</button>
                                    </form>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>

@endsection