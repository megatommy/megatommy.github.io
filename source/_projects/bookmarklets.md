---
extends: _layouts.image-right
section: projectContent
title: Bookmarklets
categories: projects
image: /assets/img/projects/bookmarklets.png
subtitle: "All built using JavaScript"
display: "experiment"
weight: 80
---

In my spare time I like to experiment with bookmarklets. They are tiny applications packed in a bookmark. Drag these links on your bookmarks bar and use them on any website!

<a href='javascript:(function(){var images=document.getElementsByTagName("img");for(i in images){var w=images[i].width;var h=images[i].height;var old_src=images[i].src;images[i].src=w==h?"http://placekitten.com/g/"+w+"/"+h:"http://placekitten.com/"+w+"/"+h}})();'>
Kitten Bookmarklet (Click me!)
</a> – Turns any image on a webpage into a kitten

<a href="javascript:void((function(d)%7Bvar e=d.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','https://projects.thomasdeluca.nl/radio-popup.js');d.body.appendChild(e)%7D)(document));">
Radio Bookmarklet
</a> – Gives you a playlist link for specific radio’s.
