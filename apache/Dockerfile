FROM httpd:alpine

COPY apache.conf /usr/local/apache2/conf/demo.apache.conf

RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
        >> /usr/local/apache2/conf/httpd.conf
