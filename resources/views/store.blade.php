@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Poemas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <tr>
                                <th>
                                    @foreach($store as $poema)

                                    <hr>
                                    <h1>{{$poema->titulo}}</h1>
                                    <p>{{$poema->poesia}}</p>

                                    @endforeach
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>

@endsection