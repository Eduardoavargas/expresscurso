@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dados['countAlunosAguardando'] }}</h3>
                        <p>Alunos aguardando cadastro</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/alunos" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $dados['countAlunosCadastradoMes'] }}<sup style="font-size: 20px"></sup></h3>
                        <p>Ativados Mês</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/aluno/check" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $dados['countAlunosCadastrado'] }}</h3>
                        <p>Total Ativados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/aluno/check" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $dados['countContatoCadastrado'] }}</h3>
                        <p>Contatos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="/contatos" class="small-box-footer">Ver <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rank</h3>
                        <div class="card-tools">
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Divulgador</th>
                                    <th>Semana</th>
                                    <th>Mês</th>
                                    <th>Total Utilizado</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dados['rank'] as $key => $item)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $item['s'] }}</td>
                                        <td>{{ $item['m'] }}</td>
                                        <td>{{ $item['tu'] }}</td>
                                        <td>{{ $item['t'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
