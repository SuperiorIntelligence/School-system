function loadPage(url,method,place,kind,data){
    var bodyFormData = new FormData();

    if (data == 1){
        var role = document.getElementById("role").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value

        bodyFormData.append("role",role);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);

    }
    else if(data==2){


        var role = document.getElementById("role").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value


        bodyFormData.append("role",role);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);

    }
    else if(data==3){
        var oldImage = document.getElementById("oldImage").value
        var pic = document.getElementById("file").files[0]
        var typestyle = document.getElementById("usertype").value
        var name = document.getElementById("name").value
        var email = document.getElementById("email").value

        bodyFormData.append("oldImage",oldImage);
        bodyFormData.append("pic",pic);
        bodyFormData.append("typestyle",typestyle);
        bodyFormData.append("name",name);
        bodyFormData.append("email",email);

    }
    else if(data == 4){

        var current_password = document.getElementById("current_password").value
        var password = document.getElementById("password").value
        var password_confirmation = document.getElementById("password_confirmation").value

        bodyFormData.append("current_password",current_password);
        bodyFormData.append("password",password);
        bodyFormData.append("password_confirmation",password_confirmation);

    }

    else if(data == 5){

        var className = document.getElementById("className").value
        bodyFormData.append("className",className);

    }
    else if(data == 6){
        var numberYear = document.getElementById("numberYear").value
            bodyFormData.append("numberYear",numberYear);

    }

    else if(data==7){

        var name = document.getElementById("name").value
        bodyFormData.append("name",name);

    }

    else if(data == 8){

        var nameShift = document.getElementById("nameShift").value
        bodyFormData.append("nameShift",nameShift);

    }

    else if(data == 9){

        var feeCatName = document.getElementById("feeCatName").value
        bodyFormData.append("feeCatName",feeCatName);

    }

    else if(data == 10){

        var feeCategoryId = document.getElementById("feeCategoryId").value;
        var amount, i , classId;
        amount = document.querySelectorAll(".amountInput");
        classId = document.querySelectorAll(".classId");

        // const CheckClass = classId.split(" ");
        const dataAmount = [];
        const dataClass = [];
        if(amount.length - 1 > 0){
        for (i = 0; i < amount.length - 1 ; i++) {
            dataAmount[i] = amount[i].value;
            dataClass[i] = classId[i].value;
        }

        bodyFormData.append("feeCategoryId",feeCategoryId);
        bodyFormData.append("Amount",dataAmount);
        bodyFormData.append("classId",dataClass);
        }
        else{
            alert("Sorry You do not select any class amount")
            // return;
        }

    }

    else if (data == 11){

        var examTypeName = document.getElementById("examTypeName").value
        bodyFormData.append("examTypeName",examTypeName);

    }

    else if (data == 12){

        var subjectName = document.getElementById("subjectName").value
        bodyFormData.append("subjectName",subjectName);

    }

    else if (data == 13){

        var classId = document.getElementById("classId").value;
        var fullMark, i , passMark , subjectiveMark , subjectId;
        subjectId = document.querySelectorAll(".subjectId");
        fullMark = document.querySelectorAll(".fullMark");
        passMark = document.querySelectorAll(".passMark");
        subjectiveMark = document.querySelectorAll(".subjectiveMark");
        const dataSubject = [];
        const dataFullMark = [];
        const dataPassMark = [];
        const dataSubjectiveMark = [];
        if(subjectId.length - 1 > 0) {
            for (i = 0; i < subjectId.length - 1; i++) {
                dataSubject[i] = subjectId[i].value;
                dataFullMark[i] = fullMark[i].value;
                dataPassMark[i] = passMark[i].value;
                dataSubjectiveMark[i] = subjectiveMark[i].value;
            }

            bodyFormData.append("classId",classId);
            bodyFormData.append("subjectId",dataSubject);
            bodyFormData.append("fullMark",dataFullMark);
            bodyFormData.append("passMark",dataPassMark);
            bodyFormData.append("subjectiveMark",dataSubjectiveMark);
        }
        else{
            alert("Sorry You do not select any class amount")

            // return;
        }



    }

    else if(data == 14){

        var designationName = document.getElementById("designationName").value
        bodyFormData.append("designationName",designationName);

    }

    else if(data == 15){

        var sName = document.getElementById("sName").value;
        var fName = document.getElementById("fName").value;
        var mName = document.getElementById("mName").value;
        var mobile = document.getElementById("mobile").value;
        var address = document.getElementById("address").value;
        var gender = document.getElementById("gender").value;
        var religion = document.getElementById("religion").value;
        var dob = document.getElementById("dob").value;
        var discount = document.getElementById("discount").value;
        var year = document.getElementById("year").value;
        var studentClass = document.getElementById("class").value;
        var group = document.getElementById("group").value;
        var shift = document.getElementById("shift").value;
        var imageStudent = document.getElementById("file").files[0];

        if(document.getElementById("oldImage")  && !imageStudent)
        {
            imageStudent = document.getElementById("oldImage").value;
            bodyFormData.append("imageStudent",imageStudent);
            bodyFormData.append("flagImage",1);
        }



        bodyFormData.append("sName",sName);
        bodyFormData.append("fName",fName);
        bodyFormData.append("mName",mName);
        bodyFormData.append("mobile",mobile);
        bodyFormData.append("address",address);
        bodyFormData.append("gender",gender);
        bodyFormData.append("religion",religion);
        bodyFormData.append("dob",dob);
        bodyFormData.append("discount",discount);
        bodyFormData.append("year",year);
        bodyFormData.append("studentClass",studentClass);
        bodyFormData.append("group",group);
        bodyFormData.append("shift",shift);

        if(imageStudent)
            bodyFormData.append("imageStudent",imageStudent);

    }

    else if(data == 16){

        var searchYear = document.getElementById("searchYear").value;
        var searchClass = document.getElementById("searchClass").value;


        bodyFormData.append("searchYear",searchYear);
        bodyFormData.append("searchClass",searchClass);

    }
    else if(data == 17 ){


        var sName = document.getElementById("sName").value;
        var fName = document.getElementById("fName").value;
        var mName = document.getElementById("mName").value;
        var mobile = document.getElementById("mobile").value;
        var address = document.getElementById("address").value;
        var gender = document.getElementById("gender").value;
        var religion = document.getElementById("religion").value;
        var dob = document.getElementById("dob").value;
        var designation = document.getElementById("designation").value;
        if(document.getElementById("salary"))
            var salary = document.getElementById("salary").value;
        if(document.getElementById("joinDate"))
            var joinDate = document.getElementById("joinDate").value;
        var imageStudent = document.getElementById("file").files[0];
        // alert(imageStudent);
        // alert(typeof(document.getElementById("oldImage")));
        // alert(sName);
        // alert(fName);
        // alert(mName);
        // alert(mobile);
        // alert(address);
        // alert(gender);
        // alert(religion);
        // alert(dob);
        // alert(designation);
        // alert(salary);
        // alert(joinDate);
        // alert(imageStudent);

        if(document.getElementById("oldImage")  && !imageStudent)
        {
            imageStudent = document.getElementById("oldImage").value;
            bodyFormData.append("imageStudent",imageStudent);
            bodyFormData.append("flagImage",1);
            // alert("okokokok");
        }
        else if(imageStudent) {
            bodyFormData.append("imageStudent", imageStudent);
            // alert("okokok2");
        }

        bodyFormData.append("sName",sName);
        bodyFormData.append("fName",fName);
        bodyFormData.append("mName",mName);
        bodyFormData.append("mobile",mobile);
        bodyFormData.append("address",address);
        bodyFormData.append("gender",gender);
        bodyFormData.append("religion",religion);
        bodyFormData.append("dob",dob);
        bodyFormData.append("designation",designation);
        bodyFormData.append("salary",salary);
        bodyFormData.append("joinDate",joinDate);




    }
    else if(data == 18){

        var incrementSalary = document.getElementById("incrementSalary").value;
        var effectedSalary = document.getElementById("effectedSalary").value;
        bodyFormData.append("incrementSalary",incrementSalary);
        bodyFormData.append("effectedSalary",effectedSalary);

    }
    else if(data == 19){
        if(document.getElementById("employeeName")) {
            var employeeName = document.getElementById("employeeName").value;
            bodyFormData.append("employeeName", employeeName);
        }
        var purpose = document.getElementById("purpose").value;
        if(purpose == 0) {
            var newPurpose = document.getElementById("addAnother").value;
            bodyFormData.append("newPurpose",newPurpose);
        }
        var endDate = document.getElementById("endDate").value;


        bodyFormData.append("purpose",purpose);
        bodyFormData.append("endDate",endDate);
    }

    else if(data == 20){
                                    //Employee Attendance
        const status = [];
        const id = [];
        var date = document.getElementById("AttendDate").value;

        if(date == '')
            alert("Error : The history field should not be empty");
        else {
            var count = document.querySelectorAll(".number");
            for (let i = 0; i < count.length; i++) {

                if (document.getElementById("present" + i).checked) {
                    status[i] = document.getElementById("present" + i).value;
                }
                    // else if(document.getElementById("Leave"+i).checked) {
                    //     status[i] = document.getElementById("Leave" + i).value;
                // }
                else if (document.getElementById("Absent" + i).checked) {
                    status[i] = document.getElementById("Absent" + i).value;
                }
                id[i] = document.getElementById("employeeId" + i).value;
            }
            bodyFormData.append("status", status);
            bodyFormData.append("date", date);
            bodyFormData.append("employeeId", id);
        }
    }

    else if(data == 21){

        const studentId = [];
        const numberMarks = [];
        const idNumber = [];
        var year = document.getElementById("year_id").value;
        var classes = document.getElementById("class_id").value;
        var classSubject = document.getElementById("subject").value;
        var examType = document.getElementById("examType").value;
        var count = document.querySelectorAll(".studentMark");

        for(let i=0;i<count.length;i++){
            var mark = document.getElementById("mark"+i).value;
            if(mark != ""){
                studentId[i] = document.getElementById("student"+i).value;
                idNumber[i] = document.getElementById("idNumber"+i).value;
                numberMarks[i] = mark;
            }
        }
        bodyFormData.append("year",year);
        bodyFormData.append("class",classes);
        bodyFormData.append("classSubject",classSubject);
        bodyFormData.append("examType",examType);
        bodyFormData.append("studentId",studentId);
        bodyFormData.append("numberMarks",numberMarks);
        bodyFormData.append("idNumber",idNumber);
    }

    else if(data == 22){

        var gardeName = document.getElementById("gradeName").value;
        var gardePoint = document.getElementById("gradePoint").value;
        var startMark = document.getElementById("startMark").value;
        var endMark = document.getElementById("endMark").value;
        var startPoint = document.getElementById("startPoint").value;
        var endPoint = document.getElementById("endPoint").value;
        var remark = document.getElementById("remark").value;

        bodyFormData.append("gardeName",gardeName);
        bodyFormData.append("gardePoint",gardePoint);
        bodyFormData.append("startMark",startMark);
        bodyFormData.append("endMark",endMark);
        bodyFormData.append("startPoint",startPoint);
        bodyFormData.append("endPoint",endPoint);
        bodyFormData.append("remark",remark);
    }




    var cookievalue = getCookie("Authorization");


    let options = {
        url: url,
        method: method,
        data: bodyFormData,
        contentType: "multipart/form-data",
        headers: {
            'Authorization': cookievalue
        }
    }

    axios(options).then(res=>{


        if (kind==1){


        document.getElementById(place).innerHTML = res.data;

        if(data == 12){
            alert("Subject Inserted Successfully ");
        }
        else if(data == 22){
            alert("Grade Marks Updated Successfully ");
        }
        // alert("nice")
        // function forceReloadJS() {
        //     $.each($('<script>'), function(index, el) {
        //         var oldSrc = $(el).attr('src');
        //         var t = +new Date();
        //         var newSrc = oldSrc + '?' + t;
        //         // console.log(oldSrc, ' to ', newSrc);
        //         $(el).remove();
        //         $('<script/>').attr('src', newSrc).appendTo('head');
        //     });
        // }
        // forceReloadJS();


        // function load_js()
        // {
        //     var head= document.getElementsByTagName('head')[0];
        //     var script= document.createElement('script');
        //     // script.src= 'source_file.js';
        //     script.src= 'jquery.js';
        //     script.src= 'backend/assets/vendors/base/vendors.bundle.js';
        //     script.src= 'backend/assets/demo/demo12/base/scripts.bundle.js';
        //     script.src= 'backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js';
        //     script.src= 'backend/assets/app/js/dashboard.js';
        //     script.src= 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js';
        //     script.src= 'helper.js';
        //     script.src= 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js';
        //     script.src= 'backend/assets/app/js/dashboard.js';
        //     head.appendChild(script);
        // }
        //     load_js();



        }
        else if (kind == 2){
            window.location = "http://localhost:8000/login";
        }

        // document.body.dispatchEvent(new Event('load'));
        // window.history.pushState("", urlPage, "");
    }).catch(err=>{
        // console.log(err);
                                                                            // Remove from comment
        if(err == "Error: Request failed with status code 422")
            alert("Error : Check the fields again")
        else if(err == "Error: Request failed with status code 401" || err == "Error: Request failed with status code 405")
             window.location = "http://localhost:8000/login"
                                                                                  // Remove from comment
        // console.log(err)
        // alert(err)
        // else if(err == "Error: Request failed with status code 401" || err == "Error: Request failed with status code 405")
        //     window.location = "http://localhost:8000/login"
        // else if(err)
            // window.location = "http://localhost:8000/login";
            // alert(err)

        // document.getElementById(place).innerHTML = "Error";


    });
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function submit(e) {
    e.stopImmediatePropagation()
    e.preventDefault()
}

var loadFile = function(event) {
    var image = document.getElementById('avatar');


    var filePath = event.target.files[0].name
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filePath))
            alert("Invalid file type")
    else
        image.src = URL.createObjectURL(event.target.files[0]);



};

                                // freeAmount editeFeeAmount
$(document).ready(function (){
    var counter = 0 ;
    $(document).on("click",".addeventmore",function (){
        var whole_extra_item_add = $("#whole_extra_item_add").html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
    });
    $(document).on("click",".removeeventmore",function (event) {
        $(this).closest(".delete_whole_extra_item_add").remove();
        counter-=1;
    });
});


// $(document).on('click','#search',function(){
//     var year_id = $('#year_id').val();
//     var class_id = $('#class_id').val();
//     var cookievalue = getCookie("Authorization");
//     var mme = $('#old').val();
//     // var me = '"'+{{route("api.regFeeClassData")}}+'"';
//
//     $.ajax({
//         url: mme,
//         // url: '{{route("api.regFeeClassData")}}',
//         // url: "{{Route('api.regFeeClassData')}}",
//         // url: "{{URL::to('students/registration/fee/class')}}",
//         type: "Get",
//         data: {'year_id':year_id,'class_id':class_id},
//         headers: {
//             'Authorization': cookievalue
//         },
//         beforeSend: function() {
//         },
//         success: function (data) {
//             var source = $("#document-template").html();
//             var template = Handlebars.compile(source);
//             var html = template(data);
//             $('#DocumentResults').html(html);
//             $('[data-toggle="tooltip"]').tooltip();
//         },
//         // cache:
//         //     alert("cache")
//     });
// });

                        //S Student Registration Fee
$(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var url = $('#old').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#registrationFee').removeClass('d-none');
            var html = '';
            if(data.length > 0) {
                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        '<tr>' +
                        '<td><strong>' + (key + 1) + '</strong></td>' +
                        '<td>' + v.IdNumber + '</td>' +
                        '<td>' + v.sName + '</td>' +
                        '<td>' + v.amount + '</td>' +
                        '<td>' + v.discount + '</td>' +
                        '<td>' + v.finalfee + '</td>' +
                        '<td>' + v.a + '</td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center"><strong>No data available in table</strong></div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                                    //E Student Registration Fee

                                    //S Student Monthly Fee

$(document).on('click','#searchMonthlyFee',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var month = $('#month').val();
    var url = $('#old').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,'month':month},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#MonthlyFee').removeClass('d-none');
            var html = '';
            if(data.length > 0) {
                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        '<tr>' +
                        '<td><strong>' + (key + 1) + '</strong></td>' +
                        '<td>' + v.IdNumber + '</td>' +
                        '<td>' + v.sName + '</td>' +
                        '<td>' + v.amount + '</td>' +
                        '<td>' + v.discount + '</td>' +
                        '<td>' + v.finalfee + '</td>' +
                        '<td>' + v.a + '</td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center"><strong>No data available in table</strong></div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                                    //E Student Monthly Fee
                                    //S Student Exam Fee

$(document).on('click','#searchExamFee',function(){

    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var examType = $('#examType').val();
    var url = $('#old').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,'examType':examType},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#ExamFee').removeClass('d-none');
            var html = '';
            if(data.length > 0) {
                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        '<tr>' +
                        '<td><strong>' + (key + 1) + '</strong></td>' +
                        '<td>' + v.IdNumber + '</td>' +
                        '<td>' + v.sName + '</td>' +
                        '<td>' + v.amount + '</td>' +
                        '<td>' + v.discount + '</td>' +
                        '<td>' + v.finalfee + '</td>' +
                        '<td>' + v.a + '</td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                                    //E Student Exam Fee


                                    //S Employee Leave
$(document).ready(function () {
   $(document).on('change',"#purpose",function () {
        var leavePurpose = $(this).val();
        if(leavePurpose == '0'){
            $('#addAnother').show();
        }
        else{
            $('#addAnother').hide();
        }
   });
});


                                    //E Employee Leave

                                    //S Employee Monthly Salary
$(document).on('click','#searchSalary',function(){
    var AttendDate = $('#AttendDate').val();
    var url = $('#url').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'AttendDate':AttendDate},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#monthlySalary').removeClass('d-none');

            var html = '';
            if(data.length > 0) {
                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        '<tr>' +
                        '<td><strong>' + (key + 1) + '</strong></td>' +
                        '<td>' + v.name + '</td>' +
                        '<td>' + v.salary + '</td>' +
                        '<td>' + v.monthSalary + '</td>' +
                        '<td>' + v.a + '</td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                                        //E Employee Monthly Salary

                                        //S Marks

                            //S Add Marks
$(document).on('click','#searchStudentMarks',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var subject = $('#subject').val();
    var examType = $('#examType').val();
    var url = $('#urlGetData').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,"subject":subject,"examType":examType},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#MarksEntry').removeClass('d-none');
            $('#submit').removeClass('d-none');
            var html = '';
            if(data.length > 0) {

                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        // '<tr class="studentMark">' +
                        // '<td>' + (key + 1) + '</td>' +
                        // '<td>' + v.student.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        // '<input type="hidden" id="idNumber'+key+'" value="'+v.student.idNO+'"> </td>' +
                        // '<td>' + v.student.name + '</td>' +
                        // '<td>' + v.student.fatherName + '</td>' +
                        // '<td>' + v.student.gender + '</td>' +
                        // // '<td>' + v.marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        // '</tr>';
                    '<tr class="studentMark">' +
                        '<td>' + (key + 1) + '</td>' +
                        '<td>' + v.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        '<input type="hidden" id="idNumber'+key+'" value="'+v.idNO+'"> </td>' +
                        '<td>' + v.name + '</td>' +
                        '<td>' + v.fatherName + '</td>' +
                        '<td>' + v.gender + '</td>' +
                        // '<td>' + v.marks + '</td>' +
                        '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#submit').addClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});
                            //E Add Marks
                            //S Edit Marks

$(document).on('click','#searchStudentMarksEdit',function(){

    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var subject = $('#subject').val();
    var examType = $('#examType').val();

    var url = $('#urlGetData').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,"subject":subject,"examType":examType},
        headers: {
            'Authorization': cookievalue
        },
        success: function (data) {
            $('#MarksEntry').removeClass('d-none');
            $('#submit').removeClass('d-none');
            var html = '';
            if(data.length > 0) {

                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        '<tr class="studentMark">' +
                        '<td><strong>' + (key + 1) + '</strong></td>' +
                        '<td>' + v.student.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        '<input type="hidden" id="idNumber'+key+'" value="'+v.student.idNO+'"> </td>' +
                        '<td>' + v.student.name + '</td>' +
                        '<td>' + v.student.fatherName + '</td>' +
                        '<td>' + v.student.gender + '</td>' +
                        '<td> <input  class="form-control m-input" type="text" id="mark'+key+'" value="'+v.Marks+'">' +
                        ' </td>' +
                        '</tr>';
                        // '<tr class="studentMark">' +
                        // '<td>' + (key + 1) + '</td>' +
                        // '<td>' + v.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        // '<input type="hidden" id="idNumber'+key+'" value="'+v.idNO+'"> </td>' +
                        // '<td>' + v.name + '</td>' +
                        // '<td>' + v.fatherName + '</td>' +
                        // '<td>' + v.gender + '</td>' +
                        // // '<td>' + v.marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        // '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');
                $('#submit').addClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                            //E Edit Marks

    $(function(){
    $(document).on('change','#class_id',function(){
        var class_id = $('#class_id').val();
        var url = $('#url').val();
        var cookievalue = getCookie("Authorization");

        $.ajax({
            url:url,
            type:"GET",
            data:{'class_id':class_id},
            headers: {
                'Authorization': cookievalue
            },
            success:function(data){

                var html = '<option value="">Select Subject</option>';
                $.each( data, function(key, v) {

                    html += '<option value="'+v.school_subject.id+'">'+v.school_subject.name+'</option>';
                });
                $('#subject').html(html);
            },

        });
    });
    $(document).ajaxError(function(){
            alert("Error : Check the fields again\n" +
                "You must fill in all the fields");
    });
});

                                        //E Marks
                                        //S Student Marks
$(function(){
    $(document).on('change','#examTypeId',function(){
        var yearId = $('#year_id').val();
        var classId = $('#class_id').val();
        var subject = $('#subject').val();
        var examType = $('#examTypeId').val();
        var url = $('#urlGetStudent').val();
        var cookievalue = getCookie("Authorization");

        $.ajax({
            url:url,
            type:"GET",
            data:{'classId':classId,"yearId":yearId,"examType":examType,"subject":subject},
            headers: {
                'Authorization': cookievalue
            },
            success:function(data){

                var html = '<option value="">Select Student Name</option>';
                $.each( data, function(key, v) {

                    html += '<option value="'+v.id+'">'+v.name+'</option>';
                });
                $('#studentName').html(html);
            },

        });
    });
    // $(document).ajaxError(function(){
    //     alert("Error : Check the fields again\n" +
    //         "You must fill in all the fields");
    // });
});

$(document).on('click','#getStudentMarks',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var subject = $('#subject').val();
    var examType = $('#examTypeId').val();
    var studentName = $('#studentName').val();
    // alert(year_id);
    // alert(class_id);
    // alert(subject);
    // alert(examType);
    // alert(studentName);
    var url = $('#DisplayStudentMark').val();
    var cookievalue = getCookie("Authorization");
    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,"subject":subject,"examType":examType,"studentName":studentName},
        headers: {
            'Authorization': cookievalue
        },
        success: function ([data,gradeName]) {
            $('#MarksEntry').removeClass('d-none');

            var html = '';

            if(data.length > 0) {

                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {
                    html +=
                        // '<tr class="studentMark">' +
                        // '<td>' + (key + 1) + '</td>' +
                        // '<td>' + v.student.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        // '<input type="hidden" id="idNumber'+key+'" value="'+v.student.idNO+'"> </td>' +
                        // '<td>' + v.student.name + '</td>' +
                        // '<td>' + v.student.fatherName + '</td>' +
                        // '<td>' + v.student.gender + '</td>' +
                        // // '<td>' + v.marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        // '</tr>';
                        '<tr class="studentMark">' +
                        '<td>' + (key + 1) + '</td>' +
                        '<td>' + v.student.idNO+ ' </td>' +
                        '<td>' + v.student.name + '</td>' +
                        '<td>' + v.student.fatherName + '</td>' +
                        '<td>' + gradeName[0].name + '</td>' +
                        '<td>' + v.Marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');

                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});
                                        //E Student Marks

$(document).on('click','#StudentMarks',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var subject = $('#subject').val();
    var examType = $('#examType').val();

    // alert(year_id);
    // alert(class_id);
    // alert(subject);
    // alert(examType);
    // alert(studentName);
    var url = $('#DisplayStudentMark').val();
    var cookievalue = getCookie("Authorization");

    $.ajax({
        url: url,
        type: "GET",
        data: {'year_id':year_id,'class_id':class_id,"subject":subject,"examType":examType},
        headers: {
            'Authorization': cookievalue
        },
        success: function ([data]) {
            $('#MarksEntry').removeClass('d-none');

            var html = '';

            if(data.length > 0) {

                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {

                    html +=
                        // '<tr class="studentMark">' +
                        // '<td>' + (key + 1) + '</td>' +
                        // '<td>' + v.student.idNO+ '<input type="hidden" id="student'+key+'" value="'+v.studentId+'"> ' +
                        // '<input type="hidden" id="idNumber'+key+'" value="'+v.student.idNO+'"> </td>' +
                        // '<td>' + v.student.name + '</td>' +
                        // '<td>' + v.student.fatherName + '</td>' +
                        // '<td>' + v.student.gender + '</td>' +
                        // // '<td>' + v.marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        // '</tr>';
                        '<tr class="studentMark">' +
                        '<td>' + (key + 1) + '</td>' +
                        '<td>' + v.student.idNO+ ' </td>' +
                        '<td>' + v.student.name + '</td>' +
                        '<td>' + v.student.fatherName + '</td>' +
                        // '<td>' + gradeName[0].name + '</td>' +
                        '<td>' + v.Marks + '</td>' +
                        // '<td> <input  class="form-control m-input" type="text" id="mark'+key+'"> </td>' +
                        '</tr>';
                });
                html = $('#loadData').html(html);
            }
            else {
                $('#noData').removeClass('d-none');

                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center"><strong>No data available in table</strong></div>';
                html = $('#noData').html(html);
            }
        }
    });
});




                                        //S Employee Attendance Report
$(document).on('click','#searchAttendanceReport',function(){

    var present = 0;
    var absent = 0;
    var employeeId = $('#employeeId').val();
    var date = $('#date').val();
    var url = $('#url').val();

    var cookievalue = getCookie("Authorization");

    $.ajax({
        url: url,
        type: "GET",
        data: {'employeeId':employeeId,'date':date},
        headers: {
            'Authorization': cookievalue
        },
        success: function ([data,dive]) {

            $('#attendanceReport').removeClass('d-none');

            present = 0;
            absent = 0;
            var allData;

            var html = '';
            if(data.length > 0) {
                $('#noData').addClass('d-none');
                $.each(data, function (key, v) {

                    if(key==0) {
                        allData = v;
                    }
                    if(v.attendStatus == "Present")
                        present++;
                    else if(v.attendStatus == "Absent")
                        absent++;

                });
                const myArrayDate = date.split("-");
                    html +=
                        '<tr>' +
                        '<td>' + (1) + '</td>' +
                        '<td>' + allData.user.idNO + '</td>' +
                        '<td>' + allData.user.name + '</td>' +
                        '<td>' + '01-' + myArrayDate[1] +'-'+myArrayDate[0]  + '</td>' +
                        '<td>' + myArrayDate[2] +'-'+ myArrayDate[1] +'-'+ myArrayDate[0]  + '</td>' +
                        '<td width="250px"><canvas id="c" height="200px" width="200px"></canvas></td>' +
                        '<td>'+ dive +'</td>' +
                        // '<td>' + v.a + '</td>' +
                        '</tr>';
                    html = $('#loadData').html(html);
                    const ctx = document.getElementById('c').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['absent', 'present'],
                    datasets: [{
                        label: '# of Votes',
                        data: [absent, present],
                        backgroundColor: [
                            '#f4516c',
                            '#00c5dc',
                        ],
                        color: ['#ff0000', '#0000ff']
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
            }
            else {
                $('#noData').removeClass('d-none');
                $('#loadData').empty();
                html += '<div class="text-danger" style="text-align: center">No data available in table</div>';
                html = $('#noData').html(html);
            }
        }
    });
});

                                    //E Employee Attendance Report
$('li .m-menu__item').on('click', (e) => {
    $('li .m-menu__item').each((i , element) => {
        if ($(e.target).parent().parent() !== $(element)) {
            $(element).parent().parent().parent().removeClass('m-menu__item--active')
        }
    })
    $(e.target).parent().parent().parent().parent().parent().addClass('m-menu__item--active')
})
