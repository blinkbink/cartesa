// This is ajax function to get the data through CS website
function calculate(diskon, biaya_basic, biaya_premium, inputMaxStandarGratis) {

		console.log(diskon+" - "+biaya_basic+" - "+biaya_premium+" - "+inputMaxStandarGratis);
		chosenPackage = "standar";
		hasil_diskon=1-(diskon/100);
		// $("#jumlah").on('change', function() {
		// 	basic_1 = ($("#jumlah").val()-5)*biaya_basic;
		// 	basic_6 = basic_1*(inputMaxStandarGratis+1)*hasil_diskon;
		// 	sukses_1 = $("#jumlah").val()*biaya_basic;
		// 	sukses_6 = sukses_1*(inputMaxStandarGratis+1)*hasil_diskon;
		// 	if($("#jumlah").val() == 151){
		// 		$("#lebih_100").css({"display":"block"});
		// 		$("#gratis").css({"display":"none"});
		// 		$("#max_100").css({"display":"none"});
		// 	}
		// 	else if($("#jumlah").val() > inputMaxStandarGratis){
		//   		$("#max_100").css({"display":"block"});
		// 		$("#gratis").css({"display":"none"});
		// 		$("#lebih_100").css({"display":"none"});
		// 		if($("#opt_basic").hasClass("opt_active")){
		// 			$("#harga_1_bulan").text((basic_1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
		// 			$("#harga_6_bulan").text((basic_6).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
		// 		}
		// 		if($("#opt_premium").hasClass("opt_active")){
		// 			$("#harga_1_bulan").text((sukses_1+($("#jumlah").val()*biaya_premium)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
		// 			$("#harga_6_bulan").text((sukses_6+($("#jumlah").val()*biaya_premium*(inputMaxStandarGratis+1)*hasil_diskon)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
		// 		}
		// 	}
		// 	else{
		// 		$("#gratis").css({"display":"block"});
		// 		$("#max_100").css({"display":"none"});
		// 		$("#lebih_100").css({"display":"none"});
		// 	}
		// });
		$("#jumlahPersonalia").on('keyup', function() {
			basic_1 = ($(this).val()-5)*biaya_basic;
			basic_6 = basic_1*(inputMaxStandarGratis+1)*hasil_diskon;
			sukses_1 = $(this).val()*biaya_basic;
			sukses_6 = sukses_1*(inputMaxStandarGratis+1)*hasil_diskon;
			if($(this).val() > 1001){
				$("#lebih_100").css({"display":"block"});
				$("#gratis,#max_100,#sukses_kurang_dari_min").css({"display":"none"});
			}
			else if($(this).val() > inputMaxStandarGratis){
		  		$("#max_100").css({"display":"block"});
				$("#gratis,#lebih_100,#sukses_kurang_dari_min").css({"display":"none"});
				if($("#opt_basic").hasClass("opt_active")){
					$("#harga_1_bulan").text((basic_1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
					$("#harga_6_bulan").text((basic_6).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

					$(".btn-price-1").attr('data-mix-name', 'Button Pilih Paket Standar Per 1 Bulan');
					$(".btn-price-1").attr('data-mix-function', 'Klik Button Pilih Paket Standar Per 1 Bulan');

					$(".btn-price-6").attr('data-mix-name', 'Button Pilih Paket Standar Per 6 Bulan');
					$(".btn-price-6").attr('data-mix-function', 'Klik Button Pilih Paket Standar Per 6 Bulan');
				}
				if($("#opt_premium").hasClass("opt_active")){
					$("#harga_1_bulan").text((sukses_1+($(this).val()*biaya_premium)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
					$("#harga_6_bulan").text((sukses_6+($(this).val()*biaya_premium*(inputMaxStandarGratis+1)*hasil_diskon)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

					$(".btn-price-1").attr('data-mix-name', 'Button Pilih Paket Sukses Per 1 Bulan');
					$(".btn-price-1").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 1 Bulan');

					$(".btn-price-6").attr('data-mix-name', 'Button Pilih Paket Sukses Per 6 Bulan');
					$(".btn-price-6").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 6 Bulan');
				}
			}
			else{
				if($("#opt_basic").hasClass("opt_active")){
					$("#gratis").css({"display":"block"});
					$("#max_100,#lebih_100,#sukses_kurang_dari_min").css({"display":"none"});
				}
				if($("#opt_premium").hasClass("opt_active")){
					$("#sukses_kurang_dari_min").css({"display":"block"});
					$("#max_100,#lebih_100,#gratis").css({"display":"none"});
				}
			}
		});
	// End when user chooses the number of employees

	// Start when user clicks basic option
		$(document).on("click", "#opt_basic", function(){
		// $("#opt_basic").click(function(){

			// Define chosen package
			chosenPackage = "standar";

			basic_1 = ($("#jumlahPersonalia").val()-5)*biaya_basic;
			basic_6 = basic_1*(inputMaxStandarGratis+1)*hasil_diskon;
			$(this).css({"border-color":"#f0ad4e"});
			$("#opt_premium").css({"border-color":"#E7EAEC"});
			$("#opt_basic").css({"color":"black"});
			$("#opt_premium").css({"color":"#A8A7A7"});
			$("#basic").prop("checked", true);
			$("#jumlahPersonalia").attr("min",inputMaxStandarGratis);
			$("#jumlahPersonalia").attr("placeholder","Minimal 5 personalia.");
			$(this).attr("class","col-lg-12 opt_active");
			$("#opt_premium").attr("class","col-lg-12");
			$(".basic_minimum").css({"display":"block"});
			$("#harga_1_bulan").text((basic_1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
			$("#harga_6_bulan").text((basic_6).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
			
			$(".btn-price-1").attr('data-mix-name', 'Button Pilih Paket Standar Per 1 Bulan');
			$(".btn-price-1").attr('data-mix-function', 'Klik Button Pilih Paket Standar Per 1 Bulan');

			$(".btn-price-6").attr('data-mix-name', 'Button Pilih Paket Standar Per 6 Bulan');
			$(".btn-price-6").attr('data-mix-function', 'Klik Button Pilih Paket Standar Per 6 Bulan');

			if($("#jumlahPersonalia").val() > 1001){
				$("#lebih_100").css({"display":"block"});
				$("#gratis,#max_100,#sukses_kurang_dari_min").css({"display":"none"});
			} else if($("#jumlahPersonalia").val() == 6){
				$("#jumlahPersonalia").val(inputMaxStandarGratis); //Change the value to 5
				$("#gratis").css({"display":"block"});
				$("#lebih_100,#max_100,#sukses_kurang_dari_min").css({"display":"none"});
			} else if($("#jumlahPersonalia").val() <= inputMaxStandarGratis){
				$("#gratis").css({"display":"block"});
				$("#lebih_100,#max_100,#sukses_kurang_dari_min").css({"display":"none"});
				$("#jumlahPersonalia").val(inputMaxStandarGratis); //Change the value to 5
			}
		});
	// End when user clicks basic option

	if($("#yesNoSukses").val() != "noSukses"){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
	// Start when user clicks premium option
		$("#opt_premium").click(function(){

			// Define chosen package
			chosenPackage = "sukses";

			$(this).css({"border-color":"#f0ad4e"});
			$("#opt_basic").css({"border-color":"#E7EAEC"});
			$("#opt_premium").css({"color":"black"});
			$("#opt_basic").css({"color":"#A8A7A7"});
			$("#premium").prop("checked", true);
			$("#jumlahPersonalia").attr("min",(inputMaxStandarGratis+1));
			$("#jumlahPersonalia").attr("placeholder","Minimal 6 personalia.");
			$(this).attr("class","col-lg-12 opt_active");
			$("#opt_basic").attr("class","col-lg-12");
			$(".basic_minimum").css({"display":"none"});
			$("#max_100").css({"display":"block"});
			$("#gratis,#lebih_100,#sukses_kurang_dari_min").css({"display":"none"});
			if($("#jumlahPersonalia").val()<= inputMaxStandarGratis){
				$("#jumlahPersonalia").val(inputMaxStandarGratis+1); //Change the value to 6
				sukses_1 = $("#jumlahPersonalia").val()*biaya_basic;
				sukses_6 = sukses_1*(inputMaxStandarGratis+1)*hasil_diskon;
				$("#harga_1_bulan").text((sukses_1+($("#jumlahPersonalia").val()*biaya_premium)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
				$("#harga_6_bulan").text((sukses_6+($("#jumlahPersonalia").val()*biaya_premium*6*hasil_diskon)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

				$(".btn-price-1").attr('data-mix-name', 'Button Pilih Paket Sukses Per 1 Bulan');
				$(".btn-price-1").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 1 Bulan');

				$(".btn-price-6").attr('data-mix-name', 'Button Pilih Paket Sukses Per 6 Bulan');
				$(".btn-price-6").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 6 Bulan');
			}
			else if($("#jumlahPersonalia").val() > 1001){
				$("#lebih_100").css({"display":"block"});
				$("#gratis,#max_100,#sukses_kurang_dari_min").css({"display":"none"});
			}
			$("#harga_1_bulan").text((sukses_1+($("#jumlahPersonalia").val()*biaya_premium)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
			$("#harga_6_bulan").text((sukses_6+($("#jumlahPersonalia").val()*biaya_premium*6*hasil_diskon)).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));

			$(".btn-price-1").attr('data-mix-name', 'Button Pilih Paket Sukses Per 1 Bulan');
			$(".btn-price-1").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 1 Bulan');

			$(".btn-price-6").attr('data-mix-name', 'Button Pilih Paket Sukses Per 6 Bulan');
			$(".btn-price-6").attr('data-mix-function', 'Klik Button Pilih Paket Sukses Per 6 Bulan');

		});
	// End when user clicks premium option
	}
}

$(document).ready(function() {

	var selJumlah = $("#jumlahPersonalia");
	var btnOne = $("#btnOneMonth");
	var btnSix = $("#btnSixMonth");
	var btnFree = $("#btnFree");

		// Btn Six function
		btnSix.on("click", function() {
			window.location.href = "/signup/index/"+chosenPackage+"/"+selJumlah.val()+"/6";
		});

		// Btn One function
		btnOne.on("click", function() {
			window.location.href = "/signup/index/"+chosenPackage+"/"+selJumlah.val()+"/1";
		});

		// Btn Free function
		btnFree.on("click", function() {
			window.location.href = "/signup/index/"+chosenPackage+"/"+inputMaxStandarGratis+"/1";
		});

		// Call the ajax function
		getPrice(function(result) {
			console.log(result);

			// If result is not false
			if(result) {

				// //Reset select jumlah
				// selJumlah.html('');
				// // Set number of kuota
				// for (i = 5; i <= 150; i++) {
				// 	if(i <= result.kuota){
				// 		selJumlah.append('<option value="'+i+'" class="basic_minimum">'+i+'</option>');
				// 	}
				// 	else{
				// 		selJumlah.append('<option value="'+i+'">'+i+'</option>');
				// 	}
				// }
				// selJumlah.append('<option value="'+151+'">150++</option>');

				// Set value for standard price
				biaya_basic = parseInt(result.biayaStd);

				// Set value for success price
				biaya_premium = parseInt(result.biayaSucc);

				// Set value for standard price
				diskon = parseInt(result.persen);

				// Set value of max kuota
				inputMaxStandarGratis = parseInt(result.kuota);

				// alert(biaya_basic);

				// Call calculate function
				calculate(diskon, biaya_basic, biaya_premium, inputMaxStandarGratis);

				// $("#jumlah").val(inputMaxStandarGratis).prop("selected",true);
				$("#jumlahPersonalia").val(inputMaxStandarGratis);

			}

		});

});
