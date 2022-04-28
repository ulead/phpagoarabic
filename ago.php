 function ago($time)
{
	$time = strtotime($time);
   $ago ='';
   $period_justone = array("ثانية", "دقيقة", "ساعة", "يوم", "أسبوع", "شهر", "سنة", "عقد");
   $period_twice = array("ثانيتان", "دقيقتان", "ساعتان", "يومان", "أسبوعان", "شهران", "سنتان", "عقدان");
   $period_more = array("ثواني", "دقائق", "ساعات", "أيام", "أسابيع", "شهور", "سنوات", "عقود");
   $lengths = array("60","60","24","7","4.35","12","10");
   $now = time();
       $difference     = $now - $time;
       $tense         = "ago";
   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }
   $difference = round($difference);
   if($difference == 1)  {
      $ago = "قبل  $period_justone[$j] مضت/مضى  ";
   }
    elseif($difference == 2) {
      $ago = "قبل  $period_twice[$j] مضت ";
   }
   elseif( $difference > 2 &&  $difference <= 10 ) {
      $ago = "قبل $difference $period_more[$j] مضت ";
   }
    elseif($difference > 10 ) {
      $ago = "قبل $difference $period_justone[$j] مضت ";
   }
   
   return $ago;
}
