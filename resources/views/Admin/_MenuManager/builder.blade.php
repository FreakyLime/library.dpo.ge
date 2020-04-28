@extends('Admin._masterPage')

@section('content')

    <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <link href="{{ asset('public') }}/_Admin/NestMenu/vendor/nestable/nestable.css" rel="stylesheet">
    <script src="{{ asset('public/_Admin/NestMenu/vendor/nestable/jquery.nestable.js')}}" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
  $('.dd').nestable({
    dropCallback: function(details) {

       var order = new Array();
       $("li[data-id='"+details.destId +"']").find('ol:first').children().each(function(index,elem) {
         order[index] = $(elem).attr('data-id');
       });

       if (order.length === 0){
        var rootOrder = new Array();
        $("#nestable > ol > li").each(function(index,elem) {
          rootOrder[index] = $(elem).attr('data-id');
        });
       }
        $.ajaxSetup(
                {
                    headers:
                    {
                        'X-CSRF-Token': $('input[name="_token"]').val()
                    }
                });
       $.post('{{URL::route("manage_menu_reorder")}}',
        { source : details.sourceId,
          destination: details.destId,
          order:JSON.stringify(order),
          rootOrder:JSON.stringify(rootOrder)
        },
        function(data) {
         // console.log('data '+data);
        })
       .done(function() {
          $( "#success-indicator" ).fadeIn(100).delay(1000).fadeOut();
       })
       .fail(function() {  })
       .always(function() {  });
     }
   });

  $('.delete_toggle').each(function(index,elem) {
      $(elem).click(function(e){
        e.preventDefault();
        $('#postvalue').attr('value',$(elem).attr('rel'));
        $('#deleteModal').modal('toggle');
      });
  });
});
</script>

  <div class="row">
    <div class="col-md-12">
      <div class="well">
        <p class="lead bpg_caps fbold"><a href="#newModal" class="btn btn-default pull-right" data-toggle="modal"><span class="glyphicon glyphicon-plus-sign"></span> ახალი მენიუს დამატება</a> არსებული მენიუები:</p>
        <div class="dd" id="nestable">
          <?php echo $menu ?>
        </div>

        <p id="success-indicator" style="display:none; margin-right: 10px;">
          <span class="glyphicon glyphicon-ok"></span> მენიუს სორტირება წარმატებით განხორციელდა!
        </p>
      </div>
    </div>
  </div>

    <!-- Create new item Modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('route'=>'manage_menu_new','class'=>'form-horizontal','role'=>'form'))}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">ახალი მენიუს შექმნა</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">ქართული</label>
                        <div class="col-lg-10">
                            {{ Form::text('title_ge',null,array('class'=>'form-control'))}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="label" class="col-lg-2 control-label">ინგლისური</label>
                        <div class="col-lg-10">
                            {{ Form::text('title_en',null,array('class'=>'form-control'))}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">რუსული</label>
                        <div class="col-lg-10">
                            {{ Form::text('title_ru',null,array('class'=>'form-control'))}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                {{ Form::close()}}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Delete item Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(array('route'=>'manage_menu_delete')) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Provide details of the new menu item</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this menu item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="delete_id" id="postvalue" value="" />
                    <input type="submit" class="btn btn-danger" value="Delete Item" />
                </div>
                {{ Form::close() }}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@stop