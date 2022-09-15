<!-- Divulgador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('divulgador', 'Divulgador:') !!}
    {!! Form::select('divulgador_id', $divulgadors, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uuid', 'Uuide:') !!}
    {!! Form::text('uuid') !!}
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

@push('page_scripts')
    <script type="text/javascript">
    //    $('#utilizado_at').datepicker()
    </script>
@endpush