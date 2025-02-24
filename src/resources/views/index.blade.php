@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_1">お名前<span class="form__label--required"> ※</span> </label>
        <input class="form__input--text_1" type="text" name="first-name" placeholder="例: 山田" value="{{ old('name') }}" />
        <input class="form__input--text_2" type="text" name="last-name" placeholder="例: 太郎" value="{{ old('name') }}" />
          <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
          </div>
      </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <label class="form__label--item_2" >性別<span class="form__label--required"> ※</span></label>
            <label>
                <input class="form__input--gender" type="radio" name="gender" value="male" checked required>
                男性
            </label>
            <label>
                <input class="form__input--gender" type="radio" name="gender" value="female" required>
                女性
            </label>
            <label>
                <input class="form__input--gender" type="radio" name="gender" value="other" required>
                その他
            </label>
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_3">メールアドレス<span class="form__label--required"> ※</span></label>
        <input class="form__input--text_3" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_4">電話番号<span class="form__label--required"> ※</span></label>
          <input class="form__input--text_4-1" type="tel" name="phone_prefix" id="phone_prefix" class="form-control" maxlength="6" placeholder="080" required> -      
          <input class="form__input--text_4-2" type="tel" name="phone_mid" id="phone_mid" class="form-control" maxlength="6" placeholder="1234" required> -
          <input class="form__input--text_4-3" type="tel" name="phone_suffix" id="phone_suffix" class="form-control" maxlength="6" placeholder="5678" required>
      </div>
      <div class="form__error">
        @error('tel')
        {{ $message }}
        @enderror
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_5">住所<span class="form__label--required"> ※</span></label>
        <input class="form__input--text_5" name="content" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>{{ old('content') }}</input>
      </div>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_6">建物名<span class="form__label--required"> ※</span></label>
        <input class="form__input--text_6" name="content" rows="1" placeholder="例: 千駄ヶ谷マンション101" required>{{ old('content') }}</input>
      </div>
      <div class="form__error">
         @error('name')
         {{ $message }}
         @enderror
      </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <label class="form__label--item_7">お問い合わせの種類<span class="form__label--required"> ※</span></label>
            <select name="contet" class="form__input--text_7" required>
                <option class="option-item" value="">選択してください</option>
                <option class="option-item" value="">選択してください</option>
            </select>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>   
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <label class="form__label--item_8">お問い合わせ内容<span class="form__label--required"> ※</span></label>
        <input class="form__input--text_8" name="content" rows="1" placeholder="例: お問い合わせ内容をご記載ください" required>{{ old('content') }}</input>
      </div>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection
