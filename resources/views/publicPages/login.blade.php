
{!!Form::open(array('route'=>'userLogin' , 'method'=>'POST'  , 'files' => true , 'id'=>'form' , 'class'=>'form-style-7 cntr'))!!}       
        @if(!empty(session('error')))
           <div style="width: 956px; margin-left: 196px;" id="j_idt26:j_idt27" class="ui-messages ui-widget" aria-live="polite"><div class="ui-messages-fatal ui-corner-all"><a href="#" class="ui-messages-close" onclick="$(this).parent().slideUp();return false;"><span class="ui-icon ui-icon-close"></span></a><span class="ui-messages-fatal-icon"></span><ul><li><span class="ui-messages-fatal-summary">Fatal!</span><span class="ui-messages-fatal-detail"><h2 style="color: red;">{{session('error') }}</h2></span></li></ul></div></div>
        @endif 
        @if(!empty(session('success')))
        <div style="width: 956px; margin-left: 196px;" id="j_idt26:j_idt27" class="ui-messages ui-widget" aria-live="polite"><div class="ui-messages-info ui-corner-all"><a href="#" class="ui-messages-close" onclick="$(this).parent().slideUp();return false;"><span class="ui-icon ui-icon-close"></span></a><span class="ui-messages-info-icon"></span><ul><li><span class="ui-messages-info-summary"></span><span class="ui-messages-info-detail"><h2 style="color: green;">{{ session('success') }}</h2></span></li></ul></div></div>
        @endif 
<div class="form-style-2" style="text-align:center;     padding-top: 100px;">
    <h1>Login Here</h1>
    <br>
    <form action="" method="post">              
        
        <label for="username">
            <span>User Name 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" name="username" value="" />
        </label>
        <label for="password">
            <span>Password 
                <span class="required"></span>
            </span>
            <input type="text" class="input-field" name="password" value="" />
        </label>
        
         <label>
            <span>&nbsp;</span>
            <input type="submit" value="Submit" />
        </label>
    </form>
</div>
 {!! Form::close() !!}
