# Use a PHP image with Apache
FROM php:8.2-apache

# Install Python and essential tools
RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip \
    && rm -rf /var/lib/apt/lists/*

# Copy your project files into the web server directory
COPY . /var/www/html/

# Optional: If your Python script needs libraries like 'Pillow', uncomment below:
# RUN pip3 install -r requirements.txt --break-system-packages

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80