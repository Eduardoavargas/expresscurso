<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="alunos-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Email</th>
                <th>Data Nascimento</th>
                <th>Telefone</th>
                <th>Curso 1</th>
                <th>Curso 2</th>
                <th>Divulgador</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{  Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>{{ $aluno->curso->nome }}</td>
                    <td>{{ $aluno->cursob->nome ?? '' }}</td>
                    <td>{{ $aluno->voucher->divulgador->nome }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['alunos.destroy', $aluno->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            @if($aluno->check == 0)
                        <a href="{{ route('alunos.check', [$aluno->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="fa fa-check"></i>
                            </a>
                            @endif
                            <a href="{{ route('alunos.show', [$aluno->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('alunos.edit', [$aluno->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $alunos])
        </div>
    </div>
</div>
