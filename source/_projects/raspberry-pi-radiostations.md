---
extends: _layouts.image-right
section: projectContent
title: Raspberry Pi radiostations
description: "An application written in ExpressJS which uses the Audioaddict API and gives you a list of radiostations, which you can select and play."
categories: projects
image: /assets/img/projects/rpi-radiostations.png
image_alt: "The list of radiostations, with the play and stop button on the top"
subtitle: "Built using HTML, CSS, JS, Audioaddict network API, Node (ExpressJS), Raspberry Pi"
display: "experiment"
weight: 91
---

This project gave me some understanding of how the Raspberry Pi, Node and a music API work.

I wrote a webapp using Node and ExpressJS which is able to display and play all the music channels of Radiotunes, DI.fm and JazzRadio using their API. Once the app worked, I moved it to the Raspberry Pi and connected the Pi to the internet and my speakers.

With the Node server running on my Pi, I could open the webapp on my phone by going to the local IP address of the Pi. The webapp gives me the opportunity to start/stop listening to a music channel, change the volume and add/remove music channels to/from my favorites.

For me, this is a cheap alternative to "smart speakers" or speakers without bluetooth functionality.

<img src="/assets/img/projects/rpi-radiostations-full.png" />