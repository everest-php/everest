@extend('layouts/primary')

@block('content')

<div class="container">

    <div class="text-center">
        <h1><span class="glyphicon glyphicon-equalizer"></span></h1>
        <h3>Welcome to Everest, the top of the world!</h3>
        <p>
            Everest is a web-api ready, powerful yet lightweight PHP framework for rapid development.
        </p>


        <img src="assets/images/photo.png" />
        <!--
            Image by: Laura Reen
            Licence: Create Commons
            https://www.iconfinder.com/icons/2064036/badge_flag_leader_mountain_sport_top_winner_icon#size=128
        -->

        <!--
         If GD is installed, you can try: [Remove + between @ and image]
            <img src='@+image("assets/images/photo.jpg")' />
         -->

    </div>

</div>

@endblock


@block('style')
<style>

    h1 span.glyphicon{
        font-size: 120px;
        color: cadetblue;
    }

</style>
@endblock