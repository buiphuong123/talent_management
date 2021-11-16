@extends('layouts.dashboard')
@push('styles')
    <link href="{{ asset('asset/css/schedule.css') }}" rel="stylesheet">
@endpush
@section('content-header')
    スケジュール編集
@endsection
<head>
  <style>
    form {
      padding: 50px;
      border-top: 2px solid black;
    }

    .col-md-3 {
      justify-content: flex-end;
      align-items: center;
      display: flex;
    }

    .button {
      float: right; 
      padding-bottom: 50px;
    }
  </style>
</head>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlInput1">スケジュール名</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlInput1">開始日</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlInput1">場所</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlSelect1">担当者</label>
                        </div>
                        <div class="col-md-9">
                          <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="exampleFormControlTextarea1">詳細の情報</label>
                        </div>
                        <div class="col-md-9">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="button">
                        <button type="button" class="btn btn-danger" style="margin-right: 30px;">キャンセル</button>
                        <button type="button" class="btn btn-success">編集</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection
