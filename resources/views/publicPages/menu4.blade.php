@extends('pages.main')
 
  <script src="{{ asset('/power/jquery.min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('/power/bootstrap.min.js') }}" type="text/javascript"></script>
        <link href="{{ asset('/power/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
 @section('content')
<div class="page_img"><img src="images/page_img.jpg" width="950px" height="210px"></div>
  </div> 
    <!--==============================content================================-->
<section id="content">         
   <div class="container_12">
    <div class="wrapper">
    </div>
    <div class="grid_12">
            <h2 class="bg-h2">MENU &amp; SPECIALS<span></span></h2>
    </div>
 
    <table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div class="text1">
          <ul class="nav nav-pills nav-stacked">
    <li><a href="{{route('menu1')}}">Menu 1</a></li>
    <li><a href="{{route('menu2')}}">Menu 2</a></li>
    <li><a href="{{route('menu3')}}">Menu 3</a></li>
    <li><a href="{{route('menu4')}}">Menu 4</a></li>
    <li><a href="{{route('menu5')}}">Menu 5</a></li>
    <li><a href="{{route('menu6')}}">Menu 6</a></li>
    <li><a href="{{route('menu7')}}">Menu 7</a></li>
    <li><a href="{{route('menu8')}}">Menu 8</a></li>
    <li><a href="{{route('menu9')}}">Menu 9</a></li>
    <li><a href="{{route('menu10')}}">Menu 10</a></li>
  
  </ul>
        </div></td>
        <td><div class="text2" style="height: 438px;">
          <ul class="ul-2 padding-top1">
         <h1>Menu 4</h1>
            <li><a href="#">Mutton Danda Roast</a></li>
            <li><a href="#">Fish Fry</a></li>
            <li><a href="#">Chicken Steam Roast</a></li>
            <li><a href="#">Siekh Kabab</a></li>
            <li><a href="#">Mutton Korma or White Korma</a></li>
            <li><a href="#">Chicken Khara Masala</a></li>
            <li><a href="#">Palak Gosht</a></li>
            <li><a href="#">Kabali Plao</a></li>
            <li><a href="#">Zarda or Matanjan</a></li>
            <li><a href="#">Kheer</a></li>
            <li><a href="#">Roghani Nan</a></li>
            <li><a href="#">Salad 5 Types</a></li>
          </ul>
        </div></td>
      
      </tr>
      
    </table>

  </div>
@stop


@section('footer')

@stop