
@extends('layouts.dashboard')

@section('content')
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 900px;
    margin: 10px auto;
    background: #fff;
    padding: 10px;	
    /* box-shadow: 0 1px 1px rgba(0,0,0,.05); */
}
.table-wrapper1 {
    width: 900px;
    margin: 30px auto;
    /* background: #fff; */
    /* box-shadow: 0 1px 1px rgba(0,0,0,.05); */
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 150px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.show {
    color: 'gray';
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}

.btn {
    padding: 1px 5px 1px 5px;
    font-size: 10px;
    margin-left: 10px;
    border-width: thin;
    border-color: black;
}
.container-lg {
    /* background: #fff; */
}
.table-text{
    color: black;
    font-size: 13px;
    min-height: 30px;
    min-width: 100px;
    
}
.col-md-6 {
    margin-top: 6px;
}
.radiobutton {
    
}
#nam, #nu {
    margin-top: 7px;
    margin-left: 10px;
}
#nu {
    margin-left: 20px
}
.radiostyle {
    margin-top: 7px
}
</style>
<div class="container-lg">
    <div class="table-responsive">
    <div class="table-wrapper">
            <div class="table-title">
                    <div class="col-sm-8"><h2>タレントプロフィール</b></h2></div>
            </div>
            
           <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">名前</label>
                            <div class="col-md-6">
                                    {{ $talent->name }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">メールアドレス</label>
                            <div class="col-md-6">
                                {{ $talent->email }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">性</label>
                            <div class="col-md-6 radiostyle row"> 
                                    <input type="radio" id="nam" name="fav_language" value="男" checked>
                                  <label for="html">男</label><br>
                                  <input type="radio" id="nu" name="fav_language" value="女">
                                  <label for="css">女</label><br>
                             </div>
                        </div> 

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">詳細の情報</label>
                            <div class="col-md-6">
                            <ul style="margin-left: -25px">  
                                @foreach ($infos as $info)  
                                    <li>{{ $info }}</li> 
                                @endforeach        
                                                 
                            </ul>
                            
                            </div>
                        </div>

                </div>


            <div class="table-title">
               
                <div class="table-text"><h2>自分のタスク</b></h2></div>
            </div>
            <div class="table-title">
                <div class="row">
                    <button type="button" class="btn btn-light">全て</button>
                    <button type="button" class="btn btn-success">未苦手</button>
                    <button type="button" class="btn btn-warning">行動中</button>
                    <button type="button" class="btn btn-primary">完了</button>
                    <button type="button" class="btn btn-danger">中断</button>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>スケジュール名</th>
                        <th>時間</th>
                        <th>場所</th>
                        <th>ステータス</th>
                        <th>詳細の情報</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Administration</td>
                        <td>(171) 555-2222</td>
                        <td>かか</td>
                        <td>かか</td>
                    </tr>
                    <tr>
                        <td>Peter Parker</td>
                        <td>Customer Service</td>
                        <td>(313) 555-5735</td>
                        <td>かか</td>
                        <td>かか</td>
                    </tr>
                    <tr>
                        <td>Fran Wilson</td>
                        <td>Human Resources</td>
                        <td>(503) 555-9931</td>
                        <td>かか</td>
                        <td>かか</td>
                    </tr>      
                </tbody>
            </table>
        </div>
    </div>
</div>     
@endsection