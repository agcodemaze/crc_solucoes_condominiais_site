#!/bin/bash
# Start cron em background
service cron start

# Start Apache em foreground
apache2-foreground