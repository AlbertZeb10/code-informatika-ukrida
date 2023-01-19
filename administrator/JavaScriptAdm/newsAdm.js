$(this).ready(function () {
    $("#btnNew").click(function () {
      $("#addModal").modal("show");
      $("#btnEdit").attr("id", "btnSave");
      $("#btnDelete").attr("id", "btnSave");
      $('input[name="judul"]').val("");
      $('input[name="tahun"]').val("");
      $.ajax({
        type: "GET",
        url: "_php/action.php",
        data: { req: "author" },
        dataType: "JSON",
        success: function (result) {
          var select;
          $.each(result, function (i, item) {
            select +=
              "<option value='" + item.id + "' >" + item.name + "</option>";
          });
          $("#author").html(select);
        },
      });
    });
  
    function getnews() {
      $.ajax({
        type: "GET",
        url: "_php/action.php",
        data: { req: "rows" },
        dataType: "JSON",
        success: function (response) {
          var table;
          $.each(response, function (i, item) {
            table +=
              "<tr><td>" +
              item.id +
              "</td><td>" +
              item.title +
              "</td><td>" +
              item.datepublished +
              "</td><td>" +
              item.content +
              "</td><td>" +
              item.authors_id +
              "</td><td class='justify-content-center' style='width: 100px;'>" +
                            "<div><img src='../images/" + item.image +
                                "' alt='foto' class='rounded' style='width:100%; height:100%;'>" +
                            "</div>" +
              "</td><td style='text-align: center'>" +
              "<button class='btn btn-warning' id = 'btn-edit' data-id ='" +
              item.id +
              "' data-pengarang ='" +
              item.id_pengarang +
              "' >Edit</button>  <button class = 'btn btn-danger' id='btn-delete' data-id='" +
              item.id +
              "'>Delete</button></td></tr>";
          });
          $("tbody").html(table);
        },
      });
    }
    getnews();
  });
  //Button Edit diklik
  $(document).on("click", "#btn-edit", function () {
    var itemId = $(this).data("id");
    $("#btnSave").attr("id", "btnEdit");
    $("#btnDelete").attr("id", "btnEdit");
    var idPengarang = $(this).data("pengarang");
    $("#addModal").modal("show");
    $.ajax({
      type: "GET",
      url: "_php/action.php",
      data: {
        req: "allData",
        id: itemId,
      },
      dataType: "JSON",
      success: function (response) {
        $.each(response, function (i, item) {
          $('input[name="id"]').val(item.id);
          $('input[name="title"]').val(item.title);
          $('input[name="content"]').val(item.content);
        });
      },
    });
    $.ajax({
      type: "GET",
      url: "_php/action.php",
      data: { req: "author" },
      dataType: "JSON",
      success: function (result) {
        var select;
        $.each(result, function (i, item) {
          if (item.id == idPengarang) {
            select +=
              "<option value='" +
              item.id +
              "' selected >" +
              item.name +
              "</option>";
          } else {
            select +=
              "<option value='" + item.id + "' >" + item.name + "</option>";
          }
        });
        $("#author").html(select);
      },
    });
  });

  $(document).on("click", "#btn-delete", function () {
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
                url: "_php/delete.php",
                data: { id: ItemId, req: "delete" },
                dataType: "JSON",
                success: function (response) {
                    if (response.result == true) {
                        Swal.fire({
                        icon: "success",
                        title: response.msg,
                    }).then(function () {
                        document.location.href = "AdmNews.php";
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
  // Edit and Add
  $(this).ready(function () {
    $(document).on("click", "#btnSave", function () {
      var dataSend = $("#formAdd").serialize();
      $.ajax({
        type: "POST",
        url: "_php/write.php",
        data: dataSend,
        dataType: "html",
        success: function (result) {
          Swal.fire({
            icon: "success",
            title: "News Telah Ditambahkan",
            text: "News berhasil ditambahkan!",
          }).then(function () {
            document.location.href = "AdmNews.php";
          });
        },
      });
    });
    $(document).on("click", "#btnEdit", function () {
      const formData = new FormData(document.getElementById('formAdd'));
                const image = $('#image')[0].files;
                if(image.length > 0){
                    formData.append('foto', image);
                }
      $.ajax({
        type: "POST",
        url: "_php/edit.php",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "html",
        success: function (result) {
          Swal.fire({
            icon: "success",
            title: "News Telah Dimodifikasi",
            text: "News berhasil dimodifikasi!",
          }).then(function () {
            document.location.href = "AdmNews.php";
          });
        },
      });
    });
  });
  