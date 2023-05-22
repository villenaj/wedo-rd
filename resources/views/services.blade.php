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
                <form action="" id="frmServices">
                    <div class="row mb-4">
                        <h3 class="text-black">SERVICES MANAGEMENT</h4>
                        <p class="mb-4">Manage Services Settings</p>

                        <div class="col-lg-6 col-md-12">
                            <label for="txtTitle" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                            <input type="text" class="form-control form-control-lg" id="txtTitle" name="title" placeholder="Add title">
                            <span class="text-danger small error-text title_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="txtParagraph" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                            <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraph" name="paragraph"></textarea>
                            <span class="text-danger small error-text paragraph_error"></span>
                        </div>
                    </div>

                    <button class="btn btn-secondary text-white mt-2" id="btncSubmit" name="btncSubmit" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-plus"></i>
                        Submit
                    </button>

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="chart-area overflow-auto">
                                <div class="table-responsive fixTableHead">
                                    <table class="table table-hover mt-3" id="tblAboutUs" name="tblAboutUs">
                                        <thead style=" background-color: #f1f1f1;" >
                                            <tr>
                                                <th scope="col">TITLE</th>
                                                <th scope="col">PARAGRAPH</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyAboutUs">

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

@endsection
