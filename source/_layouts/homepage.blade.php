@extends('_layouts.default')

@section('content')

<section class="about text-center text-sm-start">
    <div class="row gx-5">
        <div class="col-sm-8">
            <div class="text">
                <h1>Ciao! I'm Thomas</h1>
                <p>I build things that solve problems, and teach the wonders of IT to others. In my free time I like to learn new technologies and make sure the website of <a href="#">Spazio2030</a> doesn't go offline</p>
            </div>
        </div>
        <div class="col-sm-4">
             <div class="photo">
                <img class="img-border rounded" src="/assets/img/Thomas.png" alt="Picture of me!">
            </div>
        </div>
    </div>
</section>

<section class="services text-center text-sm-start" style="margin-top: 75px;">
    <!-- <h2 class="mb-5">Things I can help you with</h2> -->
    <h2 class="mb-5">What can I do for you?</h2>

    <div class="row gx-5 gy-3">
        <div class="col-sm-4">
            <img src="/assets/img/webapps.png" />
        </div>
        <div class="col-sm-8">
            <h3>Webapplications</h3>
            <p>When Excel is not enough anymore you might want to think about a webapplication. 
            <!-- Developing with Laravel allows me to focus on your idea, from start to finish. -->
            My preferred stack is Laravel, but I'll use whatever respects your projects' requirements and constraints.
        </p>
        </div>
    </div>
    <hr class="my-5">
    <div class="row gx-5 gy-3">
        <div class="col-sm-4 order-sm-last">
            <img src="/assets/img/websites.png" />
        </div>
        <div class="col-sm-8 order-sm-first">
            <h3>Websites</h3>
            <p>Websites are an important tool for your online presence. I can both create websites from scratch, or improve your current website. I'll choose the technologies that best fit your requirements.</p>
        </div>
    </div>
    <hr class="my-5">
    <div class="row gx-5 gy-3">
        <div class="col-sm-4">
            <img src="/assets/img/training.png" />
        </div>
        <div class="col-sm-8">
            <h3>Training</h3>
            <p>Teaching others about IT makes me incredibly happy! From explaining how a computer works, to teaching more complex concepts, I explain it in simple and easy to grasp terms.</p>
        </div>
    </div>
</section>

<section class="portfolio text-center text-sm-start" style="margin-top: 75px;">
    <!-- <h2>Things I've made</h2> -->
    <h2>Some of my creations</h2>
    <p class="mb-5">Projects that solved problems for either clients or just me.</p>

    
    
    <div class="row g-5">
        @php
        $arr = ['laborbaby', 'bme680-monitoring', 'contribution-ejc2016'];
        @endphp

        @foreach($arr as $site)
            @foreach($projects as $project)
                @if($project->getFilename() == $site)
                    @include('_partials.project-single')
                @endif
            @endforeach
        @endforeach
    </div>
</section>

<section class="contact" style="margin-top: 75px;">
    <h2>How to reach me</h2>
    <p>Seen something you like? Want to say hi?</p>
    <p>You can send me an email at <a href="mailto:thomas.de.luca@hotmail.com">thomas.de.luca@hotmail.com</a></p>
</section>

@endsection