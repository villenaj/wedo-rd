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
    <div class="row mb-4">
        <h3 class="text-black">WHY US MANAGEMENT</h3>
        <p class="mb-4">Manage Why Us Settings</p>

        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="card shadow-2">
                        <div class="card-body">
                            <form action="" id="frmWhyUsPage">
                                <div class="row mb-2">
                                    <h4 class="text-secondary fw-bold text-danger" >Page Settings</h4>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="txtTitlePage" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                        <input type="text" class="form-control form-control-lg" id="txtTitlePage" name="titlePage" placeholder="Add title">
                                        <span class="text-danger small error-text titlePage_error"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="txtParagraphPage" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphPage" name="paragraphPage"></textarea>
                                        <span class="text-danger small error-text paragraphPage_error"></span>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <label for="txtParagraphPage" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphPage" name="paragraphPage"></textarea>
                                        <span class="text-danger small error-text paragraphPage_error"></span>
                                    </div>
                                </div> -->
                                <div class="row mb-2">
                                    <h4 class="text-secondary fw-bold text-danger" >Services Settings</h4>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="txtTitleServ1" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                        <input type="text" class="form-control form-control-lg" id="txtTitleServ1" name="titleServ1" placeholder="Service 1">
                                        <span class="text-danger small error-text titleServ1_error"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="txtParagraphServ1" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphServ1" name="paragraphServ1"></textarea>
                                        <span class="text-danger small error-text paragraphServ1_error"></span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="txtTitleServ2" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                        <input type="text" class="form-control form-control-lg" id="txtTitleServ2" name="titleServ2" placeholder="Service 2">
                                        <span class="text-danger small error-text titleServ2_error"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="txtParagraphServ2" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphServ2" name="paragraphServ2"></textarea>
                                        <span class="text-danger small error-text paragraphServ2_error"></span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <label for="txtTitleServ3" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                        <input type="text" class="form-control form-control-lg" id="txtTitleServ3" name="titleServ3" placeholder="Service 3">
                                        <span class="text-danger small error-text titleServ3_error"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="txtParagraphServ3" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphServ3" name="paragraphServ3"></textarea>
                                        <span class="text-danger small error-text paragraphServ3_error"></span>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <label for="txtParagraphServ" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                        <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphServ" name="paragraphServ"></textarea>
                                        <span class="text-danger small error-text paragraphServ_error"></span>
                                    </div>
                                </div> -->
                                <button class="btn btn-secondary text-white mt-2" id="btncSubmitPage" name="btncSubmitPage" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-plus"></i>
                                    Submit
                                </button>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="chart-area overflow-auto">
                                            <div class="table-responsive fixTableHead">
                                                <table class="table table-hover mt-3" id="tblWhyUsPage" name="tblWhyUsPage">
                                                    <thead style=" background-color: #f1f1f1;" >
                                                        <tr>
                                                            <th scope="col">TITLE</th>
                                                            <th scope="col">PARAGRAPH</th>
                                                            <th scope="col">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyWhyUsPage">

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

            <!-- <div class="col-lg-6">
                <div class="card shadow-2">
                    <div class="card-body">
                        <form action="" id="frmWhyUsServ">
                            <div class="row mb-2">
                                <h4 class="text-secondary fw-bold text-danger" >Services Settings</h4>
                                    <div class="dropdown d-flex justify-content-end">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Services
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Service 1</a></li>
                                            <li><a class="dropdown-item" href="#">Service 2</a></li>
                                            <li><a class="dropdown-item" href="#">Service 3</a></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <label for="txtTitleServ" class="form-label text-secondary f2-4 fw-bold">TITLE</label>
                                    <input type="text" class="form-control form-control-lg" id="txtTitleServ" name="titleServ" placeholder="Add title">
                                    <span class="text-danger small error-text titleServ_error"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="txtParagraphServ" class="form-label text-secondary f2-4 fw-bold">PARAGRAPH</label>
                                    <textarea class="form-control form-control-lg" placeholder="Add paragraph" id="txtParagraphServ" name="paragraphServ"></textarea>
                                    <span class="text-danger small error-text paragraphServ_error"></span>
                                </div>
                            </div>

                            <button class="btn btn-secondary text-white mt-2" id="btncSubmitServ" name="btncSubmitServ" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus"></i>
                                Submit
                            </button>

                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="chart-area overflow-auto">
                                        <div class="table-responsive fixTableHead">
                                            <table class="table table-hover mt-3" id="tblWhyUsServ" name="tblWhyUsServ">
                                                <thead style=" background-color: #f1f1f1;" >
                                                    <tr>
                                                        <th scope="col">TITLE</th>
                                                        <th scope="col">PARAGRAPH</th>
                                                        <th scope="col">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbodyWhyUsServ">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div> -->

        </div>

    </div>


</div>

@endsection
