@extends('layouts.app')
 @section('content');
 <div class="container">
      <div class="row" style="margin-top:50px;">
      <div class="container">
      <span style="font-weight:bold; color:#5F9EA0; font-size:22px;">所有活動</span><br><br>

@foreach($data as $data)     
<div class="row">
  <div class="col-sm-6">
  <img src="{{$data->img}}" width="500" height="250" align="right"  >
  </div>
  <div class="col-sm-6">
  <div class="card w-150">
      <div class="card-body">
        <h5 class="card-title">{{$data->prog_name}}</h5>
        <p class="card-text">{{$data->prog_date}}</p>
        <p class="card-text">{{$data->site_name}}</p>

        <button style="float:center" onclick="location.href='{{ url('login') }}'" class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25" class="d-inline-block align-top" alt=""></button>
        <button type="button" class="btn btn-primary" data-toggle="modal"  href="#{{$data->prog_id}}">查看活動詳情</button>
     </div>
     <div class="modal fade bd-example-modal-lg" id="{{$data->prog_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" id="{{$data->prog_id}}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{"$data->prog_name"}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="{{$data->img }}"  height="400" alt="Card image cap">
      <br>
      <br>
      <p>{{"$data->prog_content"}}</p>
      <br>
      <br>
      <p align="center">售票時間:{{"$data->prog_selldate"}}</p>
      <p align="center">票價分類:{{"$data->prog_price"}}</p>
      <p align="center">場地:{{"$data->site_name"}}</p>
      <p align="center">演出時間:{{"$data->prog_date"}}</p>
      <img src="{{$data->imgprice }}" style="display:block; margin:auto;" height="500" width="400"  alt="Card image cap">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<hr>
<br>
@endforeach
</div>
</div>
</div>


<div class="text-white bg-dark p-4" style="position:relative ;top:300px ">
          <div class="row text-center col-12">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <ul class="nav">
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="">購票流程說明</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="{{url('clause')}}">服務條款</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="{{url('privacy')}}">隱私權政策</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="{{url('aboutus')}}">關於我們</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
  </ul>
          </div>
      </div>
<br>
      <div class="row text-center">
        <div class="col-4 col-md-4 col-lg-4">
          <a data-toggle="tooltip" data-placement="bottom" title="關於我們" target="_blank" href="#"><strong>ETicket票務平台</strong></a>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <span data-toggle="tooltip" data-placement="bottom" title="(Mon-Fri 9:30am–8:00pm Sat.11:00am-7:00pm)">客服專線: 02-22227777</span>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
            <a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">客服信箱: ETicket@gmail.com</a>
        </div>
        </div>
    <br>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>CopyrightcETicket Corporation. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>  
    </div>


 @endsection