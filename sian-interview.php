<?php include("menu.php"); ?>

<!DOCTYPE html>
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
<title>Sian Beilock | Let's Hear It</title>
<link rel="stylesheet" type="text/css" href="all.css" media="all"/>
<link rel="stylesheet" type="text/css" href="about.css" media="all"/>
<link rel="stylesheet" type="text/css" href="pub.css" media="all"/>
<link rel="stylesheet" type="text/css" href="fonts.css" media="all"/>
<link rel="stylesheet" type="text/css" href="interview-pages.css" media="all"/>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<body id="main-body">


<main>

  <!-- Dark mode toggle -->
  <div id="dark">
    <button id="butt" onclick="myFunction()">Night Mode 🌚</button>
  </div>

  <script>
    var tog = false
    function myFunction() {
      if (tog =!tog) {
        $('#main-body').attr('id', 'main-body-ed');
        $('#name-letter').attr('id', 'name-letter-dark');
        $('#interview-description').attr('id', 'description-dark');
        $('#butt').text("Light Mode 🌝");
        $('#name-woman').attr('id', 'name-woman-dark');
        $('#bio-p').attr('id', 'bio-p-dark');
        $('#img-cred').attr('id', 'img-cred-dark');
        $('#title-interview').attr('id', 'title-interview-dark');
        $('#full-questions').attr('id', 'full-questions-dark');
        $('#footer-interview').attr('id', 'footer-interview-dark');
        $('#more').attr('id', 'more-dark');
      } else {
        $('#main-body-ed').attr('id', 'main-body');
        $('#name-letter-dark').attr('id', 'name-letter');
        $('#description-dark').attr('id', 'interview-description');
        $('#butt').text("Night Mode 🌚");
        $('#name-woman-dark').attr('id', 'name-woman');
        $('#bio-p-dark').attr('id', 'bio-p');
        $('#img-cred-dark').attr('id', 'img-cred');
        $('#title-interview-dark').attr('id', 'title-interview');
        $('#full-questions-dark').attr('id', 'full-questions');
        $('#footer-interview-dark').attr('id', 'footer-interview');
        $('#more-dark').attr('id', 'more');
      }
    }
  </script>

  <!-- End dark mode -->

  <!-- Anchor button -->
  <div id="anchor">
    <button id="butt" onclick="location.href='https://anchor.fm/letshearitplatform'">LHI Podcast 🎙</button>
  </div>

  <!-- End Anchor -->



<!-- Title -->
<div id="header-interview">
  <p id="industry-tag">
    <a href="interviews.php">#HEARHERSTORY</a>
  </p>
  <h1 id="name-woman">
    Sian Beilock
  <h1>
  <p id="interview-description">
    On equipping the next generation of female leaders at Barnard and the science behind cracking under pressure.
  </p>
</div>

<!-- Bio -->
<div id="bio-wrap">
  <div id="bio-img">
    <br/><br/>
      <img alt="kara goldin" src = "images/sian-beilock-bio.png" width="540"/>
      <p id="img-cred"> Photo: Barnard College. </p>
  </div>

  <div id="bio-content">
    <p id="bio-p"> Sian Leah Beilock became the 8th President of Barnard College in July, 2017. A
cognitive scientist by training, she is focused on further developing Barnard as a
singular institution. She is raising the College’s eminence in math, science, and
technology to parallel its renown in the arts and humanities. Building on our unique
relationship with Columbia University, President Beilock is increasing options for
students to transition directly from Barnard into a range of master’s programs at
Columbia, including international relations, public health, and engineering.
<br/> <br/>
 She is
also working to bridge the gap between college and life after college through the
innovative Beyond Barnard office, and she is dedicated to ensuring that Barnard
continues to attract a highly diverse student body deeply engaged with all that the
College and the City of New York have to offer.



  </div>
</div>

<!-- Interview Questions -->
<div id="q-wrap">
  <!-- <div id="graphic-q">
    <img id="img-qs" alt="questions" src = "images/new-qs.png"/>
  </div> -->

  <div id="graphic-q">
    <p> Interview Q's &#8213; </p>
  </div>

  <div id="qs">
    <p id="first"> <a href="#1">Tell us a little bit about yourself. What made you interested in the field of cognitive science and pursue a career in academia?
</a></p>
    <p> <a href="#2">You’ve spent a great deal of time researching what causes self-doubt, particularly for women in male-dominated fields. What can you tell us about your findings? How do you think women can overcome self doubt?

  </a></p>
    <p> <a href="#3">Have you experienced emotions of self-doubt? What advice do you have based on your experiences?
</a></p>
    <p> <a href="#4"> You mentioned in the Harvard Business Review the concept of “learned helplessness,” a feeling of lost control which causes people to give up on their goals. How do you think women can be more self-aware in understanding what went wrong in a situation and improve for the next time?

 </a></p>
    <p> <a href="#5">Do you feel that your research has helped you succeed and evaluate your potential in both your career and personal life?

</a></p>
    <p> <a href="#6">How do you think over-thinking and self-doubt relate to public speaking? What techniques have helped you?

</a></p>
    <p> <a href="#7"> You’ve spent years and published over 100 papers researching how people perform under pressure and detail findings in your book “Choke.” What advice or techniques do you have to help people avoid performance anxiety and overthinking?

 </a></p>
    <p> <a href="#8">How did you feel during the transition period when taking on your leadership role at Barnard?

 </a></p>
    <p><a href="#9"> What valuable lessons on leadership have you learned and how have they influenced your leadership style?
 </a></p>
    <p><a href="#10"> How do you think more women can find their passion in order to pursue self-fulfilling and meaningful work?

 </a></p>
    <p><a href="#11">What excites you about your work at Barnard?
 </a></p>
    <p><a href="#12">Is there a particular challenge you see most resonates with a lot of college students at Barnard?
</a></p>
    <p><a href="#13"> How do you think young female students can build resilience?</a></p>
    <p><a href="#14">There is definitely a lack of education for young women on reproductive health. How do you think this is changing?
 </a></p>
 <p><a href="#15">Do you have any advice for women particularly in STEM fields on overcoming self-doubt?
</a></p>
<p><a href="#16">How do you think you've tried to set your own example for the female community at Barnard?

</a></p></a></p>
  </div>

  <div class="clear"></div>
</div>

<script>
$(document).ready(function() {

    var dynamic = $('#qs');
    var static = $('#img-qs');

    static.height(dynamic.height());

});
</script>

<!-- Full Interview -->
<div id="title-interview">
  <h1>Sian Beilock is a leading expert in the science behind overcoming anxiety and self-doubt. She has served as a powerful leadership example for the female community at Barnard College and offers advice and techniques to fuel self-confidence.  </h1>
</div>

<div id="full-questions">
  <a name="1"/>
  <p>Maya Frai: Tell us a little bit about yourself. What made you interested in the field of cognitive science and pursue a career in academia?
  </p>
  <p id="answer">Sian Beilock: I’ve always been interested in how people perform. People often ask if I ever do “me-search” in addition to my research to understand how I perform as well. Growing up both in the classroom and on the playing field, I think there were times when I didn't perform up to my potential and it was oftentimes in the most stressful situations. When I went to college and realized there was a whole field devoted to human performance, I was really intrigued and fell into cognitive science and started the work I was doing. When I was really getting into the field of cognitive science, there were a lot of people studying how people succeed but less on why we fail and specifically why we fail when we perceive a situation to be pressure-filled. So I really was interested in asking questions about that.



</p>

  <a name="2"/>
  <p> MF: You’ve spent a great deal of time researching what causes self-doubt, particularly for women in male-dominated fields. What can you tell us about your findings? How do you think women can overcome self doubt?
</p>
  <p id="answer">SB: I think whenever we're in a situation where there may be historical cues or cues in the environment that signal we don't belong, it can cause us to start worrying and doubting ourselves. This is certainly true for women in male-dominated fields. In my research, what I argue is that those worries and self doubt are all cognitive load. It's kind of like driving and talking on a cell phone at the same time—not a good thing to do. It really has nothing to do with the physical aspects of driving and talking on the phone, but it’s all the mental aspects of it. You just can't pay attention very well to the two things at once. Additionally, worrying about how others are judging us and forgetting about what we’re trying to focus on doing can really be detrimental. What I've been really interested in is finding techniques to really quiet down those worries both individually in terms of what women can do in the workplace as well as in the classroom for young kids. We need to start asking questions about how we can prevent the perpetuation of ideas and stereotypes that we know are not true like boys being better than girls at math.

</p>

  <a name="3"/>
  <p>MF: Have you experienced emotions of self-doubt? What advice do you have based on your experiences?
</p>
  <p id="answer">SB: I think again it comes back to doing a bit of “me-search.” I've often been in situations where I've been the only woman in the room. In these situations, I think it's very easy for us to have this inner monologue of whether or not we should really be there and if people are looking at us differently. This inner monologue isn't necessarily helpful or justified. So I've been really interested in figuring out what I can do to focus my attention so that I'm not dwelling on the root cause. It can something as simple as actually thinking about why you should be there rather than why you shouldn't be. This can be a really important way to harness our power of attention thinking. You can think of reasons why you're at the table. I find myself using my techniques and reminding myself of why I'm supposed to be somewhere and my ability to succeed and I think it can be very helpful for others too.

</p>

  <a name="4"/>
  <p>MF: You mentioned in the <a href="https://hbr.org/2019/02/research-based-advice-for-women-working-in-male-dominated-fields">Harvard Business Review</a> the concept of “learned helplessness,” a feeling of lost control which causes people to give up on their goals. How do you think women can be more self-aware in understanding what went wrong in a situation and improve for the next time?
</p>
  <p id="answer">SB: I think the point is that we can focus our attention on aspects that will be positive. So just being aware of the possibility that you might have this internal monologue of worries. Oftentimes, these feelings start right before you enter an event. I call them the “what-ifs.” You’re thinking “what if this or that goes wrong?” I think it’s a matter of just being aware of these emotions and questions and right then and there retrain yourself. We know that simple things like getting your worries down on paper can help download them from your mind. We know that focusing on why you should succeed rather than why you should fail works as well. Talking to someone who can help you talk through these things can be really important too. Our thoughts can get the best of us and instead of worrying, we can actually harness them in a way that can be productive.


 </p>

  <a name="5"/>
  <p> MF: Do you feel that your research has helped you succeed and evaluate your potential in both your career and personal life?


</p>
  <p id="answer">SB: I'm definitely a person prone to want to do really well and be concerned about doing really well. I’ve used some of these helpful techniques to sort of calm my mind and to realize that a lot of what's happening is in my head and that I have the power to change that. One example is that I and other researchers have shown that even just reinterpreting your bodily responses can be beneficial. Oftentimes when you go into a stressful meeting, say you're the only woman and you have to pitch to a client. You have to give a big presentation and you have sweaty palms and a beating heart. You could really interpret that as a sign that you're about to fall on your face, but we know from research that actually reinterpreting those physiological symptoms and reminding yourself that It's important that you have this beating heart because it means you're alive. In sending important resources to your brain, it can actually sort of calm you down in a way. It essentially allows you to perform better possibly by quieting down the worries. It’s not a sign you're going to fail, it’s actually a sign that you're ready to go and you're ready to focus. These are some of the simple things that I use all the time.


 </p>

  <a name="6"/>
  <p>MF: How do you think over-thinking and self-doubt relate to public speaking? What techniques have helped you?


</p>
  <p id="answer">SB: First of all, we know Americans especially fear public speaking. It’s one of the biggest fears and I think it's normal. One of the biggest takeaways from my work and others is that it's something to practice like everything else. You can practice it under the conditions you're going to perform under. So you practice speaking in front of other people and if no one is there to listen to you, videotape yourself and even do it in front of a mirror. Practice being self-conscious because then you're better able to really tackle some of those worries. You’ll be able to get a handle on paying over attention to detail that sometimes happens in these situations. Public speaking is a great example though and at Barnard, we actually have whole speaking and writing programs. We have students who are sophomores, juniors and seniors who are actually trained as <a href="https://speaking.barnard.edu/about/howtheprogramworks#attachedcourses">speaking fellows</a> where they take a public speaking class and then they are assigned to different classes where faculty actually work with them and with the students in the class on presentations in public.


  </p>

  <a name="7"/>
  <p> MF: You’ve spent years and published over 100 papers researching how people perform under pressure and detail findings in your book "<a href="https://www.amazon.com/Choke-Secrets-Brain-Reveal-Getting/dp/1416596186">Choke.</a>" What advice or techniques do you have to help people avoid performance anxiety and overthinking?


</p>
  <p id="answer">SB: First of all, I think new things create anxiety and so when you get to college, it's a stressful experience. We know it's one of the most stressful life experiences because you’re learning a new way to study and a new way to perform. So I think anything you can do to take the sort of newness out of it can be really important whether that's taking practice tests that the professor gives you or going to office hours or being in a study group where students are quizzing one other. These are really the things that sort of help you understand what's to come because part of anxiety is about loss of control and not knowing what's next. The more that you can figure out what is next, the more beneficial. And of course, it’s also being able to look back at situations where it took a wrong turn and seeing how everything ended up being okay. This is a great way to remind yourself that just because you can't predict what's going to happen next doesn't mean it's necessarily a bad thing.

 </p>

<a name="8"/>
  <p> MF: How did you feel during the transition period when taking on your leadership role at Barnard?

</p>
  <p id="answer">SB: I previously had a leadership role at the University of Chicago, but going into a new role was still definitely anxiety provoking for me. I still feel anxiety about new things I have to do and I think it's about practicing these techniques and reminding yourself that performance in one situation isn't going to change the course of your life. Understanding that just like learning content, figuring out how to perform in a particular situation is an important skill. You have to use it and master it like anything else.



 </p>

<a name="9"/>
  <p>MF: What valuable lessons on leadership have you learned and how have they influenced your leadership style?

  </p>
  <p id="answer">SB: I definitely think the people around really matter and it’s important to have good people around you who challenge you. I’ve learned that having a strong leadership group is imperative. You don't want to have that many surprises out there and having good people who are pushing you against your ideas is important. My thinking is only as good as the people around me. I would also say it's great to listen to everyone but you don't have to take everyone's advice. I remember talking to faculty when I was an undergrad and I was told that an academic career wasn’t right for me. And this really rocked me, but others still encouraged me to do it. I’ve learned that you get to pick and choose who you listen to and that’s empowering. it’s important to take the advice that most resonates with you.



</p>

<a name="10"/>
  <p>MF: How do you think more women can find their passion in order to pursue self-fulfilling and meaningful work?

 </p>
  <p id="answer">SB: It's a really interesting question. I think we have really to take risks, although it’s scary and sometimes easier to go in another direction. I think being explicit about making yourself aware of challenges and exposing yourself to them where it be through experiences or talking to other people who've done it. Mentors can be really helpful with this. I think that the risk-taking is part of the excitement. It’s important to be okay with the fact that you're gonna fall on your face because sometimes that’s part of the experience.


</p>

<a name="11"/>
  <p>MF: What excites you about your work at Barnard?
 </p>
  <p id="answer">SB: The students are amazing and the fact that we're helping to train the next generation of women leaders is super exciting. We’re also doing a lot to get students ready for what's next. We have a new initiative called <a href="https://barnard.edu/beyond-barnard">Beyond Barnard</a> that helps students from day one think about internships and jobs in academia, government, nonprofit industry, and the arts and it's really fun to see that develop alongside their coursework. When our students come out of Barnard, they're going to grad school and they’re in great jobs and it's because they have been thinking about what's next for them since the beginning in exploring different career paths.



 </p>

 <a name="12"/>
   <p>MF: Is there a particular challenge you see most resonates with a lot of college students at Barnard?

 </p>
   <p id="answer">SB: I think it's worrisome to not know what’s next, especially when you've had education as your path your whole life. What I think Beyond Barnard does is just start opening up what the different paths are and when you get to think about that early on and explore, you find what interests you and what you’re passionate about. You figure out how you can do that and have a career in a particular area that's exciting to you.


</p>

<a name="13"/>
  <p>MF: How do you think young female students can build resilience?

  </p>
  <p id="answer">SB: I think part of it is being challenged in your coursework is super important, as is finding people who don't agree with you. I think we develop our best ideas and our best perspectives when we're challenged. I think that's really the goal of what a great college or university is in terms of developing that academic excellence. Even talking to mentors and others who can challenge your ideas about what the right path is also really helpful.


</p>

<a name="14"/>
  <p>MF: Do you have any advice for women particularly in STEM fields on overcoming self-doubt?

   </p>
  <p id="answer">SB: At Barnard, over a third of our graduates are STEM majors which is fantastic. For me, one of the biggest things is to remember that you're not born a STEM student, you learn it. So if you come in feeling like you don't have all the background, let's figure out ways to help you get it. If you're interested and you're in a place like Barnard or Cornell, we can help you get where you want to go.


</p>

<a name="15"/>
  <p>MF: How do you think you've tried to set your own example for the female community at Barnard?


   </p>
  <p id="answer">SB: I try to talk a lot about my failures, which can be helpful. I talk to students about how I failed when I was in a chemistry class my first year and got the worst grade out of everyone in the class. I thought I failed and had to stop college. I talk about things like that and I think that's really important because I screw up like anyone else and part of modeling this non-linear path is that you are going to fail along the way because everyone has failed along the way.



</p>




<!-- Footer -->
<div id="footer-interview">
  <h1 id="more"> More Interviews </h1>

  <div id="photo-wrap">
    <div id="interview1">
      <a href="carly-interview.php">
        <img alt="yari blanco" src = "images/carly-preview.png" width="390"/>
        </a>
    </div>

    <div id="interview2">
      <a href="https://medium.com/lets-hear-it/hearherstory-aanchal-gupta-68a4f61a4816">
        <img alt="aanchal gupta" src = "images/aanchal-preview.png" width="390"/>
    </a>
    </div>

    <div id="interview3">
    <a href="cheryl-interview.php">
      <img alt="cheryl" src = "images/cheryl-preview.png" width="390"/>
    </a>
    </div>
  </div>

</div>





</main>


</body>
</html>
