@extends('layouts.app')

@section('content')

    <div class="signupPage">
        <header class="header">
            <h1>アカウントを作成</h1>
        </header>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <form method="POST" action="{{route('register')}}" >
           　　 {{ csrf_field() }}
              <label for="file_photo" class="rounded-circle userProfileImg">
                <div class="userProfileImg_description">画像をアップロード</div>
                <i class="fas fa-camera fa-3x"></i>
                <input type="file" id="file_photo" name="image">
              </label>
              <div class="userImgPreview" id="userImgPreview">
                <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
                <p class="userImgPreview_text">画像をアップロード済み</p>
              </div>


                <div class="form-group @error('name')has-error @enderror">
                <label for="name">名前 </label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="名前を入力してください">
                @error('name')
                <span class="errorMessage">
                {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group @error('email')has-error @enderror">
                <label for="email">メールアドレス </label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="メールアドレスを入力してください">
                @error('email')
                <span class="errorMessage">
                {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group @error('password')has-error @enderror">
                <label for="password">パスワード </label>
                <input type="password" name="password"  class="form-control" placeholder="パスワードを入力してください">
                @error('password')
                <span class="errorMessage">
                {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                <label for="password_confirmation">パスワード確認 </label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="パスワードを再度入力してください">
                </div>
                <div class="text-center">
                <button type="submit" class="btn submitBtn">はじめる</button>
                </div>
                <div class="linkToLogin">
                <a href="{{ route('login') }}">ログインはこちら</a>
                </div>
            </form>
        

        </div>
    </div>



@endsection