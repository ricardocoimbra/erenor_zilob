@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Editar Unidade</div>

                    <div class="card-body">

                        <form class="row g-3" action="{{ route('health_units.update', $healthUnit ) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $healthUnit->id }}">
                            <div class="col-md-4">
                                <label for="cnes" class="form-label">CNES</label>
                                <input
                                    type="text"
                                    maxlength="7"
                                    class="form-control @error('cnes') is-invalid @enderror"
                                    id="cnes"
                                    name="cnes"
                                    value="{{ old('cnes', $healthUnit->cnes) }}"
                                >
                                <div id="validationFeedback" class="invalid-feedback">
                                    {{ $errors->first('cnes') }}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="name" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $healthUnit->name) }}"
                                >
                                <div id="validationFeedback" class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
{{--                            <div class="col-12">--}}
{{--                                <label for="inputAddress" class="form-label">Address</label>--}}
{{--                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="inputAddress2" class="form-label">Address 2</label>--}}
{{--                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label for="inputCity" class="form-label">City</label>--}}
{{--                                <input type="text" class="form-control" id="inputCity">--}}
{{--                            </div>--}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
