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
          <h1>Menu 8</h1>
                    <li><a href="#">Beef Roast</a></li>
                    <li><a href="#">Mutton Korma</a></li>
                    <li><a href="#">Chicken Korma</a></li>
                    <li><a href="#">Chicken Plao</a></li>
                    <li><a href="#">Fruit Trifel or Firni</a></li>
                    <li><a href="#">Roghani Nan</a></li>
                    <li><a href="#">Salad 3 Types</a></li>
                    <li><a href="#">Chatni Podina</a></li>
          </ul>
        </div></td>
      
      </tr>
      
    </table>

  </div>
@stop


@section('footer')

@stop