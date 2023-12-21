for (let i= 0; i < 10; i++){
    $(`#b${i}`)
        .click(()=>
            append(i))
}


$("#bdot")
    .click(()=>
        append("."));

$("#badd")
    .click(() =>
        firstHalf("+"));

$("#bsub")
    .click(() =>
        firstHalf("-"));

$("#bmul")
    .click(() =>
        firstHalf("*"));

$("#bdiv")
    .click(() =>
        firstHalf("/"));

$("#bres")
    .click(() =>
        secondHalf());

$("#reset")
    .click(() =>{
        $(".display")
            .text("0");
    })


function append(char){
    if($(".display").text() === "0"){
        $(".display").text("");
    }
    $(".display")
        .append(char);
}

function firstHalf(operator){

    let a = parseFloat($(".display").text());

    $.ajax(
        {
            method: "POST",
            url: "set_a.php",
            data:
                {
                    a: a,
                    op: operator
                }
        }
    )
    $(".display")
        .text("0");
}

function secondHalf(){
    let b = parseFloat($(".display").text());
    $(".hourglass")
        .css("display", "block");
    $.ajax(
        {
            method: "POST",
            url: "set_b.php",
            data:
                {
                    b: b
                }
        }
    )
        .done((result) => {
            $(".display")
                .text(result);
            $(".hourglass")
                .css("display", "none");
        })
}