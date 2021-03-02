@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container">
    <div class="card mt-3">
      <div class="card-body d-flex flex-row">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        <div>
          <div class="font-weight-bold">
            ユーザー名
          </div>
          <div class="font-weight-lighter">
            2021/3/2 20:00
          </div>
        </div>
      </div>
      <div class="card-body pt-0 pb-2">
        <h3 class="h4 card-title">
          記事タイトル
        </h3>
        <div class="card-text">
          記事本文
        </div>
        <!-- 投稿した画像を表示 -->
        <img src="https://www.ghibli.jp/gallery/kazetachinu043.jpg" class="img-fluid shadow-2-strong" alt=""/>
      </div>
    </div>
  </div>
@endsection