@extends('layouts.app')

@section('template_title')
    {{ $asignatura->name ?? 'Show Asignatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignaturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombasignatura:</strong>
                            {{ $asignatura->nombAsignatura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantcreditos:</strong>
                            {{ $asignatura->cantCreditos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombdocente:</strong>
                            {{ $asignatura->nombDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Prerrequisito:</strong>
                            {{ $asignatura->prerrequisito }}
                        </div>
                        <div class="form-group">
                            <strong>Canthorasta:</strong>
                            {{ $asignatura->cantHorasTA }}
                        </div>
                        <div class="form-group">
                            <strong>Canthorastd:</strong>
                            {{ $asignatura->cantHorasTD }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
