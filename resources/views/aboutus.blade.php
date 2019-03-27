@extends('layouts.app')
@section('content');


<div class="container">
<div class="row" style="margin-top:50px;">
      <div class="container">
      <span style="font-weight:bold; color:#5F9EA0; font-size:24px;">關於ETicket</span><br><br>

      <div class="row">
  <div class="col-sm-6">
  <div class="card" style="width: 25rem;">
  <img src="images/BLOCKCHAIN.png" class="card-img-top" alt="...">
  <div class="card-body">
    <li>輔仁大學資訊管理學系第36屆資訊系統專題</li>
    <li>組織成員:林劭宇 許鈞崴 陳柏廷 宋家豪 劉玟宏</li>
    <li><a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">聯絡我們:ETicket@gmail.com</a></li>
  </div>
</div>
  </div>
  <div class="col-sm-6">
  <span style="font-weight:bold; color:#5F9EA0; font-size:24px;">組織簡介</span><br><br>
  <p font size="5">ETicket票務平台是鏈券股份有限公司旗下的全功能區塊鏈售票系統，我們結合區塊鏈的特性，讓票務資訊與金流來往能夠不被竄改與公開透明，建立智能合約讓金流交易更有效率、安全與節省成本，並利用我們平台的虛擬幣進行電子錢包轉帳，除此之外
  ETicket也採用電子票券實名制與提供二手平台轉讓，票券之間只有在我們平台內才能轉賣，並且會透過ETicket設立的轉賣規則，讓票無法造假與任意抬價，藉此達到杜絕黃牛的效果，礙於發展初期的狀態目前只提供少部分活動的
票券買賣，在未來我們也希望能強化本身的系統與服務，與更多廠商合作，提供最順暢、最方便的購票體驗，以豐富活動點綴眾人生活。歡迎加入我們團隊。</p><br>
<hr>
<span style="font-weight:bold; color:#5F9EA0; font-size:24px;">組織歷程</span><br><br>
<li>2018/10:成立團隊與設定發展目標</li>


  </div>
</div>
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