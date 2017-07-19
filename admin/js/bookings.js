$(document).ready(function () {
    $("#bookingForm").validate({
        ignore: [],
        rules: {
        },
        invalidHandler: function (form, validator) {
            thisForm = form.currentTarget;
            errors = validator.numberOfInvalids();
            if (errors) {
                toastr['error'](validator.errorList[0].message);
                var errEle = validator.errorList[0].element;
                if ($(errEle).data('select2')) {
                    $(errEle).select2('open');
                } else {
                    errEle.focus();
                }
            }
        },
        errorPlacement: function (error, element) {
            return;
        },
        messages: {
            "bookingId": { required: "Enter booking ID" },
            "containerNo[]": { required: "Enter Container No." },
        },
        submitHandler: function (form) {
            $(form).find(".modal-content").addClass("loading");
            $(form).ajaxSubmit(function (data) {
                $(form).find(".modal-content").removeClass("loading");
                if (data && data['status'] == "1") {
                    toastr["success"]("Entry added successfully.");
                    $(form).resetForm().modal("hide");
                    bookingDTable.draw(true);
                } else {
                    toastr["error"](data['msg'] || "Error adding entry.");
                }
            });
        },
    });
    $("#bookingForm").on('reset', function () {
        $("#intakeDistTable tr:not(:first-child)").remove();
    }).resetForm();
    DTInit();
    $('#myCarousel').carousel({
		interval: 5000
	});
	//Handles the carousel thumbnails
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
    	var id = $('.item.active').data('slide-number');
    	$('#carousel-text').html($('#slide-content-'+id).html());
    });
});

function DTInit() {
    var thisTable = jQuery("#bookingsTable");
    if (thisTable.length) {
        DTTdCls = ["", "text-center"];
        DTOpt = {
            "columns": [
                { "data": "bookingId", },
                { "data": "noOfContainers" },
                {
                    "data": "entryTime", "render": function (data, type, full, meta) {
                        return ['<div class="text-nowrap">',moment(data).format("DD-MM-YYYY hh:mm a"),'</div>'].join("");
                    }
                },
                
                {
                    "data": "status", "render": function (data, type, full, meta) {
                        return statusHtml(data);
                    },
                },
                // {
                //     "data": "images", render: function (data, typ, full, meta) {
                //         return renderGallery(data, typ, full, meta);
                //     }
                // },
                {
                    "orderable": false,
                    "data": null,
                    "render": function() {
                        return [
                            '<div class="removeBookingCover"><button class="btn btn-danger" type="button" onclick="removeBooking(this)">Remove</button></div>'
                        ].join("");
                    }
                },
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                
            ],
            ordering: false,
            "oLanguage": {
                "oPaginate": {
                    "sFirst": " ",
                    "sLast": " ",
                    "sNext": "Next",
                    "sPrevious": "Prev"
                },
            },
            "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: 'includes/bookings.php',
                type: 'POST',
                "data": function (d) {
                    d.status = load_status;
                }
            },
            "iDisplayLength": 5,
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                jQuery(nRow).find("td").each(function () {
                    if (typeof DTTdCls[jQuery(this).index()] != "undefined")
                        jQuery(this).addClass(DTTdCls[jQuery(this).index()]);
                });
            },
            "drawCallback": function (settings) {
                thisTable.removeClass("loading");
                if (typeof settings.jqXHR.responseJSON['addData'] != "undefined") {
                    addData = settings.jqXHR.responseJSON['addData'];
                    console.log(addData);
                    thisTable.find("tr").each(function () {
                        ridx = bookingDTable.row(this).index();
                        if (typeof addData[ridx] != "undefined") {
                            for (var x in addData[ridx]) {
                                jQuery(this).attr("data-" + x, addData[ridx][x]);
                            }
                        }
                    });
                }
                DTCB();
            }
        };
        bookingDTable = thisTable.DataTable(DTOpt);
        bookingDTable.on("preXhr.dt", function () {
            thisTable.addClass("loading");
        });
        // Add event listener for opening and closing details
        thisTable.find('tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = bookingDTable.row(tr);

            if (row.child.isShown()) {
                jQuery('div.childTableCover', row.child()).slideUp(200, function () {
                    row.child.hide();
                    tr.removeClass('shown');
                });
            }
            else {
                row.child(renderDist(row.data())).show();
                tr.addClass('shown');
                jQuery('div.childTableCover', row.child()).slideDown(200);
            }
        });
    }
}
function DTCB() {

}
function renderDist(data) {
    var tbodyHtml = [];
    if (typeof data['containers_list'] == "object") {
        var removeHtml='';
        if(data["status"]=="1" && Object.keys(data['containers_list']).length>1) {
            removeHtml='<div class="removeContCover"><button class="btn btn-xs btn-danger" type="button" onclick="removeContainer(this)">Remove</button></div>';
        }
        jQuery.each(data['containers_list'], function (bcontId, info) {
            var contStatusHtml=[];
            if (info && info.containerStatus &&  info.containerStatus.toString() == "1") {
                contStatusHtml= [
                '<div class="btn-group">',
                '<button type="button" class="btn btn-green btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">',
                'Open <span class="caret"></span>',
                '</button>',
                '<ul class="dropdown-menu">',
                '<li><a href="#" onclick="{changeContainerStatus(this);return false;}">Close Container</a></li>',
                '</ul>',
                '</div>',
                ].join("");
            } else {
               contStatusHtml= [
               '<div class="btn-group">',
               '<button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">',
               'Closed <span class="caret"></span>',
               '</button>',
               '<ul class="dropdown-menu">',
               '<li><a href="#" onclick="{changeContainerStatus(this);return false;}">Reopen Container</a></li>',
               '</ul>',
               '</div>',
               ].join("");
           }
           var galHtml= '';
           if(data['images'] && data['images'][bcontId]) {
               galHtml= [
               '<button type="button" class="btn btn-xs btn-default" onclick="showGallery(this)">',
               '<i class="fa  fa-folder-open"></i> Browse',
               '</button>',
               ].join("");
           }
            tbodyHtml.push([
                '<tr data-contid="',bcontId,'">',
                '<td class="bcName">', info.containerNo,'</td>',
                '<td>',galHtml,'</td>',
                '<td>',contStatusHtml,'</td>',
                '<td>',removeHtml,'</td>',
                '</tr>'
            ].join(""));
        });
    }
    return [
        '<div class="childTableCover">',
        '<table class="table" style="padding-left:50px;">',
        '<thead>',
        '<tr>',
        '<th colspan="100">',
        '<div class="clearfix">',
        '<div class="pull-left">Containers</div>',
        '<div class="pull-right">',
        '<button type="button" class="btn btn-sm btn-default" onclick="addContainer(this)">',
        '<i class="fa  fa-plus"></i> Add Container',
        '</button>',
        '</div>',
        '</div>',
        '</th>',
        '</tr></thead>',
        '<tbody>',
        tbodyHtml.join(""),
        '</tbody>',
        '</table>',
        '</div>',
    ].join("");
}

function addEntry(ele) {
    var trEle = $(ele).closest("tr");
    var tbodyEle = trEle.closest("tbody");
    if (!tbodyEle.find(":input").valid()) {
        toastr['warning']("Fill empty rows and try.");
        return;
    }
    var newRow = trEle.clone();
    newRow.find("[type='text']").val("");
    var x = trEle.closest("tbody").append(newRow);
}

function removeEntry(ele) {
    var trEle = $(ele).closest("tr");
    var tbodyEle = trEle.closest("tbody");
    var newRow = tbodyEle.find("tr:first-child").clone();
    newRow.find("[type='text']").val("");
    trEle.remove();
    if (tbodyEle.find("tr").length == 0) {
        //insert empty row if all are deleted
        tbodyEle.append(newRow);
    }
}
function statusHtml(data) {
    if (data && data.toString() == "1") {
        return [
            '<div class="btn-group">',
            '<button type="button" class="btn btn-green btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">',
            'Open <span class="caret"></span>',
            '</button>',
            '<ul class="dropdown-menu">',
            '<li><a href="#" onclick="{changeBookingStatus(this);return false;}">Close</a></li>',
            '</ul>',
            '</div>',
        ].join("");
    } else {
         return [
            '<div class="btn-group">',
            '<button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">',
            'Closed <span class="caret"></span>',
            '</button>',
            '<ul class="dropdown-menu">',
            '<li><a href="#" onclick="{changeBookingStatus(this);return false;}">Reopen</a></li>',
            '</ul>',
            '</div>',
        ].join("");
    }
}
function changeBookingStatus(ele) {
    var thisTr=$(ele).closest("tr");
    var bId = thisTr.attr("data-id");
    var info=bookingDTable.row(thisTr.get(0)).data();
    if(info["status"].toString()=="1") {
        bootbox.confirm({
            className: "boot-zr type-danger form-zr",
            title: "Close Booking",
            message: "Are you sure want to close the booking ?",
            size: 'small',
            callback: function (result) {
                if (result === true) {
                    $.post("validate.php?task=change_booking_status", { "bId": bId,"status":"0" }, function (data) {
                        if (data['status'] == "1") {
                            toastr.success("Booking closed successfully. Reloading the list");
                            setTimeout(function () {
                                bookingDTable.draw(true);
                            }, 500);
                        } else {
                            toastr.error(data.msg || "Unabled to close booking.");
                        }
                    });
                }
            }
        });
    } else {
        bootbox.confirm({
            className: "boot-zr type-danger form-zr",
            title: "Reopen Booking",
            message: "Are you sure want to open the booking ?",
            size: 'small',
            callback: function (result) {
                if (result === true) {
                    $.post("validate.php?task=change_booking_status", { "bId": bId,"status":"1" }, function (data) {
                        if (data['status'] == "1") {
                            toastr.success("Booking reopened successfully. Reloading the list");
                            setTimeout(function () {
                                bookingDTable.draw(true);
                            }, 500);
                        } else {
                            toastr.error(data.msg || "Unabled to open booking.");
                        }
                    });
                }
            }
        });
    }
}
function changeContainerStatus(ele) {
    var thisTr=$(ele).closest("tr");
    var bcontId = thisTr.attr("data-contid");
    var thisParentTr=$(ele).closest("table").closest("tr").prev("tr[data-id]");
    var bId = thisParentTr.attr("data-id");
    var info=bookingDTable.row(thisParentTr.get(0)).data();
    console.log(info);
    if(!(info["containers_list"] && info["containers_list"][bcontId])) {
        return;
    }

    if(info["containers_list"] && info["containers_list"][bcontId]['containerStatus'].toString()=="1") {
        bootbox.confirm({
            className: "boot-zr type-danger form-zr",
            title: "Close container",
            message: "Are you sure want to close the container ?",
            size: 'small',
            callback: function (result) {
                if (result === true) {
                    $.post("validate.php?task=change_container_status", { "bcontId": bcontId,"containerStatus":"0" }, function (data) {
                        if (data['status'] == "1") {
                            toastr.success("Container closed successfully. Reloading the list");
                            setTimeout(function () {
                                bookingDTable.draw(true);
                            }, 500);
                        } else {
                            toastr.error(data.msg || "Unable to close container.");
                        }
                    });
                }
            }
        });
    } else {
        bootbox.confirm({
            className: "boot-zr type-danger form-zr",
            title: "Reopen Booking",
            message: "Are you sure want to open the container ?",
            size: 'small',
            callback: function (result) {
                if (result === true) {
                    $.post("validate.php?task=change_container_status", { "bcontId": bcontId,"containerStatus":"1" }, function (data) {
                        if (data['status'] == "1") {
                            toastr.success("Container reopened successfully. Reloading the list");
                            setTimeout(function () {
                                bookingDTable.draw(true);
                            }, 500);
                        } else {
                            toastr.error(data.msg || "Unable to open container.");
                        }
                    });
                }
            }
        });
    }
}
function showGallery(ele) {
    var target=$("#imageViewer");
	var thisTr=$(ele).closest("tr");
    var bcontId = thisTr.attr("data-contid");
    var thisParentTr=$(ele).closest("table").closest("tr").prev("tr[data-id]");
    var bId = thisParentTr.attr("data-id");
    var info=bookingDTable.row(thisParentTr.get(0)).data();
	console.log(info);
    var contInfo=info['images'][bcontId];
    target.find(".idInfo").html([info['bookingId'],contInfo['containerNo']].join(" - "));
    var thumb_target=$("#slider-thumbs .hide-bullets").empty();
    var images_target=$("#myCarousel .carousel-inner").empty();
    var i=0;
    // $.each(info['images'],function(bcontId,contInfo) {
    $.each(contInfo['reports'],function(tmpInd,rImgInfo) {
		thisImg=rImgInfo['path'];
		var id='carousel-selector-'+(i++);
		var imgUrl=[
		'/uploads/bookings/',info['bookingId'],'/',contInfo['containerNo'],'/',thisImg,
		].join("");
		thumb_target.append([
			'<li class="col-sm-3">',
			'<a class="thumbnail" id="',id,'">',
			'<img src="',imgUrl,'">',
			'</a>',
			'</li>',
			].join(""));
		images_target.append([
			'<div class="item" data-slide-number="',i,'">',
			'<img src="',imgUrl,'">',
			'</div>',
			].join(""));
	});
	// });
	images_target.find(".item:first-child").addClass('active');
	$('.carousel-indicators > li').first().addClass('active');
 	target.find('[id^=carousel-selector-]').click(function () {
    	var id_selector = $(this).attr("id");
    	try {
    		var id = /-(\d+)$/.exec(id_selector)[1];
    		console.log(id_selector, id);
    		$('#myCarousel').carousel(parseInt(id));
    	} catch (e) {
    		console.log('Regex failed!', e);
    	}
    });
	target.modal("show");
}
function addContainer(ele) {
    var thisTr=$(ele).closest("table").closest("tr").prev("tr[data-id]");
    var bId = thisTr.attr("data-id");
    var info=bookingDTable.row(thisTr.get(0)).data();
    console.log(info);
    bootbox.prompt({
        className: "boot-zr type-danger form-zr",
        title: "Enter new container number",
        size: 'small',
        callback: function (result) {
            result=$.trim(result);
            if(result=="") {
                return;
            }
            if($.isArray(info.bookingContainers) && info.bookingContainers.indexOf(result)!=-1) {
                toastr.error("Container already exists");
                return;
            }
            $.post("validate.php?task=add_container", { "bId": bId,"containerNo":result }, function (data) {
                if (data['status'] == "1") {
                    toastr.success("Container added successfully. Reloading the list");
                    setTimeout(function () {
                        bookingDTable.draw(true);
                    }, 500);
                } else {
                    toastr.error(data.msg || "Unabled to add.");
                }
            });
        }
    });
}
function removeContainer(ele) {
    var bcontId=$(ele).closest("tr").attr("data-contid");
    bootbox.confirm({
        className: "boot-zr type-danger form-zr",
        title: "Remove Container",
        message: "Are you sure want to remove this container ?",
        size: 'small',
        callback: function (result) {
            if (result === true) {
                $.post("validate.php?task=remove_container", { "bcontId": bcontId }, function (data) {
                    if (data['status'] == "1") {
                        toastr.success("Container removed successfully. Reloading the list");
                        setTimeout(function () {
                            bookingDTable.draw(true);
                        }, 500);
                    } else {
                        toastr.error(data.msg || "Unabled to remove container.");
                    }
                });
            }
        }
    });
}
function removeBooking(ele) {
    var bId=$(ele).closest("tr").attr("data-id");
    bootbox.confirm({
        className: "boot-zr type-danger form-zr",
        title: "Remove Booking",
        message: "Are you sure want to remove this booking ?",
        size: 'small',
        callback: function (result) {
            if (result === true) {
                $.post("validate.php?task=remove_booking", { "bId": bId }, function (data) {
                    if (data['status'] == "1") {
                        toastr.success("Booking removed successfully. Reloading the list");
                        setTimeout(function () {
                            bookingDTable.draw(true);
                        }, 500);
                    } else {
                        toastr.error(data.msg || "Unabled to remove booking.");
                    }
                });
            }
        }
    });
}