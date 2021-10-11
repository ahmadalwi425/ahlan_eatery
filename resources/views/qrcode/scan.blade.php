<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WebCodeCamJS</title>
        <link href="{{asset('assets/assetsqrcode')}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('assets/assetsqrcode')}}/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container" id="QR-Code">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="navbar-form navbar-left">
                        <h4>WebCodeCamJS.js Demonstration</h4>
                    </div>
                    <div class="navbar-form navbar-right">
                        <select class="form-control" id="camera-select"></select>
                        <div class="form-group">
                            <input id="image-url" type="text" class="form-control" placeholder="Image url">
                            <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                            <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                            <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                            <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
                            <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
                        </div>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div class="col-md-6">
                        <div class="well" style="position: relative;display: inline-block;">
                            <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                            <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                            <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail" id="result">
                            <div class="well" style="overflow: hidden;">
                                <img width="320" height="240" id="scanned-img" src="">
                            </div>
                            <div class="caption">
                                <h3>Scanned result</h3>
                                <p id="scanned-QR"></p>
                                <form action="{{url('pesanmeja')}}" method="POST">
                                    @csrf
                                    <input type="hidden" id="hasilscan" name="no_meja" value="">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/filereader.js"></script>
        <!-- Using jquery version: -->
        <!--
            <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/jquery.js"></script>
            <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/qrcodelib.js"></script>
            <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/webcodecamjquery.js"></script>
            <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/mainjquery.js"></script>
        -->
        <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/qrcodelib.js"></script>
        <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/webcodecamjs.js"></script>
        <script type="text/javascript" src="{{asset('assets/assetsqrcode/')}}/js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </body>
</html>