$(document).ready(function() {

    loadhomepage()

    function loadhomepage(){

        axios.get('/load_homepage')
        .then(function (response) {

            console.log(response.data.data);
            $(response.data.data).each(function(index, row) {
                $("#ViewTitle").empty().text(row.title);
                $("#ViewPrgph").empty().text(row.paragraph);

            })
            // alert();

        })
        .catch(function (error) {
            dialog.alert({
                message: error
            });
        })
        .then(function () {});
    }

})
