{{-- function postdata() {
        // let nama = $("#name").val();
        // let male = $("#inline-radio1").val();
        // let female = $("#inline-radio2").val();
        // let start_from = $("#start").val();
        // let group_code = $("#group").val();
        // let upload_passport = $("#upload_passport").val();
        // let passport_number = $("#passport").val();
        // let date_birth = $("#birth").val();
        // let passport_exp = $("#passport_exp").val();


        // if (nama == '') {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Nama Harus Diisi!'
        //     });

        //     return false;
        // }

        // if (jabatan == '') {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'Jabatan Harus Diisi!'
        //     });

        //     return false;
        // }

        // if (nikg == '') {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: 'NIKG Harus Diisi!'
        //     });

        //     return false;
        // }

        $.ajax({
            url: "{{ route('participant_add') }}",
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            type: "POST",
            dataType: "JSON",
            data: {
                nama: "name",
                male: "gender",
                female: "gender",
                start_from: "start",
                group_code: "group",
                upload_passport: "upload_passport",
                passport_number: "passport",
                date_birth: "birth",
                passport_exp: "passport_exp",
                // "start": start_from,
                // "group": group_code,
                // "upload_passport": upload_passport,
                // "passport": passport_number,
                // "birth": date_birth,
                // "passport_exp": passport_exp,
                _token: '{!! csrf_token() !!}'
            },
            // beforeSend: () => {
            //     Swal.fire({
            //         title: 'Please Wait...',
            //         html: '',
            //         timer: 10000,
            //         timerProgressBar: true,
            //         didOpen: () => {
            //             Swal.showLoading()
            //             const b = Swal.getHtmlContainer().querySelector('b')
            //             timerInterval = setInterval(() => {
            //                 b.textContent = Swal.getTimerLeft()
            //             }, 100)
            //         },
            //         willClose: () => {
            //             clearInterval(timerInterval)
            //         }
            //     }).then((result) => {
            //         /* Read more about handling dismissals below */
            //         if (result.dismiss === Swal.DismissReason.timer) {
            //             console.log('I was closed by the timer')
            //         }
            //     })
            // },
            // success: results => {

            //     if (results) {
            //         Swal.fire(
            //             'Berhasil!',
            //             'Data telah ditambahkan!',
            //             'Berhasil'
            //         );

            //         setTimeout(() => {
            //             location.reload();
            //         }, 1000);
            //     } else {

            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Nama Guru sudah ada'
            //         })
            //     }

            // }
            success: function(data) {
                console.log(data);
            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);
            },
        })
    } --}}


{{-- window.formSubmit = function(id) {
        var param = $("#" + id).serialize();
        var url = $("#" + id).attr("url");
        $.ajax({
            type: "POST",
            dataType: "json",
            data: param,
            url: url,
            // success: results => {

            //     if (results) {
            //         Swal.fire(
            //             'Berhasil!',
            //             'Data telah ditambahkan!',
            //             'Berhasil'
            //         );

            //         setTimeout(() => {
            //             location.reload();
            //         }, 1000);
            //     } else {

            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Nama Guru sudah ada'
            //         })
            //     }

            // }
            success: function(data) {
                console.log(data);
            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);
            },
        });
    } --}}


{{-- // $.get(url, function(results) {
// //success data
// console.log(results);
// $('#name').val(results[0].name);
// $('#gender').val(results[0].gender);
// $('#start_from').val(results[0].start_from);
// $('#group_code').val(results[0].group_code);
// $('#image').val(results[0].image);
// $('#passport').val(results[0].passport);
// $('#date_birth').val(results[0].date_birth);
// $('#passport_exp').val(results[0].passport_exp);
// $('#id').val(id);

// $('#editModal').modal('show');
// }) --}}


{{-- // var_dump($participant);
        // die;
    //     if($request->hasFile('image') != ''){
    //       $path = Storage::url('image/') . $participant->image;

    //       //code for remove old file
    //       if($request->file('image') != ''  && $request->file('image') != null){
    //             $file_old = $path;
    //            unlink($file_old);
    //       }

    //       //upload new file
    //       $file = $request->file('image');
    //       $path = $file->store('image', 'public');
    //       $participant->image = $path;

    //       //for update in table
    //       $participant->update(['image' => $path]);
    //  } else  { --}}

{{-- //    $participant = Participant::find($participant);
    //   return view('participant_view',compact('participants'));
        // $id =  DB::select('select '.$participant->id.' from participants');
        //  $participant = Participant::where('id', $id);
        // // return ($participant); --}}

{{-- $participant = element;
                    forEach($participant as $item) {
                        $id = $item - > id;
                        $column1 = $item - > name;
                        $column2 = $item - > gender;
                        $column3 = $item - > start_from;
                        $column4 = $item - > group_code;
                        $column5 = $item - > passport;
                        $column6 = $item - > date_birth;
                        $column7 = $item - > passport_exp;

                        $result =
                            "ID: $id, Column 1: $column1, Column 2: $column2, Column 3: $column3, Column 4: $column4, Column 5: $column5, Column 6: $column6, Column 7: $column7\n";
                    } --}}

{{-- $ids = $participant->pluck('id');
         foreach ($ids as $id) {
            echo $id; // Output each ID
        } --}}

{{-- // function postdata() {
    //     $(document).ready(function() {
    //         var data = $(this).serialize('name',
    //             "passport",
    //             "gender",
    //             "gender",
    //             "start",
    //             "group",
    //             "upload_passport",
    //             "birth",
    //             "passport_exp");
    //         $.ajax({
    //             url: "{{ route('participant_add') }}",
    //             type: "POST",
    //             dataType: "JSON",
    //             data: {
    //                 // name: 'name',
    //                 // passport: "passport",
    //                 // male: "gender",
    //                 // female: "gender",
    //                 // start_from: "start",
    //                 // group_code: "group",
    //                 // image: "upload_passport",
    //                 // date_birth: "birth",
    //                 // passport_exp: "passport_exp",
    //                 data,
    //                 _token: '{!! csrf_token() !!}'
    //             },
    //             // beforeSend: () => {
    //             //     Swal.fire({
    //             //         title: 'Please Wait...',
    //             //         html: '',
    //             //         timer: 10000,
    //             //         timerProgressBar: true,
    //             //         didOpen: () => {
    //             //             Swal.showLoading()
    //             //             const b = Swal.getHtmlContainer().querySelector('b')
    //             //             timerInterval = setInterval(() => {
    //             //                 b.textContent = Swal.getTimerLeft()
    //             //             }, 100)
    //             //         },
    //             //         willClose: () => {
    //             //             clearInterval(timerInterval)
    //             //         }
    //             //     }).then((result) => {
    //             //         /* Read more about handling dismissals below */
    //             //         if (result.dismiss === Swal.DismissReason.timer) {
    //             //             console.log('I was closed by the timer')
    //             //         }
    //             //     })
    //             // },
    //             // success: results => {

    //             //     if (results) {
    //             //         Swal.fire(
    //             //             'Berhasil!',
    //             //             'Data telah ditambahkan!',
    //             //             'Berhasil'
    //             //         );

    //             //         setTimeout(() => {
    //             //             location.reload();
    //             //         }, 1000);
    //             //     } else {

    //             //         Swal.fire({
    //             //             icon: 'error',
    //             //             title: 'Oops...',
    //             //             text: 'Nama Guru sudah ada'
    //             //         })
    //             //     }

    //             // }
    //             success: function(data) {
    //                 console.log(data.response);
    //             },
    //             error: function(data, textStatus, errorThrown) {
    //                 console.log(data);
    //                 console.log(data.responseJSON.message);
    //                 console.log(data.response);
    //             },
    //         })
    //     })
    // } --}}
