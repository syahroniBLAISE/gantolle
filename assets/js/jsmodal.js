

		const nM = document.getElementsByClassName('btn-update');
		// console.log(nM);

// const e = document.getElementsByClassName('btn-primary');

$(function(){

	// $('.editMenuUbah').on('click', function(){
	// 	nM.innerHTML = 'berubah';
		

	// });


	$('.editMenuUbah').on('click', function(){
		$('.modal-title').html('sudah di robah');
		$('.modal-footer button[type=submit]').html('Update Data');

		const id = $(this).data('id');
		// console.log(id);
		$('.modal-content form').attr('action', 'http://localhost/gantolle/menu/updateMenu');

		$.ajax({
			url: 'http://localhost/gantolle/menu/editMenu' ,
			data: {id : id},
			method: 'post',
			dataType : 'json',
			success : function(data){
				$('#title').val(data.title);
				$('#url').val(data.url);
				$('#icon').val(data.icon);
				$('#id').val(data.id);
				$('#menu_id').remove();
				$('.form-check').remove();
				// console.log(data);
				console.log(data);
			}
		});
	});
});



// function loadDoc() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//      document.getElementById("demo").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("GET", "ajax_info.txt", true);
//   xhttp.send();
// }












// const e = document.getElementsByClassName('editMenuUbah');
// const mU = document.getElementById('#newSubMenuModalLabel');
// edit[i].onClick = ubahModal;
// newSubMenuModalLabel