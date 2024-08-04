---
extends: _layouts.project
section: projectContent
title: Amnesia
keywords: "webapp,reminder,notifications"
description: "Amnesia is a small web application to create notifications on your phone"
categories: projects
image: /assets/img/projects/amnesia.png
image_alt: "The logo of Amnesia"
subtitle: "Built using Vuejs"
display: "experiment"
weight: 98
---

I created Amnesia because I found myself jotting down short-term reminders on paper, but then I would lose the paper. This small web application creates a notification on your phone with the title (and optionally a body) that you insert. Nothing more, nothing less.

<div class="row">
    <div class="col-sm-3">
        <a href="/assets/img/projects/amnesia-app-screenshot.jpg" class="lightbox" data-gallery="project-gallery">
            <img class="rounded img-border w-100 object-fit-cover" style="max-height: 250px; object-position: center top;" src="/assets/img/projects/amnesia-app-screenshot.jpg" alt="Showing how the application looks like" />
        </a>
    </div>
    <div class="col-sm-3">
        <a href="/assets/img/projects/amnesia-notification-screenshot.jpg" class="lightbox" data-gallery="project-gallery">
            <img class="rounded img-border w-100 object-fit-cover" style="max-height: 250px; object-position: center top;" src="/assets/img/projects/amnesia-notification-screenshot.jpg" alt="Showing how the application looks like" />
        </a>
    </div>
</div>

<script>
    const lightbox = GLightbox({
        selector: '.lightbox'
    });
</script>