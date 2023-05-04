var data = [];
      var tbody = $('#tabel tbody');
      
      function tambahData() {
        var nama = $('#nama').val();
        var kelas = $('#kelas').val();
        var jurusan = $('#jurusan').val();
        data.push({nama: nama, kelas: kelas, jurusan: jurusan});
        updateTable();
      }
      
      function updateTable() {
        tbody.empty();
        for (var i = 0; i < data.length; i++) {
          var row = $('<tr>');
          row.append($('<td>').text(data[i].nama));
          row.append($('<td>').text(data[i].kelas));
          row.append($('<td>').text(data[i].jurusan));
          tbody.append(row);
        }
      }
      
      function cariData() {
        var keyword = $('#search').val().toLowerCase();
        tbody.children().each(function() {
          var text = $(this).text().toLowerCase();
          if (text.indexOf(keyword) >= 0) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      }