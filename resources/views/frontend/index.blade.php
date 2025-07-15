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


        <!--=======Check-Section Starts Here=======-->
       
         @include('frontend.home.contact')
        <!--=======Check-Section Ends Here=======-->


        <!--=======Offer-Section Stars Here=======-->
       
        @include('frontend.home.offer')
        <!--=======Offer-Section Ends Here=======-->


        <!--=======Proit-Section Starts Here=======-->
      
         @include('frontend.home.profit')
        <!--=======Proit-Section Ends Here=======-->


        <!--=======Latest-Transaction-Section Starts Here=======-->
        
         @include('frontend.home.transaction')
        <!--=======Latest-Transaction-Section Ends Here=======-->



        <!--=======Check-Section Starts Here=======-->
        @include('frontend.home.testimonial')
        <!--=======Check-Section Ends Here=======-->









        
@endsection