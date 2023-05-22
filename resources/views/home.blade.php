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
                <form action="" id="frmHome">
                    <div class="row mb-4">
                        <h3 class="text-black">HOME MANAGEMENT</h4>
                        <p class="mb-4">Manage Home Settings</p>

                        <div class="col-lg-6 col-md-12">
                            <label for="txtTitle" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                            <input type="text" class="form-control form-control-lg" id="txtTitle" name="title" placeholder="Add title">
                            <span class="text-danger small error-text title_error"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="txtParagraph" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                            <textarea class="form-control form-control-lg" id="txtParagraph" name="paragraph" rows="4" placeholder="Add paragraph"></textarea>
                            {{-- <input type="text" class="form-control form-control-lg" id="txtParagraph" name="paragraph" placeholder="Add paragraph"> --}}
                            <span class="text-danger small error-text paragraph_error"></span>
                        </div>
                    </div>

                    <button type="button" class=" pt-2 btn btn-secondary text-white mt-2" id="btnSubmit" name="btnSubmit">
                        <i class="fa fa-plus"></i> Submit
                    </button>

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="chart-area overflow-auto">
                                <div class="table-responsive fixTableHead">
                                    <table class="table table-hover mt-3">
                                        <thead style=" background-color: #f1f1f1;" >
                                            <tr>
                                                <th scope="col">TITLE</th>
                                                <th scope="col">PARAGRAPH</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblHome">

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

    <!-- Modal Update -->
    <div class="modal fade" id="mdlUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="background-color: rgb(249 200 200 / 17%);">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger dragable_touch" >
                    <h5 class="modal-title fst-italic text-white" id="staticBackdropLabel"><label for="" class="" id="lblTitleGraceP"> Home Update Settings</label></h5>
                    <button type="button" class="btn-close text-white closereset_update" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card mb-3 rounded">
                        <div class="card-body ">

                            <form action="" id="frmUpdate">
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label for="txtTitleU" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                        <input type="text" class="form-control form-control-lg" id="txtTitleU" name="titleU" placeholder="Add title">
                                        <span class="text-danger small error-text titleU_error"></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="txtParagraphU" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" id="txtParagraphU" name="paragraphU" rows="4" placeholder="Add paragraph"></textarea>
                                        <span class="text-danger small error-text paragraphU_error"></span>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  id="btnUpdate" type="button" class="btn btn-secondary ">Update</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('js/home.js') }}" defer></script>
@endsection
