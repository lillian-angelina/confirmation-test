@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
    <div class="thanks__container">
      <h1 class="thanks__title">Thank you</h1>
      <p class="thanks__message">お問い合わせありがとうございました</p>
      <a href="{{ url('/') }}" class="thanks__button">HOME</a>
    </div>
@endsection
