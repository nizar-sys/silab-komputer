$(document).ready(function () {
    $('#tabel1').DataTable();
    $('#tabel2').DataTable();
    asisten_data();
    praktikan_req();
    presentase();
});

//--------------------------------------------------------------------------Daftar Nilai Harian
function showNilai(nrp, periode, praktikum) {
    if (nrp == "") {
        document.getElementById("live_data").innerHTML = "<p><b>Masukkan NRP peserta untuk melihat detail nilai...</b> <br>"
                + "<div class='table-responsive'>"
                + "<table class='table table-bordered table-striped' style='width:80%;' id='tabel3' name='tabel3'>"
                + "<tr>"
                + "<th>Pertemuan</th>"
                + "<th>Tugas Pendahuluan</th>"
                + "<th>Tugas Harian</th>"
                + "<th>Tugas Akhir</th>"
                + "<th>Aksi</th>"
                + "</tr>"
                + "<tr>"
                + "<td colspan='5'> Data Tidak Ditemukan</td>"
                + "</tr>"
                + "</table>"
                + "</div></p>";
        return;
    } else {
        $.ajax({
            url: "query/nh_select.php",
            method: "POST",
            data: {nrp: nrp, periode: periode, praktikum: praktikum},
            dataType: "text",
            success: function (data) {
                $('#live_data').html(data);
                hitung_nilai_harian(nrp);
            }
        });
    }
}

$(document).on('click', '#btn_add', function () {
    var pertemuan = $('#pertemuan').text();
    var nrp = document.getElementById("nrp").value;
    var tp = $('#tp').text();
    var th = $('#th').text();
    var ta = $('#ta').text();
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    if (pertemuan == '') {
        alert("Masukkan Pertemuan Terlebih Dahulu");
        return false;
    }
    if (tp == '') {
        alert("Masukkan Nilai TP Terlebih Dahulu");
        return false;
    }
    if (th == '') {
        alert("Masukkan Nilai TH Terlebih Dahulu");
        return false;
    }
    if (ta == '') {
        alert("Masukkan Nilai TA Terlebih Dahulu");
        return false;
    }
    $.ajax({
        url: "query/nh_insert.php",
        method: "POST",
        data: {pertemuan: pertemuan, tp: tp, th: th, ta: ta, periode: periode, praktikum: praktikum, nrp: nrp},
        dataType: "text",
        success: function (data)
        {
            alert(data);
            showNilai(nrp, periode, praktikum);
        }
    })
});

$(document).on('click', '#btn_delete', function () {
    var id = $(this).data("id5");
    var nrp = document.getElementById("nrp").value;
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    if (confirm("Are you sure you want to delete this?"))
    {
        $.ajax({
            url: "query/nh_delete.php",
            method: "POST",
            data: {id: id},
            dataType: "text",
            success: function (data) {
                alert(data);
                showNilai(nrp, periode, praktikum);
            }
        });
    }
});

function edit_data(id, text, column_name)
{
    $.ajax({
        url: "query/nh_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.pertemuan', function () {
    var id = $(this).data("id1");
    var pertemuan = $(this).text();
    edit_data(id, pertemuan, "pertemuan");
});
$(document).on('blur', '.tp', function () {
    var id = $(this).data("id2");
    var tp = $(this).text();
    edit_data(id, tp, "tp");
});
$(document).on('blur', '.th', function () {
    var id = $(this).data("id3");
    var th = $(this).text();
    edit_data(id, th, "th");
});
$(document).on('blur', '.ta', function () {
    var id = $(this).data("id4");
    var ta = $(this).text();
    edit_data(id, ta, "ta");
});

//--------------------------------------------------------------------------Daftar Nilai Harian

//--------------------------------------------------------------------------Daftar Asisten

function asisten_data() {
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/asisten_select.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#data_asisten').html(data);
        }
    });
}

function edit_kelas(id, text, column_name)
{
    $.ajax({
        url: "query/asisten_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.kelas', function () {
    var id = $(this).data("id3");
    var kelas = $(this).text();
    edit_kelas(id, kelas, "kelas");
});

//--------------------------------------------------------------------------Daftar Asisten

//------------------------------------------------------------------------- Nilai Praktikum

function hitung(nh, abs, uts, uas, pro)
{
    var nilai = 0;
    var nh = nh;
    var uts = uts;
    var uas = uas;
    var pro = pro;
    var abs = abs;
    var pnh = $('.pnh').text();
    var puts = $('.puts').text();
    var puas = $('.puas').text();
    var ppro = $('.ppro').text();
    var pabs = $('.pabs').text();
    var per = $('.per').text();
    var pertemuan = parseInt(per);
    var n1 = 0;
    var n2 = 0;
    var n3 = 0;
    var n4 = 0;
    var n5 = 0;

    if (pnh == 0) {
        nilai = (parseFloat(nh) + parseFloat(abs) + parseFloat(uts) + parseFloat(uas) + parseFloat(pro)) / 5;
    } else {
        n1 = (nh / 100) * parseInt(pnh);
        n2 = (abs / 100) * parseInt(pabs);
        n3 = (uts / 100) * parseInt(puts);
        n4 = (uas / 100) * parseInt(puas);
        n5 = (pro / 100) * parseInt(ppro);
        nilai = n1 + n2 + n3 + n4 + n5;
    }
    return nilai.toFixed(2);
}

function hitung_nilai_harian(nrp)
{
    var nh = 0;
    var tptot = 0;
    var thtot = 0;
    var tatot = 0;
    var ptp = $('.ptp').text();
    var pth = $('.pth').text();
    var pta = $('.pta').text();
    var per = $('.per').text();
    var pertemuan = parseInt(per);

    $('.tp').each(function () {
        var tp = $(this);
        tptot += parseInt(tp.text());
    });
    $('.th').each(function () {
        var th = $(this);
        thtot += parseInt(th.text());
    });
    $('.ta').each(function () {
        var ta = $(this);
        tatot += parseInt(ta.text());
    });

    if (ptp == 0) {
        tptot = (tptot / pertemuan) / 100 * 34;
        thtot = (thtot / pertemuan) / 100 * 33;
        tatot = (tatot / pertemuan) / 100 * 33;
        nh = tptot + thtot + tatot;
        nh = nh.toFixed(2);
    } else {
        tptot = (tptot / pertemuan) / 100 * parseInt(ptp);
        thtot = (thtot / pertemuan) / 100 * parseInt(pth);
        tatot = (tatot / pertemuan) / 100 * parseInt(pta);
        nh = tptot + thtot + tatot;
        nh = nh.toFixed(2);
    }

    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/nilai_update_nh.php",
        method: "POST",
        data: {nrp: nrp, periode: periode, praktikum: praktikum, nilai: nh},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });

}

function presentase() {
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/presentase.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#presentase').html(data);
        }
    });
    $.ajax({
        url: "query/presentase2.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#presentase2').html(data);
        }
    });
}

function edit_nilai(id, text, column_name)
{
    $.ajax({
        url: "query/nilai_update.php",
        method: "POST",
        data: {id: id, text: text, column_name: column_name},
        dataType: "text",
        success: function (data) {
            alert(data);
        }
    });
}
$(document).on('blur', '.kls', function () {
    var id = $(this).data("id3");
    var kelas = $(this).text();
    edit_nilai(id, kelas, "kelas");
});
$(document).on('blur', '.uts', function () {
    var id = $(this).data("id5");
    var uts = $(this).text();
    edit_nilai(id, uts, "uts");
    var nh = $(this).parent().find('.nh').text();
    var uts = $(this).parent().find('.uts').text();
    var uas = $(this).parent().find('.uas').text();
    var pro = $(this).parent().find('.pro').text();
    var abs = $(this).parent().find('.abs').text();
    var nilai = hitung(nh, abs, uts, uas, pro);
    edit_nilai(id, nilai, "total");
    $(this).parent().find('.tot').text(nilai);
});
$(document).on('blur', '.uas', function () {
    var id = $(this).data("id6");
    var uas = $(this).text();
    edit_nilai(id, uas, "uas");
    var nh = $(this).parent().find('.nh').text();
    var uts = $(this).parent().find('.uts').text();
    var uas = $(this).parent().find('.uas').text();
    var pro = $(this).parent().find('.pro').text();
    var abs = $(this).parent().find('.abs').text();
    var nilai = hitung(nh, abs, uts, uas, pro);
    edit_nilai(id, nilai, "total");
    $(this).parent().find('.tot').text(nilai);
});
$(document).on('blur', '.pro', function () {
    var id = $(this).data("id7");
    var pro = $(this).text();
    edit_nilai(id, pro, "project");
    var nh = $(this).parent().find('.nh').text();
    var uts = $(this).parent().find('.uts').text();
    var uas = $(this).parent().find('.uas').text();
    var pro = $(this).parent().find('.pro').text();
    var abs = $(this).parent().find('.abs').text();
    var nilai = hitung(nh, abs, uts, uas, pro);
    edit_nilai(id, nilai, "total");
    $(this).parent().find('.tot').text(nilai);
});

//------------------------------------------------------------------------- Nilai Praktikum


//------------------------------------------------------------------------- Request Praktikan

function praktikan_req() {
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    $.ajax({
        url: "query/praktikanreq_select.php",
        method: "POST",
        data: {periode: periode, praktikum: praktikum},
        dataType: "text",
        success: function (data) {
            $('#req_praktikan').html(data);
        }
    });
}

$(document).on('click', '#btn_delete3', function () {
    var nrp = $(this).data("id3");
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    if (confirm("Apakah anda yakin ingin menghapus dari Request Praktikan?"))
    {
        $.ajax({
            url: "query/praktikanreq_delete.php",
            method: "POST",
            data: {periode: periode, praktikum: praktikum, nrp: nrp},
            dataType: "text",
            success: function (data) {
                alert(data);
                praktikan_req();
            }
        });
    }
});

$(document).on('click', '#btn_update3', function () {
    var nrp = $(this).data("id3");
    var periode = document.getElementById("periode").value;
    var praktikum = document.getElementById("praktikum").value;
    var email = $(this).closest('td').parent().find('.email').text();
    var nama = $(this).closest('td').parent().find('.nama').text();
    var pesan = "Anda telah terdaftar sebagai Peserta Praktikum " + praktikum + " Periode " + periode;
    var subjek = "Penerimaan Peserta Praktikum";
    if (confirm("Apakah anda yakin ?"))
    {
        $.ajax({
            url: "query/praktikanreq_update.php",
            method: "POST",
            data: {periode: periode, praktikum: praktikum, nrp: nrp},
            dataType: "text",
            success: function (data) {
                alert(data);
                praktikan_req();
            }
        });
        $.ajax({
            url: "admin/admin/PHPMailer/send_mail.php",
            method: "POST",
            data: {email:email, nama:nama, isi:pesan, subjek:subjek},
            dataType: "text",
            success: function (data) {
                alert(data);
            }
        });
    }
});

//------------------------------------------------------------------------- Request Praktikan

