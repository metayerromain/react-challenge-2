FROM node:12.14.1
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
WORKDIR /usr/src/app
RUN npm install
RUN npm rebuild node-sass
ENV NODE_ENV development
ENV NPM_CONFIG_LOGLEVEL info
EXPOSE 3000
CMD [ "npm", "start" ]
