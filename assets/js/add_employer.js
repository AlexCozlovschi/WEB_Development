function add_e() {


    let name = document.getElementById("name").value;
    let surname = document.getElementById("surname").value;

    let study = document.getElementById('prd_brand').value;
    let tip = document.getElementById("tip_ang").value;

    let funct_cond = document.getElementById("func_cond_?").checked;
    let functia_c = document.getElementById("func_cond").value;

    let funct_ex = document.getElementById("func_ex_?").checked;
    let functia_e = document.getElementById("func_ex").value;

    $.ajax(
        {
            type: "POST",
            url: "../php/db.php",
            data: {ns: name+" "+surname,
                    st : study,
                    tip_ : tip,
                    funct_cond_: funct_cond,
                    functia_c_ : functia_c,
                    funct_ex_ : funct_ex,
                    functia_e_ : functia_e
                    },

        });

}