@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Unidades</div>

                    <div class="card-body">
                        <a href="{{ route('health_units.create') }}" class="btn btn-primary mb-3" >Cadastrar unidade</a>
                        @if(count($health_units) > 0)
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
                                @foreach($health_units as $health_unit)
                                    <tr>
                                        <td>{{ $health_unit->id }}</td>
                                        <td>{{ $health_unit->cnes }}</td>
                                        <td>{{ $health_unit->name }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a title="Editar" class="btn btn-secondary m1" href="{{ route('health_units.edit', $health_unit) }}"><span class="fas fa-edit"></span></a>
                                                <form method="POST" action="{{ route('health_units.destroy', $health_unit) }}">
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
                            {{ $health_units->links() }}
                        @else
                            <p>Nenhuma unidade cadastrada</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
