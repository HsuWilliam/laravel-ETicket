@extends('layouts.app')
 @section('content');
 
 <div class="container">
      <div class="row" style="margin-top:50px;">
      <div class="container">
      <span style="font-weight:bold; color:#5F9EA0; font-size:22px;">最新公告</span><br><br>

      @foreach($post as $post)
      <div id="accordion1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
    
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#{{$post->postid}}">
        <img src="images/ear.png" width="25" height="25" class="d-inline-block align-top" alt=""><b>【{{$post->title}}】</b>
        </a>
      <div id="{{$post->postid}}" class="collapse" data-parent="#accordion1">
      <br> <br>{{$post->content}}　
      </div>
    </div>
    <br>
  </div>
  @endforeach
  
    </div> 
    </div>
    </div>
</div>
<br><br>
    <hr>
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