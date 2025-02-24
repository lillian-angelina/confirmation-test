@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Confirm</h2>
  </div>
  <form class="form" action="contacts/thanks" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_1">お名前</span>
        <input class="form__input--item_1" type="hidden" name="name" value="{{ $contact['name'] }}" readonly>
        <span class="form__input--item_1">{{ $contact['name'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_2">性別</span>      
        <input class="form__input--item_2" type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly>
        <span class="form__input--item_2">{{ $contact['gender'] }}</span>
      </div>
    </div>  
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_3">メールアドレス</span>
        <input class="form__input--item_3" type="hidden" name="email" value="{{ $contact['email'] }}" readonly>
        <span class="form__input--item_3">{{ $contact['email'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_4"></span>
        <input class="form__input--item_4" type="hidden" name="tel" value="{{ $contact['tel'] }}" readonly>
        <span class="form__input--item_4">{{ $contact['tel'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_5"></span>
        <input class="form__input--item_5" type="hidden" name="address" value="{{ $contact['address'] }}" readonly>
        <span class="form__input--item_5">{{ $contact['address'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_6"></span>
        <input class="form__input--item_6" type="hidden" name="building" value="{{ $contact['building'] }}" readonly>
        <span class="form__input--item_6">{{ $contact['building'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_7"></span>
        <input class="form__input--item_7" type="hidden" name="category_id" value="{{ $contact['category_id'] }}" readonly>
        <span class="form__input--item_7">{{ $contact['category_id'] }}</span>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item_8"></span>
        <input class="form__input--item_8" type="hidden" name="message" value="{{ $contact['message'] }}" readonly>
        <span class="form__input--item_8">{{ $contact['message'] }}</span>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
      <button class="form__button-edit" type="button" onclick="history.back()">修正</button>
    </div>
  </form>
</div>
@endsection
