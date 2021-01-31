---
extends: _layouts.image-right
section: projectContent
title: Hardware monitoring
categories: projects
image: /assets/img/projects/hardware-monitoring.png
display: "work"
weight: 100
---

A client of mine has a machine from which they extract different values from, like force, temperature, etc. These values get written into CSV files, which then get uploaded to a computer. The issue the client had, was that they had no way of analysing these values in real time from a mobile device.

Based on the requirements and limitations given by my client, I created a small web application bundled with a server which reads out these CSV files and shows the values in charts.

Because it's a webapplication, it's usable from a mobile device by default and without the need of installing apps from app stores.