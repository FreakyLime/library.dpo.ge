<div class="portlet-body">
    <div class="row">
        @foreach($GetModules as $Module)
            <div class="col-md-my" style="width: <? echo  100 / count($GetModules)?>%;">
                <div class="mt-widget-3">
                    <div class="mt-head {{ $Module->bgcolor }}">
                        <div class="mt-head-icon">
                            <div class="tile-body">
                                <i class="{{ $Module->icon }}"></i>
                            </div>
                        </div>
                        <a href="{{ asset($lang) }}/admin/{{ $Module->module }}_module/list/{{ $menu_id }}">
                            <div class="mt-head-desc bpg_caps f18"> {{ $Module->title }} </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>