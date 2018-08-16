<?
  $key1 = 'Арахис в глазури оптом';
  $key2 = 'Арахис в хрустящей корочке оптом';
  $key3 = 'Снеки к пиву оптом';
  $key4 = 'Арахис глазированный';

  $key1_1 = 'Арахис с корочкой';
  $key1_2 = 'Закуски к пиву';
  $key1_3 = 'Снеки купить';
?>
<!DOCTYPE html>
<html>
<?
  include('includes/Mobile_Detect.php');
  $mobile_detect = new Mobile_Detect();
  $ismobile = isset($_GET['ismobile']) || $mobile_detect->isMobile() || $mobile_detect->isTablet();
  $isdev = strpos(dirname(__FILE__), 'dev') !== false;

  include('includes/parts/index-'.($ismobile?'mob':'desc').'.php');
?>
  <script type="text/javascript">
    HTTP_REFERER = '<?=$_SERVER['HTTP_REFERER']?>';
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
      var ya;
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  ya = w.yaCounter49401661 = new Ya.Metrika2({
                      id:49401661,
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
          s.src = "https://mc.yandex.ru/metrika/tag.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks2");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/49401661" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</html>