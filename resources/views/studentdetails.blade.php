<style>
body {
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    background: #ecf0f3;
}
.container{
    height: 150vh;
    width: 100%;
    position: relative;
    margin: 0;
    padding: 0;
    background: #ecf0f3;
}
.header
{
    position: relative;
    text-align: center;
    left: -5%;
    align-content: center;
    font-size: 15px;
    font-family: 'Lato', sans-serif;

}
.intro{
    position:relative;
    top: 8%;
    left: 50px;
    height: 300px;
    width: 100%;

}
.structure{
    position: relative;
    top: 8%;
}
.title{
    outline: none;
    border: none;
    text-align: left;
    background: #e7ecef;
}
.table_container {
    position: absolute;
    top: 110%;
    left: 50px;
    width: 800px;
    height: 600px;
}
/*}*/
.table__container TABLE{
    position: relative;
    text-align: center;
    top: 110%;


}
.table__container{
    position: absolute;
    top: 48%;
    left: 50px;
    width: 400px;
    height: 160px;
    text-align: center;
}

.sign{
    position: relative;
    top: 2%;
    left: 50px;

}
.sign1{
    position: relative;
    top: 4%;
    left: 50px;

}
.sign2{
    position: relative;
    top: 6%;
    left: 50px;

}
.sign3{
    position: relative;
    top: 6%;
    left: 70%;

}
.print{
    position: relative;
    top: 105%;
    left: 40%;
}
.back{
    position: relative;
    top: 105%;
    left: 45%;
}
</style>
<body>
<div class="container">
    <div class="structure">
{{--        <div class="header">--}}
{{--            <h1>Grade Card (Provisional)</h1>--}}
{{--        </div>--}}
            <div class="intro">
                <label class="title" id="name" >NAME OF THE CANDIDATE :
                    <input id="studentName" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
                <label class="title" id="seat" >SEAT NUMBER :
                    <input id="studentSeatNo" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; "  />
                </label>
                <br /><br/>
                <label class="title" id="prno" >PR.NO :
                    <input id="studentPRNO" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
                <label class="title" id="dept" >DEPARTMENT :
                    <input id="studentDept" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
                <label class="title" id="clg" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; "  >COLLEGE :
                    Shree Rayeshwar Institute Engineering and Information Technology
                </label>
                <br /><br/>
                <label class="title" id="exam" >EXAMINATION :
                    <input id="studentExam" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
                <label class="title" id="scheme" >SCHEME :
                    <input id="studentScheme" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
                <label class="title" id="sem" >SEMESTER :
                    <input id="studentSem" type="text" style="width: 80%; font-size: 19px; background: #ecf0f3; outline: none; border: none; " />
                </label>
                <br /><br/>
            </div>
                    <div class="table_container" border="solid">
                        <TABLE border="soild" >

                        <tr border="solid">
                            <th>course code</th>
                            <th>nomenclature of the course</th>
                            <th>credits assigned</th>
                            <th>credits earned</th>
                            <th>Grade Points</th>
                            <th>Letter Grade</th>
                        </tr>
                        <tr>
                            <td id="m_code">--</td>
                            <td id="m_name">--</td>
                            <td id="m_ca">--</td>
                            <td id="m_ce">--</td>
                            <td id="m_gp">-- </td>
                            <td id="m_lg">--</td>
                        </tr>
                        <tr>
                            <td id="ie_code"></td>
                            <td id="ie_name"></td>
                            <td id="ie_ca"></td>
                            <td id="ie_ce" ></td>
                            <td id="ie_gp"></td>
                            <td id="ie_lg"></td>
                        </tr>
                        <tr>
                            <td id="eds_code"></td>
                            <td id="eds_name"></td>
                            <td id="eds_ca"></td>
                            <td id="eds_ce"></td>
                            <td id="eds_gp"></td>
                            <td id="eds_lg"></td>
                        </tr>
                        <tr>
                            <td id="dsa_code">--</td>
                            <td id="dsa_name">--</td>
                            <td id="dsa_ca">--</td>
                            <td id="dsa_ce">--</td>
                            <td id="dsa_gp">--</td>
                            <td id="dsa_lg">--</td>
                        </tr>
                        <tr>
                            <td id="edwt_code">--</td>
                            <td id="edwt_name">--</td>
                            <td id="edwt_ca">--</td>
                            <td id="edwt_ce">--</td>
                            <td id="edwt_gp">--</td>
                            <td id="edwt_lg">--</td>
                        </tr>
                        <tr>
                            <td id="edcl_code"></td>
                            <td id="edcl_name"></td>
                            <td id="edcl_ca"></td>
                            <td id="edcl_ce"></td>
                            <td id="edcl_gp"></td>
                            <td id="edcl_lg"></td>
                        </tr>
                        <tr>
                            <td id="dsdl_code"></td>
                            <td id="dsdl_name"></td>
                            <td id="dsdl_ca"></td>
                            <td id="dsdl_ce"></td>
                            <td id="dsdl_gp"></td>
                            <td id="dsdl_lg"></td>
                        </tr>

                        <tr>
                            <td id="e_code"></td>
                            <td id="e_name"></td>
                            <td id="e_ca"></td>
                            <td id="e_ce"></td>
                            <td id="e_gp"></td>
                            <td id="e_lg"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td id="t_ca"></td>
                            <td id="t_ce" ></td>
                            <td id="t_gp"></td>
                            <td id="t_lg"></td>
                        </tr>
                            </TABLE>
                    </div>
    </div>
    <div class="table__container" >
    <table border="1" width="500px">
        <tr>
            <th>Semester</th>
            <th>I</th>
            <th>II</th>
            <th>III</th>
            <th>IV</th>

        </tr>
        <tbody>
        <tr>
            <th>Credit Assigned</th>
            <th id="ca1">--</th>
            <th id="ca2">--</th>
            <th id="ca3">--</th>
            <th id="ca4">--</th>

        </tr>
        <tr>
            <th>Credits Earned</th>
            <th id="ce1">--</th>
            <th id="ce2">--</th>
            <th id="ce3">--</th>
            <th id="ce4">--</th>

        </tr>
        <tr>
            <th>SGPA</th>
            <th id="sgpa1">--</th>
            <th id="sgpa2">--</th>
            <th id="sgpa3">--</th>
            <th id="sgpa4">--</th>

        </tr>
        <tr>
            <th>Total Credits Earned</th>
            <th id="tce1">--</th>
            <th id="tce2">--</th>
            <th id="tce3">--</th>
            <th id="tce4">--</th>

        </tr>
        <tr>
            <th>CGPA</th>
            <th>--</th>
            <th>--</th>
            <th>--</th>
            <th  id="cgpa">--</th>
        </tr>
        </tbody>
    </table>
    </div>

{{--    <div class="sign">--}}
{{--        <p>Date of Declaration</p>--}}
{{--    </div>--}}
{{--    <div class="sign1">--}}
{{--        <p>CheckedBy</p>--}}
{{--    </div>--}}
{{--    <div class="sign2">--}}
{{--        <p>Examination Officer InCharge</p>--}}
{{--    </div>--}}
{{--    <div class="sign3">--}}
{{--        <p>PRINCIPAL</p>--}}
{{--    </div>--}}



{{--    <div class="button__container">--}}
{{--        <button class="print" onclick="window.print();" target="_blank">Print</button>--}}
{{--        <button onclick="back();" class="back">Back</button>--}}
{{--    </div>--}}

</div>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    // function takeShot() {
    //     html2canvas(document.body).then(function(canvas) {
    //         document.body.appendChild(canvas);
    //     });
    // }
    // <label id="studentName">Name Of The Candidate =</label><br>
    //
    //     <label id="studentSeatNo">Seat Number =</label><br>
    //
    //     <label id="studentPRNO">PR.No =</label><br>

    let studentName = document.getElementById("studentName");
    let studentSeat = document.getElementById("studentSeatNo");
    let studentPRNO = document.getElementById("studentPRNO");
    let studentDept = document.getElementById("studentDept");
    let studentSem = document.getElementById("studentSem");
    let studentExam = document.getElementById("studentExam");
    let studentScheme = document.getElementById("studentScheme");



    //Table
    let m_code = document.getElementById("m_code");
    let m_name = document.getElementById("m_name");
    let m_ca = document.getElementById("m_ca");
    let m_ce = document.getElementById("m_ce");
    let m_gp = document.getElementById("m_gp");
    let m_lg = document.getElementById("m_lg");

    let ie_name = document.getElementById("ie_name");
    let ie_code = document.getElementById("ie_code");
    let ie_ca = document.getElementById("ie_ca");
    let ie_ce = document.getElementById("ie_ce");
    let ie_gp = document.getElementById("ie_gp");
    let ie_lg = document.getElementById("ie_lg");

    let eds_name = document.getElementById("eds_name");
    let eds_code = document.getElementById("eds_code");
    let eds_ca = document.getElementById("eds_ca");
    let eds_ce = document.getElementById("eds_ce");
    let eds_gp = document.getElementById("eds_gp");
    let eds_lg = document.getElementById("eds_lg");

    let dsa_code = document.getElementById("dsa_code");
    let dsa_name = document.getElementById("dsa_name");
    let dsa_ca = document.getElementById("dsa_ca");
    let dsa_ce = document.getElementById("dsa_ce");
    let dsa_gp = document.getElementById("dsa_gp");
    let dsa_lg = document.getElementById("dsa_lg");

    let edwt_code = document.getElementById("edwt_code");
    let edwt_name = document.getElementById("edwt_name");
    let edwt_ca = document.getElementById("edwt_ca");
    let edwt_ce = document.getElementById("edwt_ce");
    let edwt_gp = document.getElementById("edwt_gp");
    let edwt_lg = document.getElementById("edwt_lg");


    let edcl_code = document.getElementById("edcl_code");
    let edcl_name = document.getElementById("edcl_name");
    let edcl_ca = document.getElementById("edcl_ca");
    let edcl_ce = document.getElementById("edcl_ce");
    let edcl_gp = document.getElementById("edcl_gp");
    let edcl_lg = document.getElementById("edcl_lg");

    let dsdl_code = document.getElementById("dsdl_code");
    let dsdl_name = document.getElementById("dsdl_name");
    let dsdl_ca = document.getElementById("dsdl_ca");
    let dsdl_ce = document.getElementById("dsdl_ce");
    let dsdl_gp = document.getElementById("dsdl_gp");
    let dsdl_lg = document.getElementById("dsdl_lg");

    let e_code = document.getElementById("e_code");
    let e_name = document.getElementById("e_name");
    let e_ca = document.getElementById("e_ca");
    let e_ce = document.getElementById("e_ce");
    let e_gp = document.getElementById("e_gp");
    let e_lg = document.getElementById("e_lg");

    let t_ca = document.getElementById("t_ca");
    let t_ce = document.getElementById("t_ce");
    let t_gp = document.getElementById("t_gp");
    let t_lg = document.getElementById("t_lg");

    let cgpa = document.getElementById("cgpa");

    let sgpa1 = document.getElementById("sgpa1");
    let sgpa2 = document.getElementById("sgpa2");
    let sgpa3 = document.getElementById("sgpa3");
    let sgpa4 = document.getElementById("sgpa4");

    let tce1 = document.getElementById("tce1");
    let tce2 = document.getElementById("tce2");
    let tce3 = document.getElementById("tce3");
    let tce4 = document.getElementById("tce4");

    let ce1 = document.getElementById("ce1");
    let ce2 = document.getElementById("ce2");
    let ce3 = document.getElementById("ce3");
    let ce4 = document.getElementById("ce4");

    let ca1 = document.getElementById("ca1");
    let ca2 = document.getElementById("ca2");
    let ca3 = document.getElementById("ca3");
    let ca4 = document.getElementById("ca4");


    fetchStudentDetails();

    function fetchStudentDetails(){

        let examination_year = window.localStorage.getItem("examination_year");
        let Branch = window.localStorage.getItem("Branch");
        let Semester = window.localStorage.getItem("Semester");
        let PRNO = window.localStorage.getItem("PRNO");

         let data = {
            year : examination_year,
            branch : Branch,
            semester : Semester,
            prno : PRNO,
        };

        console.log(data);

        $.ajax({
            type: 'POST',
            url: '/api/fetchStudentDetails',
            dataType: 'json',
            data: data,
            success: function (res){
                if(res.status === 200){

                    studentDept.value = res.studentDetails["COL 164"];
                    studentName.value = res.studentDetails["COL 4"];
                    studentSeat.value = res.studentDetails["COL 6"];
                    studentPRNO.value = res.studentDetails["prno"];
                    studentSem.value  = res.studentDetails["COL 167"];
                    studentExam.value = res.studentDetails["COL 165"];
                    studentScheme.value = res.studentDetails["COL 166"];

                    //table


                    m_code.innerText = res.studentDetails["COL 156"]
                    m_name.innerText = res.studentDetails["COL 148"]
                    m_ca.innerText = res.studentDetails["COL 20"]
                    m_ce.innerText = res.studentDetails["COL 21"]
                    m_gp.innerText = res.studentDetails["COL 22"]
                    m_lg.innerText = res.studentDetails["COL 24"]

                    ie_code.innerText = res.studentDetails["COL 157"]
                    ie_name.innerText = res.studentDetails["COL 149"]
                    ie_ca.innerText = res.studentDetails["COL 37"]
                    ie_ce.innerText = res.studentDetails["COL 38"]
                    ie_gp.innerText = res.studentDetails["COL 39"]
                    ie_lg.innerText = res.studentDetails["COL 41"]

                     eds_code.innerText = res.studentDetails["COL 158"]
                     eds_name.innerText = res.studentDetails["COL 150"]
                     eds_ca.innerText = res.studentDetails["COL 55"]
                     eds_ce.innerText = res.studentDetails["COL 56"]
                     eds_gp.innerText = res.studentDetails["COL 57"]
                     eds_lg.innerText = res.studentDetails["COL 59"]

                    dsa_code.innerText = res.studentDetails["COL 159"]
                    dsa_name.innerText = res.studentDetails["COL 151"]
                    dsa_ca.innerText = res.studentDetails["COL 91"]
                    dsa_ce.innerText = res.studentDetails["COL 92"]
                    dsa_gp.innerText = res.studentDetails["COL 93"]
                    dsa_lg.innerText = res.studentDetails["COL 95"]

                    edwt_code.innerText = res.studentDetails["COL 160"]
                    edwt_name.innerText = res.studentDetails["COL 152"]
                    edwt_ca.innerText = res.studentDetails["COL 73"]
                    edwt_ce.innerText = res.studentDetails["COL 74"]
                    edwt_gp.innerText = res.studentDetails["COL 75"]
                    edwt_lg.innerText = res.studentDetails["COL 77"]

                    edcl_code.innerText = res.studentDetails["COL 161"]
                    edcl_name.innerText = res.studentDetails["COL 153"]
                    edcl_ca.innerText = res.studentDetails["COL 105"]
                    edcl_ce.innerText = res.studentDetails["COL 106"]
                    edcl_gp.innerText = res.studentDetails["COL 107"]
                    edcl_lg.innerText = res.studentDetails["COL 109"]

                    dsdl_code.innerText = res.studentDetails["COL 162"]
                    dsdl_name.innerText = res.studentDetails["COL 154"]
                    dsdl_ca.innerText = res.studentDetails["COL 119"]
                    dsdl_ce.innerText = res.studentDetails["COL 120"]
                    dsdl_gp.innerText = res.studentDetails["COL 121"]
                    dsdl_lg.innerText = res.studentDetails["COL 123"]

                    e_code.innerText = res.studentDetails["COL 163"]
                    e_name.innerText = res.studentDetails["COL 155"]
                    e_ca.innerText = res.studentDetails["COL 128"]
                    e_ce.innerText = res.studentDetails["COL 129"]
                    e_gp.innerText = res.studentDetails["COL 130"]
                    e_lg.innerText = res.studentDetails["COL 132"]

                    t_ca.innerText = res.studentDetails["COL 133"]
                    t_ce.innerText = res.studentDetails["COL 133"]
                    t_gp.innerText = res.studentDetails["COL 144"]
                    t_lg.innerText = res.studentDetails["COL 147"]

                    cgpa.innerText = res.studentDetails["COL 146"]

                    sgpa1.innerText = res.studentDetails["COL 143"]
                    sgpa2.innerText = res.studentDetails["COL 140"]
                    sgpa3.innerText = res.studentDetails["COL 137"]
                    sgpa4.innerText = res.studentDetails["COL 134"]

                    tce1.innerText = res.studentDetails["COL 142"]
                    tce2.innerText = res.studentDetails["COL 139"]
                    tce3.innerText = res.studentDetails["COL 136"]
                    tce4.innerText = res.studentDetails["COL 133"]

                    ce1.innerText = res.studentDetails["COL 142"]
                    ce2.innerText = res.studentDetails["COL 139"]
                    ce3.innerText = res.studentDetails["COL 136"]
                    ce4.innerText = res.studentDetails["COL 133"]

                    ca1.innerText = res.studentDetails["COL 142"]
                    ca2.innerText = res.studentDetails["COL 139"]
                    ca3.innerText = res.studentDetails["COL 136"]
                    ca4.innerText = res.studentDetails["COL 133"]



                }
            },
            error: function (){}
        });
    }
function back(){
        window.location.href = "/home";
}

</script>


