// pagination
$('#pagination a').live('click', function() {
    var $this = $(this);
    var page = $this.data('page');
    var ipp = ($this.data('all')) ? 'All' : 30; // I am returning 30 results per page, change to what you want

    $.ajax({
        url: '/admin_page/users/get_users?page=' + page + '&ipp=' + ipp,
        dataType: 'json',
        success: function(response) {

            for(var i=0; i<response.users.length; i++) {
                var user = response.users[i];
                var tr = '<tr>' +
                            '<td>' + user.id_dokumen + '</td>' +
                            '<td>' + user.judul_dokumen + '</td>' +
                            '<td>' + user.kata_kunci_dokumen + '</td>' +
                        '</tr>';

                $('table tbody').append(tr);
            }

            // pagination
            $('#pagination').html(response.pagination);             
        },
        error: function() {
            alert('An error occurred');
        }
    });

    return false;
});