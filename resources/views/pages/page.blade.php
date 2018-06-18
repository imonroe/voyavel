@extends('layout.app')

@php
    
@endphp


@section('title', $page->title)

@section('content')
    <div class="row" id="page_headline" >
        <h1>{!! $page->title !!}</h1>
    </div>
    <div class="row" id="page_body">
        {!! $page->body !!}
    </div>
@endsection


@section('scripts')
    <script type="text/javascript">
        $(function() {
            
        });
    </script>
@endsection


@section('excerpt')
    {!! $page->excerpt !!}
@endsection


@section('metadescription')
    {!! $page->meta_description !!}
@endsection


@section('metakeywords')
    {!! $page->meta_keywords !!}
@endsection

