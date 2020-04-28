<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Duplicate Form Sections</title>
    <style type="text/css">
        a {
            color:#679CCA;
        }
    </style>
</head>
<body>
{{--CONTENT START--}}

<form action="{{route("modulefieldsmanager")}}" id="form_sample_1" class="form-horizontal" method="post">
    <div class="form-body">



        <div class="form-group">
            <label class="control-label col-md-3" style="float: left">მოდულის სახელი
                <span class="required"> * </span>
            </label>
            <br><br>
            <div class="col-md-4" style="float: left">
                <div class="col-md-4" style="float: right">
                    <input name="module" type="text" class="form-control" />
                </div>
            </div>
        </div>
        <br><br>


        {{--JS LOOP CREATOR--}}
        <div id="sections">
            <div class="section">

                <div class="form-group">
                    <br><br>
                    <p style="clear: both">
                        <div class="col-md-4">
                            <select class="form-control" name="0[type]" style="float: left">
                                <option value="Inpout">Inpout</option>
                                <option value="textarea">Text Area</option>
                                <option value="image">Image</option>
                                <option value="list">List Menu</option>
                                <option value="radio">Radio</option>
                                <option value="chackbox">Chack Box</option>
                            </select>
                            <div class="col-md-4" style="float: left">
                                <input type="checkbox" name="0[lang_ge]" value="ge">GE<br>
                                <input type="checkbox" name="0[lang_en]" value="en">EN<br>
                                <input type="checkbox" name="0[lang_ru]" value="ru">RU<br>
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[name]" type="text" placeholder="სახელი" class="form-control" />
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[placeholder]" type="text" placeholder="სათაური (placeholder)" class="form-control" />
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[editor]" type="checkbox" value="editor">რედაქტორი<br>
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[idname]" type="text" placeholder="ID" class="form-control" />
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[classname]" type="text" placeholder="Class" class="form-control" />
                            </div>

                            <div class="col-md-4" style="float: left">
                                <input name="0[imgwidth]" type="text" placeholder="სურათის სიგრძე" class="form-control" />
                            </div>
                            <div class="col-md-4" style="float: left">
                                <input name="0[imgheight]" type="text" placeholder="სურათის სიმაღლე" class="form-control" />
                            </div>


                        </div>
                    </p>
                </div>

            </div>
        </div>

        <p style="padding: 20px; margin-left: 30px; background-color: #f2f2f2; width: 120px; float: left; clear: right"><a href="#" class='addsection'>Add Section</a></p>
        {{--JS LOOP CREATOR--}}



        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <br><br><br><br><br><br><br><br>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">დამატება</button>
                </div>
            </div>
        </div>
    </div>
</form>

{{--CONTENT END--}}
<script src="{{ asset('public/FieldBuilder/js/jquery.js') }}"></script>
<script src="{{ asset('public/FieldBuilder/js/app.js') }}"></script>
</body>
</html>