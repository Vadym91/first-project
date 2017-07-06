<footer>
    <div class="container">
        <div class="row">
            <div class="mnu-line clearfix">

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="#"><span class="logo-text">Under<br> Water</span></a>
                        <span class="logo-name">Web Design Studio</span>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <nav class="main-mnu">
                        <ul>
                            <?php if (User::isGuest()): ?>
                                <li ><a  href="/user/login">Вход</a></li>
                            <?php else: ?>
                                <li class="active"><a href="/cabinet/">Кабинет</a></li>
                                <li><a href="/user/logout/">Выход</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <nav class="main-friend">
                        <ul>
                            <li><a href="https://www.facebook.com/Underwater-719505541485016/"><img src="/template/img/social-facebook.png" alt="facebook"></a></li>
                            <li><a href="https://www.behance.net/"><img src="/template/img/behance.png" alt="behance"></a></li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
    </div>
    <div >
        <h6>Created by UNDERWATER. All rights reserved</h6>
    </div>
</footer>

<!-- Здесь пишем код -->


<div class="hidden"></div>

<!--[if lt IE 9]>
<script src="/template/libs/html5shiv/es5-shim.min.js"></script>
<script src="/template/libs/html5shiv/html5shiv.min.js"></script>
<script src="/template/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="/template/libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load Scripts Start -->

<script>var scr = {"scripts": [
            {"src": "/template/js/libs.js", "async": false},
            {"src": "/template/js/common.js", "async": false}
            //{"src" : "js/imgslider.js", "async" : false} 
        ]};
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t))
                return!1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return!0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>





<!-- Load Scripts End -->

</body>
</html>