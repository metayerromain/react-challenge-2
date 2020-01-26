FROM node:12.14.1
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
WORKDIR /usr/src/app
ENV NODE_ENV development
COPY package*.json ./
RUN npm install --silent
EXPOSE 3000
CMD [ "npm", "start" ]
