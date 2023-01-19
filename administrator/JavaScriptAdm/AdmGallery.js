$(this).ready(function(){
    // Menampilkan data
    getGallery();
    function getGallery(){
        $.ajax({
            type: "GET",
            url: "_php/action.php",
            data: {req:'gallery'},
            dataType: "json",
            success: function(response){
                var table;
                $.each(response, function(i,obj){
                    table += "<tr><td>" + obj.id +
                            "</td><td style='width:100px'><img src='../images/" + obj.image +
                                "' alt='foto' class='rounded' style='width:100%; height:100%;'>" +
                            "</td><td>" + obj.name +
                            "</td><td style='text-align:center'>" +
                                "<button class='btn btn-warning' id='btnEdit' data-id ='" + obj.id +
                                "' data-image ='" + obj.image + "'>Edit</button> " +
                                "<button class='btn btn-danger' id='btnDelete' data-id ='" + obj.id +
                                "' data-image ='" + obj.image + "'>Delete</button>" +
                            "</td></tr>";
                })
                $('#gallery').html(table);
            }
        })
    }


    //------------------------------------------ Tombol Tambah Data ------------------------------------------

    // Menampilkan modal add
    $('#btnNew').click(function(){
        $('#addModal').modal('show');
        $("#btnSaveEdit").attr("id", "btnSave");
        $('input[name="name"]').val("");
        // Mengganti title modal
        $('#modalTitle').text(function(i, oldText) {
            return oldText = 'Add Photo';
        });
    })
})


//--------------------------------------------- Tombol Edit Data---------------------------------------------

$(document).on('click', '#btnEdit', function () {
    var itemId = $(this).data("id");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveEdit");
    //get all input
    $.ajax({
        type: "GET",
        url: "_php/action.php",
        data: {
            req: "galleryRow",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Edit Photo';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="name"]').val(obj.name);
            });
        },
    });
})


//---------------------------------------------- Save Data----------------------------------------------
// Tambah data
$(this).ready(function () {
    $(document).on("click", "#btnSave", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        const image = $('#image')[0].files;
        if(image.length > 0){
            formData.append('foto', image);
        }
        $.ajax({
            type: 'POST',
            url: '_php/writeGallery.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'html',
            success: function(result){
                $('.modal-body').html(result);
                $('#back').hide();
                $('#signUp').hide();
            }
        })
    });
    //Edit data
    $(document).on("click", "#btnSaveEdit", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        const image = $('#image')[0].files;
        if(image.length > 0){
            formData.append('foto', image);
        }
        $.ajax({
            type: 'POST',
            url: '_php/writeGallery.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'html',
            success: function(result){
                $('.modal-body').html(result);
                $('#back').hide();
                $('#signUp').hide();
            }
        })
    });
    // Hapus data
    $(document).on("click", "#btnDelete", function () {
        var ItemId = $(this).data("id");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "_php/writeGallery.php",
                    data: { id: ItemId, req: "delete" },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.result == true) {
                            Swal.fire({
                            icon: "success",
                            title: response.msg,
                        }).then(function () {
                            document.location.href = "AdmGallery.php";
                        });
                        } else {
                            Swal.fire({
                            icon: "error",
                            title: response.msg,
                            });
                        }
                    },
                });
            }
        })
      });
})