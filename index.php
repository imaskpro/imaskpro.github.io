


<?php


$userAgent = $_SERVER['HTTP_USER_AGENT'];

if ( strpos($userAgent, 'Firefox') !== false || strpos($userAgent, 'Chrome') !== false ) {
    //         echo '<script type="text/javascript">swal("THẤT BẠI", "HÃY SỬ DỤNG TRÌNH DUYỆT SAFARI (iPhone), KHÔNG HỖ TRỢ TRINHF DUYET KHAC\nKHÓ CHỊU, KHÓ CHỊU VÔ CÙNG ! QUÝ KHÁCH THÔNG CẢM NHEN", "error");
    //   setTimeout(function(){ location.href = "https://frankynouva.com" },15000);</script>'; //note success hiden `password` = '".$password."',

	            echo '<script type="text/javascript">alert("CHỈ HỖ TRỢ THIẾT BỊ ĐÃ JAILBREAK ! \n\nTHÊM SOURCE: http://kiiimrepo.com  (không có s) ! \n\n\n CẢM ƠN !");
      setTimeout(function(){ location.href = "/" },15000);</script>'; //note success hiden `password` = '".$password."',

     // exit();
}
else { echo $userAgent;}

?>


<div class="container" style="width: 365px;">
	<div class="table-responsive">
	  <table class="table">
		<tr>
		  <td>
			<img src="./banner1.png_" class="img-fluid" alt="Support Image">
		  </td>
		</tr>
	  </table>
	</div>
  </div>
  

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


<div class="container">
	<div class="row text-center">

		<div class="col-3 mb-3">
			<a class="btn btn-default w-100" rel="nofollow noopener"
				href="cydia://url/https://cydia.saurik.com/api/share#?source=https://kiiimrepo.com/">
			Add:
			</a>
		</div>

		<div class="col-3 mb-3">
						<a class="btn btn-default w-100" rel="nofollow noopener"
				href="cydia://url/https://cydia.saurik.com/api/share#?source=http://kiiimrepo.com/">
				<img width="25" height="25" class="img-rounded" src="https://api.ios-repo-updates.com/images/apt/cydia.png" alt="Cydia"> Cydia
			</a>
		</div>


		<div class="col-3 mb-3">
							<a class="btn btn-default w-100" rel="nofollow noopener" href="sileo://source/http://kiiimrepo.com/">
				<img width="25" height="25" class="img-rounded" src="https://api.ios-repo-updates.com/images/apt/sileo.png" alt="Sileo"> Sileo
			</a>
		</div>
		<div class="col-3 mb-3">
							<a class="btn btn-default w-100" rel="nofollow noopener"
				href="zbra://sources/add/http://kiiimrepo.com/">
				<img width="25" height="25" class="img-rounded" src="https://api.ios-repo-updates.com/images/apt/zebra.png" alt="Zebra"> Zebra
			</a>
		</div>
	</div>
</div>



<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<!-- <div class="container">
	<div class="row text-center">
		<div class="col-4 mb-3">
			<h4>Support</h4>
			<p>Support this repository for continued development and updates.</p>
		</div>
		<div class="col-4 mb-3">
			<h4>Description</h4>
			<p>Here is a brief description of the repository and its contents.</p>
		</div>
		<div class="col-4 mb-3">
			<h4>Donate</h4>
			<p>If you'd like to donate to support the development, click below:</p>
			<a href="https://example.com/donate" class="btn btn-primary">Donate</a>
		</div>
	</div>
</div>
 -->



 <div class="container">
	<div class="table-responsive">
	  <table class="table" style="font-size: 10px;">



		<tr>
			<td><strong>Tweak</strong></td>
			<td style="display: flex; align-items: center; gap: 10px;">
			  <span>iCleaner Pro | v7.10.0 | Ivano Bilenchi | <a href="https://t.me/HoiDapMienPhi" class="btn btn-danger" style="font-size: 10px; padding: 3px;">Rootful</a> </span>
			  <!-- <a href="https://t.me/HoiDapMienPhi" class="btn btn-danger" style="font-size: 12px;">Rootful</a>
			  <a href="https://t.me/HoiDapMienPhi" class="btn btn-primary" style="font-size: 12px;">Share</a> -->
			</td>
		  </tr>


		<tr>
		  <td><strong>Description</strong></td>
		  <td>Brief description of the repository and its features.</td>
		</tr>
	

				
		<tr>
			<td><strong>Screenshots</strong></td>
			<td> 
			<img src="https://img.vietqr.io/image/mbbank-888222686-compact2.jpg?amount=50000&addInfo=ThankYouAdminP&accountName=KIMTHANHNHAN" 
			class="img-thumbnail" alt="Support Image" style="width: 65px; height: 90px; cursor: pointer;" onclick="showFullSizeImage()">
  
		  <div id="fullImage" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); z-index: 9999; text-align: center;">
			<img src="https://img.vietqr.io/image/mbbank-888222686-compact2.jpg?amount=50000&addInfo=BUYthankyoupkREPOSAP&accountName=KIMTHANHNHAN" 
			  alt="Full Size Support Image" style="max-width: 100%; max-height: 100%; margin-top: 50px;">
			<button onclick="closeFullSizeImage()" style="position: absolute; top: 20px; right: 20px; padding: 10px 20px; background: #fff; border: none; cursor: pointer;">Close</button>
		  </div>

			</td>
		  </tr>


		  <tr>
			<td><strong>Donate</strong></td>
			<td>
			  <p style="display: flex; align-items: center; gap: 10px; margin: 0;">
				MBBank 888.222.686 
				Kim Thanh Nhan 
				<button class="btn btn-warning" style="font-size: 10px; padding: 3px;" onclick="showFullSizeImage()">QR</button>
			  </p>
			  
			  <!-- Full size image -->
			  <div id="fullImage" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); z-index: 9999; text-align: center;">
				<img src="https://img.vietqr.io/image/mbbank-888222686-compact2.jpg?amount=50000&addInfo=BUYthankyoupkREPOSAP&accountName=KIMTHANHNHAN" 
				  alt="Full Size Support Image" style="max-width: 100%; max-height: 100%; margin-top: 50px;">
				<button onclick="closeFullSizeImage()" style="position: absolute; top: 20px; right: 20px; padding: 10px 20px; background: #fff; border: none; cursor: pointer;">Close</button>
			  </div>
			</td>
		  </tr>
		  

	  
		  <tr>
			<td><strong>BUY PHONE</strong></td>
			<td> 
			  <!-- Thumbnail Image -->
			  <img src="https://img.vietqr.io/image/mbbank-888222686-compact2.jpg?amount=50000&addInfo=ThankYouAdminP&accountName=KIMTHANHNHAN" 
				class="img-thumbnail" alt="Support Image" 
				style="width: 65px; height: 90px; cursor: pointer;" 
				onclick="showFullSizeImage()">
			
			  <!-- Full-size Image and Buttons -->
			  <div id="fullImage" 
				style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); z-index: 9999; text-align: center;">
				
				<!-- Full-Size Image -->
				<img src="https://img.vietqr.io/image/mbbank-888222686-compact2.jpg?amount=50000&addInfo=BUYthankyoupkREPOSAP&accountName=KIMTHANHNHAN" 
				  alt="Full Size Support Image" 
				  style="max-width: 100%; max-height: 100%; margin-top: 50px;">
		  		  
				<!-- Close Button -->
				<button onclick="closeFullSizeImage()" 
				  style="position: absolute; top: 20px; right: 20px; padding: 10px 20px; background: #fff; border: none; cursor: pointer;">
				  Close
				</button>


			  </div>
			  <a href="https://t.me/HoiDapMienPhi" class="btn btn-danger" style="font-size: 10px; padding: 3px;">BUY</a>

			</td>
		  </tr>
		  


		  <!-- <tr>
			<td><strong>Zalo</strong></td>
			<td><a href="https://zalo.me/0933998772" style="font-size: 12px;"> hoi/yc/idea/bat cu gi ve Tweak - co phi </a></td>
		  </tr> -->



	  </table>
	</div>
  </div>
  
  <script>
	// Function to show the full-size image
	function showFullSizeImage() {
	  document.getElementById('fullImage').style.display = 'block';
	}
  
	// Function to close the full-size image
	function closeFullSizeImage() {
	  document.getElementById('fullImage').style.display = 'none';
	}
  </script>
  
  