// const exclusive = document.querySelectorAll(".exclusive");
// console.log(exclusive);
// exclusive.forEach(element => {
//     element.addEventListener("click", function (e) {
//         console.log(e.target.classList.contains("toggle-on"));
//         if (e.target.classList.contains("toggle-on")) {
//             console.log("Set status to 1");
//         } else {
//             console.log("Set Status to 0");
//         }
//     })
// });

// function exclusive(e) {
//     const data_id = e.getAttribute('data-id');
//     console.log(e.checked);
//     const set_value = 0;
//     const type = "exclusive";
//     console.log(data_id);
//     jQuery.ajax({
//         url: 'change_status.php',
//         type: 'post',
//         data: 'id=' + data_id + '&type=' + type + '&set_value=' + set_value,
//         success: function (result) {
//             console.log(result);
//         }
//     });
// }



//########WORKING ##########
// function exclusive(e) {
//     console.log(e);
//     let set_value;
//     const data_id = e.getAttribute('data-id');
//     if (e.checked) {
//         set_value = 0;
//     } else {
//         set_value = 1;
//     }
//     jQuery.ajax({
//         url: 'change_status.php',
//         type: 'post',
//         data: 'id=' + data_id + '&type=' + "exclusive" + '&set_value=' + set_value,
//         success: function (result) {
//             console.log(result);
//         }
//     });
// }

//############ WORKING ##########

function exclusive(e, type) {
    console.log(e);
    let set_value;
    const data_id = e.getAttribute('data-id');
    if (e.checked) {
        set_value = 1;
    } else {
        set_value = 0;
    }
    jQuery.ajax({
        url: 'change_status.php',
        type: 'post',
        data: 'id=' + data_id + '&type=' + type + '&set_value=' + set_value,
        success: function (result) {
            console.log(result);
        }
    });
}