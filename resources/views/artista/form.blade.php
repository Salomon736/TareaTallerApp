
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $artista->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">artista <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('genero') }}</label>
    <div>
        {{ Form::text('genero', $artista->genero, ['class' => 'form-control' .
        ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
        {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">artista <b>genero</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('lugar_nacimiento') }}</label>
    <div>
        {{ Form::text('lugar_nacimiento', $artista->lugar_nacimiento, ['class' => 'form-control' .
        ($errors->has('lugar_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Nacimiento']) }}
        {!! $errors->first('lugar_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">artista <b>lugar_nacimiento</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Enviar</button>
            </div>
        </div>
    </div>
