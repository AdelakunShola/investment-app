 @extends('frontend.main_master')    
@section('main')
        <!--=======Banner-Section Starts Here=======-->
       @include('frontend.home.banner')
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Counter-Section Starts Here=======-->
       
        <!--=======Counter-Section Ends Here=======-->


        <!--=======About-Section Starts Here=======-->
      
         @include('frontend.home.about')
        <!--=======About-Section Ends Here=======-->


        <!--=======Feature-Section Starts Here=======-->
       
         @include('frontend.home.feature')
        <!--=======Feature-Section Ends Here=======-->


        <!--=======How-Section Starts Here=======-->
       
        @include('frontend.home.how')
        <!--=======How-Section Ends Here=======-->

               @include('frontend.home.testimonial')


        <!--=======Check-Section Starts Here=======-->
       
         @include('frontend.home.brand')
        <!--=======Check-Section Ends Here=======-->


        <!--=======Offer-Section Stars Here=======-->
       
        @include('frontend.home.offer')
        <!--=======Offer-Section Ends Here=======-->




        <!--=======Check-Section Starts Here=======-->
 
        <!--=======Check-Section Ends Here=======-->







<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/688bae3f92f8b9191d3138a5/1j1gq1atm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

        
@endsection