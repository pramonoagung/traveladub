    $(document).ready(function () {
         $("#namalengkap").keyup(function () {
         $.ajax({
            type: "POST",
            url: '<?php echo base_url("index.php/C_User/search"); ?>',
            data: {
                keyword: $("#namalengkap").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#dropdownnama').empty();
                    $('#namalengkap').attr("data-toggle", "dropdown");
                    $('#dropdownnama').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#namalengkap').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#dropdownnama').append('<li role="displayNama" >' + value['nama_lengkap'] + '-' + value['position']+ '</li>');
                });
            },error:function(data){
             
               console.log(data);
            }
         });
         });
         $('ul.txtnama').on('click', 'li', function () {
            var input_string = $(this).text();
            var namalengkap = input_string.substring(0, input_string.indexOf("-"));
            var count = namalengkap.length;
            var position = input_string.slice(count+1);
            document.getElementById('namalengkap').value = namalengkap;
            document.getElementById('position').value = position;
         });
         });