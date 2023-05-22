$(document).ready(function(){
    // globals
    var homeID="";
    loadhome();
    //create
    $(document).on('click', '#btnSubmit', function() {
        var frmhome = $('#frmHome');
        var formData = new FormData($(frmhome)[0]);

        axios.post('/create', formData)
        .then(function(response) {
            if (response.data.status == 201) {
                $.each(response.data.error, function(prefix, val) {
                    $('input[name='+ prefix +']').addClass(" border border-danger") ;
                    $('textarea[name='+ prefix +']').addClass(" border border-danger") ;
                    $('span.' + prefix + '_error').text(val[0]);
                    swal("Error", "Please check required fields!", "error");
                });
            }
            if(response.data.status == 200){
                $('span.error-text').text("");
                $('input.border').removeClass('border border-danger');
                $('textarea.border').removeClass('border border-danger');
                $('#frmHome')[0].reset();
                swal("Good job!",response.data.msg, "success");
                loadhome();
            }
             //error
             if(response.data.status == 202){
                $('span.error-text').text("");
                $('input.border').removeClass('border border-danger');
                $('textarea.border').removeClass('border border-danger');
                swal("Error!", response.data.msg, "error");
            }
        })
        .catch(function (error) {
        })
        .then(function () {});

    });

    //loadhome
    function loadhome(){
        axios.get('/loadhome')
        .then(function (response) {
            var htmlData='';
            $(response.data.data).each(function(index, row) {
                htmlData += "<tr>" +
                            "<td class='text-capitalize'>" + row.title+  "</td>" +
                            "<td class='text-capitalize'>" + row.paragraph+  "</td>" ;

                htmlData += "<td>" +  "<button  data-toggle='tooltip' data-placement='bottom' value= '" + row.id + "' id='btnUpdateHome' title='Update data'  type='button' class='btn btn-secondary btn-sm ml-1' data-bs-toggle='modal' data-bs-target='#mdlUpdate'> <i class='fa fa-pen'></i>  </button> </td>"
                htmlData += "</tr>";
            })
            $("#tblHome").empty().append(htmlData);
        })
        .catch(function (error) {
            dialog.alert({
                message: error
            });
        })
        .then(function () {});
    }

    //getselecteddata
    $(document).on('click', '#btnUpdateHome', function() {
        var id = $(this).val();
        axios.get('/gethome', {
                params: {
                    id: id
                }
            })
            .then(function(response) {
                console.log(response.data.data)

                $('input.border').removeClass('border border-danger');
                $('textarea.border').removeClass('border border-danger');
                $('span.error-text').text("");

                $(response.data.data).each(function(index, row) {
                    $("#txtTitleU").val(row.title);
                    $("#txtParagraphU").val(row.paragraph);
                    $("#btnUpdate").val(row.id);
                })

            })
            .catch(function(error) {})
            .then(function() {});
    })


    //update
    $(document).on('click', '#btnUpdate', function() {
        var id = $(this).val();
        var Frmdata = $('#frmUpdate');
        var formData = new FormData($(Frmdata)[0]);
        formData.append('id', id);

        axios.post('/edit', formData)
            .then(function(response) {
                if (response.data.status == 201) {
                    $.each(response.data.error, function(prefix, val) {
                        $('input[name='+ prefix +']').addClass(" border border-danger") ;
                        $('textarea[name='+ prefix +']').addClass(" border border-danger") ;
                        $('span.' + prefix + '_error').text(val[0]);
                        swal("Error", "Please check required fields!", "error");
                    });
                }
                if(response.data.status == 200){
                    $('span.error-text').text("");
                    $('input.border').removeClass('border border-danger');
                    $('textarea.border').removeClass('border border-danger');
                    $('#frmUpdate')[0].reset();
                    swal("Good job!",response.data.msg, "success");

                    $('#mdlUpdate').modal('toggle');
                    loadhome();
                }
                 //error
                 if(response.data.status == 202){
                    $('span.error-text').text("");
                    $('input.border').removeClass('border border-danger');
                    $('textarea.border').removeClass('border border-danger');
                    swal("Error!", response.data.msg, "error");
                }
            })
            .catch(function (error) {
            })
            .then(function () {});
})



});
