<!DOCTYPE html>
<?php include("menu.php"); ?>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132525817-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132525817-1');
</script>

<meta charset="utf-8"/>
<title>Home | Let's Hear It</title>
<link rel="stylesheet" type="text/css" href="all.css" media="all"/>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="fonts.css" media="all"/>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<body id="main-body">

<!-- Make header bar  -->
<!-- <header>
  <div class="header">
    <div class="nav-wrap">
        <div id="lhi-div">
          <a id="name-full" href="index.html">LHI.</a>
        </div>

      <div id="nav">
        <ul>
          <li> <a href="index.html">Directory </a></li>
          <li> <a href="about.html">About </a></li>
          <li> <a href="publication.html">Publication </a></li>
        </ul>
      </div>

    </div>
  </div>
</header> -->
<!-- end header bar -->

<!-- Main content -->
<main>
  <div class="bounce">
    <img id="arrow" alt="arrow" src = "images/arrow.png" width="40"/>
  </div>

<script>
   $(document).ready(function() {
       $(window).scroll(function() {
           if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
                document.getElementById('arrow').style.display='none';
           }
       });
   });
</script>

<!-- Header -->

<h1 id="header-browse"> Women are making moves, learn about them.</h1>
<!-- End header -->







<!-- ROW 1 Triangle Width -->
<div class="flex1">
  <div id="container1">
    <p class="industry"> VENTURE CAPITAL</p>
    <div id="1">
      <img alt="Jess Lee image" src = "images/jess.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://techcrunch.com/2017/11/13/female-vcs-from-sequoia-cowboy-benchmark-and-others-launch-female-founder-office-hours/">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry"> TECHNOLOGY </p>
    <div id="1">
      <img alt="Jess Lee image" src = "images/aj.png" width="540"/>
    </div>
    <div id="2" class="hear-button">
       <a href="https://www.theguardian.com/technology/2017/jul/05/tesla-sexual-harassment-discrimination-engineer-fired">Hear her story →</a>
    </div>
  </div>
</div>


<!-- ROW 2 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> VENTURE CAPITAL </p>
    <div id="1">
      <img alt="Ellen Pao image" src = "images/aileen.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://techcrunch.com/2012/02/19/why-your-next-board-member-should-be-a-woman-why-your-next-board-member-should-be-a-woman/">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> ENTERTAINMENT </p>
    <div id="1">
      <img alt="Salma Hayek image" src = "images/salma.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.nytimes.com/interactive/2017/12/13/opinion/contributors/salma-hayek-harvey-weinstein.html">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 3 Full Width-->
<p class="industry-below-full"> TECHNOLOGY </p>
<div class="full">
  <div id="content">
    <h1> Susan Fowler </h1>
    <p> "I wasn’t just standing up for myself. I felt like I was standing up for everyone else that I was seeing at Uber who was mistreated. And so I felt like, if I can take this on despite the consequences, then I should do it." </p>
    <a href="https://www.nytimes.com/2017/10/21/style/susan-fowler-uber.html"> Hear her story → </a>
  </div>
    <img alt="Susan Fowler image" src="images/susan-full.png" width="450"/>
</div>

<!-- ROW 4 Curve Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> VENTURE CAPITAL </p>
    <div id="1">
      <img alt="Ellen Pao image" src = "images/ellen.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.nytimes.com/2017/09/08/style/ellen-pao-gender-discrimination-silicon-valley-reset.html">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> ENTERTAINMENT </p>
    <div id="1">
      <img alt="Reese Witherspoon image" src = "images/reese.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.elle.com/culture/celebrities/a13032565/reese-witherspoon-assaulted-by-director/">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 5 Full Width-->
<p class="industry-below-full"> TECHNOLOGY </p>
<div class="full">
  <div id="content">
    <h1> Sheryl Sandberg </h1>
    <p> "Cheering is not enough. We need systemic, lasting changes that deter bad behavior and protect everyone, from professionals climbing the corporate ladder to workers in low-paid positions who often have little power." </p>
    <a href="https://www.newyorker.com/magazine/2011/07/11/a-womans-place-ken-auletta"> Hear her story → </a>
</div>
  <img alt="Sheryl Sandberg image" src="images/sheryl.png" width="450"/>
</div>

<!-- ROW 6 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ENTERTAINMENT </p>
    <div id="1">
      <img alt="Lupita Nyong'o image" src = "images/lupita.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="http://time.com/4990561/lupita-nyongo-harvey-weinstein-sexual-harassment/">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> ENTREPRENEURSHIP </p>
    <div id="1">
      <img alt="Whitney Wolfe image" src = "images/whitney.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="http://fortune.com/2017/11/14/bumble-dating-app/">Hear her story →</a>
    </div>
  </div>
</div>


<!-- ROW 7 Full Width-->
<p class="industry-below-full"> TECHNOLOGY </p>
<div class="full-right">
  <h1> Melinda Gates </h1>
  <p> “I’ve spent the last 20 years talking to women all over the globe, and I hear these stories everywhere I go. From board rooms to presidential palaces to mats spread on the ground in the world’s poorest villages, the message from women is the same: Me too. Me too. Me too.” </p>
  <a href="http://time.com/5030114/melinda-gates-me-too/"> Hear her story → </a>
  <img alt="Melinda Gates image" src="images/melinda.png" width="540"/>
</div>

<!-- ROW 8 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ENTERTAINMENT </p>
    <div id="1">
      <img alt="Uma Thurman image" src = "images/uma.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.nytimes.com/2018/02/03/opinion/sunday/this-is-why-uma-thurman-is-angry.html">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> TECHNOLOGY </p>
    <div id="1">
      <img alt="Erica Joy Baker image" src = "images/erica.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://work.qz.com/1178770/silicon-valley-engineer-erica-joy-baker-on-diversity-in-the-workplace/">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 9 Full Width-->
<p class="industry-below-full"> ENTREPRENEURSHIP </p>
<div class="full-right-3">
  <br/>
  <h1> Rachel Renock, Claire Humphreys, <br/> Kristen Ablamsky </h1>
  <br/><br/>
  <p>  <br/>“They put up with the comments because they couldn’t imagine a world in which that $500,000 wasn’t on the table anymore.” </p>
  <a href="https://www.nytimes.com/2017/06/30/technology/women-entrepreneurs-speak-out-sexual-harassment.html"> Hear their story → </a>
  <img alt="Three Women image" src="images/three-women.png" width="600"/>
</div>

<!-- ROW 9 Curve Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> TECHNOLOGY </p>
    <div id="1">
      <img alt="Tracy Chou image" src = "images/tracy.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://work.qz.com/1175679/software-engineer-tracy-chous-mission-to-diversify-silicon-valley/?hww=recirc_mid">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> VENTURE CAPITAL </p>
    <div id="1">
      <img alt="Freada Kapor image" src = "images/freada.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://medium.com/kapor-the-bridge/an-open-letter-to-the-uber-board-and-investors-2dc0c48c3a7">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 10 Curve Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ENTREPRENEURSHIP </p>
    <div id="1">
      <img alt="Sophia Amoruso image" src = "images/sophia.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.recode.net/2018/3/4/17078768/transcript-girlboss-ceo-sophia-amoruso-nasty-gal-women-ecommerce-too-embarrassed-to-ask">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> ENTREPRENEURSHIP </p>
    <div id="1">
      <img alt="Kathryn Minshew image" src = "images/kathryn.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://work.qz.com/1176073/the-muse-ceo-kathryn-minshew-on-women-in-tech-fund-them-back-them-pay-them/">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 11 Full Width-->
<p class="industry-below-full"> SPORTS </p>
<div class="full">
  <div id="content">
    <h1> Serena Williams </h1>
    <p> “Women in general are not treated the same as men who’ve had the same amount of success. And then, being a black woman, doing something historically that’s never been done, it’s easy to feel like, ‘We’ve always picked on people of this color.  So I’m O.K. to continue to do it.” </p>
    <a href="https://www.nytimes.com/2018/08/28/style/tennis-fashion-us-open-serena-williams.html"> Hear her story → </a>
  </div>
    <img id="serena" alt="Serena Williams image" src="images/serena.png" width="420"/>
</div>

<!-- ROW 12 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ENTREPRENEURSHIP </p>
    <div id="1">
      <img alt="Jennifer Hyman image" src = "images/jenn.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.huffingtonpost.com/entry/jennifer-hyman-rent-the-runway-business-sexism_us_59e13603e4b0a52aca181ab9">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> VENTURE CAPITAL </p>
    <div id="1">
      <img alt="Arlan Hamilton image" src = "images/arlan.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://work.qz.com/1196698/backstage-capital-ceo-arlan-hamilton-i-didnt-come-here-to-take-your-scraps/?utm_source=HWW+SF+event+invite+list&utm_campaign=ce1549d6d1-EMAIL_CAMPAIGN_2018_04_04&utm_medium=email&utm_term=0_55a9e4fedf-ce1549d6d1-61652777&mc_cid=ce1549d6d1&mc_eid=ccfd97c23c">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 13 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ACADEMIA </p>
    <div id="1">
      <img alt="Christine Ford image" src = "images/christine.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.cnn.com/videos/politics/2018/09/27/christine-blasey-ford-full-testimony-senate-hearing-vpx.cnn">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> TECHNOLOGY </p>
    <div id="1">
      <img alt="Emily Chang image" src = "images/emily.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.recode.net/2018/2/16/17020456/transcript-bloomberg-technology-television-emily-chang-author-brotopia-recode-decode">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 14 Full Width-->
<p class="industry-below-full"> ACTIVISM </p>
<div class="full-right-3">
  <h1> Tarana Burke </h1>
  <p>  <br/>“This is a survivors’ movement created for and by those of us who have endured sexual violence. The goal is to provide a mechanism to support survivors and move people to action.” </p>
  <a href="https://variety.com/2018/biz/features/tarana-burke-metoo-one-year-later-1202954797/"> Hear her story → </a>
  <img id="tarana" alt="Tarana Burke image" src="images/tarana.png" width="430"/>
</div>

<!-- ROW 15 Curve Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> ENTERTAINMENT </p>
    <div id="1">
      <img alt="Eva Longoria image" src = "images/eva.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.nytimes.com/2018/01/01/movies/times-up-hollywood-women-sexual-harassment.html">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> JOURNALISM </p>
    <div id="1">
      <img alt="Jia Tolentino image" src = "images/jia.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.newyorker.com/news/our-columnists/one-year-of-metoo-what-womens-speech-is-still-not-allowed-to-do">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 16 Full Width-->
<p class="industry-below-full"> ACTIVISM </p>
<div class="full">
  <div id="content">
    <h1> Michelle Obama </h1>
    <p id="michelle-quote"> "Your story is what you have, what you will always have. It is something to own."
   </p>
    <a href="https://www.nytimes.com/2016/10/17/t-magazine/michelle-obama-chimamanda-ngozi-adichie-gloria-steinem-letter.html"> Hear her story → </a>
  </div>
    <img id="michelle" alt="Michelle Obama image" src="images/michelle.png" width="440"/>
</div>

<!-- ROW 17 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> POLITICS </p>
    <div id="1">
      <img alt="AOC image" src = "images/aoc.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.vogue.com/article/alexandria-ocasio-cortez-interview-vogue-november-2018-issue">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> TECHNOLOGY </p>
    <div id="1">
      <img alt="Feifei Li image" src = "images/fei.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.wired.com/story/fei-fei-li-artificial-intelligence-humanity/">Hear her story →</a>
    </div>
  </div>
</div>

<!-- ROW 18 Triangle Width-->
<div class="flex1">
  <div id="container1">
    <p class="industry-below"> MARKETING </p>
    <div id="1">
      <img alt="Boz image" src = "images/boz.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://www.glamour.com/story/bozoma-saint-john-uber-chief-brand-officer">Hear her story →</a>
    </div>
  </div>

  <div id="container2">
    <p class="industry-below"> FINANCE </p>
    <div id="1">
      <img alt="Sallie image" src = "images/sallie.png" width="540"/>
    </div>

    <div id="2" class="hear-button">
       <a href="https://womenintheworld.com/2017/01/13/sallie-krawcheck-writes-the-book-on-how-to-conquer-an-industry-built-by-men-for-men/">Hear her story →</a>
    </div>
  </div>
</div>
</main>

<!-- Footer -->
<!-- Footer -->
<a name="contribute"></a>

  <div class="subscribe">
    <div id="news-img"><img id="email" alt="letter" src = "images/news-img.png"/height="400px"></div>

    <div class="subsc-info">
      <h1> Join the Community </h1>
      <p id="desc"> Subscribe to the LHI newsletter to discover the latest news on women as well as interviews, op-eds, and features. The newsletter goes out every Friday and always has something different in each one. </p>
      <div class="bullet">
        <p> → <a href="https://us12.campaign-archive.com/home/?u=026ea119d4e894bad560df48f&id=ee71568076">Check out the latest newsletter issues </a></p>
        <p> →  <a href="https://letshearitplatform.us12.list-manage.com/subscribe?u=026ea119d4e894bad560df48f&id=ee71568076">Subscribe here </a></p>
      </div>
      <p class="contact"> Have questions about LHI or want to get involved? Email Maya at letshearitplatform@gmail.com. </p>
    </div>
  </div>

<!-- End footer -->


</body>
</html>
