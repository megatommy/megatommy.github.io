---
extends: _layouts.default
title: About me
description: "Ciao! I'm Thomas! I'm an IT consultant and tinkerer. Have a look at the services I provide to my clients or the projects I made."
---

<section class="about text-center text-sm-start">
    <div class="row gx-5">
        <div class="col-sm-8">
            <div class="text">
                <h1>Ciao! I'm Thomas.</h1>
                <p>I build things that solve problems, and teach the wonders of IT to others. In my free time I like to learn new technologies and make sure the website of <a href="#">Spazio 2030</a> doesn't go offline.</p>
            </div>
        </div>
        <div class="col-sm-4">
             <div class="photo">
                <img class="img-border rounded-circle" src="/assets/img/thomas-de-luca.png" alt="Picture of me!">
            </div>
        </div>
    </div>
</section>

<section class="services text-center text-sm-start" style="margin-top: 75px;">
    <h2 class="mb-5">What can I do for you?</h2>
    <div class="row gx-5 gy-3">
        <div class="col-sm-4">
            <img src="/assets/img/webapps.png" alt="A picture made in Excalidraw depicting a typical webapplication with various charts and a menu on the left." />
        </div>
        <div class="col-sm-8">
            <h3>Webapplications</h3>
            <p>When Excel is not enough anymore you might want to think about a webapplication. 
            My preferred stack is Laravel, but I'll use whatever respects your projects' requirements and constraints.
        </p>
        </div>
    </div>
    <hr class="my-5">
    <div class="row gx-5 gy-3">
        <div class="col-sm-4 order-sm-last">
            <img src="/assets/img/websites.png" alt="A picture made in Excalidraw depicting a website template with a hero image and text, and under there 3 sections" />
        </div>
        <div class="col-sm-8 order-sm-first">
            <h3>Websites</h3>
            <p>Websites are an important tool for your online presence. I can both create websites from scratch, or improve your current website. I'll choose the technologies that best fit your requirements.</p>
        </div>
    </div>
    <hr class="my-5">
    <div class="row gx-5 gy-3">
        <div class="col-sm-4">
            <img src="/assets/img/training.png" alt="A picture made in Excalidraw showing a person pointing to a whiteboard, with some computer components on it." />
        </div>
        <div class="col-sm-8">
            <h3>Training</h3>
            <p>Teaching others about IT makes me incredibly happy! From explaining how a computer works, to teaching more complex concepts, I explain it in simple and easy to grasp terms.</p>
        </div>
    </div>
</section>

<section class="portfolio text-center text-sm-start" style="margin-top: 75px;">
    <h2>Some of my creations</h2>
    <p class="mb-5">Projects that solved problems for either clients or just me.</p>
    <div class="row g-5">
        @php
        $arr = ['laborbaby', 'bme680-monitoring', 'contribution-ejc2016'];
        @endphp
        @foreach($arr as $site)
            @foreach($projects as $project)
                @if($project->getFilename() == $site)
                    @include('_partials.project-list-item')
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

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Person",
    "name": "Thomas de Luca",
    "url": "{{ $page->website_url }}",
    "jobTitle": "IT Consultant",
    "alumniOf": "Hogeschool van Amsterdam",
    "gender": "male",
    "birthDate": "1993-03-01",
    "image": "https://thomasdeluca.nl/assets/img/thomas-de-luca.png",
    "sameAs": [
        "https://www.linkedin.com/in/thomas-de-luca-b093099a/"
    ],
    "memberOf": {
        "@type": "Organization",
        "name": "Spazio 2030",
        "url": "https://spazio2030.it"
    }
}
</script>