---
extends: _layouts.image-right
section: projectContent
title: BME680 Monitoring
categories: projects
image: /assets/img/projects/bme680-monitoring.png
image_alt: "A screenshot of the Grafana dashboard showing graphs of the sensors"
subtitle: "Built using BME680 sensor, Raspberry Pi, Grafana"
display: "experiment"
weight: 96
---

This project consisted of using a BME680 sensor to gather data from the environment using a Raspberry Pi, and visualizing the data through Grafana.

[GitHub repository](https://github.com/megatommy/bme680-collector)

## The BME680

The BME680 is a small sensor which has the following build in sensors:

* Temperature
* Humidity
* Pressure
* Air Quality (VOC gasses)

So using just one sensor you get all these sensors! It's a very nice sensor to start tinkering.

I bought it from the Pihut for around €20,00.

I used the [guide provided by Pimoroni](https://learn.pimoroni.com/tutorial/sandyj/getting-started-with-bme680-breakout) to connect the BME680 sensor to the Raspberry Pi


## Rasperry Pi

I still had my old Raspberry Pi Model 2B lying around and decided to use this one for the project. 

## The code 

![BME680 systemd service](/assets/img/projects/bme680-service-screenshot.png)

I used the [code and examples provided by Pimoroni](https://github.com/pimoroni/bme680-python) to get started and have a way of getting the data of the sensor written to my terminal.

After that I installed MariaDB on my Pi, and modified the Pimoroni code to be able to write the data in the database.

I also wrote a systemd unit file, so the code would automatically start collecting data when the Pi would boot.

## Grafana

![Grafana dashboard with BME680 data](/assets/img/projects/bme680-grafana-dashboard.png)

The final step was to set up Grafana. I used a [guide provided by Grafana](https://grafana.com/tutorials/install-grafana-on-raspberry-pi/) to install Grafana on the Raspberry Pi.

After the installation I configured Grafana to read the values from the created database.. and voilà!

For more information and code used and created, please [visit my repository on Github](https://github.com/megatommy/bme680-collector)