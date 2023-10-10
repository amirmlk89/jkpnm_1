@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Laman Utama') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Tahniah anda telah berjaya log masuk
                </div>
            </div>
            <div class="col-md-8">
            <div class="card mt-2">
                <div class="card-header">{{ __('Data Agensi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">BIL</th>
                            <th scope="col">JABATAN</th>
                            <th scope="col">KOD JABATAN</th>
                            <th scope="col">EMAIL RASMI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>JKM</td>
                            <td>0030</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>JKPNM</td>
                            <td>0140</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">PERTANIAN</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
