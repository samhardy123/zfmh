  @extends('pages.main')

 
 <script src="{{ asset('/power/jquery-1.10.2.js') }}" type="text/javascript"></script>
             <script src="{{ asset('/power/jquery-ui.js') }}" type="text/javascript"></script>
                        <link href="{{ asset('/power/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
.form-style-2{
    max-width: 500px;
    padding: 20px 12px 10px 20px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
    font-weight: bold;
    font-style: italic;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
    font-size: 15px;
    padding-bottom: 3px;
}
.form-style-2 label{
    display: block;
    margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
    width: 100px;
    font-weight: bold;
    float: left;
    padding-top: 8px;
    padding-right: 5px;
}
.form-style-2 span.required{
    color:red;
}
.form-style-2 .tel-number-field{
    width: 40px;
    text-align: center;
}
.form-style-2 input.input-field{
    width: 48%;
    
}

.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border: 1px solid #C2C2C2;
    box-shadow: 1px 1px 4px #EBEBEB;
    -moz-box-shadow: 1px 1px 4px #EBEBEB;
    -webkit-box-shadow: 1px 1px 4px #EBEBEB;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    padding: 7px;
    outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
    border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
    height:100px;
    width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
    border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
    background: #EA7B00;
    color: #fff;
   
}
 .wid{
      
    width: 238px;

    }
.form-style-7 li > span{
    background: #F3F3F3;
    display: block;
    padding: 3px;
    margin: 0 -9px -9px -9px;
    text-align: center;
    color: #C0C0C0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;

}

</style>
<script type="text/javascript">
//auto expand textarea
$(function(){
$( "#datepicker" ).datepicker();
//Pass the user selected date format
$( "#format" ).change(function() {
$( "#datepicker" ).datepicker( "option", "dateFormat", $(this).val() );
});
});
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

function isNumberKey(evt){  <!--Function to accept only numeric values-->
    //var e = evt || window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
        return false;
        return true;
    }
           
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }

     $(function(){
$( "#datepicker" ).datepicker();
//Pass the user selected date format
$( "#format" ).change(function() {
$( "#datepicker" ).datepicker( "option", "dateFormat", $(this).val() );
});
});
</script>

 <link href="{{ asset('/power/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('/power/jquery-ui.js') }}" type="text/javascript"></script>          
    <script src="{{ asset('/power/jquery-1.10.2.js') }}" type="text/javascript"></script>    
@section('content')
<div class="page_img"><img src="images/page_img.jpg" width="950px" height="210px"></div>
 
    <!--==============================content================================-->
<section id="content"> 

{!!Form::open(array('route'=>'savePlanning' , 'method'=>'POST'  , 'files' => true , 'id'=>'form' , 'class'=>'form-style-7 cntr'))!!}       
        @if(!empty(session('error')))
           <div style="width: 956px; margin-left: 196px;" id="j_idt26:j_idt27" class="ui-messages ui-widget" aria-live="polite"><div class="ui-messages-fatal ui-corner-all"><a href="#" class="ui-messages-close" onclick="$(this).parent().slideUp();return false;"><span class="ui-icon ui-icon-close"></span></a><span class="ui-messages-fatal-icon"></span><ul><li><span class="ui-messages-fatal-summary">Fatal!</span><span class="ui-messages-fatal-detail"><h2 style="color: red;">{{session('error') }}</h2></span></li></ul></div></div>
        @endif 
        @if(!empty(session('success')))
        <div style="width: 956px; margin-left: 196px;" id="j_idt26:j_idt27" class="ui-messages ui-widget" aria-live="polite"><div class="ui-messages-info ui-corner-all"><a href="#" class="ui-messages-close" onclick="$(this).parent().slideUp();return false;"><span class="ui-icon ui-icon-close"></span></a><span class="ui-messages-info-icon"></span><ul><li><span class="ui-messages-info-summary"></span><span class="ui-messages-info-detail"><h2 style="color: green;">{{ session('success') }}</h2></span></li></ul></div></div>
        @endif 
<div class="form-style-2" style="    margin-left: 184px;">
    <div class="form-style-2-heading">Plan Your Event</div>
    <form action="" method="post">              
        <label for="date">
            <span>Date 
                <span class="required"></span>
            </span>
            <input type="text" id="datepicker" class="input-field"  placeholder="10-11-2015" name="date" value=""  style="border-bottom-width: 2px;    border-bottom-color: red;"/>
        </label>
        <label for="location">
            <span>Location</span>
          {!!Form::select('location' , $location , '' , array('class'=> 'select-field wid'  ) )!!}
        </label> 
        <label for="Hall">
            <span>Hall</span>
          {!!Form::select('hall' , $hall , '' , array('class'=> 'select-field wid'  ) )!!}
        </label>
           <label for="Camera Man">
             <b style="margin-right: 27px;"> Camera Man </b>
                        {!!Form::radio('camera_man' , 'Required' , array('class'=>'form-control'))!!}&nbsp <spam>Required</spam> &nbsp 
        
                        {!!Form::radio('camera_man' , 'Not-Required' , array('class'=>'form-control'))!!}  &nbsp <spam>Not-Required</spam>
        </label>
        <label for="advance">
            <span>Advance 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" onkeypress="return isNumberKey(event)" name="advance" value="" />
        </label>.
        <label for="field2">
            <span>Budget 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" onkeypress="return isNumberKey(event)" name="budget" value="" />
        </label>
        <label for="service">
            <span>Decide Service</span>
          {!!Form::select('service' , $service , '' , array('class'=> 'select-field wid'  ) )!!}
        </label>
         <label for="menu">
            <span>Decide Menu Selections </span>
          {!!Form::select('menu' , $menu , '' , array('class'=> 'select-field wid'  ) )!!}
        </label>
        <label for="Own Catrer">
             <b style="margin-right: 27px;"> Own Catrer </b>
                        {!!Form::radio('own_catrer' , 'Yes' , array('class'=>'form-control'))!!}&nbsp <spam>Yes</spam> &nbsp 
        
                        {!!Form::radio('own_catrer' , 'No' , array('class'=>'form-control'))!!}  &nbsp <spam>No</spam>
        </label>
        <label for="package">
            <span>Final Package 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" onkeypress="return isNumberKey(event)" name="package" value="" />
        </label>
        <label for="field2">
            <span>Phone 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" onkeypress="return isNumberKey(event)" name="phone" value="" />
        </label>
       <!--  <label for="package">
            <span>Date 
                <span class="required"></span>
            </span>
           <input type="text" id="datepicker">
        </label> -->

         <label>
            <span>&nbsp;</span>
            <input type="submit" value="Submit" />
        </label>
    </form>
</div>
 {!! Form::close() !!}


  @stop


@section('footer')

@stop