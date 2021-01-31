---
extends: _layouts.homepage
section: homepageContent
title: About me
images:
 - /assets/img/Thomas.png
 - /assets/img/thomas_de_luca_diabolo.png
---

Hello! I am Thomas de Luca. I'm a half Italian, half Dutch guy who likes [code](/portfolio), travel, [juggle](/hobbies) and relax in the sun.

Check out my [Portfolio](/portfolio) to see all the stuff I've made with my blood, sweat and tears. Most of the projects are experiments to see how a particular library/framework works.

If you want to say hi, head over to my [Contact](/contact) page, where you can also find my curriculum vitae.
<script>
window.addEventListener("load", function(){

  var root = document.querySelector('.fadein');

  root.addEventListener('transitionend', function(){
    root.insertBefore(root.querySelector(':first-child.is-hidden'), null);
  });
  setInterval(function(){
    root.querySelector(':first-child').classList.add('is-hidden');
    root.querySelector(':nth-child(2)').classList.remove('is-hidden');
  }, 10000);
});
</script>