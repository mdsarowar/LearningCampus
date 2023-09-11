<script>
    var preload = document.querySelector(".preload");
    var preloaderst2 = document.querySelectorAll(".st2");
    var preloaderst3 = document.querySelectorAll(".st3");
    var preloaderst4 = document.querySelectorAll(".st4");

    for (let i = 0; i < preloaderst2.length; i++) {
        preloaderst2[i].style.fill = "#0E3E67";
    }
    for (let i = 0; i < preloaderst3.length; i++) {
        preloaderst3[i].style.fill = "#FF9324";
    }
    for (let i = 0; i < preloaderst4.length; i++) {
        preloaderst4[i].style.fill = "#0E3E67";
    }

    function counter() {
        var counts = setInterval(() => {
            var c = parseInt($('.count').text());
            $('.count').text((++c).toString());
            if (c == 100) {
                clearInterval(counts);
            }
        }, 60);
    }
    counter();

    window.addEventListener("load", function() {
        preload.style.display = "none";
    })
</script>

<script src="{{asset('/')}}assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="{{asset('/')}}assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('/')}}https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Plugins -->
<script src="{{asset('/')}}assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('/')}}assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery-ui.min.js"></script>

<!-- Initialization  -->
<script src="{{asset('/')}}assets/js/sidebar-nav.js"></script>
<script src="{{asset('/')}}assets/js/main.js"></script>
<script src="{{asset('/')}}assets/js/dashboard-page-scripts.js"></script>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
