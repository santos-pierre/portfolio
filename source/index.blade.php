@extends('_layouts.master')

@section('body')
    <div x-data="langRessources()">
        <x-header-desktop></x-header-desktop>
        <x-header-mobile></x-header-mobile>
    </div>
@endsection
