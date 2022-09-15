<!-- Nome Field -->
<div class="col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $aluno->nome }}</p>
</div>

<!-- Cpf Field -->
<div class="col-sm-12">
    {!! Form::label('cpf', 'Cpf:') !!}
    <p>{{ $aluno->cpf }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $aluno->email }}</p>
</div>

<!-- Data Nascimento Field -->
<div class="col-sm-12">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    <p>{{ $aluno->data_nascimento }}</p>
</div>

<!-- Telefone Field -->
<div class="col-sm-12">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{{ $aluno->telefone }}</p>
</div>

<!-- Voucher Id Field -->
<div class="col-sm-12">
    {!! Form::label('voucher_id', 'Voucher Id:') !!}
    <p>{{ $aluno->voucher->uuid }}</p>
</div>
<!-- Divulgador -->
<div class="col-sm-12">
    {!! Form::label('divulgador', 'Divulgador:') !!}
    <p>{{ $aluno->voucher->divulgador->nome }}</p>
</div>
<!-- Curso 1 -->
<div class="col-sm-12">
    {!! Form::label('curso', 'Curso 1:') !!}
    <p>{{ $aluno->curso->nome }}</p>
</div>

<!-- Curso 2 -->
<div class="col-sm-12">
    {!! Form::label('curso', 'Curso 2:') !!}
    <p>{{ $aluno->cursob->nome  ?? '' }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Cadastrado:') !!}
    <p>{{ $aluno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Atualizado:') !!}
    <p>{{ $aluno->updated_at }}</p>
</div>

