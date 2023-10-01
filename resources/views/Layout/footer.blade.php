<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#form_add_participant').submit(function(event) {
            event.preventDefault(); // Mencegah aksi default pengiriman formulir

            // Kirim permintaan AJAX
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire('Sukses', response.success, 'success').then(function() {
                        // Alihkan ke tampilan lain
                        window.location.href = "{{ route('participant_view') }}";
                    });
                },
                error: function() {
                    Swal.fire('Error', 'Terjadi kesalahan saat menyimpan data.', 'error');
                }
            });
        });
    });

    $(document).ready(function() {
        $('#form_add_group').submit(function(event) {
            event.preventDefault(); // Mencegah aksi default pengiriman formulir

            // Kirim permintaan AJAX
            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire('Sukses', response.success, 'success').then(function() {
                        // Alihkan ke tampilan lain
                        window.location.href = "{{ route('group_view') }}";
                    });
                },
                error: function() {
                    Swal.fire('Error', 'Terjadi kesalahan saat menyimpan data.', 'error');
                }
            });
        });
    });

    $(document).on('click', '.edit', function() {
        let id = $(this).attr('data');
        $id = id,
            console.log(id);
        // var url = "{{ route('participant_show') }}";
        $.ajax({
            url: "{{ route('participant_show') }}",
            type: 'GET',
            dataType: 'JSON',
            data: {
                "id": id,
            },
            success: function(response) {
                console.log(response);
                response.forEach(function(item) {
                    console.log(item)
                    var id = item.id;
                    var name = item.name;
                    var gender = item.gender;
                    var start_from = item.start_from;
                    var group_code = item.group_code;
                    var passport = item.passport;
                    var date_birth = item.date_birth;
                    var passport_exp = item.passport_exp;
                    // console.log(
                    //     "ID: " + id + ", Column 1: " + name + ", Column 2: " +
                    //     gender + ", Column 3: " + start_from + ", Column 4: " +
                    //     group_code +
                    //     ", Column 5: " + passport + ", Column 6: " + date_birth +
                    //     ", Column 7: " + passport_exp + "\n"
                    // );
                    $('#name').val(item.name);
                    $('#inline-radio1').val(item.gender);
                    $('#inline-radio2').val(item.gender);
                    $('#start_from').val(item.start_from);
                    $('#group_code').val(item.group_code);
                    $('#passport').val(item.passport);
                    $('#date_birth').val(item.date_birth);
                    $('#passport_exp').val(item.passport_exp);
                    $('#id').val(id);

                    $('#editModal').modal('show');
                });
            }
        })
        // $('#name').val(response[0].name);
        // $('#inline-radio1').val(response[0].gender);
        // $('#inline-radio2').val(response[0].gender);
        // $('#start_from').val(response[0].start_from);
        // $('#group_code').val(response[0].group_code);
        // $('#passport').val(response[0].passport);
        // $('#date_birth').val(response[0].date_birth);
        // $('#passport_exp').val(response[0].passport_exp);
        // $('#id').val(id);

        // $('#editModal').modal('show');
    });

    // $(document).on('click', '#group', function() {
    //     let id = $(this).attr('value');
    //     $id = id,
    //         console.log(id);
    //     // $.ajax({
    //     //     url: "{{ route('payment_show') }}",
    //     //     type: 'GET',
    //     //     dataType: 'JSON',
    //     //     data: {
    //     //         "id": id,
    //     //     },
    //     //     success: function(response) {
    //     //         console.log(response);
    //     //         response.forEach(function(item) {
    //     //             console.log(item)
    //     //             var id = item.id;
    //     //             var name = item.name;
    //     //             var gender = item.gender;
    //     //             var start_from = item.start_from;
    //     //             var group_code = item.group_code;
    //     //             var passport = item.passport;
    //     //             var date_birth = item.date_birth;
    //     //             var passport_exp = item.passport_exp;
    //     //             $('#name').val(item.name);
    //     //             $('#inline-radio1').val(item.gender);
    //     //             $('#inline-radio2').val(item.gender);
    //     //             $('#start_from').val(item.start_from);
    //     //             $('#group_code').val(item.group_code);
    //     //             $('#passport').val(item.passport);
    //     //             $('#date_birth').val(item.date_birth);
    //     //             $('#passport_exp').val(item.passport_exp);
    //     //             $('#id').val(id);

    //     //             $('#editModal').modal('show');
    //     //         });
    //     //     }
    //     // })
    // });

    document.getElementById('group').addEventListener('change', function() {
        var id = this.value;
        $.ajax({
            url: "{{ route('get_group') }}",
            type: 'GET',
            dataType: 'JSON',
            data: {
                "id": id,
            },
            success: function(response) {
                console.log(response);
                // response.forEach(function(item) {
                //     console.log(item)
                //     var id = item.id;
                //     var name = item.name;
                //     var gender = item.gender;
                //     var start_from = item.start_from;
                //     var group_code = item.group_code;
                //     var passport = item.passport;
                //     var date_birth = item.date_birth;
                //     var passport_exp = item.passport_exp;
                //     $('#name').val(item.name);
                //     $('#inline-radio1').val(item.gender);
                //     $('#inline-radio2').val(item.gender);
                //     $('#start_from').val(item.start_from);
                //     $('#group_code').val(item.group_code);
                //     $('#passport').val(item.passport);
                //     $('#date_birth').val(item.date_birth);
                //     $('#passport_exp').val(item.passport_exp);
                //     $('#id').val(id);

                //     $('#editModal').modal('show');
                // });
            },
            error: function(e) {
                console.log('====================================');
                console.log(e);
                console.log('====================================');
            }
        })
    });
</script>
