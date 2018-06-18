@extends('layout.app')

@php
    
@endphp


@section('title', 'Contact us')

@section('content')
    <div class="row" id="page_headline" >
        <h1>Contact Us</h1>
    </div>
    <div class="row" id="page_body">
        <p>Why not get in touch?</p>
    </div>
    @include('forms.contact')
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

