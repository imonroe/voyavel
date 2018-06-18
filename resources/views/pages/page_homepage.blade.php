@extends('layout.app')

@php
    
@endphp


@section('title', 'Your favorite new thing')

@section('content')

        <div class="row">
            <h1>Welcome to your new website.</h1>
            <h2>This is the homepage template... page_homepage.blade.php</2>
        </div>
        
        <div class="row">
           <p> You have a bootstrap 4 container automatically.</p>
        </div>

        <div class="row">
            <ul>
                <li>Pages will work out of the box.  There is an App\Http\Controllers\PageController class with enough logic to show pages which exist in the database at their proper slugs. To see what I mean, <a href="/hello-world">check out the default page.</a></li>
                <li>You can <a href="/admin">log in to the admin interface here</a></li>
                <li>U: admin@admin.com<br/> P: password</li>
                <li>You should make a menu called "Top Navigation".  That will appear in the top nav portion.</li>
                <li>Likewise, you should make a menu called "Footer Links".  That will create a list of links in the footer.</li>
                <li>The layout template is pulling in jQuery, Bootstrap, and FontAwesome from CDN sources. If you want webpack, it's up to you.</li>
                <li>There's a few simple views to get you started at least, including some mail templates.</li>
            </ul>
        </div>
    

@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            
        });
    </script>
@endsection

@section('excerpt')
    
@endsection


@section('metadescription')
    
@endsection


@section('metakeywords')
    
@endsection

