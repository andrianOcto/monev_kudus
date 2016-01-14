<!DOCTYPE html>
<html>

@include('template.htmlheader')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('template.mainheader')

    @include('template.sidebar')

	    <div class="content-wrapper">

	    	@yield('main-content')

	    </div>

    </div>

    @include('template.htmlfooter')

    @include('template.scripts')

</body>
</html>