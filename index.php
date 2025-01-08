<!DOCTYPE html>
<html lang="es-ES">
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <meta charset="utf-8">
  <title>Prostalis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Краткое описание страницы  --> 
  <meta name="description" content="Prostalis">
  <meta property="og:description" content="Prostalis">
  <meta name="twitter:description" content="Prostalis">
  <!-- Заголовок страницы, который будет выводится в записи социальной сети -->
  <meta property="og:title" content="Prostalis">
  <meta name="twitter:title" content="Prostalis">
  <!-- Ключевые слова страницы  -->
  <meta name="keywords" content="Prostalis">
  <!-- Отключает формирование ссылки у номера телефона на iOS -->
  <meta name="format-detection" content="telephone=no">
  <!-- Тип карты, по умолчанию используется summary -->
  <meta name="twitter:card" content="summary">
  <!-- Название сайта -->
  <meta property="og:site_name" content="Prostalis">
  <!-- Favicon -->
  <link sizes="32x32" rel="icon" type="image/png" href="media/favicon/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/intlTelInput.css">
<meta property="og:type" content="article"/>
<meta property="og:url" content=""/>
</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
  <section class="section section_header">
    <div class="container">
      <div class="header aos-init aos-animate" data-aos="fade-right">
        <div class="header__logo header__item lt0">Prostalis </div>
        <div class="header__item">
          <div class="header__item-media"><img alt="" src="media/header/def.png"></div>
          <div class="header__item-info lt1">100% <span>natural</span> </div>
        </div>
        <div class="header__item">
          <div class="header__item-media"><img alt="" src="media/header/mikr.png"></div>
          <div class="header__item-info lt2"> <span>Probado por</span> los estudios</div>
        </div>
        <div class="header__item">
          <a class="header__btn lt3" href="#abc">Solicitar una llamada</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_face">
    <div class="container">
      <div class="face">
        <div class="face__body">
          <div class="face__box">
            <div class="section__title face__title aos-init aos-animate lt4" data-aos="fade-right">Prostalis </div>
            <div class="face__subtitle lt5">solución  <mark>segura</mark> a un problema delicado</div>
            <div class="face__list">
              <div class="face__list-body">
                <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                  <div class="face__list-description lt6">  <mark>alivia</mark> el proceso inflamatorio</div>
                </div>
                <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                  <div class="face__list-description lt7">  <mark>elimina</mark> el síndrome de dolor</div>
                </div>
                <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                  <div class="face__list-description lt8">  <mark>normaliza</mark> la micción</div>
                </div>
                <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
                  <div class="face__list-description lt9">  <mark>mejora</mark> la vida sexual</div>
                </div>
                <div class="face__price">
                  <div class="face__price-new lt10">nuevo precio: <span class="price_main">39 EUR</span> </div>
                  <div class="face__price-old lt11">precio anterior: <span class="price_old">199 EUR</span></div>
                </div>
              </div>
              <div class="face__product">
                <img alt="" src="media/face/product.png">
                <div class="face__product-popular lt12">'Exito <span>de ventas</span> </div>
                <div class="face__product-natural lt13">100% <span>natural</span> </div>
              </div>
            </div>
          </div>
          <div class="form_block">
                        <div class="form_block_title"><span>DÉNSE PRISA PARA NO PERDER LA PROMOCIÓN</span></div>
                        <div class="face__price face__price-ch">
                          <div class="face__price-new lt99">nuevo precio: <span class="price_main">39 EUR</span> </div>
                          <div class="face__price-old lt100">precio anterior: <span class="price_old">199 EUR</span></div>
                        </div>
                        <div class="timer red">
                            <div class="b1">
                                <div class="hour text_red">00</div>
                                <div class="desc">horas</div>
                            </div>
                            <div class="sep">:</div>
                            <div class="b2">
                                <div class="min text_red">25</div>
                                <div class="desc">minutos</div>
                            </div>
                            <div class="sep">:</div>
                            <div class="b3">
                                <div class="sec text_red">55</div>
                                <div class="desc">segundos</div>
                            </div>
                        </div>
                        <form method="POST" action="order.php" class="order_forn x_order_form al-form">
                            <input type="hidden" name="product_id" value="15825"/>
                            <input type="hidden" name="ref" value="1015728"/>
                            <input type="hidden" name="langCode" value="es"/>


                            <input type="hidden" name="pixel" value="{pixel}">
                            <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'];?>">
                            <input type="hidden" name="utm_content" value="<?= $_GET['utm_content'];?>">
                            <input type="hidden" name="utm_campaign" value="<?= $_GET['campaign_name'];?>">
                            <input type="hidden" name="sub_id_3" value="<?= $_GET['ad_name'];?>">
                            <input type="hidden" name="facebook" value="<?= $_GET['source'];?>">
                            <input type="hidden" name="clickid" value="{subid}">
                            
                            <div class="iti">
                                <input type="text" name="name" placeholder="Nombre"
                                    class="order_form_input_name x_client_name">
                            </div>
                            <div>
                                <input type="tel" name="phone" placeholder=""
                                    class="order_form_input_phone x_client_phone">
                            </div>
                            <button type="submit" class="order_forn_button">SOLICITAR</button>
                        </form>
                    </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_man">
  <div class="container">
    <div class="man aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red man__title lt25">La enfermedad masculina más común</div>
      <div class="man__info">
        <div class="man__media"><img alt="" src="media/man/img.png"></div>
        <div class="man__description">
          <p class="lt26"><span>Prostatitis: </span> es una inflamación de la glándula prostática. La mayoría de las veces se manifiesta en la forma aguda o crónica. El riesgo aumenta con la edad.</p>
          <p class="lt27">la prostatitis crónica  <mark>afecta al 85% de los hombres</mark> de diferentes edades</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_often">
  <div class="container">
    <div class="often aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_gold often__title lt28">Las manifestaciones más comunes de prostatitis son:</div>
      <div class="often__description">
        <span class="lt29"> <mark>dolor y ardor</mark> al orinar</span><span class="lt30"> <mark>problemas de erección, </mark> disminución de la potencia</span>
        <p class="lt31">Si la prostatitis <b>no se trata,</b> los síntomas se agravarán. Cada micción será una tortura y <b>el sexo desaparecerá de tu vida.</b></p>
      </div>
    </div>
  </div>
</section>
<section class="section section_reasons">
  <div class="container">
    <div class="reasons aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red reasons__title lt32">Causas de la prostatitis</div>
      <div class="reasons__list">
        <div class="reasons__list-item">
          <span class="lt33"> <b>infecciones de transmisión sexual</b></span><span class="lt34">trastorno circulatorio <b> (por estilo de vida sedentario)</b></span>
        </div>
        <div class="reasons__list-item">
          <span class="lt35"> <b>desequilibrio</b> hormonal</span><span class="lt36"> <b>deficiencia de vitaminas</b> y minerales</span>
        </div>
        <div class="reasons__list-item">
          <span class="lt37"> <b>estrés</b> crónico</span><span class="lt38"> <b>coito</b> interrumpido</span>
        </div>
        <div class="reasons__list-item">
          <span class="lt39">vida sexual  <b>irregular</b>, abstinencia</span><span class="lt40"> <b>falta de</b> higiene personal</span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_warning">
  <div class="container">
    <div class="warning aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_gold warning__title lt41">Sin tratamiento <mark> <span>la forma crónica de la prostatitis</span> conduce a las consecuencias peligrosas:</mark></div>
      <div class="warning__box">
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-1.png"></div>
          <p class="lt42">Disfunción<span>sexual</span></p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-2.png"></div>
          <p class="lt43">Adenoma <br>de próstata</p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-3.png"></div>
          <p class="lt44">Infertilidad</p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-4.png"></div>
          <p class="lt45">Cáncer de<span> próstata</span></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_term">
  <div class="container">
    <div class="term aos-init" data-aos="fade-right">
      <div class="section__title term__title lt46"><span>¡CUANTO MAYOR SEA EL HOMBRE,</span>MAYOR <mark>SERÁ EL RIESGO!</mark></div>
    </div>
  </div>
</section>
<section class="section section_help">
  <div class="container">
    <div class="help aos-init" data-aos="fade-right">
      <div class="help__box">
        <div class="help__product">
          <img alt="" src="media/help/product.png">
          <div class="help__product-discond lt47">Descuento de <mark>50%</mark></div>
        </div>
        <div class="help__btn">
          <a class="lt48" href="#abc">Comprar  <mark>por oferta</mark> </a>
        </div>
      </div>
      <div class="help__box">
        <div class="section__title help__title lt49">Prostalis </div>
        <div class="help__subtitile section__title_arrow section__title_red lt50">  <mark>recupera</mark> la salud masculina hasta la norma fisiológica</div>
        <div class="help__subtitile lt51">Deshazte de la prostatitis con un remedio natural</div>
        <div class="help__list">
          <div class="help__item lt52">alivia el dolor</div>
          <div class="help__item lt53">elimina la hinchazón y la inflamación de la próstata</div>
          <div class="help__item lt54">restaura la salud del sistema genitourinario</div>
          <div class="help__item lt55">estimula la función sexual</div>
          <div class="help__item lt56">reduce el riesgo de tumores</div>
          <div class="help__item lt57">previene la recurrencia de la enfermedad</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_ingredients">
  <div class="container">
    <div class="ingredients aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red ingredients__title lt58">El complejo activo Prostalis  <mark>restaura la función de la próstata</mark></div>
      <div class="ingredients__body">
        <div class="ingredients__box">
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-1.png"></div>
            <div class="ingredients__name lt59">Extracto de tribulus</div>
            <div class="ingredients__description lt60">Reduce la hinchazón y la inflamación de la próstata, retrasa el desarrollo de inflamación aséptica, previene el crecimiento excesivo de fibroblastos en la próstata, previene la formación de tejido tumoral.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-2.png"></div>
            <div class="ingredients__name lt61">Vitamina C
            </div>
            <div class="ingredients__description lt62">Estimula la circulación sanguínea, previene los estancamientos.
            </div>
          </div>
        </div>
        <div class="ingredients__wrap">
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-3.png"></div>
            <div class="ingredients__name lt63">Extracto de ginseng</div>
            <div class="ingredients__description lt64">Estimula la función del sistema hormonal en la producción de testosterona. Fortalece la potencia. Previene la formación de tejido fibroso.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-4.png"></div>
            <div class="ingredients__name lt65">Licopeno</div>
            <div class="ingredients__description lt66">Combate todos los factores del envejecimiento sexual masculino. Es un antioxidante, previene el crecimiento y la migración del tejido tumoral, reduce el riesgo de cáncer de próstata.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-5.png"></div>
            <div class="ingredients__name lt67">Extracto de calabaza</div>
            <div class="ingredients__description lt68">Restauran el mecanismo de erección y fortalecen la inmunidad. Previenen el desarrollo de la inflamación de la próstata, elimina la congestión en el sistema urinario.</div>
          </div>
          <div class="ingredients__product">
            <div class="ingredients__product-popular lt69">  <mark>100%</mark> natural</div><img alt="" src="media/ingredients/product.png"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_professional">
    <div class="container">
      <div class="professional aos-init" data-aos="fade-right">
        <div class="professional__list">
          <div class="section__title professional__title lt70">Opinión del especialista</div>
          <div class="professional__description">
            <p class="lt71"> <mark> Cualquier hombre tarde o temprano se enfrenta a la prostatitis.</mark> Sin el tratamiento adecuado, esta enfermedad tiene graves consecuencias, tales como infertilidad e impotencia. Es por eso que es muy importante no perder el momento y comenzar la terapia lo antes posible.</p>
            <p><mark class="lt72">Hoy en día, cada vez más médicos prefieren los remedios naturales. Mi favorito es el remedio Prostalis.</mark><span class="lt73">Está compuesto por ingredientes naturales, lo que garantiza la ausencia de efectos secundarios, ayuda a aliviar el dolor y la inflamación de la próstata. El curso de Prostalis mejora el trabajo de todo el sistema genitourinario masculino, estimula la potencia, aumenta la calidad del sémen</span></p>
            <div class="professional__id">
              <div class="professional__id-name lt74">Andrés <span> Gómez Prieto</span></div><img alt="" src="media/professional/id.png"></div>
            </div>
            <div class="professional__human"><img alt="" src="media/professional/human.png"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section_commits">
      <div class="container">
        <div class="commits">
         <div class="section__title commits__title lt75 aos-init" data-aos="fade-up">Comentarios<span>sobre Prostalis</span> </div>
         <div class="commits__box owl-carousel js-commits__box">
          <div class="commits__item">
           <div class="commits__name lt80">Emilio, 42 años, se deshizo de la prostatitis en 2 semanas</div>
           <div class="commits__info">
            <div class="commits__face">
              <img src="media/commits/face-1.jpg" alt="">
            </div>
            <div class="commits__description lt81">No solo es que el problema es delicado, sino que también su manifestación es muy extraña: yo durante los orgasmos comencé a sentir dolor. El médico me explicó que la prostatitis se manifiesta así y confirmó el diagnóstico. Me preparaba para lo peor hasta que encontré Prostalis. Después de una semana los síntomas de la enfermedad desaparecieron. Me recuperé completamente cuando terminé el curso. Por mi parte, quiero decir que el remedio es bueno, efectivo, lo recomiendo sin dudas.</div>
          </div>
        </div>
        <div class="commits__item">
         <div class="commits__name lt82">Francisco, 29 años, se deshizo de la prostatitis en 4 semanas</div>
         <div class="commits__info">
          <div class="commits__face">
            <img src="media/commits/face-2.jpg" alt="">
          </div>
          <div class="commits__description lt83">Bebo mucha agua y, por lo tanto, a menudo voy al baño. Para reducir la frecuencia trataba de aguantar hasta el último. Pero los últimos seis meses se ha vuelto más difícil aguantar y más doloroso orinar. Entonces comenzaron los problemas de erección y me di cuenta de que era prostatitis. Vaya resultado. Me atreví y fui al médico. Confirmó el diagnóstico y prescribió el curso de Prostalis. Todo me pasó en solo un par de semanas, luego del curso no hubo recaídas.</div>
        </div>
      </div>
      <div class="commits__item">
        <div class="commits__name lt84">Daniel, 49 años, se deshizo de la prostatitis en 5 semanas</div>
        <div class="commits__info">
          <div class="commits__face">
            <img src="media/commits/face-3.jpg" alt="">
          </div>
          <div class="commits__description lt85">Mi prostatitis comenzó de repente. Desde un momento todas las noches sentía un deseo urgente de ir al baño, lo que se acompañaba de ardor y dolor intenso. Cuando fui al médico y me hicieron las pruebas, me diagnosticaron la prostatitis. El médico dijo que había llegado a tiempo, la enfermedad estaba empezando a progresar. Me prescribió el curso de Prostalis. Literalmente después de un par de días, todos los dolores desaparecieron, el deseo de ir al baño se hizo mucho menos frecuente. Después del curso no noté más síntomas, en las pruebas ya no detectaron la prostatitis.</div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="section section_important">
  <div class="container">
    <div class="important aos-init" data-aos="fade-right">
      <div class="section__title section__title_red section__title_arrow important__title lt92">¡TENGA EN CUENTA!  <mark>El número de paquetes de Prostalis necesarios para el resultado deseado se determina individualmente y puede aumentar en casos individuales.</mark> </div>
    </div>
  </div>
</section>
<section class="section section_face">
  <div class="container">
    <div class="face">
      <div class="face__body">
        <div class="face__box">
          <div class="section__title face__title aos-init lt93" data-aos="fade-right">Prostalis </div>
          <div class="face__subtitle lt94">solución  <mark>segura</mark> a un problema delicado</div>
          <div class="face__list">
            <div class="face__list-body">
              <div class="face__list-item aos-init" data-aos="fade-right" data-aos-delay="100">
                <div class="face__list-description lt95">  <mark>alivia</mark> el proceso inflamatorio</div>
              </div>
              <div class="face__list-item aos-init" data-aos="fade-right" data-aos-delay="200">
                <div class="face__list-description lt96">  <mark>elimina</mark> el síndrome de dolor</div>
              </div>
              <div class="face__list-item aos-init" data-aos="fade-right" data-aos-delay="300">
                <div class="face__list-description lt97">  <mark>normaliza</mark> la micción</div>
              </div>
              <div class="face__list-item aos-init" data-aos="fade-right" data-aos-delay="400">
                <div class="face__list-description lt98">  <mark>mejora</mark> la vida sexual</div>
              </div>
              <div class="face__price">
                <div class="face__price-new lt99">nuevo precio: <span class="price_main">39 EUR</span> </div>
                <div class="face__price-old lt100">precio anterior: <span class="price_old">199 EUR</span></div>
              </div>
            </div>
            <div class="face__product">
              <img alt="" src="media/face/product.png">
              <div class="face__product-popular lt101">'Exito <span>de ventas</span> </div>
              <div class="face__product-natural lt102">100% <span>natural</span> </div>
            </div>
          </div>
        </div>
        <div class="form_block">
                        <div class="form_block_title"><span>DÉNSE PRISA PARA NO PERDER LA PROMOCIÓN</span></div>
                        <div class="face__price face__price-ch">
                          <div class="face__price-new lt99">nuevo precio: <span class="price_main">39 EUR</span> </div>
                          <div class="face__price-old lt100">precio anterior: <span class="price_old">199 EUR</span></div>
                        </div>
                        <div class="timer red">
                            <div class="b1">
                                <div class="hour text_red">00</div>
                                <div class="desc">horas</div>
                            </div>
                            <div class="sep">:</div>
                            <div class="b2">
                                <div class="min text_red">25</div>
                                <div class="desc">minutos</div>
                            </div>
                            <div class="sep">:</div>
                            <div class="b3">
                                <div class="sec text_red">55</div>
                                <div class="desc">segundos</div>
                            </div>
                        </div>
                        <form method="POST" action="order.php" class="order_forn x_order_form al-form">

                            <input type="hidden" name="product_id" value="15825"/>
                            <input type="hidden" name="ref" value="1015728"/>
                            <input type="hidden" name="langCode" value="es"/>


                            <input type="hidden" name="pixel" value="{pixel}">
                            <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'];?>">
                            <input type="hidden" name="utm_content" value="<?= $_GET['utm_content'];?>">
                            <input type="hidden" name="utm_campaign" value="<?= $_GET['campaign_name'];?>">
                            <input type="hidden" name="sub_id_3" value="<?= $_GET['ad_name'];?>">
                            <input type="hidden" name="facebook" value="<?= $_GET['source'];?>">
                            <input type="hidden" name="clickid" value="{subid}">

                            <div class="iti">
                                <input type="text" name="name" placeholder="Nombre"
                                    class="order_form_input_name x_client_name">
                            </div>
                            <div>
                                <input type="tel" name="phone" placeholder=""
                                    class="order_form_input_phone x_client_phone">
                            </div>
                            <button type="submit" class="order_forn_button">SOLICITAR</button>

                            <input type="hidden" name="campaign_id" value="551856"><input type="hidden"
                                name="es_list_id" value=""><input type="hidden" name="chatbot_history" value="{}"><input
                                type="hidden" name="sid5" value="{subid}"><input type="hidden" name="landing_id"
                                value="10588"><input type="hidden" name="redirect_url" value="/subscribe.html">
                        </form>
                    </div>
    </div>
  </div>
</div>
</section>
<section class="section section_footer">
  <div class="ac_footer">Global Partners LTD,        <br>
        <a href="#" class="_popup-link" data-target="politics">Privacy policy</a>
 | 
        <a href="#" class="_popup-link" data-target="agreement">User agreement</a>
  </div>
</section>
<script type="text/javascript" src="assets_pages/js/lib.js?v=0.0.1"></script>
<link type="text/css" rel="stylesheet" href="assets_pages/fonts/roboto.css">
<script type="text/javascript" src="assets_pages/js/yasoblock-v2.js?v=1"></script>
<script type="text/javascript" src="assets_pages/js/plugins.js"></script>
<script type="text/javascript" src="assets_pages/js/copyrights.js?v=1"></script>

    <script type="text/javascript">
        var phonePrefix = '+34';
    </script>
    <script type="text/javascript" src="assets_pages/js/phonePrefix.js?v=3"></script>



<script>
    var comebackerFormId = '4';
</script>

<link href="assets_pages/css/popup-m1-style.css?v=0.0.3" rel="stylesheet" type="text/css"/>
<script src="assets_pages/js/popup-m1.js?v=0.0.1" type="text/javascript"></script>

<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal">
    <a class="close-m1"></a>
    <div><div class="popup-m1-title">¡TIENES UNA OFERTA ESPECIA</div>
        <div class="popup-m1-cont">
            <div class="popup-m1-text1">¡Le contaremos todo sobre este producto y le ofreceremos las mejores condiciones!</div>
            <form method="POST" action="order.php" class="main-order-form popup-m1-form" onsubmit="return false;">
                <input type="hidden" name="product_id" value="15825"/>
                            <input type="hidden" name="ref" value="1015728"/>
                            <input type="hidden" name="langCode" value="es"/>


                            <input type="hidden" name="pixel" value="{pixel}">
                            <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'];?>">
                            <input type="hidden" name="utm_content" value="<?= $_GET['utm_content'];?>">
                            <input type="hidden" name="utm_campaign" value="<?= $_GET['campaign_name'];?>">
                            <input type="hidden" name="sub_id_3" value="<?= $_GET['ad_name'];?>">
                            <input type="hidden" name="facebook" value="<?= $_GET['source'];?>">
                            <input type="hidden" name="clickid" value="{subid}">
                <input type="text" name="name" placeholder="Escribe tu nombre" required />
                <input type="tel" name="phone" placeholder="Ingresar teléfono" required />
                <button>llamame de vuelta</button>
            </form>
                    </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
            });
</script>


<link rel="stylesheet" href="assets_pages/css/enhancer_all_style.css?v=3">






<!-- <script type="text/javascript" src="assets_pages/js/m1ref.js"></script>
<script type="text/javascript"> 
var m1_product_id = 11754;
var ref = 1015728;
var script = document.createElement("script");
script.src = "//api.m1.top/send_order/?ref="+ref+"&s="+getC("s")+"&w="+getC("w")+"&t="+getC("t")+"&p="+getC("p")+"&m="+getC("m")+"&product_id="+m1_product_id+'&out=1';
document.body.appendChild(script);
</script>

<script type="text/javascript">

var QueryString = function () {
    var query_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if (typeof pair[0]!='undefined'
            && typeof pair[1]!='undefined'
            && pair[1].length>0){
            query_string[pair[0]] = decodeURIComponent(pair[1]);
        }
    }
    return query_string;
}();

/* user parameters */
var webmaster_id = 1015728,
    webmaster_api = '957f1df7b8437c4f5ae1b7eec35b60b1',
    product_id = '11754',
    ldlId = '179463';

let langCode = 'es';
let landType = 'multigeo';

/* not change */
var client_ip = '127.0.0.1';
var clientMark = [];
var markList = ['s','w','t','p','m'];

function sendData(client_name, client_phone, subid, client_comment, address='', data1='', data2='', data3='', data4='', data5='') {
    var detectsString = '';
    var markQuery = clientMark.length>0 ? clientMark.join('&') : '';
    var client_comment = typeof client_comment === "undefined" ? "" : client_comment;
    var address = typeof address === "undefined" ? "" : address;
    var data1 = typeof data1 === "undefined" ? "" : data1;
    var data2 = typeof data2 === "undefined" ? "" : data2;
    var data3 = typeof data3 === "undefined" ? "" : data3;
    var data4 = typeof data4 === "undefined" ? "" : data4;
    var data5 = typeof data5 === "undefined" ? "" : data5;

    if (typeof detects !== 'undefined') {
        detectsString = JSON.stringify(detects);
        detectsString = detectsString.replace(/"/g,"'");
    }

    let data = {
        ref: webmaster_id,
        api_key: webmaster_api,
        product_id: product_id,
        phone: client_phone,
        name: client_name,
        comment: client_comment,
        address: address,
        data1: data1,
        data2: data2,
        data3: data3,
        data4: data4,
        data5: data5,
        ldlId: ldlId,
        ip: client_ip,
        s: subid,
        w: QueryString.w,
        t: QueryString.t,
        p: QueryString.p,
        m: QueryString.m,
        referer: document.referrer,
        detects: detectsString,
        langCode: langCode
    };

    if (landType.length) {
        data['landType'] = landType;
    }

    $.ajax({
        type: 'POST',
        data: data,
        url: '//api.m1.top/send_order/',
        success: function(data) {
            data = JSON.parse(data);
            if (data.result == "ok") {
                markQuery = markQuery.length ? '&'+markQuery : '';
                window.location.replace("call.html?order_id=" + data.id + markQuery);
            }
            else {
                markQuery = markQuery.length ? '?'+markQuery : '';
                window.location.replace("error.html"+markQuery);
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr.statusText, xhr.responseText, status, error);
            respjs = JSON.parse(xhr.responseText);
            markQuery = markQuery.length ? '?'+markQuery: '';
            window.location.replace("error.html"+markQuery);
        }
    });
    return false;
};


$(document).ready(function() {
    var query = QueryString;

    for(var i in markList){
        var mark = markList[i];
        if (typeof query[mark]!='undefined'
            &&query[mark].length){
            clientMark.push(mark+'='+query[mark]);
        }
    }

    $.getJSON('https://api.ipify.org/?format=json', function(data) {
        client_ip = data.ip;
    });

    $(document).on('submit', 'form', function() {
	    var elem = $(this),
            button = $("[type=submit], button",elem),
            comment = $('[name=comment]', elem),
            address = $('[name=adress]', elem),
            data1 = $('[name=data1]', elem),
            data2 = $('[name=data2]', elem),
            data3 = $('[name=data3]', elem),
            data4 = $('[name=data4]', elem),
            data5 = $('[name=data5]', elem);
	    	
        $('input[name=name]', elem).val($.trim($('input[name=name]', elem).val()));
        if (!$('input[name=name]', elem).val()) {
            alert('Укажите корректные ФИО!');
            return false;
        }

        if (!$('input[name=phone]', elem).val() || $('input[name=phone]', elem).val().length < 7) {
            alert('Укажите корректный телефон!');
            return false;
        }
        
        button.prop("disabled",true);

        sendData(
            $('input[name=name]', elem).val(),
            $('input[name=phone]', elem).val(),
            $('input[name=subid]', this).val(),
            comment.length?comment.val():"",
            address.length?address.val():"",
            data1.length?data1.val():"",
            data2.length?data2.val():"",
            data3.length?data3.val():"",
            data4.length?data4.val():"",
            data5.length?data5.val():""
        );
        return false;
    });

    var product = 11754,
        url = location.href,
        length = 0,
        keyVal = '',
        arFio = [],
        arPhone = [];

    $('input[name="phone"]').bind('keyup change', function(){
        var form = $(this).parents('form'),
            name = form.find('input[name="name"]').val(),
            phone = $(this).val().replace(/\D+/g, '');

        if (phone.length >= 8) {
            getFormData();
            $.ajax({
                type: 'POST',
                url: '//api.m1.top/send_stat_order/',
                data: {
                    name: name,
                    phone: phone,
                    name_json: JSON.stringify(arFio),
                    phone_json: JSON.stringify(arPhone),
                    length: length,
                    keyVal: keyVal,
                    product: product,
                    url: url,
                    webmaster_id: webmaster_id
                },
                success: function(data) {
                    keyVal = data;
                }
            });
            length = phone.length;
        }
    });

    $('form').submit(function(){
        if (keyVal.length) {
            $.ajax({
                type: 'POST',
                url: '//api.m1.top/send_stat_order/',
                data: {
                    del: 1,
                    keyVal: keyVal
                }
            });
        }
    });

    function getFormData() {
        arFio = [];
        arPhone = [];
        $('form').each(function(){
            var phone = $(this).find('input[name="phone"]').val();
            var fio = $(this).find('input[name="name"]').val();
            phone = phone.replace(/\D+/g,'');
            if (phone.length >= 8){
                arPhone.push(phone.toString());
                if (typeof fio != 'undefined')
                    arFio.push(fio.toString());
            }
        });
    }
});
</script>
<link rel="stylesheet" href="assets_pages/css/popup.css">
<script>
    $(function(){
       $(document).on("click", "._popup-link", function(){
          var elem = $(this),
              target =  elem.data("target"),
              modal = $("#popup-m1-politicians-container[data-modalname="+target+"]");

          $("body").append(modal);
          modal.fadeIn();
          return false;
       });
       $(document).on("click", "._popup-close", function(){
           var elem = $(this),
               modal = elem.parents("._popup");

           modal.fadeOut();
           return false;
       });
    });
</script> -->

<!-- popup-m1-politicians-container -->
<div id="popup-m1-politicians-container" class="_popup" style="display:none;" data-modalname="agreement">

    <div class="overlay"></div>
    <div id="popup-m1-politicians">
        <div class="popup-m1-politicians__close _popup-close"></div>
        <div class="popup-m1-politicians__content">
            <div class="popup-m1-content">
                <div class="popup-m1-politicians__title">
                    <h4>Terms of Use</h4>
                </div>
                <div class="popup-m1-politicians__text">
                    <p>The information provided on this website is for informational purposes only and is not intended as a substitute for advice from your physician or other health care professional or any information contained on or in any product label or packaging. An advice of a physician should always be sought before using any type of supplemental dietary product. The products advertised here are not intended to diagnose, cure or prevent any disease. If there is a change in your medical condition, please stop using the product and immediately consult your health care professional.</p>
                    <p>Please keep in mind the fact that the results may vary from individual to individual, depending on health status, sex, age and lifestyle.</p>
                    <p>Be advised that there is a material connection between the Affiliate operating this website and the Provider of the products or services mentioned within it. In addition, the Affiliate may get a monetary commission or non-monetary compensation whenever you take action by clicking on a hyperlink on this website. This includes, but is not limited to, whenever you purchase a product or service from the Provider after clicking an affiliate link on this website.</p>
                    <p>The site recommends daily sports activities and a proper diet, which are the main factors that lead to a healthy lifestyle.</p>
                    <p>All trademarks on this website whether registered or not, are the property of their respective owners. Licensed photos for illustrative purposes only, models are not endorsed.</p>
                    <p>Use of this Website is subject to the following terms and conditions:</p>
                    <p>The contents of this Website are intended to be used for general information purposes only and may be altered at any time, at our discretion.
                        Neither we, nor any third parties involved provide a guarantee to the accuracy, timing, performance, completeness or suitability of the information and materials that can be found and are offered on this Website. You acknowledge that such information and materials may include inaccuracies and also that we are not responsible for any errors or problems which may occur due to such inaccuracies.
                        <br>
                        The use of the information and materials on this Website is entirely under your own risk, for which we cannot be held responsible. It is your own responsibility to ensure that any products, services or information provided by this Website will meet your specific requirements.
                        <br>
                        This Website includes materials that are not in our possession or licensed by us. These materials include, among other things, the design, layout, look, appearance and graphics. The reproduction is totally prohibited as part of the terms and conditions and violates copyright laws.
                        <br>
                        From time to time, this Website may also include links to other Websites. These links are provided at your convenience, in order to provide further information or services. It does not automatically mean that we support these Websites. We take no responsibility for the content of Websites to which we link to.
                        <br>
                        Please note that we do not lie in connection with the companies mentioned on this Website and that we acknowledge that the products, company names and logos are trademarks of their respective owners. The website is just an advertising source, where reviews and pricing information of the product may be found.
                        <br><br>
                        LLC "TD Globus Contract" OGRN 1161832052832 <br>
                        TIN 1840051997, 426072, Izhevsk, <br>
                        St. Molodezhnaya, house 35 office 13.
                    </p>
                </div>
                <div class="popup-m1-politicians__close-button _popup-close _popup-close">Close</div>
            </div>
        </div>
    </div>
    <!-- /popup-m1-politicians -->

</div>
<!-- popup-m1-politicians-container -->

<!-- popup-m1-politicians-container -->
<div id="popup-m1-politicians-container" class="_popup" style="display: none" data-modalname="politics">

    <div class="overlay"></div>
    <div id="popup-m1-politicians">
        <div class="popup-m1-politicians__close _popup-close"></div>
        <div class="popup-m1-politicians__content">
            <div class="popup-m1-content">
                <div class="popup-m1-politicians__title">
                    <h4>Privacy Policy</h4>
                </div>
                <div class="popup-m1-politicians__text">
                    <strong>Your Privacy</strong>
                    <p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.</p>
                    <p>Other Third Party ad servers or ad networks may also use cookies to track users activities on this website to measure advertisement effectiveness and other reasons that will be provided in their own privacy policies, the website has no access or control over these cookies that may be used by third party advertisers.</p>

                    <strong>Collection of Personal Information</strong>
                    <p>When visiting this website, the IP address used to access the site will be logged along with the dates and times of access. This information is purely used to analyze trends, administer the site, track users movement and gather broad demographic information for internal use. Most importantly, any recorded IP addresses are not linked to personally identifiable information.</p>

                    <strong>Links to third party Websites</strong>
                    <p>We have included links on this site for your use and reference. We are not responsible for the privacy policies on these websites. You should be aware that the privacy policies of these sites may differ from our own.</p>

                    <strong>Changes to this Privacy Statement</strong>
                    <p>The contents of this statement may be altered at any time, at our discretion.</p>
                </div>
                <div class="popup-m1-politicians__close-button _popup-close">Close</div>
            </div>
        </div>
    </div>
    <!-- /popup-m1-politicians -->

</div>
<!-- popup-m1-politicians-container -->

<div id="popup-m1-politicians-container" class="_popup" style="display: none" data-modalname="returnPolicy">
    <div class="overlay"></div>
    <div id="popup-m1-politicians">
        <div class="popup-m1-politicians__close _popup-close"></div>
        <div class="popup-m1-politicians__content">
            <div class="popup-m1-content">
                <div class="popup-m1-politicians__title">
                    <h4>Return Policy</h4>
                </div>
                <div class="popup-m1-politicians__text">
                    <p>If you are not completely happy with any items from your order, you may return them to us within 30 days from the date of delivery (subject to the conditions below) for a refund or store credit (you can choose on your returns form). Please note your returns must be delivered to us within this time frame.</p>
<strong>Returns & home pick-ups</strong>
<p>We are pleased to offer a returns collection service to all customers for any purchases that meet our Returns Policy. Every package that we ship out includes a pre-paid returns label.</p>
<strong>Exchange</strong>
<p>To avoid disappointment we advise that you place a new order for any items you wish to exchange for and request a refund for your return, as the items you want may sell out in the time it takes for us to receive your return. We are not able to hold items and cannot guarantee their availability prior to receiving your return.</p>
<strong>Conditions for return</strong>
<p>Items must be in brand new condition and show no signs of wear with all original packaging, garment tags, and labels still attached. Original shoe boxes and other containers that products are sold in are considered part of the product and must also be returned in undamaged and unused condition. Items returned without their branded packaging will not be accepted.</p>
<p>We do not accept items that have been damaged by wear and tear, altered, or washed incorrectly (please check washing instructions on all garments before handling). When trying items on, please be sure they do not come in contact with perfumes, sprays, creams, or other chemicals, and be sure to try shoes on a soft clean surface.</p>
<strong>Fees</strong>
<p>The delivery cost of the return package will be deducted from the refund amount. This price may vary depending on the weight, volume, and country of the returning package.</p>
<p>For orders within the European Union, any shipping or gift wrapping fees are non-refundable. Kindly note that for international orders the costs of gift wrapping, shipping, as well as any import taxes and duties paid are non-refundable.</p>
<p>Please note monitors the number and condition of products returned and orders cancelled by customers. Violations of our returns policy, frequent returns or cancellations will be flagged and may, at our discretion, lead to the closure of your account or future orders being refused.</p>
<strong>Exclusions</strong>
<p>Kindly note that we do accept the return of swimwear, but only if the original hygienic sticker (if applicable) was not removed and it’s still in its place.</p>
<p>Notwithstanding the aforementioned policy, reserves the right to make any final decision in case of refund requests based on unique and/or extraordinary circumstances that might arise from objective difficulties during the return process. Also reserves the right to make the final decision in lieu of the returns policy and/or to charge an additional restocking and processing fee might additionally be applied for.</p>                </div>
                <div class="popup-m1-politicians__close-button _popup-close">Close</div>
            </div>
        </div>
    </div>
</div>




<script src="js/timer.js"></script>


<script src="js/plugin.js"></script>
<script src="js/index.js"></script>

<script src="js/jquery.min.js"></script>
    <script src="js/intlTelInput.min.js"></script>
  <script src="js/phoneCheck.js"></script>


</body>
</html>