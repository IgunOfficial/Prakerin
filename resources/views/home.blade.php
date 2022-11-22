 @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #3C6AA6;">
                <div class="card-header"><b>{{ __('HALOOOO') }}</b></div>

                <div class="card-body" style="background-color: #5496BF;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i>Selamat Datang</i> <b>{{ Auth::user()->name }}</b> <i>di Website Berita Ngawur.</i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection