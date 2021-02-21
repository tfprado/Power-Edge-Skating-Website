<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Web\Apache24\htdocs\power-edge-skating/themes/october-starter-kit/partials/snippets/testimonial-bubble.htm */
class __TwigTemplate_dd83cb7faa3de84d6bdf1dc7e0895e899eb0b2caaea3c54f0ca23064bfdcf572 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2
        echo "<style type=\"text/css\">
    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        position: relative;
        margin: 0 0 50px 0;
        text-transform: uppercase;
        display: inline-block;
    }

    h2::after {
        content: \"\";
        width: 50%;
        position: absolute;
        height: 4px;
        border-radius: 1px;
        /* background: #ff5555; */
        background: #011a38;
        left: 0;
        bottom: -20px;
    }

    .carousel {
        margin: 50px auto;
    }

    .carousel .item {
        color: #999;
        overflow: hidden;
        min-height: 120px;
        font-size: 13px;
    }

    .carousel .media {
        position: relative;
        padding: 0 0 0 20px;
        margin-left: 20px;
    }

    .carousel .media img {
        width: 75px;
        height: 75px;
        display: block;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border: 2px solid #fff;
    }

    .carousel .testimonial {
        color: #fff;
        position: relative;
        background: #9b9b9b;
        padding: 15px;
        margin: 0 0 20px 20px;
    }

    .carousel .testimonial::before,
    .carousel .testimonial::after {
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 0;
        bottom: -20px;
    }

    .carousel .testimonial::before {
        width: 20px;
        height: 20px;
        background: #9b9b9b;
        box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
    }

    .carousel .testimonial::after {
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }

    .carousel .item .row>div:first-child .testimonial {
        margin: 0 20px 20px 0;
    }

    .carousel .item .row>div:first-child .media {
        margin-left: 0;
    }

    .carousel .testimonial p {
        text-indent: 40px;
        line-height: 21px;
        margin: 0;
    }

    .carousel .testimonial p::before {
        content: '\\201c';
        /* content: '\"'; */
        color: #fff;
        font-weight: bold;
        font-size: 68px;
        line-height: 70px;
        position: absolute;
        left: -25px;
        top: 0;
    }

    .carousel .overview {
        padding: 3px 0 0 15px;
    }

    .carousel .overview .details {
        padding: 5px 0 8px;
    }

    .carousel .overview b {
        text-transform: uppercase;
        /* color: #ff5555; */
        color: #011a38;
    }

    .carousel .carousel-control {
        width: 30px;
        height: 30px;
        background: #666;
        text-shadow: none;
        top: 4px;
    }

    .carousel-control i {
        font-size: 16px;
    }

    .carousel-control.left {
        left: auto;
        right: 40px;
    }

    .carousel-control.right {
        left: auto;
    }

    .carousel-indicators {
        bottom: -80px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 0;
        margin: 1px 4px;
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff;
    }

    .carousel-indicators li.active {
        color: #fff;
        /* background: #ff5555; */
        background: #011a38;
        border: 5px double;
    }

    .star-rating li {
        padding: 0 2px;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffdc12;
    }
</style>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 178
        echo "
<div class=\"container pb-5\">
    <!-- Carousel start -->
    <div class=\"row mb-5\">
        <div class=\"col-sm-12\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <h2>Customer <b>Testimonials</b></h2>
                <!-- Carousel indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class=\"carousel-inner\">
                    <div class=\"item carousel-item active\">
                        <div class=\"row\">
                            <!-- Jodi #1 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>We have been fortunate to have Jodi work with my son Michael for the last 2 years
                                        in helping him with his skating
                                        technique, stride and edge work.   Jodi’s unique approach to teaching has made
                                        the experience both enjoyable and fun
                                        while at the same time greatly improving Michael’s skating ability.  Jodi’s
                                        outgoing personality and attention to detail
                                        work well in enhancing the learning experience while still pushing the limits of
                                        each child’s ability.  I have seen
                                        firsthand in game situations how Jodi’s skating lessons have translated into
                                        significant changes in Michael’s game
                                        play.  I certainly have no hesitation referring Jodi.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/1.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Louis Laskovski</b></div>
                                            <!-- <div class=\"details\">Media Analyst / SkyNet</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Karen #2 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>I have worked with Karen in a professional capacity for the past 7 years. As a
                                        coach Karen brings not only the technical
                                        knowledge but her mental approach is second to none. Karen believes not only in
                                        progress and effort of athletes, but she
                                        prides herself on the coach/athlete relationship and bringing the best out of
                                        everyone on and off the ice. Karen’s
                                        knowledge of the Canadian sport landscape is extensive, and she works closely on
                                        stage appropriate coaching using the
                                        NCCP and LTAD recognized programs.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                                                    <img src=\"/examples/images/clients/6.jpg\" alt=\"\">
                                                                </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Brendan Arnold</b></div>
                                            <div class=\"details\">National BMX Coach</div>
                                            <!-- <div class=\"details\">Web Designer / UniqueDesign</div> -->
                                            <!-- <div class=\"star-rating\">
                                                                            <ul class=\"list-inline\">
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                                            </ul>
                                                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item carousel-item\">
                        <div class=\"row\">
                            <!-- Karen #1 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Karen has been skating with my son, and his teammates, for 10 years.  Her
                                        direction and corrections translate perfectly
                                        to hockey.  Her technical skill development is fantastic and would help any
                                        player regardless of age or level, improve
                                        their game.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/3.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Craig Oldman</b></div>
                                            <!-- <div class=\"details\">Web Developer / DevCorp</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jodi #3 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Both of our boys play hockey and we hired Jodi to work with our boys (10 and 8)
                                        to improve their skating style, speed
                                        and edges. Jodi focuses on proper technique and doing drills correctly rather
                                        than powering through them. She breaks the
                                        skating stride process down into individual aspects and explains every aspect
                                        worked on.  Jodi’s knowledge of skating is
                                        excellent. You will receive a hands-on personalized approach that is nothing
                                        short of excellent and it will be delivered
                                        in the most positive and energetic way. If you are looking for a top-notch
                                        skating instructor Jodi is the one for you.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/4.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Charity Lawrence </b></div>
                                            <!-- <div class=\"details\">Graphic Designer / MarsMedia</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item carousel-item\">
                        <div class=\"row\">
                            <!-- Jodi #4 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Jodi is a kind, patient, and a dedicated skating coach. No matter the student’s
                                        age and/or skill level, all skaters can
                                        grow and benefit greatly from Jodi’s teaching. I first met Jodi when I was 12
                                        years old. I had never even put on skates
                                        before, and two years later, I am skating at an Intermediate level with other
                                        kids my age.  Jodi is incredibly
                                        encouraging and enthusiastic with all of her skaters, and her dedication to the
                                        sport truly shines through in her
                                        teaching. She brought me to a level in skating that I never dreamed I would be
                                        able to get to, and I truly believe it is
                                        solely because I have Jodi as my coach.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/5.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Rebecca Zelovitzky</b></div>
                                            <div class=\"details\">Markham Skating Club</div>
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Jodi #2 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>
                                        We have worked with Jodi over the past few years and she is fantastic.  Her
                                        focus
                                        is technique so within the first few
                                        sessions we could clearly see the impact she had on each player. It can take
                                        some players time to adjust to the figure
                                        skating training, but Jodi makes it very comfortable and takes the time to
                                        explain and demonstrate each drill.  She
                                        corrects the players instantly so they not only see a difference but can feel
                                        the improvement immediately.  Jodi is very
                                        kindhearted, which really puts the players at ease and her passion for skating
                                        has them engaged for the entire
                                        session.  Jodi has been a tremendous asset to all our players, and I see a huge
                                        difference in their
                                        skating abilities.  In today’s hockey world the skating training is a must and
                                        Jodi is by far one of the best.
                                    </p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                                                    <img src=\"/examples/images/clients/2.jpg\" alt=\"\">
                                                                </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>David Walker</b></div>
                                            <div class=\"details\">Head Coach/Player Development </div>
                                            <!-- <div class=\"star-rating\">
                                                                            <ul class=\"list-inline\">
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                                            </ul>
                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class=\"carousel-control left carousel-control-prev\" href=\"#myCarousel\" data-slide=\"prev\">
                    <i class=\"fa fa-chevron-left\"></i>
                </a>
                <a class=\"carousel-control right carousel-control-next\" href=\"#myCarousel\" data-slide=\"next\">
                    <i class=\"fa fa-chevron-right\"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Static Testimonial Start -->
    <div class=\"row carousel static-testimonial\">
        <!-- First Testimonial - David Walker -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>We have worked with Jodi over the past few years and she is fantastic.  Her focus is technique so
                    within the first few sessions we could clearly see the impact she had on each player. It can take
                    some players time to adjust to the figure
                    skating training, but Jodi makes it very comfortable and takes the time to explain and demonstrate
                    each
                    drill.  She corrects the players instantly so they not only see a difference but can feel the
                    improvement
                    immediately.  Jodi is very
                    kindhearted, which really puts the players at ease and her passion for skating has them engaged for
                    the
                    entire
                    session.  Jodi has been a tremendous asset to all our players, and I see a huge difference in their
                    skating abilities.  In today’s hockey world the skating training is a must and Jodi is by far one of
                    the
                    best.\"
                </p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>David Walker</b></div>
                        <div class=\"details\">Head Coach/Player Development </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Testimonial - Charity Lawrence -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Both of our boys play hockey and we hired Jodi to work with our boys (10 and 8)
                    to improve their skating style, speed
                    and edges. Jodi focuses on proper technique and doing drills correctly rather
                    than powering through them. She breaks the
                    skating stride process down into individual aspects and explains every aspect
                    worked on.  Jodi’s knowledge of skating is
                    excellent. You will receive a hands-on personalized approach that is nothing
                    short of excellent and it will be delivered
                    in the most positive and energetic way. If you are looking for a top-notch
                    skating instructor Jodi is the one for you.\"</p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Charity Lawrence</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Testimonial - Craig Oldman -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Karen has been skating with my son, and his teammates, for 10 years.  Her
                    direction and corrections translate perfectly
                    to hockey.  Her technical skill development is fantastic and would help any
                    player regardless of age or level, improve
                    their game.\"</p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Craig Oldman</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>We have been fortunate to have Jodi work with my son Michael for the last 2 years in helping him with
                    his
                    skating
                    technique, stride and edge work.   Jodi’s unique approach to teaching has made the experience both
                    enjoyable and fun
                    while at the same time greatly improving Michael’s skating ability.  Jodi’s outgoing personality and
                    attention to detail
                    work well in enhancing the learning experience while still pushing the limits of each child’s
                    ability.
                     I have seen
                    firsthand in game situations how Jodi’s skating lessons have translated into significant changes in
                    Michael’s game
                    play.  I certainly have no hesitation referring Jodi.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Louis Laskovski</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Jodi is a kind, patient, and a dedicated skating coach. No matter the student’s
                    age and/or skill level, all skaters can
                    grow and benefit greatly from Jodi’s teaching. I first met Jodi when I was 12
                    years old. I had never even put on skates
                    before, and two years later, I am skating at an Intermediate level with other
                    kids my age.  Jodi is incredibly
                    encouraging and enthusiastic with all of her skaters, and her dedication to the
                    sport truly shines through in her
                    teaching. She brought me to a level in skating that I never dreamed I would be
                    able to get to, and I truly believe it is
                    solely because I have Jodi as my coach.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Rebecca Zelovitzky</b></div>
                        <div class=\"details\">Markham Skating Club</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 6th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>I have worked with Karen in a professional capacity for the past 7 years. As a
                    coach Karen brings not only the technical
                    knowledge but her mental approach is second to none. Karen believes not only in
                    progress and effort of athletes, but she
                    prides herself on the coach/athlete relationship and bringing the best out of
                    everyone on and off the ice. Karen’s
                    knowledge of the Canadian sport landscape is extensive, and she works closely on
                    stage appropriate coaching using the
                    NCCP and LTAD recognized programs.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Brendan Arnold</b></div>
                        <div class=\"details\">National BMX Coach</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/testimonial-bubble.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 178,  216 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put styles %}
<style type=\"text/css\">
    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        position: relative;
        margin: 0 0 50px 0;
        text-transform: uppercase;
        display: inline-block;
    }

    h2::after {
        content: \"\";
        width: 50%;
        position: absolute;
        height: 4px;
        border-radius: 1px;
        /* background: #ff5555; */
        background: #011a38;
        left: 0;
        bottom: -20px;
    }

    .carousel {
        margin: 50px auto;
    }

    .carousel .item {
        color: #999;
        overflow: hidden;
        min-height: 120px;
        font-size: 13px;
    }

    .carousel .media {
        position: relative;
        padding: 0 0 0 20px;
        margin-left: 20px;
    }

    .carousel .media img {
        width: 75px;
        height: 75px;
        display: block;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border: 2px solid #fff;
    }

    .carousel .testimonial {
        color: #fff;
        position: relative;
        background: #9b9b9b;
        padding: 15px;
        margin: 0 0 20px 20px;
    }

    .carousel .testimonial::before,
    .carousel .testimonial::after {
        content: \"\";
        display: inline-block;
        position: absolute;
        left: 0;
        bottom: -20px;
    }

    .carousel .testimonial::before {
        width: 20px;
        height: 20px;
        background: #9b9b9b;
        box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
    }

    .carousel .testimonial::after {
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }

    .carousel .item .row>div:first-child .testimonial {
        margin: 0 20px 20px 0;
    }

    .carousel .item .row>div:first-child .media {
        margin-left: 0;
    }

    .carousel .testimonial p {
        text-indent: 40px;
        line-height: 21px;
        margin: 0;
    }

    .carousel .testimonial p::before {
        content: '\\201c';
        /* content: '\"'; */
        color: #fff;
        font-weight: bold;
        font-size: 68px;
        line-height: 70px;
        position: absolute;
        left: -25px;
        top: 0;
    }

    .carousel .overview {
        padding: 3px 0 0 15px;
    }

    .carousel .overview .details {
        padding: 5px 0 8px;
    }

    .carousel .overview b {
        text-transform: uppercase;
        /* color: #ff5555; */
        color: #011a38;
    }

    .carousel .carousel-control {
        width: 30px;
        height: 30px;
        background: #666;
        text-shadow: none;
        top: 4px;
    }

    .carousel-control i {
        font-size: 16px;
    }

    .carousel-control.left {
        left: auto;
        right: 40px;
    }

    .carousel-control.right {
        left: auto;
    }

    .carousel-indicators {
        bottom: -80px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 18px;
        height: 18px;
        border-radius: 0;
        margin: 1px 4px;
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff;
    }

    .carousel-indicators li.active {
        color: #fff;
        /* background: #ff5555; */
        background: #011a38;
        border: 5px double;
    }

    .star-rating li {
        padding: 0 2px;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffdc12;
    }
</style>
{% endput %}

<div class=\"container pb-5\">
    <!-- Carousel start -->
    <div class=\"row mb-5\">
        <div class=\"col-sm-12\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <h2>Customer <b>Testimonials</b></h2>
                <!-- Carousel indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class=\"carousel-inner\">
                    <div class=\"item carousel-item active\">
                        <div class=\"row\">
                            <!-- Jodi #1 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>We have been fortunate to have Jodi work with my son Michael for the last 2 years
                                        in helping him with his skating
                                        technique, stride and edge work.   Jodi’s unique approach to teaching has made
                                        the experience both enjoyable and fun
                                        while at the same time greatly improving Michael’s skating ability.  Jodi’s
                                        outgoing personality and attention to detail
                                        work well in enhancing the learning experience while still pushing the limits of
                                        each child’s ability.  I have seen
                                        firsthand in game situations how Jodi’s skating lessons have translated into
                                        significant changes in Michael’s game
                                        play.  I certainly have no hesitation referring Jodi.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/1.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Louis Laskovski</b></div>
                                            <!-- <div class=\"details\">Media Analyst / SkyNet</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Karen #2 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>I have worked with Karen in a professional capacity for the past 7 years. As a
                                        coach Karen brings not only the technical
                                        knowledge but her mental approach is second to none. Karen believes not only in
                                        progress and effort of athletes, but she
                                        prides herself on the coach/athlete relationship and bringing the best out of
                                        everyone on and off the ice. Karen’s
                                        knowledge of the Canadian sport landscape is extensive, and she works closely on
                                        stage appropriate coaching using the
                                        NCCP and LTAD recognized programs.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                                                    <img src=\"/examples/images/clients/6.jpg\" alt=\"\">
                                                                </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Brendan Arnold</b></div>
                                            <div class=\"details\">National BMX Coach</div>
                                            <!-- <div class=\"details\">Web Designer / UniqueDesign</div> -->
                                            <!-- <div class=\"star-rating\">
                                                                            <ul class=\"list-inline\">
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                                            </ul>
                                                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item carousel-item\">
                        <div class=\"row\">
                            <!-- Karen #1 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Karen has been skating with my son, and his teammates, for 10 years.  Her
                                        direction and corrections translate perfectly
                                        to hockey.  Her technical skill development is fantastic and would help any
                                        player regardless of age or level, improve
                                        their game.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/3.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Craig Oldman</b></div>
                                            <!-- <div class=\"details\">Web Developer / DevCorp</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jodi #3 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Both of our boys play hockey and we hired Jodi to work with our boys (10 and 8)
                                        to improve their skating style, speed
                                        and edges. Jodi focuses on proper technique and doing drills correctly rather
                                        than powering through them. She breaks the
                                        skating stride process down into individual aspects and explains every aspect
                                        worked on.  Jodi’s knowledge of skating is
                                        excellent. You will receive a hands-on personalized approach that is nothing
                                        short of excellent and it will be delivered
                                        in the most positive and energetic way. If you are looking for a top-notch
                                        skating instructor Jodi is the one for you.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/4.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Charity Lawrence </b></div>
                                            <!-- <div class=\"details\">Graphic Designer / MarsMedia</div> -->
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item carousel-item\">
                        <div class=\"row\">
                            <!-- Jodi #4 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>Jodi is a kind, patient, and a dedicated skating coach. No matter the student’s
                                        age and/or skill level, all skaters can
                                        grow and benefit greatly from Jodi’s teaching. I first met Jodi when I was 12
                                        years old. I had never even put on skates
                                        before, and two years later, I am skating at an Intermediate level with other
                                        kids my age.  Jodi is incredibly
                                        encouraging and enthusiastic with all of her skaters, and her dedication to the
                                        sport truly shines through in her
                                        teaching. She brought me to a level in skating that I never dreamed I would be
                                        able to get to, and I truly believe it is
                                        solely because I have Jodi as my coach.</p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                        <img src=\"/examples/images/clients/5.jpg\" alt=\"\">
                                    </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>Rebecca Zelovitzky</b></div>
                                            <div class=\"details\">Markham Skating Club</div>
                                            <!-- <div class=\"star-rating\">
                                                <ul class=\"list-inline\">
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                    <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Jodi #2 -->
                            <div class=\"col-sm-6\">
                                <div class=\"testimonial\">
                                    <p>
                                        We have worked with Jodi over the past few years and she is fantastic.  Her
                                        focus
                                        is technique so within the first few
                                        sessions we could clearly see the impact she had on each player. It can take
                                        some players time to adjust to the figure
                                        skating training, but Jodi makes it very comfortable and takes the time to
                                        explain and demonstrate each drill.  She
                                        corrects the players instantly so they not only see a difference but can feel
                                        the improvement immediately.  Jodi is very
                                        kindhearted, which really puts the players at ease and her passion for skating
                                        has them engaged for the entire
                                        session.  Jodi has been a tremendous asset to all our players, and I see a huge
                                        difference in their
                                        skating abilities.  In today’s hockey world the skating training is a must and
                                        Jodi is by far one of the best.
                                    </p>
                                </div>
                                <div class=\"media\">
                                    <!-- <div class=\"media-left d-flex mr-3\">
                                                                    <img src=\"/examples/images/clients/2.jpg\" alt=\"\">
                                                                </div> -->
                                    <div class=\"media-body\">
                                        <div class=\"overview\">
                                            <div class=\"name\"><b>David Walker</b></div>
                                            <div class=\"details\">Head Coach/Player Development </div>
                                            <!-- <div class=\"star-rating\">
                                                                            <ul class=\"list-inline\">
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star\"></i></li>
                                                                                <li class=\"list-inline-item\"><i class=\"fa fa-star-o\"></i></li>
                                                                            </ul>
                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class=\"carousel-control left carousel-control-prev\" href=\"#myCarousel\" data-slide=\"prev\">
                    <i class=\"fa fa-chevron-left\"></i>
                </a>
                <a class=\"carousel-control right carousel-control-next\" href=\"#myCarousel\" data-slide=\"next\">
                    <i class=\"fa fa-chevron-right\"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Static Testimonial Start -->
    <div class=\"row carousel static-testimonial\">
        <!-- First Testimonial - David Walker -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>We have worked with Jodi over the past few years and she is fantastic.  Her focus is technique so
                    within the first few sessions we could clearly see the impact she had on each player. It can take
                    some players time to adjust to the figure
                    skating training, but Jodi makes it very comfortable and takes the time to explain and demonstrate
                    each
                    drill.  She corrects the players instantly so they not only see a difference but can feel the
                    improvement
                    immediately.  Jodi is very
                    kindhearted, which really puts the players at ease and her passion for skating has them engaged for
                    the
                    entire
                    session.  Jodi has been a tremendous asset to all our players, and I see a huge difference in their
                    skating abilities.  In today’s hockey world the skating training is a must and Jodi is by far one of
                    the
                    best.\"
                </p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>David Walker</b></div>
                        <div class=\"details\">Head Coach/Player Development </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Testimonial - Charity Lawrence -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Both of our boys play hockey and we hired Jodi to work with our boys (10 and 8)
                    to improve their skating style, speed
                    and edges. Jodi focuses on proper technique and doing drills correctly rather
                    than powering through them. She breaks the
                    skating stride process down into individual aspects and explains every aspect
                    worked on.  Jodi’s knowledge of skating is
                    excellent. You will receive a hands-on personalized approach that is nothing
                    short of excellent and it will be delivered
                    in the most positive and energetic way. If you are looking for a top-notch
                    skating instructor Jodi is the one for you.\"</p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Charity Lawrence</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Testimonial - Craig Oldman -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Karen has been skating with my son, and his teammates, for 10 years.  Her
                    direction and corrections translate perfectly
                    to hockey.  Her technical skill development is fantastic and would help any
                    player regardless of age or level, improve
                    their game.\"</p>
            </div>
            <div class=\"media\">
                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Craig Oldman</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>We have been fortunate to have Jodi work with my son Michael for the last 2 years in helping him with
                    his
                    skating
                    technique, stride and edge work.   Jodi’s unique approach to teaching has made the experience both
                    enjoyable and fun
                    while at the same time greatly improving Michael’s skating ability.  Jodi’s outgoing personality and
                    attention to detail
                    work well in enhancing the learning experience while still pushing the limits of each child’s
                    ability.
                     I have seen
                    firsthand in game situations how Jodi’s skating lessons have translated into significant changes in
                    Michael’s game
                    play.  I certainly have no hesitation referring Jodi.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Louis Laskovski</b></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>Jodi is a kind, patient, and a dedicated skating coach. No matter the student’s
                    age and/or skill level, all skaters can
                    grow and benefit greatly from Jodi’s teaching. I first met Jodi when I was 12
                    years old. I had never even put on skates
                    before, and two years later, I am skating at an Intermediate level with other
                    kids my age.  Jodi is incredibly
                    encouraging and enthusiastic with all of her skaters, and her dedication to the
                    sport truly shines through in her
                    teaching. She brought me to a level in skating that I never dreamed I would be
                    able to get to, and I truly believe it is
                    solely because I have Jodi as my coach.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Rebecca Zelovitzky</b></div>
                        <div class=\"details\">Markham Skating Club</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- 6th Testimonial - Louis Laskovski -->
        <div class=\"col-sm-12 mb-4\">
            <div class=\"testimonial\">
                <p>I have worked with Karen in a professional capacity for the past 7 years. As a
                    coach Karen brings not only the technical
                    knowledge but her mental approach is second to none. Karen believes not only in
                    progress and effort of athletes, but she
                    prides herself on the coach/athlete relationship and bringing the best out of
                    everyone on and off the ice. Karen’s
                    knowledge of the Canadian sport landscape is extensive, and she works closely on
                    stage appropriate coaching using the
                    NCCP and LTAD recognized programs.\"</p>
            </div>
            <div class=\"media\">

                <div class=\"media-body\">
                    <div class=\"overview\">
                        <div class=\"name\"><b>Brendan Arnold</b></div>
                        <div class=\"details\">National BMX Coach</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>", "C:\\Web\\Apache24\\htdocs\\power-edge-skating/themes/october-starter-kit/partials/snippets/testimonial-bubble.htm", "");
    }
}
