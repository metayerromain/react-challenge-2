FROM node:12.14.1
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
WORKDIR /usr/src/app
COPY package*.json ./
RUN npm install --silent
RUN npm rebuild node-sass
EXPOSE 3000
CMD [ "npm", "start" ]
