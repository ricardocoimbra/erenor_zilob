@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Unidades</div>

                    <div class="card-body">
                        <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3" >Cadastrar paciente</a>
                        @if(count($patients) > 0)
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>CNS</th>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->cns }}</td>
                                        <td>{{ $patient->name }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a title="Editar" class="btn btn-secondary m1" href="{{ route('patients.edit', $patient) }}"><span class="fas fa-edit"></span></a>
                                                <form method="POST" action="{{ route('patients.destroy', $patient) }}">
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
                            {{ $patients->links() }}
                        @else
                            <p>Nenhuma unidade cadastrada</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
