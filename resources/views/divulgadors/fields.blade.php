<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    <label class="form-check">
        {!! Form::radio('status', "1", null, ['class' => 'form-check-input']) !!} Ativo
    </label>
    <label class="form-check">
        {!! Form::radio('status', "0", null, ['class' => 'form-check-input']) !!} Inativo
    </label>
</div>