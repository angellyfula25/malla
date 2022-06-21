<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombAsignatura') }}
            {{ Form::text('nombAsignatura', $asignatura->nombAsignatura, ['class' => 'form-control' . ($errors->has('nombAsignatura') ? ' is-invalid' : ''), 'placeholder' => 'Nombasignatura']) }}
            {!! $errors->first('nombAsignatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantCreditos') }}
            {{ Form::text('cantCreditos', $asignatura->cantCreditos, ['class' => 'form-control' . ($errors->has('cantCreditos') ? ' is-invalid' : ''), 'placeholder' => 'Cantcreditos']) }}
            {!! $errors->first('cantCreditos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombDocente') }}
            {{ Form::text('nombDocente', $asignatura->nombDocente, ['class' => 'form-control' . ($errors->has('nombDocente') ? ' is-invalid' : ''), 'placeholder' => 'Nombdocente']) }}
            {!! $errors->first('nombDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prerrequisito') }}
            {{ Form::text('prerrequisito', $asignatura->prerrequisito, ['class' => 'form-control' . ($errors->has('prerrequisito') ? ' is-invalid' : ''), 'placeholder' => 'Prerrequisito']) }}
            {!! $errors->first('prerrequisito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantHorasTA') }}
            {{ Form::text('cantHorasTA', $asignatura->cantHorasTA, ['class' => 'form-control' . ($errors->has('cantHorasTA') ? ' is-invalid' : ''), 'placeholder' => 'Canthorasta']) }}
            {!! $errors->first('cantHorasTA', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantHorasTD') }}
            {{ Form::text('cantHorasTD', $asignatura->cantHorasTD, ['class' => 'form-control' . ($errors->has('cantHorasTD') ? ' is-invalid' : ''), 'placeholder' => 'Canthorastd']) }}
            {!! $errors->first('cantHorasTD', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>