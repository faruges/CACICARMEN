@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>


.video-js {
	width: 100%;
	height: 170%;
	top: 0px;
	left: 0px;
	padding: 0;
	font-size: 10px;
	line-height: 1;
	font-weight: normal;
	font-style: normal;
	font-family: "Ionicons", "Questrial" !important;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	overflow: hidden;
}

.video-js:-moz-full-screen {
	position: absolute;
}

.video-js:-webkit-full-screen {
	width: 100% !important;
	height: 120% !important;
}

.video-js *,
.video-js *:before,
.video-js *:after {
	box-sizing: inherit;
}

.video-js .vjs-big-play-button {
	font-size: 600%;
	line-height: 120px;
	height: 120px;
	width: 100px;
	display: block;
	position: absolute;
	text-indent: 5px;
	top: calc(50% - 50px);
	left: calc(50% - 50px);
	padding: 0;
	text-align: center;
	cursor: pointer;
	background: rgba(0,0,0,.15);
	color: #fff;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	border-radius: 100%;
	outline: none;
	-webkit-backdrop-filter: blur(20px) saturate(1.5) brightness(1.2);
	backdrop-filter: blur(20px) saturate(1.5) brightness(1.2);
}

</style>


<video id="my-video" class="video-js" controls preload="auto" data-setup='' loop>
<source style="margin-bottom: -80px;" src="{{asset('doc/Video.mp4')}}" type="video/mp4">
</video>


@endsection