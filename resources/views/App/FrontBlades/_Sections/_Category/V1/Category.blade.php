<div class="widget wg-categories store-alt box-with-pager">
    <h3 class="wg-title store-alt bpg_caps fs22">{{ trans('web.category_title') }}</h3>

    <form action="{{ asset('products/') }}" method="get">
        <div class="wg-body">
            <?php
            $products = \Illuminate\Support\Facades\Input::has('products') ? \Illuminate\Support\Facades\Input::get('products'): []
            ?>
            <ul class="wg-categories-list store-alt">
                @foreach($Category as $category)
                    <p>
                        <input onClick="this.form.submit()" type="checkbox" name="products[]" id="p{{ $category->id }}" value="{{ $category->id }}" {{in_array($category->id, $products ) ? 'checked' :'' }}>
                        <label for="p{{ $category->id }}" class="bpg_caps fs16 fbold">{{ $category['title_'.$lang] }}</label>
                    </p>
                @endforeach
            </ul>
            <p></p>
            <br>

            <?php if($show ==1){?>
            <h3 class="wg-title store-alt bpg_caps fs22">{{ trans('web.aromats_title') }}</h3>
            <?php
            $aromats = \Illuminate\Support\Facades\Input::has('aromat') ? \Illuminate\Support\Facades\Input::get('aromat'): []
            ?>
            <ul class="wg-categories-list store-alt">
                @foreach($Aromats as $item)
                    <p >
                        <input onClick="this.form.submit()" type="checkbox" name="aromat[]" id="a{{ $item->id }}" value="{{ $item->id }}" {{in_array($item->id, $aromats ) ? 'checked' :'' }}>
                        <label for="a{{ $item->id }}" class="bpg_caps fs16 fbold">{{ $item['title_'.$lang] }}</label>
                    </p>
                @endforeach

            </ul>
            <?}?>
        </div>
    </form>
</div>