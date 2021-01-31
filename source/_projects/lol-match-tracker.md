---
extends: _layouts.image-right
section: projectContent
title: League of Legends Match Tracker
categories: projects
image: /assets/img/projects/lol.png
subtitle: "Built using HTML, Bootstrap, jQuery, CodeIgniter, Web Scraping"
display: "experiment"
weight: 89
---

League of Legends keeps track of the last 10 played matches. I didn’t like that limit, so I wrote the [League of Legends Match Tracker][lolmh_site]. It checks my match history and puts the played matches in the database. right now it only shows you the matches I played in season 3.

This application was built before Riot released its League of Legends API. To get the necessary information I used a Web Scraping library.

[LoL Match Tracker][lolmh_site]

[lolmh_site]:   {{ site.projects_url }}/lol
