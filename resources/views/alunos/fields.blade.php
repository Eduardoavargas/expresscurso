<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    {!! Form::text('data_nascimento', null, ['class' => 'form-control','id'=>'data_nascimento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#data_nascimento').datepicker()
    </script>
@endpush

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Voucher Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voucher_id', 'Voucher Id:') !!}
    {!! Form::text('voucher_id', null, ['class' => 'form-control']) !!}
</div>