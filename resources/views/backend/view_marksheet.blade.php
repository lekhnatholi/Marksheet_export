@extends('layout.backend')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
@section('title', 'Dashboard')
@section('activeDashboard', 'active')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <div class="pull-right">
                <a href="{{route('export.pdf')}}">pdf</a>
            </div>

        </section>

        <div class="row" style=" margin:10px;color: #0d6aad">
            <div class="col-md-12">
                <div class="col-md-2">
                    <img src="{{url('public/img/about-1.jpg')}}" alt="logo not found" style="height: 100px;width: 100px">
                </div>

                <div class="col-md-8">
                    <h5 class=text-center>GOVERNMENT OF NEPAL</h5>
                    <h5 class="text-center">MINISTRY OF EDUCATION</h5>
                    <h5 class="text-center">OFFICE OF THE CONTROLLER OF EXAMINATION </h5>
                </div>

                <div class="col-md-2 ">
                    SR NO <br>
                    071623 B
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="text-center">SCHOOL LEAVING CERTIFICATE EXAMINATION</h3>
                <h5 class="text-center">MARK-SHEET</h5>
            </div>
        </div>
        <br><br>
        <div class="row" style="margin: 20px;color: #0d6aad">
            <div class="col-md-12">
                <p>THE MARKS SECURED BY &nbsp;&nbsp;&nbsp;&nbsp; <span class="dott">Lekhnath Oli</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                DATE OF BIRTH &nbsp;&nbsp;&nbsp;&nbsp;<span class="dott">2056-05-26</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ROLL &nbsp;&nbsp;&nbsp;&nbsp; <span class="dott">SALYAN</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SYMBOL NO &nbsp;&nbsp;&nbsp;&nbsp;<span class="dott">071632 B</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                OF &nbsp;&nbsp;&nbsp;&nbsp;<span class="dott">SARASWATI MA VI SHIVARATH</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                IN THE ANNUAL SLC EXAMINATION OF &nbsp;&nbsp;&nbsp;&nbsp; <span class="dott">2070 BS.</span> </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-active table-bordered">
                    <tr>
                        <th>S.N.</th>
                        <th>SUJECTS</th>
                        <th>FULL MARKS</th>
                        <th>OBTAINED MARKS</th>
                        <th>TOTAL</th>
                        <th>GRACE MARKS</th>
                        <th>REMARKS</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Nepali</td>
                        <td>100</td>
                        <td>60</td>
                        <td>60</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>English</td>
                        <td>100</td>
                        <td>70</td>
                        <td>60</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Mathematics</td>
                        <td>100</td>
                        <td>60</td>
                        <td>60</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Science</td>
                        <td>100</td>
                        <td>60</td>
                        <td>60</td>
                        <td> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Population, Helth and Environment</td>
                        <td>100</td>
                        <td>60</td>
                        <td>80</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Opt Mathmatics</td>
                        <td>100</td>
                        <td>70</td>
                        <td>70</td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection
