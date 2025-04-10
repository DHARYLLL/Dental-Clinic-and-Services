@extends('layout.staff_nav_layout')

@section('title', 'Supply Lists')
@section('user_type', 'Hi, Staff')
@section('breadcrumb')

<div class="px-4 py-2 text-secondary" style="font-size: 0.95rem;">
    <span><a href="" class="text-decoration-none text-dark">Home</a></span>
    <span class="mx-2">></span>
    <span class="text-muted">Supplies</span>
</div>

@endsection

@section('staffContent')

@include('layout.supply_crud',['supplies' => $supplies, 'redirect_route' => route('staffUI.supply')])
@endsection