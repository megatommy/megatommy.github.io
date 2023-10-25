---
extends: _layouts.project
section: projectContent
title: Hardware monitoring
subtitle: "Built using c3.js"
keywords: "webapplication,c3js,csv"
description: "This application allows my client to monitor a machine, plotting a graph in real time with the measurements it makes."
categories: projects
image: /assets/img/projects/hardware-monitoring.png
image_alt: "A screenshot of how the hardware monitoring application looks like"
display: "work"
weight: 96
---

A client of mine has a machine from which they extract different values from, like force, temperature, etc. These values get written into CSV files, which then get uploaded to a computer. The issue the client had, was that they had no way of analysing these values in real time from a mobile device.

Based on the requirements and constraints given by my client, I created a small web application bundled with a server which reads out these CSV files and shows the values in charts.

Because it's a webapplication, it's usable from a mobile device by default and without the need of installing apps from app stores.