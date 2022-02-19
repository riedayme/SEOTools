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
                                <p>by: <a target="_blank" href="https://www.facebook.com/ewwink">ewwink</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                <div class="card-style mb-50">

                        <div class="input-style-1">
                            <label>Spintax input</label>
                            <textarea id="input" placeholder="Spintax input" rows="5">Hai {tingki|wingki|lala|asep}, Selamat {pagi|siang|sore|malam}!</textarea>
                        </div>

                        <div class="input-style-1">
                            <label>Jumlah Spin Judul*:</label>
                            <input value="3" step="1" id="jumlahspin" type="number">
                        </div>

                        <button class="main-btn primary-btn rounded-md btn-hover mb-5" id="spin">SPIN</button>

                        <div class="input-style-1">
                            <label>Spintax input</label>
                            <textarea id="output" wrap="off" rows="10"></textarea>
                        </div>

                        <p>Hasil Spin Unik: <span id="jumlahunik">4</span></p> 

                        <script type="text/javascript">
                            function GetSpinContent(text) {
                                var result = text,
                                match,
                                matches,
                                array = [],
                                reg = new RegExp(/{([^{}]*)\}/i);

                                while ((matches = reg.exec(result))) {
                                    array = matches[1].split('|');
                                    result = result.replace(matches[0], array[Math.floor(Math.random() * array.length)]);
                                }

                                reg = new RegExp(/\{\{([\s\S]*?)\}\}/i);
                                while ((match = reg.exec(result))) {
                                    array = match[1].split('||');
                                    result = result.replace(match[0], array[Math.floor(Math.random() * array.length)]);
                                }
                                return result;
                            }

                            function unik(value, index, self) {
                                return self.indexOf(value) === index;
                            }

                            function $(s) {
                                return document.querySelectorAll(s);
                            }
                            HTMLElement.prototype.on = function (ev, fun) {
                                this.addEventListener(ev, fun);
                            };


                            $('#spin')[0].on('click', function () {
                                var hasil = [];

                                for (var i = 0; i <jumlahspin.value; i++) {
                                    hasil.push(GetSpinContent(input.value));
                                }

                                hasil = hasil.filter(unik);
                                jumlahunik.textContent = hasil.length;
                                output.value = hasil.join("\n");
                            })
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
