<!-- Nome Field -->
<div class="col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $contato->nome }}</p>
</div>

<!-- Telefone Field -->
<div class="col-sm-12">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{{ $contato->telefone }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contato->email }}</p>
</div>

<!-- Mensagem Field -->
<div class="col-sm-12">
    {!! Form::label('mensagem', 'Mensagem:') !!}
    <p>{{ $contato->mensagem }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contato->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contato->updated_at }}</p>
</div>

