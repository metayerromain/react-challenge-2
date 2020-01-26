FROM node:12.14.1
MAINTAINER HOUNTONDJI Adebayo <hountondjigodwill@gmail.com>
WORKDIR /usr/src/app
COPY package.json .
RUN npm install --silent
ENV NODE_ENV development
ENV NPM_CONFIG_LOGLEVEL info
EXPOSE 3000
VOLUME ["./"]

CMD [ "npm", "start" ]