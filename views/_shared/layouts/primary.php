<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@($MetaPageDetails.title)</title>
        <meta name="keywords" content="@($MetaPageDetails.keywords)" />
        <meta name="description" content="@($MetaPageDetails.metaContent)">
        <meta name="author" content="@($MetaPageDetails.author)">

        <base href="@(BASE_URL)">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

        @block('style')
            <!-- For Extra Set of Styles on child page -->
        @endblock


    </head>

    <body>
        <div id="content-wrapper">
        <!-- Including a component is as easy as below. It matches ViewComponents\NavigationViewComponent as Model and
            Views/_partials/navigation.php as view
         -->

        @component('navigation')

        @block('content')

        @endblock


        </div>
        <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        @block('script')
        <!-- For Extra Set of Scripts on child page -->
        @endblock

    </body>



</html>