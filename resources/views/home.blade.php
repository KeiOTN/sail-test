@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">メインメニュー</div>
                    <div class="card-body text-left ml-5">
                        <a class='menu-link' href='{{ route('/hello') }}'>Hello</a>
                        <a class='menu-link' href='{{ route('/goodmorning') }}'>Good morning</a>
                        <a class='menu-link' href='{{ route('/goodnight') }}'>Good night</a>
                        <a class='menu-link' href='{{ route('/thankyou') }}'>Thank you</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
