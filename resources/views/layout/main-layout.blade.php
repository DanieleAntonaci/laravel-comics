@extends('layout.main-layout')

@section('head')
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>Laravel-comics</title>

   <!-- Fonts -->
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <!-- Styles -->
   @vite('resources/js/app.js')

@endsection

@section('jumbotron')
   <section id="my_jubmbotron">
               
   </section>
@endsection

@section('current-series')
<div id="current_series">

   <div class="cards">
      <h2>
         CURRENT SERIES
      </h2>
      
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI" alt="comic book">
         
         <a href="comics">Action Comics</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="comic book">
         
         <a href="#">American Vampire 1976</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="graphic novel">
         
         <a href="#">Aquaman</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="comic book">
         
         <a href="#">Batgirl</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="comic book">
         
         <a href="#">Batman</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="comic book">
         
         <a href="#">Batman Beyond</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="comic book">
         
         <a href="#">Batman/Superman</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="comic book">
         
         <a href="#">Batman/Superman Annual</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="comic book">
         
         <a href="#">Batman: The Joker War Zone</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="comic book">
         
         <a href="#">Batman: Three Jokers</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="comic book">
         
         <a href="#">man: White Knight Presents: Harley Quinn</a>
      </div>
      <div class="my_card">
         <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="graphic novel">
         
         <a href="#">Catwoman</a>
      </div>
      
      <button>LOAD MORE</button>
   </div>
</div>
@endsection