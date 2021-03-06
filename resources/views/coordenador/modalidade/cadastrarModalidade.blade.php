@extends('coordenador.detalhesEvento')

@section('menu')

    {{-- Modalidade --}}
    <div id="divCadastrarModalidades" class="modalidades" style="display: block">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="titulo-detalhes">Cadastrar Modalidade</h1>
            </div>
        </div>
        {{-- row card --}}
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nova Modalidade</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Cadastre uma nova modalidade para o seu evento</h6>
                        <form method="POST" action="{{route('modalidade.store')}}" enctype="multipart/form-data">
                        @csrf
                        <p class="card-text">
                            <input type="hidden" name="eventoId" value="{{$evento->id}}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="nomeModalidade" class="col-form-label">*{{ __('Nome') }}</label>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <input id="nomeModalidade" type="text" class="form-control @error('nomeModalidade') is-invalid @enderror" name="nomeModalidade" value="{{ old('nomeModalidade') }}" required autocomplete="nomeModalidade" autofocus>

                                    @error('nomeModalidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>{{-- end row--}}

                        </p>

                        {{-- Data: inicioSubmissao | fimSubmissao --}}
                        <div class="row justify-content-center">
                            {{-- @php
                                date_default_timezone_set('America/Recife');
                            @endphp --}}
                            <div class="col-sm-6">
                                <label for="inicioSubmissao" class="col-form-label">{{ __('Início da Submissão') }}</label>
                                <input id="inicioSubmissao" type="datetime-local" class="form-control @error('inícioDaSubmissão') is-invalid @enderror" name="inícioDaSubmissão" value="{{ old('inícioDaSubmissão') }}" autocomplete="inicioSubmissao" autofocus>

                                @error('inícioDaSubmissão')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="fimSubmissao" class="col-form-label">{{ __('Fim da Submissão') }}</label>
                                <input id="fimSubmissao" type="datetime-local" class="form-control @error('fimDaSubmissão') is-invalid @enderror" name="fimDaSubmissão" value="{{ old('fimDaSubmissão') }}" autocomplete="fimSubmissao" autofocus>

                                @error('fimDaSubmissão')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- end Data: inicioSubmissao | fimSubmissao --}}

                        {{-- Data: inicioRevisao | fimRevisao --}}
                        <div class="row justify-content-center">

                            <div class="col-sm-6">
                                <label for="inicioRevisao" class="col-form-label">{{ __('Início da Revisão') }}</label>
                                <input id="inicioRevisao" type="datetime-local" class="form-control @error('inícioDaRevisão') is-invalid @enderror" name="inícioDaRevisão" value="{{ old('inícioDaRevisão') }}" autocomplete="inicioRevisao" autofocus>

                                @error('inícioDaRevisão')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="fimRevisao" class="col-form-label">{{ __('Fim da Revisão') }}</label>
                                <input id="fimRevisao" type="datetime-local" class="form-control @error('fimDaRevisão') is-invalid @enderror" name="fimDaRevisão" value="{{ old('fimDaRevisão') }}" autocomplete="fimRevisao" autofocus>

                                @error('fimDaRevisão')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- end Data: inicioRevisão | fimRevisao --}}

                        {{-- Data: inicioCorrecao | fimCorrecao --}}
                        <div class="row justify-content-center">

                            <div class="col-sm-6">
                                <label for="inicioCorrecao" class="col-form-label">{{ __('Início da Correção') }} <i data-toggle="tooltip" data-placement="top" title="Opcional" class="fas fa-exclamation-circle"></i></label>
                                <input id="inicioCorrecao" type="datetime-local" class="form-control @error('inicioCorrecao') is-invalid @enderror" name="inicioCorrecao" value="{{ old('inicioCorrecao') }}" autocomplete="inicioCorrecao" autofocus>

                                @error('inicioCorrecao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="fimCorrecao" class="col-form-label">{{ __('Fim da Correção') }} <i data-toggle="tooltip" data-placement="top" title="Opcional" class="fas fa-exclamation-circle"></i></label>
                                <input id="fimCorrecao" type="datetime-local" class="form-control @error('fimCorrecao') is-invalid @enderror" name="fimCorrecao" value="{{ old('fimCorrecao') }}" autocomplete="fimCorrecao" autofocus>

                                @error('fimCorrecao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- end Data: inicioCorrecao | fimCorrecao --}}

                        {{-- Data: inicioValidacao | fimValidacao --}}
                        <div class="row justify-content-center">

                            <div class="col-sm-6">
                                <label for="inicioValidacao" class="col-form-label">
                                    {{ __('Início da Validação') }}
                                    <i data-toggle="tooltip" data-placement="top" title="Opcional" class="fas fa-exclamation-circle"></i>
                                </label>
                                <input id="inicioValidacao" type="datetime-local" class="form-control @error('inicioValidacao') is-invalid @enderror" name="inicioValidacao" value="{{ old('inicioValidacao') }}" autocomplete="inicioValidacao" autofocus>
                                
                                @error('inicioValidacao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="fimValidacao" class="col-form-label">{{ __('Fim da Validação') }} <i data-toggle="tooltip" data-placement="top" title="Opcional" class="fas fa-exclamation-circle"></i></label>
                                <input id="fimValidacao" type="datetime-local" class="form-control @error('fimValidacao') is-invalid @enderror" name="fimValidacao" value="{{ old('fimValidacao') }}" autocomplete="fimValidacao" autofocus>

                                @error('fimValidacao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- end Data: inicioValidacao | fimValidacao --}}

                        {{-- Data: resultado --}}
                        <div class="row">

                            <div class="col-sm-6">
                                <label for="inicioResultado" class="col-form-label">{{ __('Resultado') }}</label>
                                <input id="inicioResultado" type="datetime-local" class="form-control @error('resultado') is-invalid @enderror" name="resultado" value="{{ old('resultado') }}" autocomplete="inicioResultado" autofocus>

                                @error('resultado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- end Data: resultado --}}

                        {{-- Inicio - Tipo de submissão --}}
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-check" style="margin-top: 10px">
                                    <input class="form-check-input incluir-resumo" type="checkbox" name="texto" id="id-custom_field-account-1-2">
                                    <label class="form-check-label" for="resumo">
                                        Adicionar campo resumo por texto
                                    </label>
                                    @error('resumo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="restricoes-resumo-texto" style="display: none;">
                                    <label class="col-form-label">{{ __('Restrições de resumo:') }}</label>
    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="limit" id="id-limit-custom_field-account-1-1" value="limit-option1" >
                                        <label class="form-check-label" for="texto">
                                            Quantidade de caracteres
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="limit" id="id-limit-custom_field-account-1-2" value="limit-option2" >
                                        <label class="form-check-label" for="arquivo">
                                            Quantidade de palavras
                                        </label>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-sm-6" id="min-max-caracteres" style="display: none">
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('Mínimo') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="min_caracteres" name="mincaracteres">
                                                </div>
                                            </div>
    
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('Máximo') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="max_caracteres" name="maxcaracteres">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-sm-6" id="min-max-palavras" style="display: none">
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('Mínimo') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="min_palavras" name="minpalavras">
                                                </div>
                                            </div>
    
                                            <div class="form-group">
                                                <label class="col-form-label">{{ __('Máximo') }}</label>
                                                <div>
                                                  <input class="form-control" type="number" id="max_palavras" name="maxpalavras">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check" style="margin-top: 10px">
                                    <input class="form-check-input incluirarquivo" type="checkbox" name="arquivo" id="id-custom_field-account-1-2">
                                    <label class="form-check-label" for="arquivo">
                                        Incluir submissão por arquivo
                                    </label>
                                    @error('arquivo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6" id="tipo-arquivo" style="display: none">

                                <div class="titulo-detalhes" style="margin-top: 10px"></div>
                                <label class="col-form-label">{{ __('Tipos de extensão aceitas') }}</label>

                                <div class="form-check" style="margin-top: 10px">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="pdf">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .pdf
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="jpg">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .jpg
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="jpeg">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .jpeg
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="png">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .png
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="docx">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .docx
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="odt">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .odt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="zip">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .zip
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="svg">
                                    <label class="form-check-label" for="defaultCheck1">
                                        .svg
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            {{-- Arquivo de Regras  --}}
                            <div class="col-sm-12" style="margin-top: 20px;">
                              <label for="arquivoRegras" class="col-form-label">{{ __('Enviar regras:') }}</label>

                              <div class="custom-file">
                                <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoRegras">
                              </div>
                              <small>O arquivo selecionado deve ser no formato PDF de até 2 MB.</small>
                              @error('arquivoRegras')
                              <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            {{-- Arquivo de Templates --}}
                            <div class="col-sm-12" id="area-template" style="margin-top: 20px; display:none">
                                <label for="nomeTrabalho" class="col-form-label">{{ __('Enviar template:') }}</label>

                                <div class="custom-file">
                                  <input type="file" class="filestyle" data-placeholder="Nenhum arquivo" data-text="Selecionar" data-btnClass="btn-primary-lmts" name="arquivoTemplates">
                                </div>
                                <small>O arquivo selecionado deve ser no formato ODT, OTT, DOCX, DOC, RTF, TXT ou PDF de até 2 MB.</small>
                                @error('arquivoTemplates')
                                <span class="invalid-feedback" role="alert" style="overflow: visible; display:block">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
            </div>
            {{-- <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Áreas por Modalidade</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Vincule as Áreas de acordo com cada modalidade</h6>
                        <form method="POST" action="{{route('areaModalidade.store')}}">
                        @csrf
                        <p class="card-text">
                            <input type="hidden" name="eventoId" value="{{$evento->id}}">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <label for="modalidadeId" class="col-form-label">{{ __('Modalidade') }}</label>
                                    <select class="form-control @error('modalidadeId') is-invalid @enderror" id="modalidadeId" name="modalidadeId">
                                        <option value="" disabled selected hidden> Modalidade </option>
                                        @foreach($modalidades as $modalidade)
                                        <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                        @endforeach
                                    </select>

                                    @error('modalidadeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="areaId" class="col-form-label">{{ __('Área') }}</label>
                                    <select class="form-control @error('areaId') is-invalid @enderror" id="areaId" name="areaId">
                                        <option value="" disabled selected hidden> Área </option>
                                        @foreach($areas as $area)
                                            <option value="{{$area->id}}">{{$area->nome}}</option>
                                        @endforeach
                                    </select>

                                    @error('areaId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </p>

                        <div class="row justify-content-center">

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Finalizar') }}
                                </button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div> --}}
        </div>{{-- end row card --}}
    </div>

@endsection
