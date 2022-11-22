@extends('layouts.front')

@section('title', 'About')
@section('content')
    <div class="page">
        <div class="breadcrumbs">
            <a href="/">Home</a>
            <span>Your Profile</span>
        </div>

        <div class="row">
            <div class="col-md-5">
                <figure><img src="{{ asset('assets/dist/img/alus.jpg') }}" alt="figure image" style="border-radius: .5rem"></figure>
            </div>
            <div class="col-md-7">
                <p class="leading"><b><i>Irfan Doank</i></b></p>
                <table>
                    <tr>
                        <td><b>Umur</b></td>
                        <td><b>:</b></td>
                        <td><i>Gatau</i></td>
                    </tr>
                    <tr>
                        <td><b>Bapak Saya</b></td>
                        <td><b>:</b></td>
                        <td><i>Gatau Tuh</i></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td><b>:</b></td>
                        <td><i>Kabupaten Cilisung</i></td>
                    </tr>
                </table>
                {{-- <p>Umur : Gatau</p>
                <p>Bapak Saya : Gatau Tuh</p>
                <p>Alamat : Kabupaten Cilisung</p> --}}
            </div>
        </div>
    </div>
@endsection
