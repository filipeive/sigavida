@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Painel de Controle</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Bem-vindo ao sistema de Farmácia e Consultório. Aqui você pode gerenciar suas vendas, consultas, estoques e mais.</p>
                    
                    <div class="row text-center">
                        <div class="col-md-6 mb-3">
                            <a href="{{-- route('vendas.index') --}}" class="btn btn-outline-primary w-100">
                                <i class="mdi mdi-cash-register me-2"></i> Gerenciar Vendas
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{-- route('consultas.index') --}}" class="btn btn-outline-success w-100">
                                <i class="mdi mdi-stethoscope me-2"></i> Gerenciar Consultas
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{-- route('estoque.index') --}}" class="btn btn-outline-warning w-100">
                                <i class="mdi mdi-warehouse me-2"></i> Controle de Estoque
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{-- route('relatorios.index') --}}" class="btn btn-outline-info w-100">
                                <i class="mdi mdi-chart-bar me-2"></i> Relatórios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection