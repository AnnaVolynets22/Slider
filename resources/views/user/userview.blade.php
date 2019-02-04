<?php use \App\Slider; ?>
<?php use \App\Image; ?>
<html>
  <head>
  <title>Sliders list</title>
 
  <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  
  <link rel="stylesheet" href="<?php echo asset('css/user.css')?>" type="text/css"> 


  </head>
  <body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
<div class="blue">
    <a href="{{ url('/admin/') }}">
        <button class="button" "></i> Admin page</button>
    </a>
</div>
<?php  $sliders = Slider::all();
$images = Image::all();  ?>
@foreach($sliders as $item)
  <?php $marker = $item->id; ?>
  @if ($item->start_date > date('Y-m-d H:i:s') or date('Y-m-d H:i:s') > $item->end_date)
    @break
  @endif
  <div class="blue" style="display: block; overflow: auto; ">
    
    <div class="{{$item->id }}" style="max-width:700px;  margin-left: auto; margin-right: auto; position: relative; ">
      @foreach($images as $image)
        @if ($image->slider_id == $item->id)
          <?php $marker++;?>
          @if($marker== $item->id +1)
               <h2 style="text-align: center;"> {{ $item->title }}  </h2>
               
               <a href="{{ url('/admin/sliders/' . $item->id) }}" ><button class="button" style="margin-left:  250px;"></i> View {{ $item->title }}  configuration</button></a>
               
               
          @endif
          
          <?php $image_file = asset("storage/$image->file");?>
          <div class = "slick-slide"> <img data-lazy={{$image_file}} /></div>"
        @endif
      @endforeach

    </div>
   </div>   
      <script type="text/javascript">
       $(document).ready(function(){
        $('.{{$item->id }}').slick({
          speed:{{$item->speed}},
          dots:{{ $item->show_dots ? 'true' : 'false' }},
          infinite:{{ $item->infinite ? 'true' : 'false' }},
          slidesToShow: {{$item->slides_to_show}},
          adaptiveHeight: {{ $item->adaptive_height ? 'true' : 'false' }},
          fade: {{ $item->fade ? 'true' : 'false' }},
          slidesToScroll: {{$item->slides_to_scroll}},
          cssEase: 'linear'
        });
      });
      </script>
   
@endforeach

    
  </body>
</html>
    
    