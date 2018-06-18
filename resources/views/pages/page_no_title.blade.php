@extends('layout.app')

@php
    
@endphp


@section('title', $page->title)

@section('content')

    {!! $page->body !!}

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

