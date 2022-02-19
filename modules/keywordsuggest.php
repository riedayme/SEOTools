<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'Word Text Spinner';
include "template/header.php";
?>
<section class="section">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-8 col-12">
				<!-- ========== title-wrapper start ========== -->
				<div class="title-wrapper pt-30">
					<div class="row">
						<div class="col-md-6">
							<div class="titlemb-30 mb-30">
								<h2><?php echo $title; ?></h2>
								<p>by: <a target="_blank" href="https://riantoastono.com/">rianto astono</a></p>
							</div>
						</div>
					</div>
					<!-- end row -->
				</div>
				<!-- ========== title-wrapper end ========== -->
				<div class="row">
					<div class="card-style mb-50">

						<div id="searchfield">
							<form id="formSubmit">

								<div class="input-style-1">
									<label>Masukkan kata kunci yang ingin Anda cari pada kolom dibawah, tool akan secara otomatis menampilkan Suggestion dari kata kunci yang diminta.</label>
									<input type="text" name="search" id="search" class="biginput" placeholder="Ketik disini...">
								</div>
							</form>
						</div><!-- @end #searchfield -->

						<div id="results">
						</div>


						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" integrity="sha512-YHQNqPhxuCY2ddskIbDlZfwY6Vx3L3w9WRbyJCY81xpqLmrM6rL2+LocBgeVHwGY9SXYfQWJ+lcEWx1fKS2s8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
						<script>
							function QueryKeyword(keyword,site,callback)
							{
								var querykeyword = keyword;
								var website = site;

								if(website == "google"){
									$.ajax({
										url: "https://suggestqueries.google.com/complete/search",
										jsonp: "jsonp",
										dataType: "jsonp",
										data: {
											q: querykeyword,
											client: "chrome"
										},
										success: callback
									});        	
								}

								if(website == "youtube"){
									$.ajax({
										url: "https://suggestqueries.google.com/complete/search",
										jsonp: "jsonp",
										dataType: "jsonp",
										data: {
											q: querykeyword,
											client: "chrome",
											ds: "yt"
										},
										success: callback
									});        	
								}

								if(website == "amazon"){
									$.ajax({
										url: "https://completion.amazon.com/search/complete",
										dataType: "jsonp",
										data: {
											q: querykeyword,
											method: "completion",
											'search-alias': "aps",
											mkt: "1"
										},
										success: callback
									});        	
								}                
							}

							function CleanVal(input)
							{       
								var val = input;
								val = val.replace("\\u003cb\\u003e", "");
								val = val.replace("\\u003c\\/b\\u003e", "");
								val = val.replace("\\u003c\\/b\\u003e", "");
								val = val.replace("\\u003cb\\u003e", "");
								val = val.replace("\\u003c\\/b\\u003e", "");
								val = val.replace("\\u003cb\\u003e", "");
								val = val.replace("\\u003cb\\u003e", "");
								val = val.replace("\\u003c\\/b\\u003e", "");
								val = val.replace("\\u0026amp;", "&");
								val = val.replace("\\u003cb\\u003e", "");
								val = val.replace("\\u0026", "");
								val = val.replace("\\u0026#39;", "'");
								val = val.replace("#39;", "'");
								val = val.replace("\\u003c\\/b\\u003e", "");
								val = val.replace("\\u2013", "2013");
								if (val.length > 4 && val.substring(0, 4) == "http") val = "";
								return val; 
							}

							$(document).ready(function() {
								$("#search").keyup(function(){
									var html = '';
									html = html + '<table id="results_table" class="table">';
									html = html + '<tbody><tr class="odd-row">'
									html = html + '<th width="16%" align="left">Google</th>'
									html = html + '<th width="16%" align="left">Youtube</th>'
									html = html + '<th width="16%" align="left">Amazon</th>'

									html = html + '</tr>'	
									html = html + '<tr><td id="google"></td><td id="youtube"></td><td id="amazon"></td></tr>'
									html = html + '</tbody></table>';
									$('#results').empty();
									$('#results').append(html); 

									QueryKeyword($('#search').val(),"google",function(res) {
										var retList = res[1];

										var i = 0; 
										var sb = ''; 
										for(i = 0; i < retList.length; i++)
										{
											var currents = CleanVal(retList[i]); 

											sb = sb + '<a href="https://www.google.com/search?q=' + encodeURIComponent(CleanVal(retList[i])) + '" target="_blank" rel="noreferrer nofollow" class="live">' + CleanVal(retList[i]) + '</a><br />';

										}
										$('#google').empty();
										$('#google').append(sb);


									});
									QueryKeyword($('#search').val(),"youtube",function(res) {
										var retList = res[1];

										var i = 0; 
										var sb = ''; 
										for(i = 0; i < retList.length; i++)
										{
											var currents = CleanVal(retList[i]); 

											sb = sb + '<a href="https://www.youtube.com/results?search_query=' + encodeURIComponent(CleanVal(retList[i])) + '" target="_blank" rel="noreferrer nofollow" class="live">' + CleanVal(retList[i]) + '</a><br />';
										}
										$('#youtube').empty();
										$('#youtube').append(sb);

									});

									QueryKeyword($('#search').val(),"amazon",function(res) {
										var retList = res[1];
										var i = 0; 
										var sb = ''; 
										for(i = 0; i < retList.length; i++)
										{
											var currents = CleanVal(retList[i]); 

											sb = sb + '<a href="http://www.amazon.com/s/?field-keywords=' + encodeURIComponent(CleanVal(retList[i])) + '" target="_blank" rel="noreferrer nofollow" class="live">' + CleanVal(retList[i]) + '</a><br />';
										}
										$('#amazon').empty();
										$('#amazon').append(sb);

									});          	

								});
							});
						</script>

					</div>
				</div>
			</div>
			<!-- end container -->
		</div>
	</div>
</section>
<?php
include "template/footer.php";
?>
