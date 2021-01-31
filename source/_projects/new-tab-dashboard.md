---
extends: _layouts.image-right
section: projectContent
title: New tab dashboard
categories: projects
image: /assets/img/projects/ntd.png
subtitle: "Built using HTML, Bootstrap, jQuery"
display: "experiment"
weight: 81
---

[The New Tab Dashboard (NTD)][ntd_site] is a page which can be used as a page when opening a new tab on your favorite browser.

It has a todo list on the left side, which has basic functionality: adding and deleting todo’s (doh). On the right side there is a table with all the tasks you do on a daily basis. The table updates itself, and shows a maximum of 7 days. The daily tasks can be edited inside the index.html. The code is hosted on GitHub, so you can download and tweak it to your own preferences.

Here is [a demo of the New Tab Dashboard.][ntd_site]

[ntd_site]: {{ $page->projects_url }}/ntd
