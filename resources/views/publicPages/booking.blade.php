@extends('pages.main')


<style type="text/css">
.align{
text-align:center;
}
</style>
@section('content')

<div class="Container100">
                <div class="Card" style="width: 894px; margin-left: 200px; background-color: none;">
                    <div class="CardTopic TexAlCenter">BOOKINGS</div>
                    <div class="SeparatorFull"></div>
                    <div class="Container100">
<form id="form" name="form" method="post" action="http://www.primefaces.org/volt/datatable.xhtml" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="form" value="form" />
<div id="form:singleDT" class="ui-datatable ui-widget ui-datatable-reflow" style="    background-color: burlywood;">

<div class="ui-datatable-tablewrapper">
    <table role="grid">
        <thead id="form:singleDT_head">
            <tr role="row">
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
                    <span class="ui-column-title">ID</span>
                    
                </th>
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
					<span class="ui-column-title">Date</span>                   
					
                </th>
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
                   <span class="ui-column-title">Budget</span>  
                </th>
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
                   <span class="ui-column-title">Advance</span>  
                </th>
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
                   <span class="ui-column-title">Final Pkg</span>  
                </th>
                <th id="form:singleDT:j_idt27" class="ui-state-default ui-sortable-column" role="columnheader">
                   <span class="ui-column-title">Phone</span>  
                </th>
        
            </tr>
        </thead>
        <tbody id="form:singleDT_data" class="ui-datatable-data ui-widget-content">
             @foreach($plan as $std)
            <tr id="row_{{$std->id}}" data-ri="0" data-rk="31f34ddd" class="ui-widget-content ui-datatable-even ui-datatable-selectable" role="row" aria-selected="false">
                <a href="www.google..com">
                <td role="gridcell" class="align">{{$std->id}}</td></a>
                <td role="gridcell" class="align" >{{$std->date}}</td>
                <td role="gridcell" class="align">{{$std->budget}}</td></a>
                <td role="gridcell" class="align">{{$std->advance}}</td></a>
                <td role="gridcell" class="align">{{$std->package}}</td></a>
                <td role="gridcell" class="align">{{$std->phone}}</td></a>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</form>
                    </div>
                </div>
        </div>


@stop


@section('footer')

@stop

<script type="text/javascript">
   function delete(obj){
        var id = $(obj).attr('value');
        $.ajax({
          method: "GET",
          url: "{{ route('delete') }}",
          data: { deleteId: id },
          dataType: 'json',
          success: function ( response ) {
            if(response.status != 'error'){
                  //alert('success');
                  $('#row_'+id).remove();
               
            } else {
             alert('Error');
            }
          }
      });

    }
    </script>