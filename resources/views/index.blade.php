<!DOCTYPE html>
<html lang="en">
	<head>
			<meta charset="utf-8">
			<link href="/css/bootstrap.min.css" rel ="stylesheet">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<title>Гимназија Свети Сава</title>
      <link rel="stylesheet" type="text/css" href="/css/loading.css" />
      <link rel="stylesheet" type="text/css" href="/css/relative-menu.css" />
      <link rel="stylesheet" type="text/css" href="/css/circular-navigation.css" />
      <link rel="stylesheet" type="text/css" href="/css/news-grid.css" />
      <link rel="stylesheet" href="/css/dropdown.css">
      <link rel="stylesheet" type="text/css" href="/css/zoom_general.css" />
      <link rel="stylesheet" type="text/css" href="/css/zoom.css" />
      <noscript>
        <link rel="stylesheet" type="text/css" href="/css/styleNoJS_zoom.css" />
      </noscript>
      <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
      <script src="/js/modernizr-2.6.2.min.js"></script>
      <script src="/js/modernizr.custom.js"></script>
      <script src="/js/snap.svg-min.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/sign.css" />
      <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="/css/component_registration.css" />
      <script src="/js/modernizr.custom_registration.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/normalize_checkbox.css" />
      <link rel="stylesheet" type="text/css" href="/css/component_checkbox.css" />
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link type="text/css" rel="stylesheet" href="/css/stylesheet.css"/>
  </head>
	<body>
    @if (isset($html_info))
      @foreach ($html_info as $info)
        <div class="info-box">
          {{$info}}
        </div>
      @endforeach
    @endif
		<div class="container">
      <header>
        <div class="row">
          <div class="relative-menu">
            <div class="row"> 
              <nav id="menu" class="nav">  
                <div class="col-xs-12">       
                  <ul>
                    <li class="col-xs-6 col-md-2">
                        <a href="#">
                          <span class="icon col-xs-3 col-md-12">
                            <i aria-hidden="true" class="glyphicon glyphicon-home"></i>
                          </span>
                          <span class="col-xs-9 col-md-12">Почетна</span>
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2">
                        <a href="#">
                          <span class="icon col-xs-3 col-md-12"> 
                            <i aria-hidden="true" class="glyphicon glyphicon-tasks"></i>
                          </span>
                         <span class="col-xs-9 col-md-12">Распоред</span>
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2">
                        <a href="#">
                          <span class="icon col-xs-3 col-md-12"> 
                            <i aria-hidden="true" class="glyphicon glyphicon-calendar"></i>
                          </span>
                          <span class="col-xs-9 col-md-12">Календар</span>
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2">
                        <a href="#">
                          <span class="icon col-xs-3 col-md-12"> 
                            <i aria-hidden="true" class="glyphicon glyphicon-bold"></i>
                          </span>
                          <span class="col-xs-9 col-md-12">Блокови</span>
                        </a>
                    <li class="col-xs-6 col-md-2">
                        <a href="#">
                          <span class="icon col-xs-3 col-md-12"> 
                            <i aria-hidden="true" class="glyphicon glyphicon-info-sign"></i>
                          </span>
                          <span class="col-xs-9 col-md-12">Информатор</span>
                        </a>
                    </li>
                    <li class="col-xs-6 col-md-2">
                        @if (!(Auth::check()))
                          <a class="sign-toggle">
                        @else
                          <a href="/logout">
                        @endif
                          <span class="icon col-xs-3 col-md-12"> 
                            <i aria-hidden="true" class="glyphicon glyphicon-user"></i>
                          </span>
                          @if (!(Auth::check()))
                            <span class="col-xs-9 col-md-12">Пријава</span>
                          @else
                            <span class="col-xs-9 col-md-12">Odjava</span>
                          @endif
                        </a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="sign">
                <div class="text-center">
                  <div class="sign-in">
                    <div class="row">
                      <div class="hidden-xs hidden-sm col-md-3">
                        <img src="http://revolucion.mobi/wp-content/uploads/2013/04/url.png" class="img-responsive" />
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <h1>Prijava</h1i>
                        <form action="{{ URL::route('session.store') }}" method="post">
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                          <input type="text" class="sign-in-email" placeholder="email" name="email">
                          <input type="password" class="sign-in-password" placeholder="sifra" name="password">
                          <input type="submit" class="sign-in-button" value="Prijava">
                          <input type="button" class="sign-up-button" value="Registracija">
                        </form>
                      </div>
                      <div class="hidden-xs hidden-sm col-md-3">
                        <img src="http://www.dreamwebhosting.net/images/client-cpanel-login.png" class="img-responsive" />
                      </div>
                    </div>
                  </div>
                  <div class="sign-up">
                    <div class="row">
                      <div class="col-xs-12">
                        <form id="theForm" method="POST" action="{{ URL::route('user.store') }}" class="simform" autocomplete="off" novalidate>
                          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                          <div class="simform-inner">
                            <ol class="questions">
                              <li>
                                <span><label for="first_name">Unesi svoje ime</label></span>
                                <input id="first_name" name="first_name" type="text"/>
                              </li>
                              <li>
                                <span><label for="last_name">Unesi svoje prezime</label></span>
                                <input id="last_name" name="last_name" type="text"/>
                              </li>
                              <li>
                                <span><label for="email">Unesi e-mail</label></span>
                                <input id="email" name="email" type="email"/>
                              </li>
                              <li>
                                <span><label for="password">Unesi sifru</label></span>
                                <input id="password" name="password" type="password"/>
                              </li>
                            </ol><!-- /questions -->
                            <div class="controls">
                              <button class="next"></button>
                              <div class="progress"></div>
                              <span class="number">
                                <span class="number-current"></span>
                                <span class="number-total"></span>
                              </span>
                              <span class="error-message"></span>
                            </div><!-- / controls -->
                          </div><!-- /simform-inner -->
                          <span class="final-message">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="class-year">
                                  <h3 class="question-text">Izaberi godinu koju pohadjas</h3>
                                  <div class="ac-custom ac-radio ac-swirl" autocomplete="off">
                                    <ul class="class-year-select">
                                      <li><input id="1" name="grade" value="1" type="radio"><label for="1">1</label></li>
                                      <li><input id="2" name="grade" value="2" type="radio"><label for="2">2</label></li>
                                      <li><input id="3" name="grade" value="3" type="radio"><label for="3">3</label></li>
                                      <li><input id="4" name="grade" value="4" type="radio"><label for="4">4</label></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-xs-12">
                                  <div class="class-index">
                                    <h3 class="question-text">Izaberi index odeljenja</h3>
                                    <div class="ac-custom ac-radio ac-swirl" autocomplete="off">
                                      <ul class="class-index-select">
                                        <li><input id="1" name="school_class_index" value="1" type="radio"><label for="1">1</label></li>
                                        <li><input id="2" name="school_class_index" value="2" type="radio"><label for="2">2</label></li>
                                        <li><input id="3" name="school_class_index" value="3" type="radio"><label for="3">3</label></li>
                                        <li><input id="4" name="school_class_index" value="4" type="radio"><label for="4">4</label></li>
                                        <li><input id="5" name="school_class_index" value="5" type="radio"><label for="5">5</label></li>
                                        <li><input id="6" name="school_class_index" value="6" type="radio"><label for="6">6</label></li>
                                        <li><input id="7" name="school_class_index" value="7" type="radio"><label for="7">7</label></li>
                                      </ul>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="birthdate">
                                  <h3 class="question-text">Izaberi datum rodjenja</h3>
                                  <div id="datepicker"></div>
                                  <input id="date_of_birth" name="date_of_birth" style="display:none;" type="text" />
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="row">
                                  <div class="gender">
                                    <h3 class="question-text">Izaberi pol</h3>
                                    <div class="ac-custom ac-radio ac-swirl" autocomplete="off">
                                      <ul class="gender-select">
                                        <li><input id="female" name="gender" value="0" type="radio"><label for="female">Zenski</label></li>
                                        <li><input id="male" name="gender" value="1" type="radio"><label for="male">Muski</label></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="register-button">
                                    <input type="submit" value="Registruj me" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </span>
                        </form> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id="zt-container" class="zt-container">
                <div class="zt-item" data-id="zt-item-1">
                  <img class="zt-current" src="/images/zt_1.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-2" data-zoom="15" data-speed="850" data-delay="50" style="top:25%;left:55%;width:20%; height:50%;"></div>
                </div>
                <div class="zt-item" data-id="zt-item-2">
                  <img class="zt-current" src="/images/zt_2.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-3" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:50%;width:25%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-1" data-zoom="15" data-speed="700" data-delay="0"></div>
                </div>    
                <div class="zt-item" data-id="zt-item-3">
                  <img class="zt-current" src="/images/zt_3.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-4" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:50%;width:25%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-2" data-zoom="10" data-speed="650" data-delay="20"></div>
                </div>      
                <div class="zt-item" data-id="zt-item-4">
                  <img class="zt-current" src="/images/zt_4.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2" data-zoom="2" data-speed="550" data-delay="0" style="top:25%;left:5%;width:25%;height:50%;"></div>
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-1" data-zoom="15" data-speed="850" data-delay="0" style="top:25%;left:70%;width:25%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-3" data-zoom="2" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-1">
                  <img class="zt-current" src="/images/zt_5_1.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-1-1" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:25%;width:50%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-4" data-zoom="15" data-speed="700" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-1-1">
                  <img class="zt-current" src="/images/zt_5_1_1.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-1-2" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:25%;width:50%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-1" data-zoom="8" data-speed="650" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-1-2">
                  <img class="zt-current" src="/images/zt_5_1_2.jpg" />
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-1-1" data-zoom="2" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2">
                  <img class="zt-current" src="/images/zt_5_2.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2-1" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:5%;width:25%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-4" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2-1">
                  <img class="zt-current" src="/images/zt_5_2_1.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2-2" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:45%;width:30%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-2" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2-2">
                  <img class="zt-current" src="/images/zt_5_2_2.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2-3" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:35%;width:30%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-2-1" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2-3">
                  <img class="zt-current" src="/images/zt_5_2_3.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2-4" data-zoom="10" data-speed="850" data-delay="100" style="top:15%;left:70%;width:25%;height:70%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-2-2" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2-4">
                  <img class="zt-current" src="/images/zt_5_2_4.jpg" />
                  <div class="zt-tag" data-dir="1" data-link="zt-item-5-2-5" data-zoom="10" data-speed="850" data-delay="100" style="top:25%;left:35%;width:25%;height:50%;"></div>
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-2-3" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
                <div class="zt-item" data-id="zt-item-5-2-5">
                  <img class="zt-current" src="/images/zt_5_2_5.jpg" />
                  <div class="zt-tag zt-tag-back" data-dir="-1" data-link="zt-item-5-2-4" data-zoom="3" data-speed="550" data-delay="0"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id='cssmenu'>
                <ul>
                   <li class='active'><a href='#'><span>Страница</span></a></li>
                   <li class='has-sub'><a href='#'><span>Са падајућим</span></a>
                      <ul>
                         <li class='has-sub'><a href='#'><span>Под-падајући</span></a>
                            <ul>
                               <li><a href='#'><span>Први</span></a></li>
                               <li><a href='#'><span>Други</span></a></li>
                            </ul>
                         </li>
                         <li class='has-sub'><a href='#'><span>Други</span></a>
                            <ul>
                               <li><a href='#'><span>Први</span></a></li>
                               <li><a href='#'><span>Други</span></a></li>
                            </ul>
                         </li>
                      </ul>
                   </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="row content main-content">
        <div class="col-xs-12 col-md-9">
          <h1><span class="glyphicon glyphicon-chevron-right"></span> Новости</h1>
          <div class="la-anim-10"></div>
          <div class="main">
            <!-- center of the page -->
            <section id="news-grid" class="news-grid clearfix">
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z ">
                <figure>
                  <img src="/img/1.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/2.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/3.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                 <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
               <figure>
                  <img src="/img/4.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
            <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/5.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/6.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/7.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
              <a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                <figure>
                  <img src="/img/8.png" />
                  <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                  <figcaption>
                    <h2 class="naslov">Новост</h2>
                    <p class="tekst">Кратак опис новости.</p>
                    <button class="dugme">Читај још</button>
                  </figcaption>
                </figure>
              </a>
            </section>
          </div><!-- /main -->
        </div>
        <div class="col-xs-12 col-md-3 sideline">
          <!-- right row -->
          <h1>Здраво
          @if (Auth::check())
            {{ Auth::user()->first_name }}
            {{ Auth::user()->last_name }}
          @endif
          :)
          </h1>
          <div id="la-buttons" class="column">
            <button data-anim="la-anim-10" style="display:none;">Ajax учитавање</button>
          </div>
        </div>
      </div>
      <footer>
        <div class="row">
          <div class="col-xs-12 text-center">
            Гимназија "Свети Сава" &copy; 2015. Сва права задржана.
          </div>
        </div>
      </footer>
    </div>
    @if (Auth::check())
      <div class="circular-navigation">
        <div class="component">
          <button class="cn-button" id="cn-button">+</button>
          <div class="cn-wrapper" id="cn-wrapper">
              <ul>
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span></a></li>
               </ul>
          </div>
          <div id="cn-overlay" class="cn-overlay"></div>
        </div>
      </div>
    @endif
    <script src="/js/circular-navigation.js"></script>
    <script src='/js/jquery-1.11.2.min.js'></script>
    <script src="/js/classie.js"></script>
    <script src="/js/stepsForm.js"></script>
    <script type="text/javascript" src="/js/corner_indicator.js"></script>
  	<script src='/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.transform-0.9.3.min_.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/jquery.zoomtour.js"></script>
    <script type="text/javascript" src="/js/registration_form.js"></script>
    <script src="/js/sign.js"></script>
    <script src="/js/svgcheckbx_animated_checkbox.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="/js/dropdown.js"></script>
    <script src="/js/datepicker.js"></script>

  </body>
</html>