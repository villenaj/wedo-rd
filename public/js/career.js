$(document).ready(function(){
    // globals
    var homeID="";
    loadcareer();

    //loadcareer
    function loadcareer(){
        axios.get('/loadcareer')
        .then(function (response) {
            var htmlData='';
            $(response.data.data).each(function(index, row) {
                htmlData += "<tr>" +
                "<td class='text-capitalize'>" + row.pos+  "</td>" +
                "<td class='text-capitalize'>" + row.desc+  "</td>" +
                "<td class='text-capitalize'>" + row.skill_desc+  "</td>" ;

                htmlData += "<td>" +  "<button  data-toggle='tooltip' data-placement='bottom' value= '" + row.id + "' id='btnUpdateCareer' title='Update data'  type='button' class='btn btn-secondary btn-sm ml-1' data-bs-toggle='modal' data-bs-target='#mdlUpdate'> <i class='fa fa-pen'></i>  </button> </td>"
                htmlData += "</tr>";
            })
            $("#tbodyCareer").empty().append(htmlData);
        })
        .catch(function (error) {
            dialog.alert({
                message: error
            });
        })
        .then(function () {});
    }

});
