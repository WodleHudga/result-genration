<style>
    .container{
        margin: 0;
        padding: 0;
        height: 100%;
        width: auto;
    }
    .nav_bar{
        height: 100px;
        width: 100%;
        background: #ecf0f3;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #ffffff;
        position: absolute;
        top: 0;
        left: 0;
    }
    .logo{
        background-image:url("data:image/png;base64,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");
        background-size: 100%;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 0 auto;
        position: absolute;
        top: 10px;
        left: 30px;
        box-shadow: 0 0 2px #5f5f5f, 0 0 0 5px #ecf0f3, -8px -8px 15px #ffffff, 8px 8px 15px #8e9998;

    }
    .title{
        text-align: center;
        font-size: 38px;
        position: absolute;
        /*top: 10px;*/
        left: 120px;
        z-index: 20;
        color: #1a202c;
        padding-top: 20px;
        letter-spacing: 1px;
    }
    .logout button{
        position: absolute;
        right: 70px;
        /*padding-top: 20px;*/
        top: 20px;
        Outline: none;
        border: none;
        cursor: pointer;
        width: 88px;
        height: 42px;
        border-radius:15px;
        font-size:17px;
        /*font-weight: 700;*/
        /*justify-content: center;*/
        font-family:'Lato',sans-serif;
        color: #fff;
        z-index: 20;
        text-align:center;
        background: #24cfaa;
        box-shadow:3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
        transition: 0.5s;

    }

    .logout button:hover{
        background: #2fdbb6;}
    .logout button:active{
        background: #1da88a;}
    .register_bar{
        position: absolute;
        top: 140px;
        left: 10%;
        height: 500px;
        width: 80%;
        background: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #ffffff;
        justify-content: center;
    }
    .header{
        position: absolute;
        text-align: center;
        font-size: 38px;
        /*top: 10px;*/
        left: 41%;
        z-index: 20;
        color: #1a202c;
        padding-top: 10px;
        letter-spacing: 1px;

    }
    .options{
        position: absolute;
        justify-content: center;
        left: 12%;
        top: 15%;
        width: 80%;
        height:400px;
    }
.option button{
    position: absolute;
    bottom: 10px;
    margin: 10px;

}
#examination_year{
    height: 40px;
    width: 280px;
    position: absolute;
    outline: none;
    top: 20%;
    left: 10%;
    border-radius: 15px;
    text-align: center;
    justify-content: center;
    background: linear-gradient(145deg, #d4d8db, #fdffff);
    box-shadow:  28px 28px 55px #c9cccf,
    -28px -28px 55px #ffffff;
    border: none;
}
#Branch{
    height: 40px;
    outline: none;
    width: 280px;
    position: absolute;
    top: 20%;
    left: 60%;
    border: none;
    border-radius: 15px;
    background: linear-gradient(145deg, #d4d8db, #fdffff);
    box-shadow:  28px 28px 55px #c9cccf,
    -28px -28px 55px #ffffff;
    text-align: center;
    justify-content: center;

}
#Semester{
    height: 40px;
    width: 280px;
    position: absolute;
    top: 50%;
    outline: none;
    left: 10%;
    border-radius: 15px;
    text-align: center;
    justify-content: center;
    background: linear-gradient(145deg, #d4d8db, #fdffff);
    box-shadow:  28px 28px 55px #c9cccf,
    -28px -28px 55px #ffffff;
    border: none 0;
}
#PRNO{
    outline: none;
    height: 40px;
    width: 280px;
    position: absolute;
    top: 50%;
    left: 60%;
    border: none;
    border-radius: 15px;
    background: linear-gradient(145deg, #d4d8db, #fdffff);
    box-shadow:  28px 28px 55px #c9cccf,
    -28px -28px 55px #ffffff;
    text-align: center;
    justify-content: center;

}
    .mit{
        position: absolute;
        right: 45%;
        /*padding-top: 20px;*/
        /*top: 20px;*/
        bottom: 40px;
        Outline: none;
        border: none;
        cursor: pointer;
        width: 88px;
        height: 42px;
        border-radius:15px;
        font-size:17px;
        /*font-weight: 700;*/
        /*justify-content: center;*/
        font-family:'Lato',sans-serif;
        color: #fff;
        z-index: 20;
        text-align:center;
        background: #24cfaa;
        box-shadow:3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
        transition: 0.5s;

    }


    .mit button:hover{
        background: #2fdbb6;}
    .mit button:active{background: #1da88a;}
</style>

<div class="container">
    <div class="nav_bar">
        <div class="logo"></div>
        <div class="title">S.R.I.E.I.T</div>
        <div class="logout">
            <button onclick="logOut()">Log_Out</button>
        </div>
    </div>
    <div class="register_bar">
        <div class="header">Student Details </div>
        <div class="options">
                <label style="font-size: 31px; position: absolute; top: 5%; left: 10%; ">Examination year</label>
                    <select name="Examination year" id="examination_year">
                        <option value="">Select year</option>
                    </select><br>

                    <label style="font-size: 31px; position: absolute; top: 5%; left: 60%; ">Branch</label>
                    <select name="Branch" id="Branch">
                        <option value="">Select Branch</option>

                    </select><br>

                    <label style="font-size: 31px; position: absolute; top: 35%; left: 10%; ">Semester</label>
                    <select name="Semester" id="Semester">

                        <option value="">Select Semester</option>

                    </select><br>
                <label style="font-size: 31px; position: absolute; top: 35%; left: 60%; ">PR.No</label>
                <input  type="text" placeholder="9-digit no" id="PRNO" />
                <br />
                <button onclick="showDetails()" class="mit">submit</button>

        </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    fetchFilers();


    function fetchFilers(){
        console.log("Started");
        let examination_year = document.getElementById("examination_year");
        let Branch = document.getElementById("Branch");
        let Semester = document.getElementById("Semester");
        $.ajax({
            type: 'GET',
            url: '/api/fetchFilters',
            dataType: 'json',
            success: function (res) {
                if (res.status === 200) {

                    res.years.forEach((data) => {
                        var op = new Option();
                        op.value = data.year_name;
                        op.text = data.year_name;
                        examination_year.options.add(op);
                    });

                    res.branches.forEach((data) => {
                        var op = new Option();
                        op.value = data.branch_name.toLowerCase();
                        op.text = data.branch_name;
                        Branch.options.add(op);
                    });

                    res.semesters.forEach((data) => {
                        var op = new Option();
                        op.value = data.semester_name.toLowerCase();
                        op.text = data.semester_name;
                        Semester.options.add(op);
                    });

                }
            },
            error: function(e){
                console.log(e);
            }

        });
    }

    function showDetails(){
        let examination_year = document.getElementById("examination_year");
        let Branch = document.getElementById("Branch");
        let Semester = document.getElementById("Semester");
        let PRNO = document.getElementById("PRNO");
        console.log(examination_year.value);
        console.log(Branch.value);
        console.log(Semester.value);
        console.log(PRNO.value);

        if(examination_year.value == ""){
            alert("Please select the year");
        }else if(Branch.value == ""){
            alert("select branch please")
        }
        else if(Semester.value == ""){
            alert("select Semester please")
        }
        else if(PRNO.value == ""){
            alert("enter PR no please")
        }

        else{
            window.localStorage.setItem("examination_year", examination_year.value);
            window.localStorage.setItem("Branch", Branch.value);
            window.localStorage.setItem("Semester", Semester.value);
            window.localStorage.setItem("PRNO", PRNO.value);
            window.location.href = "/show-details"
        }

    }

    function logOut(){
            window.location.href = "/"
    }
</script>

