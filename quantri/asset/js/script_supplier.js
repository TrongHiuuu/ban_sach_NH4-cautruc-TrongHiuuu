/* add-data form */
$(document).ready(function() {

    /* Start: add form */
    $('.open_add_form').click(function() {
        // Display the form as a pop-up
       $('#add-modal').show();
   });

    $('#add-form').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();
        
        // validate form
        var ten = $('#add-form input[name="ten"]').val();
        var email = $('#add-form input[name="email"]').val();
        var dienthoai = $('#add-form input[name="dienthoai"]').val();
        var alert = formValidate(ten, email, dienthoai);
        if(alert ===''){
            // Serialize form data
            var formData = new FormData( $('#add-form')[0]);
            // AJAX request to handle form submission
            $.ajax({
                url: '../controller/supplier.php', // URL to handle form submission
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    const obj = JSON.parse(response);
                    if(obj.success)
                        $('.alert').html('<span class="green">Thêm thành công</span>');
                    else $('.alert').html('<span class="red">Người này đã tồn tại do trùng email hoặc số điện thoại</span>');
                },
            });
        }
        else $('.alert').html(alert);
    });
    /* End: add form */

    /* Start: update form */
    $('.open_edit_form').click(function(e) {
        e.preventDefault();
        var supplier_id = $(this).closest('tr').find('.supplier_id').text();
        console.log(supplier_id);
        $.ajax({
            url: '../controller/supplier.php', // Replace with the actual PHP endpoint to fetch user details
            type: 'POST',
            data: {
                'edit_data': true,
                'supplier_id': supplier_id,
            },
            success: function(response){
                console.log(response);
                const obj = JSON.parse(response);
                var img = "../../uploads/uploads_supplier/"+obj.avatar;
                $('#edit-form #update_pic').attr('src', img);
                $('#edit-form input[name="curr_img"]').val(obj.avatar);
                $('#edit-form input[name="id"]').val(obj.ID);
                $('#edit-form input[name="ten"]').val(obj.ten);
                $('#edit-form input[name="email"]').val(obj.email);
                $('#edit-form input[name="dienthoai"]').val(obj.dienthoai);
                $('#edit-form input[name="diachi"]').val(obj.diachi);
                $('#edit-form input[name="trangthai"][value="'+(obj.trangthai)+'"]').prop("checked",true);
                // // Display the edit form as a pop-up
                $('#edit-modal').show();
            },
        });
    });

        /* update data */
    $('#edit-form').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();
        
        // validate form
        var ten = $('#edit-form input[name="ten"]').val();
        var email = $('#edit-form input[name="email"]').val();
        var dienthoai = $('#edit-form input[name="dienthoai"]').val();
        var alert = formValidate(ten, email, dienthoai);
        if(alert ===''){
        // Serialize form data
        var formData = new FormData( $('#edit-form')[0]);
        // AJAX request to handle form submission
        $.ajax({
            url: '../controller/supplier.php', // URL to handle form submission
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                const obj = JSON.parse(response);
                if(obj.success) $('.alert').html('<span class="green">Cập nhật thành công</span>');
            },
        });
    }
    else $('.alert').html(alert);
    });
    /* End: update form */

    /* Start: view form */
    $('.open_view_form').click(function(e) {
        e.preventDefault();
        var supplier_id = $(this).closest('tr').find('.supplier_id').text();
        $.ajax({
            url: '../controller/supplier.php', // Replace with the actual PHP endpoint to fetch user details
            type: 'POST',
            data: {
                'view_data': true,
                'supplier_id': supplier_id,
            },
            success: function(response){
                const obj = JSON.parse(response);
                var img = "../../uploads/uploads_supplier/"+obj.avatar;
                $('#view-form #view_pic').attr('src', img);
                $('#view-form input[name="ten"]').val(obj.ten);
                $('#view-form input[name="email"]').val(obj.email);
                $('#view-form input[name="dienthoai"]').val(obj.dienthoai);
                $('#view-form input[name="diachi"]').val(obj.diachi);
                $('#view-form input[name="trangthai"][value="'+(obj.trangthai)+'"]').prop("checked",true);
                // // Display the edit form as a pop-up
                $('#view-modal').show();
            },

        });
    });
    /* End: view form */
    
    // Event listener for close button clicks
    $('.close-btn').click(function() {
        // Hide the edit form modal
        $('.alert').html('');
        $('#add-modal').hide();
        $('#update_file').val('');
        $('#edit-modal').hide();
        $('#view-modal').hide();
        var curr_page = $('.curr_page').val();
        window.location.href="index.php?page=supplier&index="+curr_page;
    });
});


