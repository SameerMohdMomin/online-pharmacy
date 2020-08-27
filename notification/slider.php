<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	
body {
  padding: 40px 0 0 0;
}

.value {
  position: absolute;
  top: 30px;
  left: 50%;
  margin: 0 0 0 -20px;
  width: 40px;
  text-align: center;
  display: block;
  
  /* optional */
  
  font-weight: normal;
  font-family: Verdana,Arial,sans-serif;
  font-size: 14px;
  color: #333;
}

.price-range-both.value {
  width: 100px;
  margin: 0 0 0 -50px;
  top: 26px;
}

.price-range-both {
  display: none; 
}

.value i {
  font-style: normal;
}
</style>
</head>
<body>


<div class="price-range-slider"></div>





    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


<script type="text/javascript">
	//Note jquery and jqueryUI are included

function collision($div1, $div2) {
      var x1 = $div1.offset().left;
      var w1 = 40;
      var r1 = x1 + w1;
      var x2 = $div2.offset().left;
      var w2 = 40;
      var r2 = x2 + w2;
        
      if (r1 < x2 || x1 > r2) return false;
      return true;
      
    }
    
// // slider call

$('.price-range-slider').slider({
	range: true,
	min: 0,
	max: 500,
	values: [ 80, 300 ],
  step: 10,
	slide: function(event, ui) {
		
		$('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
		$('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
		$('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );
		
		//
		
    if ( ui.values[0] == ui.values[1] ) {
      $('.price-range-both i').css('display', 'none');
    } else {
      $('.price-range-both i').css('display', 'inline');
    }
        
        //
		
		if (collision($('.price-range-min'), $('.price-range-max')) == true) {
			$('.price-range-min, .price-range-max').css('opacity', '0');	
			$('.price-range-both').css('display', 'block');		
		} else {
			$('.price-range-min, .price-range-max').css('opacity', '1');	
			$('.price-range-both').css('display', 'none');		
		}
		
	}
});

$('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0 ) + '</span>');

$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1 ) + '</span>');
</script>