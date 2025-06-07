@extends('Blogs.layout')

@section('title','My blog')

@section('content')

	<x-blog.show :blog=$blog />

@endsection
