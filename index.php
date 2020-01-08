<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Static Calc with Flat Rate</title>

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<div class="col-md-10 offset-1">
				<br>
				<div class="card">
				  <div class="card-header">
					Calc
				  </div>
				  <div class="card-body">
					<form>
					  <div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Paket Investasi</label>
						<div class="col-sm-10">
						  <div class="col-sm-10">
						  <select id="loan" name="loan" class="form-control">
							<option selected>Pilih...</option>
							<option value="3000000">Rp. 3.000.000</option>
							<option value="5000000">Rp. 5.000.000</option>
						  </select>
						</div>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Tenor</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="tenor" name="tenor" value="0" readonly>
						</div>
						<!--<div class="col-sm-10">
						  <select id="tenor" name="tenor" class="form-control">
							<option selected>Pilih...</option>
							<option value="3">3 Bulan</option>
							<option value="7">7 Bulan</option>
						  </select>
						</div> -->
					  </div>
					  <div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Rate</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="fee" name="fee" value="0%" readonly>
						</div>
					  </div>
					  <div class="form-group row">
						<div class="col-sm-10">
						  <a href="#" id="hitung" class="btn btn-primary">Count</a>
						</div>
					  </div>
					</form>
				  </div>
				</div>
			</div>
			
			<div class="col-md-12">
				<br><br><br>
				<div class="card">
				  <div class="card-header">
					Report
				  </div>
				  <div class="card-body">
					<div id="informasi">
						<h1 id="saldoawal">Saldo awal: Rp. <span class="wallet"></span></h1>
						<div class="subinfo">
							<hr>
								<p>Investasi	: Rp. 0</p>
								<p>Jangka Waktu	: 0 </p>
								<p>Angsuran		: 0 </p>
								<p>Total 		: Rp. 0 </p>
							<hr>
								<p>Hasil Investasi : Rp. 0 </p>
								<p>Profit		: Rp. 0 </p>
						</div>
							<hr>
								<h1 id="saldoakhir">Saldo akhir: Rp. <span class="wallets"></span></h1>
						
					</div>
				  </div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			var wallet = 50000000;
			var wallets = 0;
			var fee6 = 0.01;
			var fee12 = 0.02;
			var adminfee = 80000;
			
			$(".wallet").text(wallet.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
			$(".wallets").text(wallets.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
			
			$("#loan").change(function(){
				var x = $("#loan").val();
				var saldowallet = wallet - x;
				
				if(x == 3000000)
				{
					$("#tenor").val("3 Bulan");
					$("#fee").val("1%");
				}
				
				if(x == 5000000)
				{
					$("#tenor").val("7 Bulan");
					$("#fee").val("2%");
				}
				
				$(".wallet").text(saldowallet.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
				
				$("#hitung").on("click", function(){
					var loan = $("#loan").val();
					
					if(loan == 3000000) {
						$("#tenor").val("3 Bulan");
						$("#fee").val("1%");
						
						var waktu = 3;
						var angsuran = 1157106;
						var total = angsuran * waktu;
						var profit = total - loan;
						
						var saldoakhir = saldowallet + total;
						
						var html = '<hr>' +
								'<p>Investasi	: Rp. '+ loan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Jangka Waktu	: '+ waktu +' Bulan</p>' +
								'<p>Angsuran		: Rp. '+ angsuran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Total 		: Rp. '+ total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
							'<hr>' +
								'<p>Hasil Investasi : Rp. '+ total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Profit		: Rp. '+ profit.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +' </p>';
								
						$(".subinfo").html(html);
						$(".wallets").text(saldoakhir.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
					}
					
					if(loan == 5000000) {
						$("#tenor").val("7 Bulan");
						$("#fee").val("2%");
						
						var waktu = 7;
						var angsuran = 949442;
						var total = angsuran * waktu;
						var profit = total - loan;
						
						var saldoakhir = saldowallet + total;
						
						var html = '<hr>' +
								'<p>Investasi	: Rp. '+ loan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Jangka Waktu	: '+ waktu +' Bulan</p>' +
								'<p>Angsuran		: Rp. '+ angsuran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Total 		: Rp. '+ total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
							'<hr>' +
								'<p>Hasil Investasi : Rp. '+ total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +'</p>' +
								'<p>Profit		: Rp. '+ profit.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") +' </p>';
								
						$(".subinfo").html(html);
						$(".wallets").text(saldoakhir.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
					}

				});
				
			});
			
		</script>
	</body>
</html>
