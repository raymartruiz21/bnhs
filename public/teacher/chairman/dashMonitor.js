const myAsset = [
    { font: "far fa-newspaper"},
    { font: "fab fa-audible"},
    { font: "fas fa-award"},
    { font: "fas fa-paint-brush"},
];
let dashMonitor = () => {
    let dashHTML = "";
    $.ajax({
        url: `dash/monitor`,
        type: "GET",
        dataType: "json",
    })
        .done(function (data) {
            data.forEach((val, i) => {
                dashHTML += `
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="info-box">
                    <span class="info-box-icon elevation-1" style="background-color: #6666ff;"><i class="${myAsset[i].font}" style="color: white;"></i></span>
        
                    <div class="info-box-content">
                        <span class="info-box-text">${val.curriculum}</span>
                        <span class="info-box-number">
                        ${
                            val.pending == 0
                                ? `
                                 <small class="m-0">Enrolled: <b> ${val.enrolled}</b></small>
                                 `
                                : `
                                 ${
                                     val.enrolled == 0
                                         ? `
                                         <small class="m-0">Pending: <b> ${val.pending}</b></small>
                                         `
                                         : `
                                         <small class="m-0">Enrolled: <b> ${val.enrolled}</b></small>
                                         <small class="m-0">Pending: <b> ${val.pending}</b></small>
                                     `
                                 }

                             `
                        }
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
               `;
            });
            $(".dashMonitor").html(dashHTML);
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            getToast("error", "Eror", errorThrown);
            $(".btnSaveSectionNow").html("Save").attr("disabled", false);
        });
};
dashMonitor();
