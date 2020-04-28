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

<form action="{{route("tablemanager")}}" id="form_sample_1" class="form-horizontal" method="post">
    <div class="form-body">


        <div class="form-group">
            <label class="control-label col-md-3" style="float: left">ცხრილის სახელი
                <span class="required"> * </span>
            </label>
            <br><br>
            <div class="col-md-4" style="float: left">
                <div class="col-md-4" style="float: right">
                    <input name="table" type="text" class="form-control" />
                </div>
            </div>
        </div>
        <br><br>

        {{--JS LOOP CREATOR--}}
        <div id="sections">
            <div class="section">

                <div class="form-group">
                    <label class="control-label col-md-3" style="float: left">ველი
                        <span class="required"> * </span>
                    </label>
                    <br><br>
                    <div class="col-md-4" style="float: left">
                        <select class="form-control" name="0[type]">
                            <option value=""></option>
                            <option value="increments">ID (10)</option>
                            <option value="bigIncrements">ID (20)</option>
                            <option value="integer">ინტეგერი</option>
                            <option value="string">ვარჩარი</option>
                            <option value="mediumText">მცირე ტექსტი</option>
                            <option value="text">ტექსტი</option>
                            <option value="longText">ვრცელი ტექსტი</option>
                            <option value="date">თარიღი</option>
                            <option value="dateTime">თარიღი დრო</option>
                            <option value="time">დრო</option>
                        </select>
                        <div class="col-md-4" style="float: right">
                            <input name="0[value]" type="text" class="form-control" />
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <p><a href="#" class='addsection'>Add Section</a></p>
        {{--JS LOOP CREATOR--}}



        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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