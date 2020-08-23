@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>
  
.video-js {
  width: 100%;
  height: 60%;

  left: 50px;
  padding: 0;
  font-size: 10px;
  line-height: 1;
  font-weight: normal;
}
</style>

<video id="my-video" class="video-js" controls preload="auto" data-setup='' loop>
<source src="{{asset('doc/video.mp4')}}" type="video/mp4">
</video>

@endsection