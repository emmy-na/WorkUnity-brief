@extends('layouts.app')

@section('content')
  <h1>Modifier un employé</h1>
  <form action="{{ route('employees.update', $employee) }}" method="POST">
    @method('PUT')
    @include('employees._form')
  </form>
@endsection
