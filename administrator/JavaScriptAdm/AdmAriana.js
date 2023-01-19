$(this).ready(function () {
    $("#btnNew").click(function () {
      $("#addModal").modal("show");
      $("#btnEdit").attr("id", "btnSave");
      $('input[name="judul"]').val("");
      $('input[name="tahun"]').val("");
    });
  
    function getariana() {
      $.ajax({
        type: "GET",
        url: "_php/action.php",
        data: { req: "ariana" },
        dataType: "JSON",
        success: function (response) {
          var table;
          $.each(response, function (i, item) {
            table +=
              "<tr><td>" +
              item.id +
              "</td><td>" +
              item.name_artist +
              "</td><td>" +
              item.name_music +
              "</td><td style='text-align: center'>" +
              "<button class='btn btn-warning' id = 'btn-edit' data-id ='" +
              item.id +
              "' data-pengarang ='" +
              item.id_pengarang +
              "' >Edit</button>  <button class = 'btn btn-danger'>Delete</button></td></tr>";
          });
          $("tbody").html(table);
        },
      });
    }
    getariana();
  });
  //Button Edit diklik
  $(document).on("click", "#btn-edit", function () {
    var itemId = $(this).data("id");
    $("#btnSave").attr("id", "btnEdit");
    var idPengarang = $(this).data("pengarang");
    console.log(idPengarang);
    console.log(idPenerbit);
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
          $('input[name="judul"]').val(item.judul);
          $('input[name="tahun"]').val(item.tahun);
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
              item.nama +
              "</option>";
          } else {
            select +=
              "<option value='" + item.id + "' >" + item.nama + "</option>";
          }
        });
        $("#pengarang").html(select);
      },
    });
    $.ajax({
      type: "GET",
      url: "_php/action.php",
      data: { req: "publisher" },
      dataType: "JSON",
      success: function (result) {
        var select;
        $.each(result, function (i, item) {
          if (item.id == idPenerbit) {
            select +=
              "<option value='" +
              item.id +
              "' selected >" +
              item.nama +
              "</option>";
          } else {
            select +=
              "<option value='" + item.id + "' >" + item.nama + "</option>";
          }
        });
        $("#penerbit").html(select);
      },
    });
  });
  // Edit and Add
  $(this).ready(function () {
    $(document).on("click", "#btnSave", function () {
      var dataSend = $("#formAdd").serialize();
      $.ajax({
        type: "POST",
        url: "_php/writeAriana.php",
        data: dataSend,
        dataType: "html",
        success: function (result) {
          Swal.fire({
            icon: "success",
            title: "Music Ariana Grande Berhasil Ditambahkan",
            text: "Music Ariana Grande Berhasil Ditambahkan!",
          }).then(function () {
            document.location.href = "AdmAriana.php";
          });
        },
      });
    });
    $(document).on("click", "#btnEdit", function () {
      var dataSend = $("#formAdd").serialize();
      $.ajax({
        type: "POST",
        url: "_php/writeAriana.php",
        data: dataSend,
        dataType: "html",
        success: function (result) {
          Swal.fire({
            icon: "success",
            title: "Music Ariana Grande Berhasil Ditambahkan",
            text: "Music Ariana Grande Berhasil Ditambahkan!",
          }).then(function () {
            document.location.href = "AdmAriana.php";
          });
        },
      });
    });
  });
  