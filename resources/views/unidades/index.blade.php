@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Unidades</div>

                    <div class="card-body">
                        <a href="{{ route('health_units.create') }}" class="btn btn-primary mb-3" >Cadastrar unidade</a>
                        @if(count($unidades) > 0)
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CNES</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($unidades as $unidade)
                                    <tr>
                                        <td>{{ $unidade->id }}</td>
                                        <td>{{ $unidade->cnes }}</td>
                                        <td>{{ $unidade->name }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a title="Editar" class="btn btn-secondary m1" href="{{ route('health_units.edit', $unidade) }}"><span class="fas fa-edit"></span></a>
                                                <form method="POST" action="{{ route('health_units.destroy', $unidade) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" title="Excluir"><span class="fas fa-trash"></span></button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Nenhuma unidade cadastrada</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
