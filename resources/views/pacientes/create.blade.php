@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cadastrar Paciente</div>

                    <div class="card-body">
                        <form class="row g-3" action="{{ route('patients.store') }}" method="post">
                            @csrf
                            <div class="col-md-4">
                                <label for="cns" class="form-label"> <abbr title="Cartão Nacional de Saúde">CNS</abbr></label>
                                <input
                                    type="text"
                                    maxlength="15"
                                    class="form-control @error('cns') is-invalid @enderror"
                                    id="cns"
                                    name="cns"
                                    value="{{ old('cns') }}"
                                >
                                <div id="cnsValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('cns') }}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="name" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                >
                                <div id="nameValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                                <input
                                    type="date"
                                    class="form-control @error('dt_nascimento') is-invalid @enderror"
                                    id="dt_nascimento"
                                    name="dt_nascimento"
                                    value="{{ old('dt_nascimento') }}"
                                >
                                <div id="dt_nascimentoValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('dt_nascimento') }}
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="rg" class="form-label"><abbr title="Registro Geral">RG</abbr></label>
                                <input
                                    type="text"
                                    class="form-control @error('rg') is-invalid @enderror"
                                    id="rg"
                                    name="rg"
                                    value="{{ old('rg') }}"
                                >
                                <div id="rgValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('rg') }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="cpf" class="form-label"><abbr title="Cadastro Pessoa Física">CPF</abbr></label>
                                <input
                                    type="text"
                                    class="form-control @error('cpf') is-invalid @enderror"
                                    id="cpf"
                                    name="cpf"
                                    value="{{ old('cpf') }}"
                                >
                                <div id="cpfValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('cpf') }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input
                                    type="text"
                                    class="form-control @error('telefone') is-invalid @enderror"
                                    id="telefone"
                                    name="telefone"
                                    value="{{ old('telefone') }}"
                                >
                                <div id="telefoneValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('telefone') }}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="cep" class="form-label"><abbr title="Código de Endereçamento Postal">CEP</abbr></label>
                                <input
                                    type="text"
                                    class="form-control @error('cep') is-invalid @enderror"
                                    id="cep"
                                    name="cep"
                                    maxlength="8"
                                    value="{{ old('cep') }}"
                                >
                                <div id="cepValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('cep') }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input
                                    type="text"
                                    class="form-control @error('logradouro') is-invalid @enderror"
                                    id="logradouro"
                                    name="logradouro"
                                    value="{{ old('logradouro') }}"
                                >
                                <div id="logradouroValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('logradouro') }}
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="numero" class="form-label">Número</label>
                                <input
                                    type="text"
                                    class="form-control @error('numero') is-invalid @enderror"
                                    id="numero"
                                    name="numero"
                                    value="{{ old('numero') }}"
                                >
                                <div id="numeroValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('numero') }}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input
                                    type="text"
                                    class="form-control @error('bairro') is-invalid @enderror"
                                    id="bairro"
                                    name="bairro"
                                    value="{{ old('bairro') }}"
                                >
                                <div id="bairroValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('bairro') }}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input
                                    type="text"
                                    class="form-control @error('complemento') is-invalid @enderror"
                                    id="complemento"
                                    name="complemento"
                                    value="{{ old('complemento') }}"
                                >
                                <div id="complementoValidationFeedback" class="invalid-feedback">
                                    {{ $errors->first('complemento') }}
                                </div>
                            </div>
{{--                            <div class="col-md-12">--}}
{{--                                <label for="profissao" class="form-label">Profissão</label>--}}
{{--                                <input--}}
{{--                                    type="text"--}}
{{--                                    class="form-control @error('profissao') is-invalid @enderror"--}}
{{--                                    id="profissao"--}}
{{--                                    name="profissao"--}}
{{--                                    maxlength="8"--}}
{{--                                    value="{{ old('profissao') }}"--}}
{{--                                >--}}
{{--                                <div id="profissaoValidationFeedback" class="invalid-feedback">--}}
{{--                                    {{ $errors->first('profissao') }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
