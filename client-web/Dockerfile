FROM node:12.14.1
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
WORKDIR /home/node/app
COPY package*.json ./
RUN npm install --silent
RUN npm rebuild node-sass
COPY ./ ./
EXPOSE 3000
CMD [ "npm", "start" ]
