@extends('app')
@section('content')

<style>
    .fixTableHead {
      overflow-y: auto;
      height: 100%;
    }
    .fixTableHead thead th {
      position: sticky;
      top: 0;
      background-color: #f1f1f1;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="card-shadow">
            <div class="card-body">
                <form action="" id="frmCareer">
                    <div class="row mb-2">
                        <h3 class="text-black">CAREER MANAGEMENT</h4>
                            <p class="mb-4">Manage Career Settings</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="chart-area overflow-auto">
                                <div class="table-responsive fixTableHead">
                                    <table class="table table-hover mt-3" id="tblCareer" name="tblCareer">
                                        <thead style=" background-color: #f1f1f1;" >
                                            <tr>
                                                <th scope="col">POSITION</th>
                                                <th scope="col">JOB DESC</th>
                                                <th scope="col">SKILLS</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyCareer">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>




</div>
<script src="{{ asset('js/career.js') }}" defer></script>
@endsection
