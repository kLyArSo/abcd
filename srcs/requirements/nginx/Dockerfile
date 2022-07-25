FROM debian:buster
RUN apt-get update
RUN apt-get install -y nginx openssl 
CMD openssl req -nodes -newkey rsa:2048 -keyout ylhouari.key -out ylhouari.cert -subj "/C=MA/ST=GCB/L=CASABLANCA/O=UM6P/OU=1337/CN=ylhouari.com"
COPY nginx.conf /etc/nginx/nginx.conf
RUN service nginx start

