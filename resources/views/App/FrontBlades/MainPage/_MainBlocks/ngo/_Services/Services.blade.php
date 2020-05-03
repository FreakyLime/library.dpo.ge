<div class="col-md-12 col-sm-7">

    <div class="row" style="margin-bottom:20px;">
        <div class="col-md-8">
            <h2 class="bpg_caps fs36">{{ trans('web.What_Doing') }}</h2>
            <!-- <em class="bpg_caps">{{ trans('web.What_Doing_text') }}</em> -->
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="searchForm form-control" placeholder="{{ trans('web.search') }}">
                <span class="input-group-btn">
                    <button class="searchForm btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($MainServices as $item)
        <div class="col-md-6">
            <div class="box">
                <div class="icon-col">
                    <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="icons_tumb">
                </div>
                <div class="text-col">
                    <h4>
                        <a href="{{ asset('services/view/'.$item->id) }}" class="bpg_caps  fs17">
                            {{ $item['title_'.$lang] }}
                        </a>
                    </h4>
                    <p class="bpg_arial">{{ $item['short_text_'.$lang] }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <a href="{{ asset('services')}}" class="btn-style-1">
        {{ trans('web.all_services') }}
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
</div>