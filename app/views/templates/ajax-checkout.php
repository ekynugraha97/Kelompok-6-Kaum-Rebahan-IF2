
<script>
	$(function() {
		$('#tampilKota').hide()
		$('#tampilKecamatan').hide()
		$('#tampilKelurahan').hide()

		$('select[name="provinsi"]').change(function() {
			$('#tampilKota').hide()
			$('#tampilKecamatan').hide()
			$('#tampilKelurahan').hide()

            var provinsi_input = $('select[name="provinsi"] option:selected').text()
            $('input[name="provinsi_input"]').val(provinsi_input)

			var provinsi = $('select[name="provinsi"]').val()
			var settings = {
				"url": "http://www.emsifa.com/api-wilayah-indonesia/api/regencies/" + provinsi + ".json",
				"method": "GET",
				"timeout": 0,
			};

			$.ajax(settings).done(function(response) {
				$('#tampilKota').show()
				$('select[name="kab_kota"]').empty()
				$('select[name="kab_kota"]').append('<option selected>Pilih Kab/Kota</option>')
				$.each(response, function(index, data) {
					$('select[name="kab_kota"]').append('<option value="' + data.id + '">' + data.name + '</option>')
				});
			});
		})

		$('select[name="kab_kota"]').change(function() {
			$('#tampilKecamatan').hide()
			$('#tampilKelurahan').hide()
            
            var kab_kota_input = $('select[name="kab_kota"] option:selected').text()
            $('input[name="kab_kota_input"]').val(kab_kota_input)

			var kota = $('select[name="kab_kota"]').val()
			var settings = {
				"url": "http://www.emsifa.com/api-wilayah-indonesia/api/districts/" + kota + ".json",
				"method": "GET",
				"timeout": 0,
			};

			$.ajax(settings).done(function(response) {
				$('#tampilKecamatan').show()
				$('select[name="kecamatan"]').empty()
				$('select[name="kecamatan"]').append('<option selected>Pilih Kecamatan</option>')
				$.each(response, function(index, data) {
					$('select[name="kecamatan"]').append('<option value="' + data.id + '">' + data.name + '</option>')
				});
			});
		})

		$('select[name="kecamatan"]').change(function() {
			$('#tampilKelurahan').hide()

            var kecamatan_input = $('select[name="kecamatan"] option:selected').text()
            $('input[name="kecamatan_input"]').val(kecamatan_input)

			var kecamatan = $('select[name="kecamatan"]').val()
			var settings = {
				"url": "http://www.emsifa.com/api-wilayah-indonesia/api/villages/" + kecamatan + ".json",
				"method": "GET",
				"timeout": 0,
			};
			$.ajax(settings).done(function(response) {
				$('#tampilKelurahan').show()
				$('select[name="kelurahan"]').empty()
				$('select[name="kelurahan"]').append('<option selected>Pilih Kelurahan</option>')
				$.each(response, function(index, data) {
					$('select[name="kelurahan"]').append('<option value="' + data.id + '">' + data.name + '</option>')
				});
			});
		})
        
		$('select[name="kelurahan"]').change(function() {
            var kelurahan_input = $('select[name="kelurahan"] option:selected').text()
            $('input[name="kelurahan_input"]').val(kelurahan_input)
		})
	});
</script>