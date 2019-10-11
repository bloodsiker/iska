<div class="footer-bg">
    <section class="displ-announce" >
        <div class="container main-announce">
            <div class="bookmark">
                <span>події</span>
            </div>

            <div class="carousel-announce">

                <div class="carousel">
                    <div class="cycle-slideshow"
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=4
                         data-cycle-carousel-fluid=false
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev-onnounce"
                         data-cycle-next="#next-onnounce"
                    >

                        <!-- Получаем список евентов -->
                        <?php $eventList = App\app\Models\Event::getListEvent(); ?>

                        <?php if (is_array($eventList)): ?>
                            <?php foreach ($eventList as $event): ?>
                                <div class="item">
                                    <div class="announce-block">
                                        <div>
                                            <a class="ajax"
                                               href="<?=$event['path'] . $event['img']?>"
                                               title="<?=$event['title']?>">
                                                <img width="200" height="300"
                                                     src="<?=$event['path'] . $event['img']?>"
                                                     alt="<?=$event['title']?>">
                                            </a>
                                        </div>
                                        <div class="new-title">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>

                    <a class="left keys-item-control" id="prev-onnounce"  href="#recommended-item-carousel"
                       data-slide="prev">

                    </a>
                    <a class="right keys-item-control" id="next-onnounce" href="#recommended-item-carousel"
                       data-slide="next">

                    </a>

                </div>
            </div>
        </div>
    </section>

    <footer >
        <div class="container main-footer">
            <div class="partner">
                <h2><span>[</span> ПАРТНЕРИ <span>]</span></h2>
            </div>
            <div class="section-partner" style="margin-top: 65px;">
                <div class="logo-partner">
                    <a href="http://zabijaka.ua/" target="_blank">
                        <img src="/template/site/img/partner-1.png" alt="чемпіон серед ковбас">
                    </a>
                </div>
<!--                <div class="logo-partner">-->
<!--                    <img src="/template/site/img/partner-2.jpg" alt="корреспондент">-->
<!--                </div>-->
                <div class="logo-partner">
                    <a href="http://dsmsu.gov.ua/index/ua/" target="_blank">
                        <img src="/template/site/img/partner-3.jpg" alt="міністерство молоді та спорту україни">
                    </a>
                </div>
                <div class="logo-partner">
                    <a href="http://www.uni-sport.edu.ua/" target="_blank">
                        <img src="/template/site/img/partners/uni-sport.jpg" width="120" alt="Національний університет фізичного виховання і спорту України">
                    </a>
                </div>
            </div>

            <div class="section-partner">
                <div class="logo-partner">
                    <a href="https://www.amway.ua/user/slider66slider" style="font-size: 26px; color: #fff; text-shadow: 2px 2px 2px #000000;" target="_blank">www.amway.ua/user/slider66slider</a>
                </div>
            </div>

            <div class="footer-contact">
                <div class="contact">
                    тел. +38(067)746-39-83  <br>
                    тел. +38(063)592-01-01 <br>
                    email: info@iska.com.ua
                </div>
                <div class="social">
                    <a class="google" style="display: none" href=""></a>
                    <a class="twiter" style="display: none"  href=""></a>
                    <a class="email" href="mailto:info@iska.com.ua"></a>
                    <a class="fc" href="https://www.facebook.com/ISKA-Ukraine-1636978163240944/" target="_blank"></a>
                    <a class="yout" href="https://www.youtube.com/channel/UCx5u4uD8qzdVOn83x6sKBAA" target="_blank"></a>
                </div>
                <div style="display: none">
                    <p style="text-align: center; font-size: 12px; margin: 5px;">Designed by  <a href="http://ol-b.com/" target="_blank">OL-B GROUP</a></p>
                </div>
            </div>


        </div>
    </footer>
</div>

<?php
    $visit = new App\app\Services\VisitAnalytics();
    $visit->checkVisit();
?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37602695 = new Ya.Metrika({
                    id:37602695,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37602695" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->