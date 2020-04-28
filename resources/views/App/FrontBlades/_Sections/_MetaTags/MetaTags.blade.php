<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="icon" type="image/png" href="{{ asset('public/files/logo/logo.png') }}" />
<meta name="author" content="VISUAL STUDIO">


<title>{{ $Meta['title'] }}</title>
<meta name="description" content="{{ $Meta['description']  }}"  />
<meta name="keywords"    content="{{ $Meta['keywords']  }}" />

@if (request()->route()->getName() == "teams_category")
    <meta property="og:title"    content="{{ $Team['title_'.$lang] }}"/>
    <meta property="og:description"        content="{{ $Team['short_text_'.$lang] }}"/>
    <meta property="og:image"    content="{{ asset('public/'.$Team->image) }}" />
    <meta property="og:type"               content="company" />
@elseif(request()->route()->getName() == "menu_view")

    @if (!isset($News))
    <meta property="og:title"    content="{{ $Documents['title_'.$lang] }}"/>
    <meta property="og:image"    content="{{ asset('public/'.$Documents->image) }}" />
    <meta property="og:type"               content="article" />
    @else
    <meta property="og:title"    content="{{ $News['title_'.$lang] }}"/>
    <meta property="og:image"    content="{{ asset('public/'.$News->image) }}" />
    <meta property="og:type"               content="article" />
    @endif
@elseif (request()->route()->getName() == "services_reed")
    <meta property="og:title"    content="{{ $Service['title_'.$lang] }}"/>
    <meta property="og:image"    content="{{ asset('public/'.$Service->image) }}" />
    <meta property="og:type"               content="article" />
@else
    <meta property="og:title"       content="{{ $Meta['title'] }}" />
    <meta property="og:image"       content="{{ $Meta['image']  }}" />
    <meta property="og:type"               content="article" />
@endif
<meta property="og:url"                content="{{ \Illuminate\Support\Facades\Request::url() }}" />