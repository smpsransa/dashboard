@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sransa Command Center') }}</div>
                <div class="card-body">
                    <h2>Aplikasi sederhana penunjang produktifitas TU dan Sekolah</h2>
                    <br />
                    <fieldset class="mt-2 border py-2 px-4">
                        <legend class="w-auto">Fitur: </legend>
                        <ul>
                            <li>
                                scheduling (permanent)
                                <ul>
                                    <li>mata pelajaran</li>
                                    <li>jadwal sholat</li>
                                </ul>
                            </li>
                            <li>
                                rekam agenda (temporary)
                                <ul>
                                    <li>Tenaga Kerja</li>
                                    <li>Kepala Sekolah</li>
                                </ul>
                            </li>
                            <li>layanan digital</li>
                            <li>Mikhmon Versi Sekolah</li>
                        </ul>
                    </fieldset>
                    <fieldset class="mt-2 border py-2 px-4">
                        <legend class="w-auto">Informasi Sistem: </legend>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Laravel</td>
                                    <td> : </td>
                                    <td>v{{ Illuminate\Foundation\Application::VERSION }}</td>
                                </tr>
                                <tr>
                                    <td>Php</td>
                                    <td> : </td>
                                    <td>v{{ PHP_VERSION }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection