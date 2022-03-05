@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mx-5 align-items-center">
        <h1 class="col col-md-6 text-center">Add a new plant</h1>
    </div>
    <form class="row justify-content-center mx-5 align-items-center" method="POST" action="{{ Route('Create_plant') }}">
        <div class="col col-md-8">
            @csrf
            <div class="row mt-3 align-items-center">
                <div class="col col-md-4 text-end">
                   {{ __('Name') }}:
                </div>
                <input class="col col-md-8 text-start w-50 p-1 px-2" type="text" value="{{ old('name') }}" name="name"/>
            </div>
            @error('name')
            <div class="row align-items-center justify-content-center">
                <div class="col col-md-4 text-center text-danger mt-2 border border-2 border-danger p-2 m-1 mb-2 bg-soft-red">{{ $message }}</div>
            </div>
            @enderror

            <div class="row mt-3 align-items-center">
                <div class="col col-md-4 text-end">
                    {{ __('Cientific name') }}:
                </div>
                <input class="col col-md-8 text-start w-50 p-1 px-2" type="text" value="{{ old('cientificName') }}" name="cientificName"/>
            </div>
            @error('cientificName')
            <div class="row align-items-center justify-content-center">
                <div class="col col-md-4 text-center text-danger mt-2 border border-2 border-danger p-2 m-1 mb-2 bg-soft-red">{{ $message }}</div>
            </div>
            @enderror

            <div class="row mt-3 align-items-center">
                <div class="col col-md-4 text-end">
                    {{ __('Family') }}:
                </div>
                <select class="col col-md-8 text-start w-50 p-1 px-2" name="family">
                    <option disabled selected>Select a plant family</option>
                    <option value="Tree">Tree 🌳</option>
                    <option value="Bush">Bush 🌿</option>
                    <option value="Flower">Flower 🌻</option>
                    <option value="Fungie">Fungie 🍄</option>
                </select>
            </div>
            @error('family')
            <div class="row align-items-center justify-content-center">
                <div class="col col-md-4 text-center text-danger mt-2 border border-2 border-danger p-2 m-1 mb-2 bg-soft-red">{{ $message }}</div>
            </div>
            @enderror

            <div class="row mt-3 align-items-center">
                <div class="col col-md-4 text-end">
                    {{ __('Description') }}:
                </div>
                <input class="col col-md-8 text-start w-50 p-1 px-2" type="text" value="{{ old('description') }}" name="description"/>
            </div>
            @error('description')
            <div class="row align-items-center justify-content-center">
                <div class="col col-md-4 text-center text-danger mt-2 border border-2 border-danger p-2 m-1 mb-2 bg-soft-red">{{ $message }}</div>
            </div>
            @enderror

            <div class="row mt-3 align-items-center justify-content-center">
                <input class="btn btn-outline-dark col col-md-4 text-center" type="submit" value="Create plant">
            </div>
        </div>
    </form>
@endsection