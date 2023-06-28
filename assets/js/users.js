$(document).ready(function () {

    const urlParams = new URLSearchParams(window.location.search);
    const cid = urlParams.get('cid'); //getting the client id

    function convertDate(str_date) {
        const timestamp = str_date;
        const date = new Date(timestamp * 1000); // Multiply by 1000 to convert from seconds to milliseconds
        // Get the month and year
        const month = new Intl.DateTimeFormat('en-US', { month: 'long' }).format(date);
        const year = date.getFullYear();
        const formattedDate = `${month} ${year}`;
        return formattedDate;

    }


    $.ajax({
        type: "POST",
        url: "/test/api.php",
        data: {
            cid: cid,
        },

        success: function (response, status, jqXHR) {
            //handeling errors : 
if(response.error){
    $("#cont1").hide();
    $("#cont2").hide();
    $('.Client_card').html(
        '<div class="err_div"><p>Nothig Was Found </p><p>Let Me Help You Out <ul><li><a href="/test/?cid=1"> User 1 </a></li><li><a href="/test/?cid=2"> User 2 </a></li></ul></p></div>'
        );
}

else{

            //status=success
            $("#emp_name").html(response.fullname);
            $("#emp_profile").attr('src', response.profile);
            //in API ITS SAME PHOTO
            $("#emp_team").html(response.team);
            $("#emp_department").html(response.department);
            $("#emp_location").html(response.location);
            $("#emp_role").html(response.role);
            $("#emp_member_since").html(convertDate(response.member_since));
            //in API ITS SAME DATE JUNE 2023
            $("#emp_good_at").html(response.good_at);

           let  emp_background = response.background ? response.background.join(', ') : '';
           $("#emp_background").html(emp_background);


}





            //from api its the same photo !
            console.log((response));

        }


    });


});
