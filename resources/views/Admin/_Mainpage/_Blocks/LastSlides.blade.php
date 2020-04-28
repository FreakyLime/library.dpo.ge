<div class="col-md-6">
    <!-- BEGIN PORTLET -->
    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption caption-md">
                <i class="icon-bar-chart theme-font hide"></i>
                <span class="caption-subject font-blue-madison bold uppercase bpg_caps f20">ბოლო სლაიდები</span>
                <span class="caption-helper hide">weekly stats...</span>
            </div>
        </div>
        <div class="portlet-body pad_top0" style="min-height: 370px">
            <div class="table-scrollable table-scrollable-borderless">
                <table class="table table-hover table-light">
                    <thead>
                    <tr class="uppercase">
                        <th> სურათი</th>
                        <th> დასახელება</th>
                        <th colspan="2"> მოქმედება </th>
                    </tr>
                    </thead>
                    @foreach($LastSlides as $Slide)
                        <tr>
                            <td class="">
                                <img class="admin_mini_tumb" src="{{ asset('public/'.$Slide->image) }}">
                            </td>
                            <td>
                                <a href="#" class="primary-link"><?=substr($Slide['title_'.$lang], 0, 60);  ?>...</a>
                            </td>
                            <td>
                                <a href="{{ asset($lang) }}/admin/slider_module/edit_slider/{{ $Slide->id }}" class="btn blue"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <a href="{{ asset($lang) }}/admin/slider_module/delete_slider/{{ $Slide->id }}" class="btn red"><i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- END PORTLET -->
</div>