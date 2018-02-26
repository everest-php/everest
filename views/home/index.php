@extend('layouts/primary')

@block('content')

<div class="container">

    <div class="text-center">
        <h1><span class="glyphicon glyphicon-home"></span></h1>
        <h3>Welcome to Hooks!</h3>
        <p>
            Hooks is a powerful PHP7 based framework.
        </p>


        <img src="assets/images/photo.jpg" />
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