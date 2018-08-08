<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-3 header">
        <div class="col-md-3">
            <div class="ml-5">
                <i class="fas fa-home"></i>
            </div>
            <div class="ml-5">
                <span>Sweet Home</span>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <form class="form-inline">
                <input type="text" class="form-control mr-3 w-75" placeholder="Gõ từ khoá và enter để tìm kiếm">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </form>
        </div>
        <div class="col-md-3 mt-4">
            <i class="fas fa-user fa-2x mr-2"></i>(<a href="">Logout</a>)
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Sweet Home</h5>
            <div class="clearfix"></div>
            <div class="row mt-3 mb-3 ml-1">
                <form action="" class="form-inline">
                    <div class="form-group">
                        <label class="mr-3">Danh sách chung cư</label>
                        <select name="categoryId" class="form-control mr-3">
                            <option value="0">{{__('mymessage.all_category')}}</option>
                            @foreach($list_obj as $item)
                                <option value="{{$item->id}}"{{$item->name}}></option>
                            @endforeach
                        </select>
                        <input type="submit" value="Lọc" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
            <div class="card">
                @foreach($list_obj as $item)
                    {{$item->image}}
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->address}}</p>
                    <p class="card-text"><small class="text-muted">{{$item->price}}</small></p>
                    <p class="card-text">{{$item->general_information}}</p>
                </div>
                @endforeach
            </div>
            <div class="row float-right mr-2">
                {{$list_obj->appends($_GET)->links()}}
            </div>

        </div>
    </div>
</div>
</body>
</html>